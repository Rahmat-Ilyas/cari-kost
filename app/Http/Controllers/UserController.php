<?php

namespace App\Http\Controllers;

use App\Model\Owner;
use App\Model\Kost;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	$data_kost = Kost::where('status', '!=', 'delete')->paginate(6);;
    	$judul = "Rekomendasi Rumah Kost";
    	return view('user/index', compact('data_kost', 'judul'));
    }

    public function detailkost($id)
    {
    	$kost = Kost::where('id', $id)->first();
    	$tawaran = Kost::all()->random(3);
    	$owner_id = $kost->owner_id;
    	$owner = Owner::where('id', $owner_id)->first();
    	return view('user/detailkost', compact('kost', 'tawaran', 'owner'));
    }

    public function search(Request $request)
    {
    	$get_harga = str_replace('Rp. ', '', $request->harga);
    	$harga = explode(' - ', $get_harga);

    	$get_kost = Kost::where('tipe_kost', $request->tipe_kost)->where('jangkawaktu', 'LIKE', '%'.$request->jangkawaktu.'%')->get();
    	$data_kost = [];
    	foreach ($get_kost as $i => $dta) {
    		$hrg = explode(', ', $dta->harga_kost);
    		foreach ($hrg as $j => $hr) {
    			if ($hr >= $harga[0] && $hr <= $harga[1]) {
    				$data_kost[] = $dta;
    				break;
    			}
    		}
    	}
    	$tawaran = Kost::all()->random(3);

    	return view('user/search', compact('data_kost', 'tawaran'));
    }
}
