<?php

namespace App\Http\Controllers;

use App\Model\Owner;
use App\Model\Kost;
use App\Model\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

    public function index() {
    	return view('admin/home');
    }

    public function dataowner()
    {
    	$owner = Owner::all();
    	return view('admin/dataowner', compact('owner'));
    }

    public function datakost()
    {
    	$kost = Kost::all();
    	$owner = owner::all();
    	return view('admin/datakost', compact('kost', 'owner'));
    }

    public function kostview()
    {
    	$kost = Kost::where('status', 'view')->get();
    	$owner = owner::all();
    	return view('admin/kostview', compact('kost', 'owner'));
    }

    public function kosthide()
    {
    	$kost = Kost::where('status', 'hide')->get();
    	$owner = owner::all();
    	return view('admin/kosthide', compact('kost', 'owner'));
    }

    public function kostdelete()
    {
    	$kost = Kost::where('status', 'delete')->get();
    	$owner = owner::all();
    	return view('admin/kostdelete', compact('kost', 'owner'));
    }
}
