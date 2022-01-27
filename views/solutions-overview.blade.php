@layout('layouts/master')
<?php /* Template Name: Solutions Overview */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    @include('partials/page-header')
    <section class="section-method">
        <div class="container">
            <header class="heading">
                <h1>{{ get_field('section_1_header') }}</h1>
                <div>{{ get_field('section_1_paragraph_copy') }}</div>
            </header>

            @if(!empty(get_field('section_1_six_pack_column_repeater')))
            <div class="methods">
                @foreach(get_field('section_1_six_pack_column_repeater') as $key => $column)
                <div class="col blue0{{$key+1}}">
                    <span class="title">{{ $column['column_title'] }}</span>
                    @if(!empty($column['six_pack_row_repeater']))
                        @foreach($column['six_pack_row_repeater'] as $row)
                        <div class="box">
                            <div class="inner">
                                <div class="txt">
                                    <h3>{{ $row['row_title'] }}</h3>
                                    <p>{{ $row['row_subtitle'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>
    <section class="section-outcomes">
        <div class="container">
            <h1>{{ get_field('section_2_header') }}</h1>
            <?php $services = get_field('section_2_services_repeater'); ?>
            @include('partials/services')
        </div>
    </section>
    <section class="section-experience">
        <header class="heading container">
            <h1>{{ get_field('section_3_header') }}</h1>
            {{ get_field('section_3_paragraph_copy') }}
        </header>
        <div class="teaser">
            <div class="container">
                <div class="teaser-img">
                    <img src="{{ get_field('featured_case_study_image') }}" title="" />
                </div>
                <div class="teaser-body">
                    <div class="logo">
                        {{ Helper::image(get_field('featured_case_study_logo'), 'full') }}
                    </div>
                    <blockquote class="testimonial">
                        <q>{{ get_field('featured_case_study_quote') }}</q>
                        <cite>
                            <span class="person">{{ get_field('featured_case_study_quote_author') }}</span>
                            <span class="job">{{ get_field('featured_case_study_author_title_and_company') }}</span>
                        </cite>
                    </blockquote>
                    <div class="text-right">
                        <a href="{{ get_field('featured_case_study_cta_button_url') }}" class="btn btn-blue">{{ get_field('feature_case_study_cta_button_text') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials/roadmap-footer')
</main>
<?php endwhile; ?>

@endsection