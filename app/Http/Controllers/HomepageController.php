<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portal_informasi = DB::table('post')->where('kategori', 'like', '%portal informasi%')
            ->orderBy('id_post', 'DESC')
            ->get();
        $info_kesehatan = DB::table('post')->where('kategori', 'like', '%info kesehatan%')
            ->orderBy('id_post', 'DESC')
            ->paginate(3);

        $corona_virus = DB::table('post')->where('kategori', 'like', '%corona virus%')->orderBy('id_post', 'DESC')->get();

        $penyakit_infeksi = DB::table('post')->where('kategori', 'like', '%penyakit infeksi%')->paginate(1);



        $post = DB::table('post')
            ->orderBy('id_post', 'DESC')
            ->paginate(3);

        return view('Home.sidipi', [
            'post' => $post,
            'portal_informasi' => $portal_informasi,
            'info_kesehatan' => $info_kesehatan,
            'corona_virus' => $corona_virus,
            'penyakit_infeksi' => $penyakit_infeksi
        ]);
    }

    public function article($category = null)
    {
        if (isset($category)) {
            $post = DB::table('post')
                ->where('kategori', 'like', '%' . $category . '%')
                ->orderBy('id_post', 'DESC')
                ->paginate(6);
        } else {
            $post = DB::table('post')
                ->orderBy('id_post', 'DESC')
                ->paginate(6);
        }
        return view('Home.artikel', ['post' => $post]);
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = DB::table('post')->where('id_post', '=', $id)->get();
        return view('Home.single-artikel', ['post' => $post]);
    }
}
