@layout('layouts/master')
<?php /* Template Name: Partner Select Program Partners Page */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    <header class="page-title">
        <div class="container">
            <h1>{{ get_field('partner_page_heading') }}</h1>
        </div>
    </header>
    <section class="partner-page-container">
        <div class="container current-partners">
            @if(get_field('partner_page_repeater'))
                @foreach(get_field('partner_page_repeater') as $field)
                    <section>
                        <h2>{{ $field['partner_page_group_heading'] }}</h2>
                        <ul class="list-col">
                            <?php
                                $options = array(
                                        'post_type' => 'partner',
                                        'orderby' => 'post__in',
                                        'posts_per_page' => -1,
                                        'post__in' => $field['featured_logos'],
                                );
                                $people = new WP_Query( $options );
                                while( $people->have_posts() ) : $people->the_post();
                            ?>
                                <li>
                                    <div class="box-logo">
                                    {{ Helper::image(get_field('partner_logo'), 'logo' ) }}
                                    </div>
                                </li>
                            <?php
                            endwhile;
                            wp_reset_query();
                            ?>
                        </ul>
                    </section>
                @endforeach
            @endif
        </div>
    </section>

</main>
<?php endwhile; ?>
@endsection