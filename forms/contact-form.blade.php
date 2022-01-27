<form action="{{ admin_url('admin-ajax.php') }}" id="contact-form" method="post">
    <input type="hidden" name="action" value="contact_form" />
    <input type="hidden" name="form_id" value="<!-- gravity from ID -->" />
    <input type="hidden" name="contact-form-nonce" value="{{ wp_create_nonce('contact-form-nonce') }}" />
    
    <div class="col-2">
        <div class="col">
            <input type="text" name="first-name" placeholder="First Name*">
            <input type="text" name="last-name" placeholder="Last Name*">
            <input type="email" name="email" placeholder="Email*">
        </div>
        <div class="col">
            <textarea name="message" placeholder="Message"></textarea>
        </div>
    </div>
    <input type="submit" value="Submit" class="btn btn-green">
</form>

<div style="display: none;" id="thanks">
    <h3>Thank you for contacting us.</h3>
    <p>We're happy to answer your request and will follow up as soon as possible</p>
</div>