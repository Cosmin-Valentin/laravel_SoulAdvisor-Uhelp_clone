<div class="card">
    <div class="card-header">
        <h4 class="card-title">New Ticket</h4>
    </div>
    <form id="user_form">
        <div class="card-body">
            <div class="form-group">
                <div class="row">
                    <div>
                        <label>Subject</label>
                    </div>
                    <div>
                        <input type="text" name="subject" class="ticket-form-control"  id="subject" placeholder="Subject" autocomplete="off">
                        <small>
                            Maximum <b>10</b> Characters
                        </small>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div>
                        <label>Category</label>
                    </div>
                    <div>
                        <select name="category" class="ticket-form-control" id="category">
                            <option label="Select Category"></option>
                            <option value="1">first category</option>
                            <option value="2">second category</option>
                            <option value="3">third category</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div>
                        <label>Description</label>
                    </div>
                    <div>
                        <textarea name="message" id="message" autocomplete="off"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="ticket-form-checkbox">
                    <input type="checkbox" value="agreed" autocomplete="off">
                    <span>I agree with Terms and Services</span>
                </label>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn-ticket" id="createTicketBtn">Create Ticket</button>
        </div>
    </form>
</div>