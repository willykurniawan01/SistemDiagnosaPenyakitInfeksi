<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Home.penyakit');
    }

    public function live_search(Request $request)
    {
        $output = '';
        if ($request->ajax()) {
            $query = $request->get('keyword');
            if ($query != '') {
                $data = DB::table('penyakit')
                    ->where('nama_penyakit', 'like', '%' . $query . '%')
                    ->get();
            } else {
                $data = DB::table('penyakit')
                    ->paginate(6);
            }

            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '    
                    <figure class="figure">
                        <div class="figure-img">
                            <a href="#">
                                <img src="Home/assets/img/virus2.png" alt="...">
                            </a>
                        </div>
                        <figcaption class="figure-caption text-sidipi2 font-weight-bold text-center fs-20 text-uppercase">' . $row->nama_penyakit . '</figcaption>
                    </figure>
                   ';
                }
            } else {
                $output = '
                <tr>
                <td align="center" colspan="5"> No Data Found</td>
                </tr>
               ';
            }
            $data = array(
                'table_data' => $output
            );

            echo json_encode($data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}
