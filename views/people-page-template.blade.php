@layout('layouts/master')
<?php /* Template Name: People Page Template */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    @include('partials/page-header')
    <section class="section-content">
        <div class="container">
            <header class="heading">
                <h1>{{ get_field('page_title') }}</h1>
                <h2>{{ get_field('page_subheader') }}</h2>
               <div>{{ get_field('page_paragraph_copy') }}</div>
            </header>
            <ul class="list-col list-member list-board">
            <?php
                $options = array(
                    'post_type' => 'person',
                    'orderby' => 'post__in',
                    'posts_per_page' => -1,
                    'post__in' => get_field('people_post_relationship'),
                );
                $people = new WP_Query( $options );
                while( $people->have_posts() ) : $people->the_post();
            ?>
                <li>
                    <figure class="avatar">
                        <a href="{{ get_permalink() }}" class="avatar-img">
                            {{ Helper::image(get_field('image'), 'person') }}
                            <span class="avatar-overlay">
                                <span>{{ get_field('first_name') }}{{ _e( '\'s Bio' ) }}</span>
                            </span>
                        </a>
                        <figcaption class="avatar-body">
                            <span class="avatar-name">{{ get_field('first_name') }} {{ get_field('last_name') }}</span>
                        </figcaption>
                    </figure>
                </li>
            <?php
                endwhile;
                wp_reset_query();
            ?>
            </ul>
        </div>
    </section>
</main>
<?php endwhile; ?>

@endsection