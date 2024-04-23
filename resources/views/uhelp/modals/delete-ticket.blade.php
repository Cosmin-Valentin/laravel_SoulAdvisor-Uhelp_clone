<div class="delete-ticket-overlay">
    <div class="delete-modal">
        <div class="modal-icon">
            <div class="icon-body">
                <div class="icon-dot"></div>
            </div>
        </div>
        <div class="modal-title">Are you sure you want to continue?</div>
        <div class="modal-text">This might erase your records permanently</div>
        <div class="modal-footer">
            <div>
                <button class="delete-ticket-btn cancel">Cancel</button>
            </div>
            <div>
                <form method="POST" action="{{ route('uhelp.destroy', $ticket->id ?? '1') }}">
                    @csrf
                    @method('delete')
                    <input type="hidden">
                    <button type="submit" class="delete-ticket-btn confirm">Ok</button>
                </form>
            </div>
        </div>
    </div>
</div>