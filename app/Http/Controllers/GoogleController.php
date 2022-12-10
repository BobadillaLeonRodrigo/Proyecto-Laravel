<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class GoogleController extends Controller
{
    /** 
     * White code on Method
     * 
     * @return response()
    */
        public function index()
        {
            return view('Admin.googleAutocomplete');
        }
}