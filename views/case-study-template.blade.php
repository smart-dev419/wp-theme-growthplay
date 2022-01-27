@layout('layouts/master')
<?php /* Template Name: Case Template */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    <header class="page-title">
        <div class="container">
            <span class="page-subtitle">{{ get_field('header_subtitle') }}</span>
            <div class="page-logo">
                {{ Helper::image(get_field('header_logo'), 'logo') }}
            </div>
        </div>
    </header>

    <div class="hero_case">
        <div class="container">
            <?php $image = wp_get_attachment_image_src(get_field('title_panel_image'), 'full'); ?>
            <div class="hero-img" style="background-image: url('{{ $image[0] }}');"></div>
            <div class="hero-desc">
                <h1>{{ get_field('title_panel_header') }}</h1>
                <h2>{{ get_field('title_panel_subheader') }}</h2>
            </div>
        </div>
    </div>

    <div class="case-content">
        <div class="container">

                @if( have_rows('main_content_section_repeater') )
                    @foreach( array_slice( get_field('main_content_section_repeater'), 0, 1) as $list )
                            <h2>{{ $list['section_header'] }}</h2>
                            <p>{{ $list['section_paragraph'] }}</p>
                    @endforeach
                @endif

                <blockquote class="testimonial testimonial--full">
                    <h3>{{ get_field('main_content_quote') }}</h3>
                    <cite>
                        <span class="person">{{ get_field('main_content_quote_author') }}</span>
                        <span class="job">{{ get_field('main_content_quote_author_job_title') }}{{ get_field('main_content_quote_author_company') ? ', '.get_field('main_content_quote_author_company') : '' }}</span>
                    </cite>
                </blockquote>

                @if( have_rows('main_content_section_repeater') )
                    @foreach( array_slice( get_field('main_content_section_repeater'), 1) as $list )
                        <h2>{{ $list['section_header'] }}</h2>
                        <p>{{ $list['section_paragraph'] }}</p>
                    @endforeach
                @endif

                <?php $current_post = get_post(); ?>
                <div class="btn-wrap">
                    <a href="{{ get_field('main_content_cta_button_url') }}" target="{{ get_field('main_content_cta_button_new_tab') == 'yes' ? '_blank':'_self' }}"  class="btn btn-green">{{ get_field('main_content_cta_button_text') }}</a>
                    <a href="<?php echo get_bloginfo('url') . '/case-studies'; ?>" class="link">Back to Case Studies</a>
                </div>

        </div>
    </div>

    @include('partials/roadmap-footer')
</main>
<?php endwhile; ?>

@endsection