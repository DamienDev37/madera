<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjetsController extends Controller
{
	public function index(){
		return view('projets.index');
	}
}