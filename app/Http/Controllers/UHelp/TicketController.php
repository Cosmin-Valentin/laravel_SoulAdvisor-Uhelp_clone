<?php

namespace App\Http\Controllers\UHelp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    public function index() {
        $isAdmin = false;
        if(auth()->user()?->name === 'Cosmin') {
            $isAdmin = true;
        }
        return view('uhelp.index', [
            'isAdmin' => $isAdmin
        ]);
    }

    public function show() {
        $isAdmin = false;
        if(auth()->user()?->name === 'Cosmin') {
            $isAdmin = true;
        }
        return view('uhelp.show', [
            'isAdmin' => $isAdmin
        ]);
    }

    public function create() {
        $isAdmin = false;
        if(auth()->user()?->name === 'Cosmin') {
            $isAdmin = true;
        }
        return view('uhelp.create', [
            'isAdmin' => $isAdmin
        ]);
    }
}
