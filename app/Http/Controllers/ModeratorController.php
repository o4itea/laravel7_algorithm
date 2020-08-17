<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeratorController extends Controller
{
    public function __construct()
    {
        $this->middleware('is.moderator');
    }

    public function index()
    {
        return view('moderator');
    }
}
