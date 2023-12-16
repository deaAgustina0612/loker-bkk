<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\perusahaan;
use Illuminate\Support\Str;


class PerusahaanController extends Controller
{
    //
    function view(){
         // Mengambil semua data barang dari model Barang
        $data['perusahaans'] = perusahaan::all();

         // Mengirim data barang ke tampilan 'perusahaan'
        return view('perusahaan', $data);
    }

    function perusahaan(){
       $data['perusahaans'] = perusahaan::all();

       return view('viewperusahaan', $data);
   }

    function post(request $req){
        $nama_perusahaan = $req->nama_perusahaan;
        $deskripsi = $req->deskripsi;
        $foto = $req->file('foto')->store('perusahaan');

        perusahaan::create([
            'nama_perusahaan' => $nama_perusahaan,
            'deskripsi' => $deskripsi,
            'foto' => $foto,
        ]);

        return redirect('/viewperusahaan');
    }

    function index(Request $req){
        if ($req->search) {
        $data['perusahaans'] = perusahaan::where("nama_perusahaan",$req->search)->get();
        }

        else{
            $data['perusahaans'] = perusahaan::all();
        }
        return view('viewperusahaan',$data);
    }


    function edit($id){
        $data['perusahaans'] = perusahaan::find($id);
        return view('formperusahaan',$data);
    }

    function update(Request $req){
        if($req->file('foto')){
            $foto = $req->file('foto')->store('perusahaan');
            perusahaan::where('id',$req->id)->update([
                'nama_perusahaan' => $req->nama_perusahaan,
                'deskripsi' => $req->deskripsi,
                'foto' => $foto,
            ]);
        }else{
            perusahaan::where('id',$req->id)->update([
                'nama_perusahaan' => $req->nama_perusahaan,
                'deskripsi' => $req->deskripsi,
                'foto' => $foto,
            ]);
        }
        return redirect('viewperusahaan');
    }
    function add(){
        $data=[
            'action'=>url('/perusahaan/create'),
            'tombol'=>'simpan',
            'perusahaan'=>(object)[
                'nama_perusahaan' =>"",
                'deskripsi' =>"",
                'foto' => "",
            ],
        ];
        return view('perusahaan',$data);
    }

    function create(Request $req){
        perusahaan::create([
            'nama_perusahaan' => $req->nama_perusahaan,
            'deskripsi' => $req->deskripsi,
            'foto' => $foto,
        ]);
        return redirect('/viewperusahaan');
    }
    public function destroy($id)
    {
        $posting = perusahaan::find($id);
        $hapus = $posting->delete();
        if($hapus){
            return back()->with('success','data berhasil di hapus');
        }else{
            return back()->with('failed','data gagal di hapus');
        }
    }
}
