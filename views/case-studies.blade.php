@layout('layouts/master')
<?php /* Template Name: Case Studies */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    <header class="page-title">
        <div class="container">
            <h1>{{ get_field('page_header') }}</h1>
        </div>
    </header>

    <div class="news_highlights bg-purple">
        <div class="container carousel-sm">
            <?php if( have_rows('featured_case_study_slider_repeater') ) { ?>
                @foreach(get_field('featured_case_study_slider_repeater') as $list)
                    <div>
                        <div class="news-img">
                            {{ Helper::image($list['case_study_image'], 'full') }}
                            <span class="news-cap">{{ $list['case_study_caption'] }}</span>
                        </div>
                        <div class="news-body">
                            <div class="logo">
                                {{ Helper::image($list['case_study_logo'], 'full') }}
                            </div>
                            <h3>{{ $list['case_study_header'] }}</h3>
                            <p>{{ $list['case_study_subheader'] }}</p>
                            <a href="{{ $list['case_study_read_more_url'] }}" class="link">Read more</a>
                        </div>
                    </div>
                @endforeach
            <?php } ?>
        </div>
    </div>
    <br />
    <br />
    <br />
    <div class="container">
        <ul class="list-card">
            <?php
                $options = array(
                        'post_type' => 'case_study',
                        'posts_per_page' => -1,
                );
                $colors = [
                    'red_light',
                    'orange',
                    'green',
                    'blue_light'
                ];
                $count = 0;
                $events = new WP_Query( $options );
                while( $events->have_posts() ) : $events->the_post();
                    $categories = get_the_terms( get_the_ID(), 'case_study_categories' );
            ?>
            <li>
                <div class="card card--{{ $colors[ $count ] }}">
                    <div class="card-img">
                        <a href="{{ get_permalink() }}">
                            @if($categories[0]->name == 'B2B')
                                <div class="b2b">
                                    {{ Helper::image(get_field('header_logo'), 'full')}}
                                </div>
                            @else
                                <div class="img" style="background-image: url('{{ Helper::imageURL(get_field('title_panel_image'), 'full') }}')"></div>
                            @endif
                        </a>
                    </div>
                    <div class="card-body">
                        <span class="card-subtitle">{{ $categories[0]->name }}</span>
                        <h3><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
                        <a href="{{ get_permalink() }}" class="card-link">View Case Study</a>
                    </div>
                </div>
            </li>

            <?php
                $count++;
                if($count > 3) $count = 0;
                endwhile;
                wp_reset_postdata();
            ?>
        </ul>
    </div>

    @include('partials/roadmap-footer')

</main>
<?php endwhile; ?>

@endsection