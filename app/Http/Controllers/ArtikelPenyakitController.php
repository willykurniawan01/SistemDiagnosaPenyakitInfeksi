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
                    ->get();
            }

            $total_row = $data->count();
            if ($total_row > 0) {
                $delay = 300;
                foreach ($data as $row) {
                    $output .= '    
                    <figure class="figure" data-aos="zoom-out" data-aos-delay="' . $delay . '"  data-aos-easing="ease-in-out">
                        <div class="figure-img">
                            <a href="' . route('sidipi-single-penyakit', ['id' => $row->id_penyakit]) . '">
                                <img src="Home/assets/img/virus2.png" alt="...">
                            </a>
                        </div>
                        <figcaption class="figure-caption text-sidipi2 font-weight-bold text-center fs-20 text-uppercase">' . $row->nama_penyakit . '</figcaption>
                    </figure>
                   ';
                    $delay += 300;
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penyakit=DB::table('penyakit')->where('id_penyakit','=',$id)->get();
        return view('Home.single-penyakit',['penyakit'=>$penyakit]);
    }
}
