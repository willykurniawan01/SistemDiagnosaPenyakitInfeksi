<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //query
        $portal_informasi = DB::table('post')->where('kategori', 'like', '%portal informasi%')->get();
        $info_kesehatan = DB::table('post')->where('kategori', 'like', '%info kesehatan%')->get();
        $corona_virus = DB::table('post')->where('kategori', 'like', '%corona virus%')->get();
        $penyakit_infeksi = DB::table('post')->where('kategori', 'like', '%penyakit infeksi%')->get();
        //query

        return view('Admin.post', [
            'portal_informasi' => $portal_informasi,
            'info_kesehatan' => $info_kesehatan,
            'corona_virus' => $corona_virus,
            'penyakit_infeksi' => $penyakit_infeksi
        ]);
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



        //store into database
        DB::table('post')->insert([
            'judul' => $request->input('judul'),
            'kategori' => $request->input('kategori'),
            'isi' => $request->input('isi'),
            'img' => $fileNameToStore
        ]);

        return redirect('Admin/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = DB::table('post')->where('id_post', '=', decrypt($id))->get();
        return view('Admin.editpost', ['post' => $post]);
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
        DB::table('post')
            ->where('id_post', decrypt($id))
            ->update([
                'judul' => $request->input('judul'),
                'kategori' => $request->input('kategori'),
                'isi' => $request->input('isi'),
                'img' => $request->input('img')
            ]);
        return redirect('Admin/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = DB::table('post')
            ->where('id_post', decrypt($id))
            ->get();

        //filename
        $filename = $post[0]->img;


        if ($filename != 'noimage.jpg') {
            //delete image
            Storage::delete('public/uploads/' . $filename);
        }

        DB::table('post')
            ->where('id_post', decrypt($id))->delete();
        return redirect('Admin/post');
    }
}
