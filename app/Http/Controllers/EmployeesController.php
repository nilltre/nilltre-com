<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class EmployeesController extends Controller
{
    public function index() {
    	return view('employees.index');
    }

    public function create() {
    	$users = User::All();
    	return view('employees.create', compact('users'));
    }
}
