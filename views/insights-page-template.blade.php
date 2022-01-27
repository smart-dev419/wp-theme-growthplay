@layout('layouts/master')
<?php /* Template Name: Insights Page Template */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    <header class="page-title hidden-mobile">
        <div class="container">
            <h1>{{ get_field('page_header') }}</h1>
        </div>
    </header>
    <div class="news_highlights add">
        @if(!empty(get_field('featured_resources_slider_repeater')))
        <div class="container carousel-sm">
            @foreach(get_field('featured_resources_slider_repeater') as $slide)
            <div>
                <div class="news-img">
                    {{ Helper::image($slide['image']['id'], 'full') }}
                    <span class="news-cap">{{ $slide['sub_header'] }}</span>
                </div>
                <div class="news-body">
                    <h2><a href="{{ $slide['cta_button_url'] }}">{{ $slide['header'] }}</a></h2>
                    {{ $slide['paragraph_copy'] }}
                    <a href="{{ $slide['cta_button_url'] }}" class="link">{{ $slide['read_more_url'] }}</a>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
    <div class="container">
        <div class="filter">
           @include('partials/category-filter')
           @include('partials/search-form')
        </div>
        <ul class="list-card resources">
            <?php
            $options = array(
                'post_type' => 'resource',
                'orderby' => 'post__in',
                'posts_per_page' => -1,
                'post__in' => get_field('featured_resources'),
            );
            if (isset($_GET['search_query'])) {
                $options['s'] = $_GET['search_query'];
            }            
            if (isset($_GET['category'])) {
                $options['tax_query'] = array(
                                array(
                                    'taxonomy' => 'resource_categories',
                                    'terms' => $_GET['category'],
                                    'field' => 'term_id'
                                )
                            );
            }
            $index = 1;
            $resources = new WP_Query( $options );

            while( $resources->have_posts() ) : $resources->the_post();
                $card_color = "";
                switch ($index%4) {
                    case 1:
                        $card_color = "red_light";
                        break;
                    case 2:
                        $card_color = "orange";
                        break;
                    case 3:
                        $card_color = "green";
                        break;
                    case 0:
                        $card_color = "blue_light";
                        break;
                    default:
                        $card_color = "red_light";
                }
            ?>
            <li>
                <div class="card card--{{ $card_color }}">
                    <?php
                        $terms = wp_get_post_terms(get_the_ID(), 'resource_categories');
                    ?>
                    <div class="card-img">
                        <a href="{{ get_field('resource_cta_button_url') }}" target="{{ Helper::contains_video_category($terms) ? '_blank' : '_self' }}">
                            {{ Helper::image(get_field('resource_image'), 'full') }}
                        </a>
                    </div>
                    <div class="card-body">
                        <span class="card-subtitle">
                            @foreach($terms as $term)
                            {{ $term->name }} &nbsp; 
                            @endforeach
                        </span>
                        <h3><a href="{{ get_field('resource_cta_button_url') }}">{{ the_title() }}</a></h3>
                        <a href="{{ get_field('resource_cta_button_url') }}" class="card-link">{{ get_field('resource_cta_button_label') }}</a>
                    </div>
                </div>
            </li>
            <?php
                $index++;
                endwhile;
                wp_reset_query();
            ?>
 
        </ul>
            @if(!$resources->post_count)
                @include('partials/no-posts-result')
            @endif
        <div class="text-right">
            <a href="#" class="link">Back to Top</a>
        </div>
    </div>
</main>
<?php endwhile; ?>

@endsection