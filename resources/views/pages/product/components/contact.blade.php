<form id="contact-form" wire:submit.prevent='submit'>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Name</label>
        <input class="form-control" type="text" name="name" wire:model='contact.name' id="name">
    </div>
    <div class="form-group">
        <label for="example-search-input" class="form-control-label">Email</label>
        <input class="form-control" type="text" name="email" wire:model='contact.emai' id="email">
    </div>
    <div class="form-group">
        <label for="example-email-input" class="form-control-label">Subject</label>
        <input class="form-control" type="text" name="subject" wire:model='contact.subject' id="subject">
    </div>
    <div class="form-group">
        <label for="example-url-input" class="form-control-label">Message</label>
        <input class="form-control" type="text" name="message" wire:model='contact.message' id="message">
    </div>
    <div class="text-center col-xs-12">
        <div class="btn btn-primary">
            <button type="submit" name="submit">Submit</button>
        </div>
    </div>
</form>

{{-- call to this --}}
{{-- <livewire:contact.form> --}}