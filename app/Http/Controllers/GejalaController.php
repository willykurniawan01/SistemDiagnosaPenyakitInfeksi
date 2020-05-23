<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relasi_gejala = DB::select('SELECT penyakit_has_gejala.id_relasi,gejala.gejala,penyakit.nama_penyakit FROM gejala,penyakit,penyakit_has_gejala WHERE gejala.id_gejala IN (SELECT id_gejala FROM penyakit_has_gejala) AND penyakit.id_penyakit IN (SELECT id_penyakit FROM penyakit_has_gejala)');

        $penyakit = DB::table('penyakit')->get();
        $gejala = DB::table('gejala')->get();
        return view(
            'Admin.gejala',
            [
                'gejala' => $gejala,
                'penyakit' => $penyakit,
                'relasi_gejala' => $relasi_gejala
            ]
        );
    }


    public function addRelation(Request $requests)
    {
        DB::table('penyakit_has_gejala')->insert(
            [
                'id_gejala' => $requests->input('gejala'),
                'id_penyakit' => $requests->input('penyakit')
            ]
        );
        return redirect('Admin/gejala');
    }


    public function deleteRelation($id)
    {
        DB::table('penyakit_has_gejala')->where('id_relasi', '=', decrypt($id))->delete();

        return redirect('Admin/gejala');
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
        DB::table('gejala')->insert(
            ['gejala' => $request->input('gejala')]
        );

        return redirect('Admin/gejala');
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
        DB::table('gejala')->where('id_gejala', '=', decrypt($id))->delete();
        return redirect('Admin/gejala');
    }
}
