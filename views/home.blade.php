@layout('layouts/master')
<?php /* Template Name: Home */ ?>
@section('content')
    <?php while ( have_posts() ) : the_post(); ?>

    @if(!empty(get_field('cover_slide_repeater')))
    <div class="hero-home">
        <div class="carousel hero-carousel">
            @foreach(get_field('cover_slide_repeater') as $key => $slide)
                <div class="visual visual--bg{{$key+1}}">

                    <style>

                        .visual--bg{{ $key+1 }} .visual-img:before {
                            background: url("{{ $slide['arrow'] }}") no-repeat 50% 50% / contain;
                            opacity: {{ $slide['arrow_opacity'] / 100 }};
                        }

                    </style>
                    <div class="visual-img">
                        <div class="mobile-only">
                            {{ Helper::image($slide['image'], 'full') }}
                        </div>
                        <div class="mobile-hidden">
                            <video class="hero-video" loop>
                                <source type="video/mp4" src="{{ $slide['video'] }}"/>
                            </video>
                        </div>
                    </div>
                    <div class="visual-body">
                        <h1><span>{{ $slide['title'] }}</span> <span class="subtitle">{{ $slide['sub_title'] }}</span></h1>

                        <p>{{ $slide['description'] }}</p>
                        <a href="{{ $slide['cta_button_url'] }}"
                           class="btn btn-green">{{ $slide['cta_button_text'] }}</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="anchor-wrap">
            <a href="#main" class="smooth-anchor">
                <img src="{{ asset('images/arrow.svg') }}" alt="arrow down">
            </a>
        </div>
    </div>
    @endif

    <main class="pusher" id="main">
        <div class="market-leaders">
            <div class="container">
                <h3>{{ get_field('market_leaders_header') }}</h3>
                <nav>
                    @if(!empty(get_field('market_leaders')))
                        <ul class="list-divider">
                            @foreach(get_field('market_leaders') as $leader)
                                <li>{{ $leader['name'] }}</li>
                            @endforeach
                        </ul>
                    @endif
                </nav>
            </div>
        </div>
        <section class="section-why">
            <div class="container">
                <header class="heading">
                    <h1>{{ get_field('gp_header') }}</h1>

                    <h2 class="h3">{{ get_field('gp_subheader') }}</h2>

                    <div>{{ get_field('gp_intro') }}</div>
                </header>
                @if(!empty(get_field('section_1_key_point_repeater')))
                    <ul class="list-col media_ico_list">
                        @foreach(get_field('section_1_key_point_repeater') as $point)
                            <li>
                                <div class="media-img">
                                    {{ Helper::image($point['key_point_icon'], 'full', array('width' => $point['key_point_icon_width'])) }}
                                </div>
                                <div class="media-body">
                                    <h3>{{ $point['key_point_title'] }}</h3>
                                    {{ $point['key_point_paragraph_copy'] }}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </section>
        <section class="section-outcomes">
            <div class="container">
                <h1>{{ get_field('section_2_header') }}</h1>
                <?php $services = get_field('section_2_cta_repeater'); ?>
                @include('partials/services')
            </div>
        </section>
        <section class="section-problems">
            <div class="container">
                <div class="col">
                    <h1>{{ get_field('section_3_header') }}</h1>

                    <h3>{{ get_field('section_3_subheader') }}</h3>

                    <div>{{ get_field('section_3_paragraph_copy') }}</div>
                    <div class="btn-wrap">
                        <a href="{{ get_field('section_3_cta_button_url') }}"
                           class="btn btn-blue">{{ get_field('section_3_cta_button_text') }}</a>
                    </div>
                </div>
                @if(!empty(get_field('section_3_solutions_repeater')))
                    <div class="col">
                        @foreach(get_field('section_3_solutions_repeater') as $key => $solution)
                            <div class="media_card media--bg{{$key+1}}">
                                <div class="media-img bg-cover">
                                    {{ Helper::image($solution['solution_image'], 'full') }}
                                </div>
                                <div class="media-desc">
                                    <h4>{{ $solution['solution_title'] }}</h4>

                                    <p>{{ $solution['solution_paragraph_copy'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
        <section class="section-company">
            <div class="container">
                <h1>{{ get_field('section_4_header') }}</h1>

                <div>{{ get_field('section_4_paragraph_copy') }}</div>
                @if(!empty(get_field('section_4_company_logo_repeater')))
                    <ul class="list-logo">
                        @foreach(get_field('section_4_company_logo_repeater') as $key => $logo)
                            <li>
                                <a href="{{ $logo['company_url'] }}">
                                    {{ Helper::image($logo['company_logo'], 'logo', array('width' => $logo['logo_width'])) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </section>
       <?php
        $featured_resources = get_field('featured_resources');
            $fr_IDs = array();
            foreach($featured_resources as $fr){
                $fr_IDs[] = $fr->ID;
            }
        $count = 0;
        $fr_colors = array('green', 'orange', 'blue', 'red');

        $options = array(
                'post_type' => 'resource',
                'orderby' => 'rand',
                'post__in' => $fr_IDs

        );
        $featured_resources = new WP_Query( $options );
        ?>


        @if(sizeof($featured_resources) > 0)
            <section class="section-resources">
                <div class="container">
                    <h1>{{ get_field('section_5_header') }}</h1>
                    <ul class="list-card">
                        <?php
                        while( $featured_resources->have_posts() ) : $featured_resources->the_post();
                        ?>
                            <?php
                            $link = get_field('resource_cta_button_url');
                            $target = get_field('new_tab') ? '_blank': '_self';
                        ?>
                            <li>
                                <?php //TODO: Isolate this code in a partial to be reused. Similar code is in case-studies ?>
                                <div class="card card--{{$fr_colors[$count]}}">
                                    <div class="card-img"><a
                                                href="{{$link}}"
                                                target="{{ $target }}">
                                                <div class="img" style="background-image: url('{{ Helper::imageURL(get_field('resource_image'), 'full') }}')"></div>
                                            </a>
                                    </div>
                                    <div class="card-body">
                                         <span class="card-subtitle">
                                                @foreach(wp_get_post_terms(get_the_ID(), 'resource_categories') as $term)
                                                                     {{ $term->name }} &nbsp;
                                                                 @endforeach
                                            </span>

                                        <h3>
                                            <a href="{{$link}}"
                                               target="{{ $target }}">{{get_the_title()}}</a></h3>
                                        <a href="{{$link}}"
                                           target="{{ $target }}"
                                           class="card-link">Read More</a>
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
                    <div class="text-center">
                        <a href="{{ get_field('section_5_cta_button_url') }}"
                           class="btn btn-blue">{{ get_field('section_5_cta_button_text') }}</a>
                    </div>
                </div>
            </section>
        @endif

        @include('partials/roadmap-footer')

    </main>
    <?php endwhile; ?>

@endsection