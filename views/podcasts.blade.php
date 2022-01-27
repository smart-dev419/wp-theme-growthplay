@layout('layouts/master')
<?php /* Template Name: Podcasts */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    <header class="page-title has-overlay podcasts" style="background-image: url('{{asset('images/revolving_door.jpg')}}');">
        <div class="container">
            <h1>Podcasts</h1>
        </div>
    </header>

    <div class="container">
        <div class="filter add">
            <div>
                <a class='podcasts-itunes' href="https://itunes.apple.com/us/podcast/sales-executives-driving-sales/id991362894?" target="_blank" class="btn btn-green">
                    <img src="{{asset('images/iTunes.png')}}" alt=""/>
                </a>
            </div>
            <div>
                <?php  $all_cats = get_terms( 'podcast_categories', array('orderby' => 'term_id', 'hide_empty' => false) ); ?>
                @if(!empty($all_cats))
                <select class="cat-filter">
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
                <form action="{{ get_permalink() }}" class="search-form" method="get" role="search">
                    <a href="#" class="search-opener"><span>{{ _e( 'Search' ) }}</span><i class="icon-search"></i></a>
                    <div class="search-inner">
                        <div class="search-drop">
                            <input type="search" placeholder="Search" name="search_query" value="">
                            <button type="submit"><i class="icon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="blog-list">
            <?php
            $options = array(
                'post_type' => 'podcast',
                'orderby'          => 'date',
                'order'            => 'DESC',
                'post_status' => 'publish'
            );

            Helper::pagination_options($options);

            if (isset($_GET['search_query'])) {
                $options['s'] = $_GET['search_query'];
            }            
            if (isset($_GET['category'])) {
                $options['tax_query'] = array(
                                array(
                                    'taxonomy' => 'podcast_categories',
                                    'terms' => $_GET['category'],
                                    'field' => 'term_id'
                                )
                            );
            }
            $podcasts = new WP_Query( $options );
            while( $podcasts->have_posts() ) : $podcasts->the_post();
            ?>
            <article class="blog">
                <div class="blog-row">
                    <div class="blog-left">
                        <a href="{{ get_field('podcast_url') }}" class="blog-img">
                            {{ Helper::image(get_field('podcast_image'), 'full') }}
                        </a>
                    </div>
                    <div class="blog-body">
                        <header class="blog-heading">
                            <h2><a target="_blank" href="{{ get_field('podcast_url') }}">{{ get_field('podcast_title') }}</a></h2>
                        </header>
                        {{ get_field('podcast_description') }}
                    </div>
                </div>
                <div class="blog-row">
                    <div class="blog-left">
                        <ul class="social-links">
                            <li>Share:</li>
                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(get_permalink()) }}" class="share">
                                    <i class="icon-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(get_permalink()) }}&text={{ urlencode(get_the_title()) }}" class="share">
                                    <i class="icon-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(get_permalink()) }}" class="share">
                                    <i class="icon-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/share?url={{ urlencode(get_permalink()) }}" class="share">
                                    <i class="icon-google-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-body">
                        <ul class="blog-tag">
                            @foreach(wp_get_post_terms(get_the_ID(),'podcast_categories') as $term)
                            <li><span>{{ $term->name }}</span></li>
                            @endforeach
                        </ul>
                        <a target="_blank" href="{{ get_field('podcast_url') }}" class="link">Listen</a>
                    </div>
                </div>
            </article>
            <?php
                endwhile;
                wp_reset_query();
            ?>
                @if(!$podcasts->post_count)
                    @include('partials/no-posts-result')
                @endif
        </div>
        {{--TODO: How do we pass variables to partials?--}}
        <?php $pagination = Helper::pagination($podcasts, '/podcasts'); ?>
        @include('partials/pagination')
    </div>
</main>

<?php endwhile; ?>
@endsection