<div class="actions">
    <a href="{{ route('uhelp.show', $ticket->id) }}" class="action-view" data-tooltip="View Ticket">
        <i class="fa {{ $user->isAdmin ? 'fa-eye' :  'fa-edit'}}"></i>
    </a>
    <button class="action-delete" data-tooltip="Delete Ticket">
        <i class="fa fa-trash-o"></i>
    </button>
</div>