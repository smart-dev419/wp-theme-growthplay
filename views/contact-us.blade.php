@layout('layouts/master')
<?php /* Template Name: Contact Us */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    @include('partials/page-header')
    <div class="container">
        <div class="contact-content">
            <div class="contact-block">
                <h2>{{ get_field('main_content_header') }}</h2>
                {{ get_field('main_content_paragraph_copy') }}
                <div class="form-holder">
                    <strong class="txt-big">{{ get_field('main_content_subheader') }}</strong>
                    <form class="contact-form form" action="{{ get_field('contact_form_cta_button_url') }}">
                        <div class="form-col form-col-L">
                            <div>
                                <label for="first-name">{{ get_field('contact_form_input_1_title') }}<em>*</em></label>
                                <input type="text" id="first-name">
                            </div>
                            <div>
                                <label for="last-name">{{ get_field('contact_form_input_2_title') }}<em>*</em></label>
                                <input type="text" id="last-name">
                            </div>
                            <div>
                                <label for="email">{{ get_field('contact_form_input_3_title') }}<em>*</em></label>
                                <input type="email" id="email">
                            </div>
                            <div>
                                <label for="company-name">{{ get_field('contact_form_input_4_title') }}<em>*</em></label>
                                <input type="text" id="company-name">
                            </div>
                            <div>
                                <label for="phone">{{ get_field('contact_form_input_5_title') }}<em>*</em></label>
                                <input type="text" id="phone">
                            </div>
                        </div>
                        <div class="form-col form-col-R">
                            <div>
                                <label for="textarea">{{ get_field('contact_form_text_area_title') }}</label>
                                <textarea></textarea>
                            </div>
                            <input type="submit" value="{{ get_field('contact_form_cta_button_text') }}" class="btn btn-blue">
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact-info">
                <div class="contact-row">
                    <h3>{{ get_field('ol_header') }}</h3>
                    <address>
                        <strong class="title">{{ get_field('headquarters_city') }}</strong>
                        {{ get_field('headquarters_address_line_1') }}<br>
                        {{ get_field('headquarters_address_line_2') }}<br>
                        {{ get_field('headquarters_city') }}, {{ get_field('headquarters_state') }} {{ get_field('headquarters_zip_code') }}<br>
                        {{ get_field('headquarters_phone_number') }}<br>
                        {{ get_field('headquarters_email') }}
                    </address>
                </div>

                <div class="contact-row">
                    <h3>{{ get_field('offices_header') }}</h3>
                    @if(!empty(get_field('office_locations_repeater')))
                        @foreach(get_field('office_locations_repeater') as $office_info)
                        <address>
                            <strong class="title">{{ $office_info['location_city'] }}</strong>
                            {{ $office_info['location_address_line_1'] }} <br>
                            @if( $office_info['location_address_line_2'] != "" )
                                {{ $office_info['location_address_line_2'] }} <br>
                            @endif
                            {{ $office_info['location_city'] }}, {{ $office_info['location_state'] }} {{ $office_info['location_zip_code'] }} <br>
                            {{ $office_info['location_phone_number'] }}
                        </address>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>
<?php endwhile; ?>

@endsection