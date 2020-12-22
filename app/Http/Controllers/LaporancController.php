<?php

namespace App\Http\Controllers;

use App\Nagari;
use App\Penduduk;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function pendudukUP(){
        $from = Carbon::now()->subYears(64);
        $to = Carbon::now()->subYears(15);
        $penduduk = Penduduk::whereBetween('tanggal_lahir',[$from,$to])->get();
        //dd($penduduk);
        
        return view('pendudukUP',compact('penduduk'));
    }

    public function pendudukNT(){
        $penduduk = Penduduk::leftJoin('kartu_keluarga','keluarga_id','kartu_keluarga.id')
        ->leftJoin('jorong','jorong_id','jorong.id')
        ->leftJoin('nagari','nagari_id','nagari.id')
        ->get();
        //dd($penduduk);
        return view('pendudukNT', compact('penduduk'));
    }

    public function listNagari(){
        $nt=Nagari::all();

        return json_encode($nt);
    }

    public function pilihNagari(Request $request){
        $pilih = $request->nagari;

        $penduduk = Penduduk::leftJoin('kartu_keluarga','keluarga_id','kartu_keluarga.id')
        ->leftJoin('jorong','jorong_id','jorong.id')
        ->leftJoin('nagari','nagari_id','nagari.id')
        ->where('nagari.id','like',"%".$pilih."%")
        ->get();

        return view('pendudukNT', compact('penduduk'));
    }

    public function pilihNagariLP(Request $request){
        $pilih = $request->nagari;

        $penduduk = Penduduk::leftJoin('kartu_keluarga','keluarga_id','kartu_keluarga.id')
        ->leftJoin('jorong','jorong_id','jorong.id')
        ->leftJoin('nagari','nagari_id','nagari.id')
        ->where('level_pendidikan_id','<=', 'LP-03')
        ->where('nagari.id','like',"%".$pilih."%")
        ->get();

        return view('pendudukLP', compact('penduduk'));
    }

    public function pendudukLP(){
        $penduduk = Penduduk::leftJoin('kartu_keluarga','keluarga_id','kartu_keluarga.id')
        ->leftJoin('jorong','jorong_id','jorong.id')
        ->leftJoin('nagari','nagari_id','nagari.id')
        ->where('level_pendidikan_id','<=', 'LP-03')
        ->get();
        //dd($penduduk);
        return view('pendudukLV', compact('penduduk'));
    }
}