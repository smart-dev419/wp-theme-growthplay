@layout('layouts/master')
<?php /* Template Name: Careers */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    @include('partials/page-header')
    <div class="container pt-82">
        <div class="text-col our-values">
            <div class="text-center header">
                <h1>{{ get_field('section_1_header') }}</h1>
            </div>
            <div class="text-center content">
                <p>{{ get_field('section_1_paragraph_copy') }}</p>
                    <?php
                        $main_values = get_field('main_values');
                    ?>
                    @if($main_values && sizeof($main_values) > 0)
                        <div class="list">
                            <ul class="clearfix">
                                @foreach($main_values as $value)
                                    <li>{{$value['main_value']}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

            </div>
        </div>
        <div class="growth-play">
            <h1 class="text-center">{{ get_field('section_2_header') }}</h1>

            @if(get_field('section_2_below_header'))
            <div class="text-center">
                {{ get_field('section_2_below_header') }}
            </div>
            @endif

            @if(!empty(get_field('section_2_image_tile_repeater')))
            <ul class="list-col list-box_img">
            @foreach(get_field('section_2_image_tile_repeater') as $key => $tile)
                <li>
                    <div class="box_img" style="background-image: url('{{ $tile['image'] }}');">
                        <div class="inner">
                            <h3>{{ $tile['title'] }}</h3>
                            <p>{{ $tile['description'] }}</p>
                        </div>
                    </div>
                </li>
               @endforeach
            </ul>
            @endif
        </div>
    </div>
    <div class="section-perks">
        <div class="container">
            <header class="heading">
                <h2 class="h1">{{ get_field('section_3_header') }}</h2>
                <p>{{ get_field('section_3_paragraph_copy') }}</p>
            </header>
            @if(!empty(get_field('section_3_perk_repeater')))
            <ul class="list-col">
                @foreach(get_field('section_3_perk_repeater') as $key => $perk)
                <li>
                    <div class="ico">
                        <div class="ico-img">
                            {{ Helper::image($perk['perk_icon'], 'full', array('width' => $perk['icon_width'])) }}
                        </div>
                        <span class="ico-caption">{{ $perk['perk_description'] }}</span>
                    </div>
                </li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
    <div class="jumbotron">
        <div class="container">
            <h2 class="h1">{{ get_field('section_4_header') }}</h2>
            <div>{{ get_field('section_4_paragraph_copy') }}</div>
            <a href="{{ get_field('section_4_cta_button_url') }}" class="btn btn-green">{{ get_field('section_4_cta_button_text') }}</a>
        </div>
    </div>
</main>
<?php endwhile; ?>

@endsection