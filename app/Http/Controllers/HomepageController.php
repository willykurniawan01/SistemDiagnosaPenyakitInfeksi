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
        ->orderBy('id_post','DESC')
        ->get();
        $info_kesehatan = DB::table('post')->where('kategori', 'like', '%info kesehatan%')
        ->orderBy('id_post','DESC')
        ->paginate(3);
        
       
        $post = DB::table('post')
            ->orderBy('id_post', 'DESC')
            ->paginate(3);

        return view('Home.sidipi', [
            'post' => $post,
            'portal_informasi' => $portal_informasi,
            'info_kesehatan'=>$info_kesehatan
        ]);
    }

    public function article()
    {
        return view('Home.artikel');
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
        return view('Home.single-artikel');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
