@layout('layouts/master')
<?php /* Template Name: News & Events */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    <header class="page-title">
        <div class="container">
            <h1>{{ get_field('page_header') }}</h1>
        </div>
    </header>
    <div class="news_highlights">
    @if(!empty(get_field('slider_repeater')))
        <div class="container carousel-sm">
            @foreach(get_field('slider_repeater') as $slide)
            <div>
                <div class="news-img">
                    {{ Helper::image($slide['slide_image'], 'full') }}
                    <span class="news-cap">{{ $slide['slide_top_title'] }}</span>
                </div>
                <div class="news-body">
                    <h2>{{ $slide['slide_title'] }}</h2>
                    <span class="by">{{ $slide['slide_author'] }}</span>
                    {{ $slide['slide_paragraph_copy'] }}
                    <a href="{{ $slide['read_more_url'] }}" class="link">{{ _e( $slide['read_more_text'] ? $slide['read_more_text'] : 'Read More' ) }}</a>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
    <div class="container">
        <div class="filter" id="filter-articles">
            <?php  $all_cats = get_terms( 'article_categories', array('orderby' => 'term_id', 'hide_empty' => false) ); ?>
            @if(!empty($all_cats))
            <select class="cat-filter right">
                @if(isset($_GET['category']))
                   <?php $active_cat = get_term_by('id', $_GET['category'], 'article_categories'); ?>
                    <option value="{{ $_GET['category'] }}">{{ $active_cat->name }}</option>
                @endif
                @foreach($all_cats as $category)
                    <?php if ( isset($_GET['category']) && $category->term_id == $_GET['category'] ) continue; ?>
                    <option value="{{ $category->term_id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @endif
        </div>
        <div class="post-list">
        <?php
            $options = array(
                'post_type' => 'article',
                'orderby'          => 'date',
                'order'            => 'DESC',
                'post_status' => 'publish'
            );
            Helper::pagination_options($options);
            if (isset($_GET['category'])) {
                $options['tax_query'] = array(
                                array(
                                    'taxonomy' => 'article_categories',
                                    'terms' => $_GET['category'],
                                    'field' => 'term_id'
                                )
                            );
            }
            $articles = new WP_Query( $options );
            while( $articles->have_posts() ) : $articles->the_post();
                $categories = get_the_terms( get_the_ID(), 'article_categories' );
        ?>
            <article class="post">
                @if($categories[0]->slug == "news")
                    <header class="post-heading">
                        <span class="post-category">{{ $categories[0]->name }}</span>
                        <h2>{{ the_title() }}</h2>
                        @if(get_field('news_article_author') != "")
                        <span class="post-by">{{ _e( 'by' ) }} <a href="{{ get_field('news_article_author_url') }}">{{ get_field('news_article_author') }}</a>, {{ get_field('news_article_author_job_title') }}</span>
                        @endif
                    </header>
                    <div class="post-footer">
                        <div class="col">
                             <span>{{ get_field('news_article_company') }}</span>
                        </div>
                        <div class="col">
                            <a href="{{ get_field('news_article_cta_button_url') }}" target="{{get_field('news_new_tab') ? '_blank': '_self'}}" class="link">{{ get_field('news_article_cta_button_text') }}</a>
                        </div>
                    </div>
                @elseif($categories[0]->slug == "event")
                    <header class="post-heading">
                        <span class="post-category">{{ $categories[0]->name }}</span>
                        <h2>{{ the_title() }}</h2>
                        <span class="post-by">{{ _e( 'Moderator' ) }}:
                        @if(!empty(get_field('event_moderator_repeater')))
                            @foreach(get_field('event_moderator_repeater') as $key => $moderator)
                                <?php echo ($key>0)? " &amp; ":""; ?><a href="{{ $moderator['moderator_url'] }}">{{ $moderator['moderator_name'] }}</a>, {{ $moderator['moderator_job_title'] }} {{ $moderator['moderator_company'] }}
                            @endforeach
                        @endif
                        </span>
                    </header>
                    <div class="post-footer">
                        <div class="col">
                            <p><time datetime="{{ date('Y-m-d', strtotime(get_field('event_date'))) }}">{{ get_field('event_day_of_week') }}, {{ get_field('event_date') }} {{ get_field('event_time') }}</time></p>
                            <p>{{ get_field('event_message') }}</p>
                        </div>
                        <div class="col">
                            <a href="{{ get_field('event_cta_button_url') }}" target="{{get_field('event_new_tab') ? '_blank': '_self'}}" class="link">{{ get_field('event_cta_button_text') }}</a>
                        </div>
                    </div>
                @elseif($categories[0]->slug == "webinar")
                    <header class="post-heading">
                        <span class="post-category">{{ $categories[0]->name }}</span>
                        <h2>{{ the_title() }}</h2>
                    </header>
                    {{ get_field('webinar_description') }}
                    <div class="post-footer">
                        <div class="col">
                            <p><time datetime="{{ date('Y-m-d', strtotime(get_field('webinar_date'))) }}">{{ get_field('webinar_date') }}</time></p>
                        </div>
                        <div class="col">
                            <a href="{{ get_field('webinar_cta_button_url') }}" target="{{get_field('webinar_new_tab') ? '_blank': '_self'}}" class="link">{{ get_field('webinar_cta_button_text') }}</a>
                        </div>
                    </div>
                @elseif($categories[0]->slug == "press-release")
                    <header class="post-heading">
                        <span class="post-category">{{ $categories[0]->name }}</span>
                         <h2>{{ the_title() }}</h2>
                    </header>
                    <div class="post-footer">
                        <div class="col">
                            <span>{{ get_field('press_release_company') }}</span>
                        </div>
                        <div class="col">
                            <a href="{{ get_field('press_release_cta_button_url') }}" target="{{get_field('press_new_tab') ? '_blank': '_self'}}" class="link">{{ get_field('press_release_cta_button_text') }}</a>
                        </div>
                    </div>
                @endif
            </article>
        <?php
            endwhile;
            wp_reset_query();
        ?>
            @if(!$articles->post_count)
                @include('partials/no-posts-result')
            @endif
        {{--TODO: How do we pass variables to partials?--}}
        <?php $pagination = Helper::pagination($articles, '/news-and-events'); ?>
        @include('partials/pagination')
        </div>
    </div>
</main>
<?php endwhile; ?>

@endsection