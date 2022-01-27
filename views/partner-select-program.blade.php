@layout('layouts/master')
<?php /* Template Name: Partner Select Program */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    <header class="page-title {{ get_field('top_background') ? 'has-overlay' : null }}" style="background-image: url('{{ get_field('top_background') }}');">
        <div class="container">
            <h1>{{ get_the_title() }}</h1>
        </div>
    </header>

    <div class="article_logo">
        <div class="container two-col">
            <div class="col">
                {{ Helper::image(get_field('intro_logo'), 'full', array('class'=>'logo')) }}
            </div>
            <div class="col">
                <p class="text-blue">{{ get_field('intro_heading') }}</p>
                {{ get_field('intro_description') }}
            </div>
        </div>
    </div>

    <div class="partners">
        <div class="container">
            <h2>{{ get_field('partners_heading') }}</h2>
            <ul class="flex">

                @if( have_rows('partner_service') )
                    @foreach( get_field('partner_service') as $list )
                        <li class="partner">
                            <div class="img">
                                {{ Helper::image($list['image'], 'full', array('width'=>'100')) }}
                            </div>
                            <div class="body">
                                <h3><a href="{{ $list['link_source'] }}">{{ $list['title'] }}</a></h3>
                                <p>{{ $list['description'] }}</p>
                            </div>
                            <a href="{{ $list['link_source'] }}" class="btn btn-green">{{ $list['link_text'] }}</a>
                        </li>
                    @endforeach
                @endif

            </ul>
        </div>
    </div>

    <div class="current-partners">
        <div class="container">
            <h1>Current Partners</h1>
            <ul class="flex">
                @if( have_rows('current_partners') )
                    @foreach( get_field('current_partners') as $list )
                        <li>{{ Helper::image($list['logo'], 'full') }}</li>
                    @endforeach
                @endif
            </ul>
            <a href="{{ get_field('partners_button_link') }}" class="btn btn-green">{{ get_field('partners_button') }}</a>
        </div>
    </div>

    <div class="contact-us">
        <div class="container">
            <ul class="list-unstyled">
                @if( have_rows('contact_description') )
                    @foreach( get_field('contact_description') as $list )
                        <li><a href="{{ $list['link'] }}">{{ $list['item'] }}</a></li>
                    @endforeach
                @endif
            </ul>
            <a href="{{ get_field('contact_button_link') }}" class="btn btn-green">{{ get_field('contact_button') }}</a>
        </div>
    </div>

</main>
<?php endwhile; ?>

@endsection