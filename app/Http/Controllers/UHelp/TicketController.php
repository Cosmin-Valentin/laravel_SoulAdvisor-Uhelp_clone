<?php

namespace App\Http\Controllers\UHelp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UHelp\Ticket;
use App\Models\UHelp\TicketReply;
use App\Models\UHelp\TicketCategory;
use App\Models\User;

class TicketController extends Controller
{
    public function index() {
        $user = auth()->user();
        if($user->isAdmin) {
            $tickets = Ticket::all();
        } else {
            $tickets = Ticket::where('created_by', $user->id)->get();
        }

        return view('uhelp.index', [
            'user' => $user,
            'tickets' => $tickets,
            'users' => User::where('id', '!=', auth()->id())->get()
        ]);
    }

    public function show(Ticket $ticket) {
        return view('uhelp.show', [
            'user' => auth()->user(),
            'ticket' => $ticket,
            'replies' => $ticket->replies,
            'categories' => TicketCategory::all(),
            'users' => User::where('id', '!=', auth()->id())->get()
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
            'ticket_id' => 'required',
            'status' => 'required'
        ]);
        $attributes['created_by'] = auth()->id();

        if($attributes['status'] !== 'inProgress') {
            $ticket = Ticket::find($attributes['ticket_id']);
            $ticket->status = $attributes['status'];
            $ticket->save();
        }
        unset($attributes['status']);

        TicketReply::create($attributes);
        return back();
    }

    public function updateTicket(Ticket $ticket) {
        $attributes = request()->validate([
            'priority' => 'sometimes|required|string',
            'category_id' => 'sometimes|required|exists:ticket_categories,id',
            'assignee_id' => 'sometimes|required|exists:users,id',
            'unassign' => 'sometimes|required',
            'status' => 'sometimes|required|string'
        ]);
        if(isset($attributes['unassign'])) {
            $attributes['assigner_id'] = null;
            $attributes['assignee_id'] = null;
            unset($attributes['unassign']);
        }
        if(isset($attributes['assignee_id'])) {
            $attributes['assigner_id'] = auth()->id();
        } 

        $ticket->update($attributes);
        return back();

    }

    public function destroy(Ticket $ticket) {
        $ticket->delete();
        return redirect()->route('uhelp.index');
    }
}
