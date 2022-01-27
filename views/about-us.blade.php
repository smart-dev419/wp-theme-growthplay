@layout('layouts/master')
<?php /* Template Name: About Us */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    @include('partials/page-header')
    <article class="text-col article-about">
        <div class="container">
            <div class="col">
                <h1>{{ get_field('section_1_header') }}</h1>
                <div class="img">
                {{ Helper::image(get_field('section_1_image'), 'full') }}
                </div>
            </div>
            <div class="col paragraphs">
                {{ get_field('section_1_paragraph_copy') }}
            </div>
        </div>
    </article>
    <div class="jumbotron jumbotron--sm jumbotron--gray">
        <div class="container">
            <h2 class="h1-sm">{{ get_field('section_2_header') }}</h2>
            <a href="{{ get_field('section_2_cta_button_url') }}" class="btn btn-green">{{ get_field('section_2_cta_button_text') }}</a>
        </div>
    </div>
    <div class="section-how">
        <div class="container">
            <h1>{{ get_field('section_3_header') }}</h1>
            <div class="img">
            {{ Helper::image(get_field('section_3_image'), 'full', array('width' => get_field('section_3_image_width'))) }}
            </div>
            @if(!empty(get_field('section_3_column_repeater')))   
            <ul class="list-col">
                @foreach(get_field('section_3_column_repeater') as $key => $column)
                <li>
                    <p>{{ $column['column_text'] }}</p>
                </li>
                @endforeach
            </ul>
            @endif
            <hr>
            <div class="grid">
                <div class="col-lg-6">
                {{ Helper::image(get_field('section_4_image'), 'full') }}
                </div>
                <div class="col-lg-6">
                    <h2 class="h1-sm">{{ get_field('section_4_header') }}</h2>
                    <div>{{ get_field('section_4_paragraph_copy') }}</div>
                    <a href="{{ get_field('section_4_cta_button_url') }}" class="btn btn-green">{{ get_field('section_4_cta_button_text') }}</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php endwhile; ?>

@endsection