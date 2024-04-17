<?php

namespace App\Http\Controllers\UHelp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    public function index() {
        return view('uhelp.index');
    }
}
