<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class RegisterLomba extends Controller
{
    public function upload(Request $req)
    {
        try
        {
        $idLomba = $req->idLomba;
        $formPendaftaran = $req->file('formDaftar');
        $formPendaftaran->move('storage/formPendaftaran',$formPendaftaran->getClientOriginalName());
        $path_formPendaftaran = 'storage/formPendaftaran/'.$formPendaftaran->getClientOriginalName();
        $suratPernyataan = $req->file('suratPernyataan');
        $suratPernyataan->move('storage/suratPernyataan',$suratPernyataan->getClientOriginalName());
        $path_suratPernyataan = 'storage/suratPernyataan/'.$suratPernyataan->getClientOriginalName();
        $jumlahAnggota = $req->jumlahAnggota;

        $idkelompok = DB::table('kelompok')->insertGetId([
            'idlomba' => $idLomba,
            'formulir_pendaftaran' => $path_formPendaftaran,
            'surat_pernyataan' => $path_suratPernyataan,
            'status' => 'Pending'
        ]);

        for($i=1; $i<=$jumlahAnggota; $i++)
        {

            $nrp = $req->nrpAnggota[$i-1];           
            $pasFoto = $req->file("pasFoto$i");
            $pasFoto->move('storage/pasFoto',$pasFoto->getClientOriginalName());
            $path_pasFoto = 'storage/pasFoto/'.$pasFoto->getClientOriginalName();
            $ktm = $req->file("ktm$i");
            $ktm->move('storage/ktm',$ktm->getClientOriginalName());
            $path_ktm = 'storage/ktm/'.$ktm->getClientOriginalName();
            DB::table('detail_user')->insert([
                'nrp' => $nrp,
                'ktm' => $path_ktm,
                'pas_foto' => $path_pasFoto,
                'idkelompok' => $idkelompok
            ]);
            if($idLomba<8)
            {
                $jadwalKuliah = $req->file("jadwalKuliah$i");
                $jadwalKuliah->move('storage/jadwalKuliah',$jadwalKuliah->getClientOriginalName());
                $path_jadwalKuliah = 'storage/jadwalKuliah/'.$jadwalKuliah->getClientOriginalName();
                DB::table('detail_user')->where('nrp', $req->nrpAnggota[$i-1])->update([
                    'jadwal_kuliah' => $path_jadwalKuliah,
                ]);
            }
        }
        DB::table('detail_user')->where('nrp', $req->nrpAnggota[0])->update([
            'line' => $req->line,
        ]);
        switch($idLomba)
        {
            case 1:
                $borang = $req->file("borang");
                $borang->move('storage/borang',$borang->getClientOriginalName());
                $path_borang = 'storage/borang/'.$borang->getClientOriginalName();
                $khs = $req->file("khs");
                $khs->move('storage/khs',$khs->getClientOriginalName());
                $path_khs = 'storage/khs/'.$khs->getClientOriginalName();
                $daftarPrestasi = $req->file("daftarPrestasi");
                $daftarPrestasi->move('storage/daftarPrestasi',$daftarPrestasi->getClientOriginalName());
                $path_daftarPrestasi = 'storage/daftarPrestasi/'.$daftarPrestasi->getClientOriginalName();
                DB::table('detail_user')->where('nrp', $req->nrpAnggota[0])->update([
                    'borang' => $path_borang,
                    'rekap_ipk' => $path_khs,
                    'daftar_prestasi' => $path_daftarPrestasi
                ]);
                break;
            case 5:
                $pakta = $req->file("pakta");
                $pakta->move('storage/pakta',$pakta->getClientOriginalName());
                $path_pakta = 'storage/pakta'.$pakta->getClientOriginalName();
                DB::table('detail_user')->where('nrp', $req->nrpAnggota[0])->update([
                    'pakta_integritas' => $path_pakta
                ]);
                break;
        }
        return view('index');
    }
    catch(\Exception $ex){
        return view('aboutus');
    } 
       
    }

    public function showCabang()
    {
        $id = $_GET['cabang'];
        $cabang = DB::table('cabang_lomba')->where('idlomba',$id)->get();

        return view('cabang', ['cabang' => $cabang]);
    }

    public function showRegister()
    {
        $id = $_GET['cabang'];
        $cabang = DB::table('cabang_lomba')->where('idlomba',$id)->get();

        return view('register', ['cabang' => $cabang]);
    }
}
