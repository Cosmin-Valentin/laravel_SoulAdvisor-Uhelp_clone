<?php

namespace App\Http\Controllers\UHelp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UHelp\Ticket;
use App\Models\UHelp\TicketReply;
use App\Models\UHelp\TicketCategory;

class TicketController extends Controller
{
    public function index() {
        return view('uhelp.index', [
            'user' => auth()->user(),
            'tickets' => Ticket::all()
        ]);
    }

    public function show(Ticket $ticket) {
        return view('uhelp.show', [
            'user' => auth()->user(),
            'ticket' => $ticket,
            'replies' => $ticket->replies,
            'categories' => TicketCategory::all()
        ]);
    }

    public function create() {
        $categories = TicketCategory::all();
        
        return view('uhelp.create', [
            'user' => auth()->user(),
            'categories' => $categories
        ]);
    }

    public function store() {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'email' => 'nullable|email'
        ]);
        $attributes['created_by'] = auth()->id();
        $attributes['email'] = $attributes['email'] ?? auth()->user()->email;

        Ticket::create($attributes);
        return redirect()->route('uhelp.index');
    }

    public function storeReply() {
        $attributes = request()->validate([
            'reply' => 'required',
            'ticket_id' => 'required'
        ]);
        $attributes['created_by'] = auth()->id();

        TicketReply::create($attributes);
        return back();
    }

    public function updateTicket(Ticket $ticket) {
        $attributes = request()->validate([
            'priority' => 'sometimes|required|string',
            'category_id' => 'sometimes|required|exists:ticket_categories,id' 
        ]);

        $ticket->update($attributes);
        return back();

    }
}
