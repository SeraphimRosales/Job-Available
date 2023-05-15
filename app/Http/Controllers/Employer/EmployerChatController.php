<?php

namespace App\Http\Controllers\employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployerChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employer'); // add this line
    }

    public function index()
    {
        return view('employer.chat');
    }
}
