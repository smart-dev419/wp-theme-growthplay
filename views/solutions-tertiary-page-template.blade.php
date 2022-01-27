@layout('layouts/master')
<?php /* Template Name: Solutions Tertiary Page Template */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    <header class="page-title border">
        <div class="container">
            <span class="page-subtitle">{{ get_field('page_sub_header') }}</span>
            <h1>{{ get_field('page_header') }}</h1>
        </div>
    </header>
    <div class="article article--lg">
        <div class="container">
            <div class="two-col">
                <div class="col">
                    <h2 class="h1">{{ get_field('section_1_header') }}</h2>
                    {{ get_field('section_1_paragraph_copy') }}
                </div>
                <div class="col col-right">
                    @include('partials/pack-box')

                    @if(!empty(get_field('section_1_bullet_point_repeater')))
                    <ul class="list-dot text-blue_dark">
                        @foreach(get_field('section_1_bullet_point_repeater') as $key => $point)
                        <li>{{ $point['bullet_point'] }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="col col-logo">
                    <div class="logo">
                        {{ Helper::image(get_field('section_1_case_study_logo'), 'logo', array('width' => get_field('section_1_case_study_logo_width'))) }}
                    </div>
                    @if(get_field('section_1_cta_button_url'))
                    <a href="{{ get_field('section_1_cta_button_url') }}" target="{{ get_field('new_tab') ? '_blank': '_self' }}" class="btn btn-blue">{{ get_field('section_1_cta_button_text') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron_1">
        <div class="container">
            <h2 class="h1">{{ get_field('section_2_header') }}</h2>
            {{ get_field('section_2_paragraph_copy') }}
        </div>
    </div>
    <div class="article article_1">

        @if(get_field('section_3_right_paragraph_copy'))
        <div class="container two-col">
            <div class="col">
                <h2 class="h1">{{ get_field('section_3_header') }}</h2>
                {{ get_field('section_3_left_paragraph_copy') }}
            </div>
            <div class="col">
                {{ get_field('section_3_right_paragraph_copy') }}
            </div>
        </div>
        @else
        <div class="container">
            <h2 class="h1">{{ get_field('section_3_header') }}</h2>
            {{ get_field('section_3_left_paragraph_copy') }}
        </div>
        @endif
    </div>
    @include('partials/solutions-tertiary-footer')
</main>
<?php endwhile; ?>

@endsection