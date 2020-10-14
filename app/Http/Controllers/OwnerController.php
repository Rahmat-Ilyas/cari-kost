<?php

namespace App\Http\Controllers;

use App\Model\Owner;
use App\Model\Kost;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:owner');
	}

	public function index() 
    {
    	return view('owner/home');
    }    

    public function tambahkost()
    {
        $owner = Owner::all();
        return view('owner.tambahkost', compact('owner'));
    }

    public function datakost()
    {
        $kost = Kost::all();
        return view('owner/datakost', compact('kost'));
    }

    public function getdatakost(Request $request)
    {
        $owner_id = $request->owner_id;
        $req = $request->req;

        if ($req == 'this_owner') {
            $datakost = Kost::where('owner_id', $owner_id)->where('status', '!=', 'delete')->get();
        }
        else if ($req == 'all') {
            $datakost = Kost::all();
        }

        return response()->json([
            'datakost' => $datakost
        ]);
    }

    public function storedata(Request $request)
    {
        $data_harga = [$request->hrminggu, $request->hrbulan, $request->hrtahun];
        foreach ($data_harga as $val) {
            if ($val > 0) $harga[] = $val;
        }

        foreach ($request->fasilitas as $vas) {
            if ($vas != null) $fasilitas[] = $vas;
        }

        $foto_1 = "IMG-".date('dmY-his')."-1.png";
        $foto_2 = "IMG-".date('dmY-his')."-2.png";
        $foto_3 = "IMG-".date('dmY-his')."-3.png";
        $foto_4 = "IMG-".date('dmY-his')."-4.png";

        $kost = new Kost;
        $kost->owner_id = $request->owner_id;
        $kost->nama_kost = $request->nama_kost;
        $kost->tipe_kost = $request->tipe_kost;
        $kost->jangkawaktu = implode(', ',$request->jangkawaktu);
        $kost->harga_kost = implode(', ',$harga);
        $kost->luas_kamar = $request->luas_kamar;
        $kost->fasilitas = implode(', ',$fasilitas);
        $kost->lokasi_kost = $request->lokasi_kost;
        $kost->longitude = $request->longitude;
        $kost->latitude = $request->latitude;
        $kost->deksripsi = $request->deksripsi;
        $kost->foto_1 = $foto_1;
        $kost->foto_2 = $foto_2;
        $kost->foto_3 = $foto_3;
        $kost->foto_4 = $foto_4;
        $kost->status = 'view';
        $kost->save();

        $request->file('foto_1')->move('images/foto_kost', $foto_1);
        $request->file('foto_2')->move('images/foto_kost', $foto_2);
        $request->file('foto_3')->move('images/foto_kost', $foto_3);
        $request->file('foto_4')->move('images/foto_kost', $foto_4);

        $owner = Owner::where('id', $request->owner_id)->first();
        $owner->nama = $request->nama;
        $owner->kt_telp_wa = $request->kt_telp_wa;
        if (isset($request->kt_email)) $owner->kt_email = $request->kt_email;
        if (isset($request->kt_fb)) $owner->kt_fb = $request->kt_fb;
        if (isset($request->kt_ig)) $owner->kt_ig = $request->kt_ig;
        $owner->alamat = $request->alamat;
        $owner->save();

        return redirect('owner/datakost')->with('msg', 'Data kost anda berhasil di tambahkan');
    }

    public function viewupdate($id)
    {
        $kost = Kost::where('id', $id)->first();
        return view('owner/updatekost', compact('kost'));
    }

    public function updatekost(Request $request)
    {
        $data_harga = [$request->hrminggu, $request->hrbulan, $request->hrtahun];
        foreach ($data_harga as $val) {
            if ($val > 0) $harga[] = $val;
        }

        foreach ($request->fasilitas as $vas) {
            if ($vas != null) $fasilitas[] = $vas;
        }

        $kost = Kost::where('id', $request->id)->first();
        $kost->nama_kost = $request->nama_kost;
        $kost->tipe_kost = $request->tipe_kost;

        if (isset($request->jangkawaktu)) {
            $kost->jangkawaktu = implode(', ',$request->jangkawaktu);
            $kost->harga_kost = implode(', ',$harga);
        }

        $kost->luas_kamar = $request->luas_kamar;
        $kost->fasilitas = implode(', ',$fasilitas);
        $kost->lokasi_kost = $request->lokasi_kost;
        $kost->longitude = $request->longitude;
        $kost->latitude = $request->latitude;
        $kost->deksripsi = $request->deksripsi;

        if (isset($request->foto_1)) {
            $kost->foto_1 = $request->val_foto_1;
            $request->file('foto_1')->move('images/foto_kost', $request->val_foto_1);
        }

        if (isset($request->foto_2)) {
            $kost->foto_2 = $request->val_foto_2;
            $request->file('foto_2')->move('images/foto_kost', $request->val_foto_2);
        }

        if (isset($request->foto_3)) {
            $kost->foto_3 = $request->val_foto_3;
            $request->file('foto_3')->move('images/foto_kost', $request->val_foto_3);
        }

        if (isset($request->foto_4)) {
            $kost->foto_4 = $request->val_foto_4;
            $request->file('foto_4')->move('images/foto_kost', $request->val_foto_4);
        }

        $kost->save();

        return redirect('owner/datakost')->with('msg', 'Data kost anda berhasil di update');
    }

    public function hidenorview($id)
    {
        $kost = Kost::where('id', $id)->first();
        if($kost->status == 'view') {
            $kost->status = 'hide';
            $kost->save();
            $ket = 'Data kost anda berhasil di sembunyikan';
        } 
        else if($kost->status == 'hide') {
            $kost->status = 'view';
            $kost->save();
            $ket = 'Data kost anda berhasil di tampilkan';
        }

        return redirect('owner/datakost')->with('msg', $ket);
    }

    public function hapuskost($id)
    {
        $kost = Kost::where('id', $id)->first();
        $kost->status = 'delete';
        $kost->save();

        return redirect('owner/datakost')->with('msg', 'Data kost anda berhasil di hapus');
    }
}
