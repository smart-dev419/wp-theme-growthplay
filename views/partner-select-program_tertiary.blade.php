@layout('layouts/master')
<?php /* Template Name: Partner Select Program Tertiary */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    <header class="page-title hidden-mobile">
        <div class="container">
            <span class="page-subtitle">{{ get_field('page_sub_header') }}</span>
            <h1>{{ get_field('page_header') }}</h1>
        </div>
    </header>

    <div class="hero">
        <div class="container">
            <div class="hero-img" style="background-image: url('{{ get_field('pspt_large_img') }}');"></div>
            <div class="title-wrap">
                <h1>{{ get_field('pspt_header') }}</h1>
            </div>
        </div>
    </div>

    <div class="partner-select">
        <div class="container">
            <div class="grid intro-block">
                <div class="col-md-6">
                    {{ get_field('pspt_paragraph_copy') }}
                    @if(!empty(get_field('pspt_bullet_point_repeater'))) 
                    <ul class="list-dot">
                        @foreach(get_field('pspt_bullet_point_repeater') as $slide)
                        <li>{{ $slide['bullet_point'] }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="col-md-6 text-center">
                    <div class="img">
                        {{ Helper::image(get_field('pspt_small_img'), 'full') }}
                    </div>
                    <a href="{{ get_field('pspt_cta_button_url') }}" class="btn btn-green">{{ get_field('pspt_cta_button_text') }}</a>
                </div>
            </div>

            <hr>

            @if( get_field('strategic_service_providers') == 'yes' ) 
            <div class="service">
                <h3>{{ get_field('pspt_providers_header') }}</h3>
                @if(!empty(get_field('pspt_providers'))) 
                <ul class="list-defination">
                    @foreach(get_field('pspt_providers') as $provider)
                    <li class="blue1">
                        <h3>{{ $provider['title'] }}</h3>
                        <p>{{ $provider['description'] }}</p>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
            @endif

            <div class="form form-contact">
                <h2>Contact</h2>
                 @include('forms/contact-form')
            </div>
        </div>
    </div>

</main>
<?php endwhile; ?>

@endsection