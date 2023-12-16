<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\posting;
use Illuminate\Support\Str;


class PostingController extends Controller
{
    //
    function view(){
         // Mengambil semua data barang dari model Barang
        $data['postings'] = posting::all();

         // Mengirim data barang ke tampilan 'barang'
        return view('posting', $data);
    }

    function posting(){
        // Mengambil semua data barang dari model Barang
       $data['postings'] = posting::all();

        // Mengirim data barang ke tampilan 'barang'
       return view('viewposting', $data);
   }

    function post(request $req){
        $nama = $req->nama;
        $bidang_usaha = $req->bidang_usaha;
        $persyaratan = $req->persyaratan;
        $lowongan = $req->lowongan;
        $ttl_p = $req->ttl_p;
        $ttl_tp = $req->ttl_tp;
        $deskripsi = $req->deskripsi;
        $foto = $req->file('foto')->store('posting');
        $lokasi = $req->lokasi;



        posting::create([
            'nama' => $nama,
            'bidang_usaha' => $bidang_usaha,
            'persyaratan' => $persyaratan,
            'lowongan' => $lowongan,
            'ttl_p' => $ttl_p,
            'ttl_tp' => $ttl_tp,
            'deskripsi' => $deskripsi,
            'foto' => $foto,
            'lokasi' => $lokasi,
        ]);

        return redirect('/viewposting');
    }

    function index(Request $req){
        if ($req->search) {
        $data['postings'] = posting::where("nama",$req->search)->get();
        }

        else{
            $data['postings'] = posting::all();
        }
        return view('viewposting',$data);
    }


    function edit($id){
        $data['postings'] = posting::find($id);
        return view('formposting',$data);
    }

    function update(Request $req){
        if($req->file('foto')){
            $foto = $req->file('foto')->store('posting');
            posting::where('id',$req->id)->update([
                'nama' => $req->nama,
                'bidang_usaha' => $req->bidang_usaha,
                'persyaratan'=> $req->persyaratan,
                'lowongan' => $req->lowongan,
                'ttl_p' => $req->ttl_p,
                'ttl_tp' => $req->ttl_tp,
                'deskripsi' => $req->deskripsi,
                'foto' => $foto,
                'lokasi' =>$req->lokasi,

            ]);
        }else{
            posting::where('id',$req->id)->update([
                'nama' => $req->nama,
                'bidang_usaha' => $req->bidang_usaha,
                'persyaratan'=> $req->persyaratan,
                'lowongan' => $req->lowongan,
                'ttl_p' => $req->ttl_p,
                'ttl_tp' => $req->ttl_tp,
                'deskripsi' => $req->deskripsi,
                'foto' => $foto,
                'lokasi' =>$req->lokasi,



            ]);


        }
        return redirect('viewposting');
    }
    function add(){
        $data=[
            'action'=>url('/posting/create'),
            'tombol'=>'simpan',
            'posting'=>(object)[
                'nama' =>"",
                'bidang_usaha' =>"",
                'persyaratan' =>"",
                'lowongan' =>"",
                'ttl_p' =>"",
                'ttl_tp' => "",
                'ttl_tp' => "",
                'foto' =>"",
                'lokasi' =>"",
            ],
        ];
        return view('posting',$data);
    }

    function create(Request $req){
        posting::create([
            'nama' => $nama,
            'bidang_usaha' => $bidang_usaha,
            'persyaratan' => $persyaratan,
            'lowongan' => $lowongan,
            'ttl_p' => $ttl_p,
            'ttl_tp' => $ttl_tp,
            'foto' => $foto,
            'lokasi' => $lokasi,
        ]);
        return redirect('/viewposting');
    }
    public function destroy($id)
    {
        $posting = posting::find($id);
        $hapus = $posting->delete();
        if($hapus){
            return back()->with('success','data berhasil di hapus');
        }else{
            return back()->with('failed','data gagal di hapus');
        }
    }
}
