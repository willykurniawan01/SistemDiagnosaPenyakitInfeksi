<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gejala = DB::table('gejala')
            ->get();
        return view('Home.diagnosa', ['gejala' => $gejala]);
    }

    public function diagnosa(Request $request)
    {
        $query = "SELECT nama_penyakit FROM penyakit WHERE id_penyakit IN (select id_penyakit FROM penyakit_has_gejala WHERE id_gejala=9 OR id_gejala=12 OR id_gejala=8)";

        if (count($request->input('jawaban')) == 1) {
            $query = "SELECT nama_penyakit FROM penyakit WHERE id_penyakit IN (select id_penyakit FROM penyakit_has_gejala WHERE id_gejala=" . $request->input('jawaban')[0] . ")";
        } else {
            $query = "SELECT nama_penyakit FROM penyakit WHERE id_penyakit IN (select id_penyakit FROM penyakit_has_gejala WHERE id_gejala=" . $request->input('jawaban')[0] . "";

            foreach ($request->input('jawaban') as $p) {
                $query .= " OR id_gejala=" . $p . "";
            }
            $query .= ")";
        }

        $hasil = DB::select($query);
        dd($hasil);
        return view('Home.hasil-diagnosa', ['hasil' => $hasil]);
    }
}
