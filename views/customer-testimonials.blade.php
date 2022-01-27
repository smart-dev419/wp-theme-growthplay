@layout('layouts/master')
<?php /* Template Name: Customer Testimonials */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    <header class="page-title">
        <div class="container">
            <h1>{{ get_field('page_header') }}</h1>
        </div>
    </header>
    <div class="news_highlights bg-purple">
        @if(!empty(get_field('featured_case_study_slider_repeater')))
        <div class="container carousel-sm">
            @foreach(get_field('featured_case_study_slider_repeater') as $slide)
            <div>
                <div class="news-img">
                    {{ Helper::image($slide['image'], 'full') }}
                    <span class="news-cap">{{ $slide['title'] }}</span>
                </div>
                <div class="news-body">
                    <div class="logo">
                        {{ Helper::image($slide['logo'], 'full') }}
                    </div>
                    <h3>{{ $slide['header'] }}</h3>
                    <p>{{ $slide['subheader'] }}</p>
                    <a href="{{ $slide['read_more_url'] }}" class="link">{{ _e( 'Read More' ) }}</a>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
    <div class="container pt-40">
        <article class="text-col text-300">
            <div class="col">
                <h1>{{ get_field('section_1_header') }}</h1>
            </div>
            <div class="col">
                {{ get_field('section_1_paragraph_copy') }}
                <a href="{{ get_field('section_1_cta_button_url') }}" class="btn btn-blue">{{ get_field('section_1_cta_button_text') }}</a>
            </div>
        </article>
        <section class="section-customer">
            <header class="text-col text-300">
                <div class="col">
                    <h1>{{ get_field('section_2_header') }}</h1>
                </div>
                <div class="col">
                    {{ get_field('section_2_paragraph_copy') }}
                </div>
            </header>
            <ul class="list-col">
            <?php
                $options = array(
                    'post_type' => 'testimonial',
                    'orderby' => 'post__in',
                    'posts_per_page' => -1,
                    'post__in' => get_field('customer_testimonials_post_relationship'),
                );
                $testimonials = new WP_Query( $options );
                while( $testimonials->have_posts() ) : $testimonials->the_post();
            ?>
                <li>
                    <div class="box-logo">
                        {{ Helper::image(get_field('company_logo'), 'logo') }}
                    </div>
                </li>
            <?php
                endwhile;
                wp_reset_query();
            ?>
            </ul>
        </section>
    </div>
</main>
<?php endwhile; ?>

@endsection