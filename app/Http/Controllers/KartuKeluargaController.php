<?php
namespace App\Http\Controllers;

use App\Jorong;
use App\Penduduk;
use App\Pekerjaan;
use App\KartuKeluarga;
use App\LevelPendidikan;
use App\kewarganegaraan;
use Illuminate\Http\Request;



class KartuKeluargaController extends Controller
{

    public function index()
    {
        $kk = KartuKeluarga::with('jorongs')->orderBy('id', 'DESC')->paginate('10');
        //dd($kk);
        return view('KartuKeluarga.index', compact('kk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $penduduk=penduduk::all;
        $jorong = jorong::all()->pluck('nama', 'id');
        return view('kartukeluarga.create', compact('jorong'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $kartukeluarga = KartuKeluarga::create([
            'no' => $request->input('no'),
            'jorong_id' => $request->input('jorong_id')
        ]);
        $kartukeluarga->save();
        // dd($penduduk);
        return redirect()->route('kartukeluarga.index')->with('status','Kartu Keluarga Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kartukeluarga = kartukeluarga::where('id', $id)->get();
        $penduduk = penduduk::with('kartu_keluarga','kewarganegaraan')->where('kartu_keluarga_id',$id)->get();
        $kartukeluarga = $kartukeluarga[0];
        return view('kartukeluarga.show', compact('kartukeluarga','penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(kartukeluarga $kartukeluarga)
    {
        
        $jorong = jorong::all()->pluck('nama', 'id');
        return view('kartukeluarga.edit', compact('jorong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kartukeluarga $kartukeluarga)
    {
      
        $kartukeluarga->update([
            'no' => $request->input('no'),
            'jorong_id' => $request->input('jorong_id')
        ]);
        return redirect()->route('kartukeluarga.index')->with('status','Kartu Keluarga Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // penduduk::destroy($penduduk->id);
        // return redirect()->route('penduduk.index')->with('status', 'Data penduduk berhasil dihapus');
        $delete = penduduk::find($id);
        $delete->delete();
        return redirect()->route('penduduk.index')->with('status','Data penduduk berhasil dihapus');
     }
    }