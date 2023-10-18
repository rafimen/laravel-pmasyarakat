<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\pengaduan;
use Illuminate\Http\Request;

class pengaduancontroller extends Controller
{
    function index(){
        $judul = "";
      // $pengaduan = DB::table('pengaduan')->get();
      $pengaduan = pengaduan::all();
       return view('home',['textjudul' => $judul,'pengaduan' => $pengaduan]);
  

     
    }
    function laporan(){
        $judul = " ";
        return view('laporan',['textjudul' => $judul]);
    }


    function proses_pengaduan(request $request){

        $nama_foto = $request->foto->getclientoriginalName();
        $request->validate([
            'laporan' => 'required|min:5'
        ]);

            //nyimpan foto
            $request->foto->storeAs('public/image', $nama_foto);

        //$isi_pengaduan = $_POST['isi_laporan'];
        $isi_pengaduan = $request->laporan;

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('y-m-d'),
            'nik' => 33,
            'isi_laporan' => $isi_pengaduan,
            'foto' => $request->foto->getclientoriginalName(),
            'status' => '0'

        ]);
        return redirect('/home');
    }

    function hapus($id){
        DB::table('pengaduan')->where('id_pengaduan', '=' ,$id)->delete();
        return redirect('/home');
    }
    function detail(){
        $pengaduan = DB::table('pengaduan')->get();
        return view('detail');
    }
    function update($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id)->first ();
        return view('/update',['pengaduan' =>$pengaduan]);
            
    }
    function proses_update(request $request , $id){
        $isi_laporan = $request->isi_laporan;
        DB::table('pengaduan')->where('id_pengaduan',$id )->update([
            'isi_laporan' => $isi_laporan,
        ]);
        return redirect('/home');
    }
}
?>