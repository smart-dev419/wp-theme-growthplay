@layout('layouts/master')
<?php /* Template Name: Tools Overview */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    @include('partials/page-header')
    <div class="article article--lg">
        <div class="container two-col">
            <div class="col">
                <h1>{{ get_field('section_1_header') }}</h1>
            </div>
            <div class="col">
                {{ get_field('section_1_paragraph_copy') }}
            </div>
        </div>
    </div>
    <div class="article article--md bg-blue">
        <div class="container two-col">
            <div class="col">
                <h2>{{ get_field('section_2_header') }}</h2>
                {{ get_field('section_2_left_paragraph_copy') }}
                <a href="{{ get_field('section_2_cta_button_url') }}" class="btn btn-green">{{ get_field('section_2_cta_button_text') }}</a>
            </div>
            <div class="col">
                <p>{{ get_field('section_2_right_paragraph_copy_1') }}</p>
                @if(!empty(get_field('section_2_bullet_point_repeater')))
                <ul class="list-dot">
                    @foreach(get_field('section_2_bullet_point_repeater') as $point)
                    <li>{{ $point['bullet_point'] }}</li>
                    @endforeach
                </ul>
                @endif
                <p>{{ get_field('section_2_right_paragraph_copy_2') }}</p>
            </div>
        </div>
    </div>
    <div class="article article--lg">
        <div class="container two-col">
            <div class="col">
                <h1>{{ get_field('section_3_header') }}</h1>
                <h2>{{ get_field('section_3_subheader') }}</h2>
            </div>
            <div class="col">
                {{ get_field('section_3_paragraph_copy') }}
                <a href="{{ get_field('section_3_cta_button_url') }}" class="btn btn-green">{{ get_field('section_3_cta_button_text') }}</a>
            </div>
        </div>
    </div>
    <div class="article bg-gray">
        <div class="container">
            <h2 class="h1-sm">{{ get_field('section_4_header') }}</h2>
            {{ get_field('section_4_paragraph_copy') }}
        </div>
    </div>
</main>
<?php endwhile; ?>

@endsection