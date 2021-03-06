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
    public function index(Request $request)
    {
        //searching
        if ($request->input('cari')) {
            $semua = DB::table('post')
                ->where('judul', 'like', '%' . $request->input('cari') . '%')->paginate(4);
        } else {
            $semua = DB::table('post')->paginate(4);
        }

        //query
        $portal_informasi = DB::table('post')->where('kategori', 'like', '%portal informasi%')->get();
        $info_kesehatan = DB::table('post')->where('kategori', 'like', '%info kesehatan%')->get();
        $corona_virus = DB::table('post')->where('kategori', 'like', '%corona virus%')->get();
        $penyakit_infeksi = DB::table('post')->where('kategori', 'like', '%penyakit infeksi%')->get();
        $popular = DB::table('post')
            ->where('popular', '=', 1)
            ->get();
        //query

        return view('Admin.post', [
            'semua' => $semua,
            'portal_informasi' => $portal_informasi,
            'info_kesehatan' => $info_kesehatan,
            'corona_virus' => $corona_virus,
            'penyakit_infeksi' => $penyakit_infeksi,
            'popular' => $popular
        ]);
    }

    public function deleteFromPopular($id)
    {
        DB::table('post')
            ->where('id_post', '=', decrypt($id))
            ->update(['popular' => 0]);
        return redirect(route('post'))->with(['success' => 'Berhasil Menghapus Post dari Populer']);
    }

    public function addToPopular($id)
    {
        DB::table('post')
            ->where('id_post', '=', decrypt($id))
            ->update(['popular' => 1]);
        return redirect(route('post'))->with(['success' => 'Berhasil Menambahkan Post ke Populer']);
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

        return redirect('Admin/post')->with(['success' => 'Berhasil Menambahkan Postingan Baru!']);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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




        DB::table('post')
            ->where('id_post', decrypt($id))
            ->update([
                'judul' => $request->input('judul'),
                'kategori' => $request->input('kategori'),
                'isi' => $request->input('isi'),
                'img' => $fileNameToStore
            ]);

        return redirect('Admin/post')->with(['success' => 'Berhasil Edit Post!']);
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
        return redirect('Admin/post')->with(['success' => 'Berhasil Menghapus Post!']);
    }
}
