<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pengajuan;
use Illuminate\Support\Str;


class PengajuanController extends Controller
{
    //
    function view(){
         // Mengambil semua data barang dari model Barang
        $data['pengajuans'] = pengajuan::all();

         // Mengirim data barang ke tampilan 'barang'
        return view('pengajuan', $data);
    }

    function pengajuan(){
        // Mengambil semua data barang dari model Barang
       $data['pengajuans'] = pengajuan::all();

        // Mengirim data barang ke tampilan 'barang'
       return view('viewpengajuan', $data);
   }

    function post(request $req){
        $nama_lengkap = $req->nama_lengkap;
        $ttl = $req->ttl;
        $tempat = $req->tempat;
        $alamat = $req->alamat;
        $no_hp = $req->no_hp;
        $email = $req->email;
        $foto = $req->file('foto')->store('pengajuan');
        $dokumen = $req->dokumen;
        $ttl_p = $req->ttl_p;



        pengajuan::create([
            'nama_lengkap' => $nama_lengkap,
            'ttl' => $ttl,
            'tempat' => $tempat,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'email' => $email,
            'foto' => $foto,
            'dokumen' => $dokumen,
            'ttl_p' => $ttl_p,
        ]);

        return redirect('/viewpengajuan');
    }

    function index(Request $req){
        if ($req->search) {
        $data['pengajuans'] = pengajuan::where("nama_lengkap",$req->search)->get();
        }

        else{
            $data['pengajuans'] = pengajuan::all();
        }
        return view('viewpengajuan',$data);
    }


    function edit($id){
        $data['pengajuans'] = pengajuan::find($id);
        return view('formpengajuan',$data);
    }

    function update(Request $req){
        if($req->file('foto')){
            $foto = $req->file('foto')->store('pengajuan');
            pengajuan::where('id',$req->id)->update([
                'nama_lengkap' => $req->nama_lengkap,
                'ttl' => $req->ttl,
                'tempat'=> $req->tempat,
                'alamat' => $req->alamat,
                'no_hp' => $req->no_hp,
                'email' => $req->email,
                'foto' => $foto,
                'dokumen' => $req->dokumen,
                'ttl_p' => $req->ttl_p,

            ]);
        }else{
            pengajuan::where('id_pengajaun',$req->id_pengajuan)->update([
                'nama_lengkap' => $req->nama_lengkap,
                'ttl' => $req->ttl,
                'tempat'=> $req->tempat,
                'alamat' => $req->alamat,
                'no_hp' => $req->no_hp,
                'email' => $req->email,
                'foto' => $foto,
                'dokumen' => $req->dokumen,
                'ttl_p' => $req->ttl_p,

            ]);
        }
        return redirect('viewpengajuan');
    }
    function add(){
        $data=[
            'action'=>url('/pengajuan/create'),
            'tombol'=>'simpan',
            'pengajuan'=>(object)[
                'nama_lengkap' =>"",
                'ttl' =>"",
                'tempat' =>"",
                'alamat' =>"",
                'no_hp' =>"",
                'email' => "",
                'foto' => "",
                'dokumen' =>"",
                'ttl_p' =>"",
            ],
        ];
        return view('pengajuan',$data);
    }

    function create(Request $req){
        pengajuan::create([
            'nama_lengkap' => $req->nama_lengkap,
            'ttl' => $req->ttl,
            'tempat'=> $req->tempat,
            'alamat' => $req->alamat,
            'no_hp' => $req->no_hp,
            'email' => $req->email,
            'foto' => $foto,
            'dokumen' => $req->dokumen,
            'ttl_p' => $ttl_p,
        ]);
        return redirect('/viewpengajuan');
    }
    public function destroy($id)
    {
        $pengajuan = pengajuan::find($id);
        $hapus = $pengajuan->delete();
        if($hapus){
            return back()->with('success','data berhasil di hapus');
        }else{
            return back()->with('failed','data gagal di hapus');
        }
    }
}
