<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PortalController extends Controller
{

	function __construct() {
		$this->middleware('auth');
	}
    public function frontpage() {
    	return view('portal.frontpage');
    }
}
