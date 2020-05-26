<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Storage;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->input('cari')) {
            $penyakit = DB::table('penyakit')
                ->where('nama_penyakit', 'like', '%' . $request->input('cari') . '%')->paginate(2);
        } else {
            $penyakit = DB::table('penyakit')->paginate(2);
        }

        return view('Admin.penyakit', ['penyakit' => $penyakit]);
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
    public function store(Request $request){
    //validasi file
    $request->validate([
        'img' => 'required|mimes:jpeg,jpg,png',
    ]);
    

    //upload file
    if ($request->hasFile('img')) {
        //Get filename with the extension
        $fileNameWithExt = $request->file('img')->getClientOriginalName();

        //Get just filename
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        //get just extension
        $extension = $request->file('img')->getClientOriginalExtension();

        //Filename to store
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

        //upload file
        $path = $request->file('img')->storeAs('public/uploads', $fileNameToStore);
    } else {
        $fileNameToStore = 'noimg.jpg';
    }





    {
        DB::table('penyakit')->insert(
            [
                'nama_penyakit' => $request->input('nama_penyakit'), 
                'kategori' => $request->input('kategori'),
                'penyakit_desc'=>$request->input('desc'),
                'img'=>$fileNameToStore
            ]
        );

        return redirect('Admin/penyakit')->with(['success'=>'Data Penyakit Berhasil di Tambahkan!']);
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
        DB::table('penyakit')->where('id_penyakit', '=', decrypt($id))->delete();
        return redirect('Admin/penyakit');
    }
}
