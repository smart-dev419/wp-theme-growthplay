@layout('layouts/master')
<?php /* Template Name: SalesGPA */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    @include('partials/page-header')
    <div class="article-assemble">
        <div class="container two-col">
            <div class="col">
                <h2 class="h1">{{ get_field('assemble_header') }}</h2>
            </div>
            <div class="col">
                {{ get_field('assemble_paragraph_copy') }}
            </div>
        </div>
    </div>

    <div class="article-tools bg-blue">
        <div class="container two-col">
            <div class="col">
                <h2>{{ get_field('tools_header') }}</h2>
                {{ get_field('tools_paragraph_copy') }}
            </div>
            <div class="col">
                <p>{{ get_field('tools_bullet_point_top_text') }}</p>
                @if(!empty(get_field('tools_bullet_points')))
                <ul class="list-dot">
                    @foreach(get_field('tools_bullet_points') as $point)
                    <li>{{ $point['bullet_point'] }}</li>
                    @endforeach
                </ul>
                @endif
                <p>{{ get_field('tools_bullet_point_bottom_text') }}</p>
            </div>
        </div>
        <a href="{{ get_field('tools_cta_button_url') }}" class="btn btn-green">{{ get_field('tools_cta_button_text') }}</a>
    </div>

    <div class="article_logo">
        <div class="container two-col">
            <div class="col">
            {{ Helper::image(get_field('section_1_image'), 'full', array('width' => get_field('section_1_image_width'))) }}
            </div>
            <div class="col">
                <h2>{{ get_field('section_1_header') }}</h2>
                {{ get_field('section_1_paragraph_copy') }}
            </div>
        </div>
    </div>

    <div class="article-problmes bg-gray">
        <div class="container two-col">
            <h2 class="h1">{{ get_field('problems_header') }}</h2>
            {{ get_field('problems_paragraph_copy') }}

            @if(!empty(get_field('problems_cta_buttons')))
            <ul class="btn-list">
                @foreach(get_field('problems_cta_buttons') as $cta)
                <li>
                    <a href="{{ $cta['button_url'] }}" class="btn btn-{{ $cta['button_color'] }}">
                        {{ $cta['button_label'] }}
                    </a>
                </li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>

    <div class="article_art">
        <div class="container two-col">
            <div class="col">
                <h1>{{ get_field('section_2_header') }}</h1>
                {{ get_field('section_2_paragraph_copy') }}
            </div>
            <div class="col">
                @if(!empty(get_field('section_2_key_point_repeater')))
                <ul class="list-ico">
                    @foreach(get_field('section_2_key_point_repeater') as $point)
                    <li>
                        <div class="ico">
                        {{ Helper::image($point['key_point_icon'], 'full', array('width' => $point['key_point_icon_width'])) }}
                        </div>
                        <div class="ico-desc">{{ $point['key_point_description'] }}</div>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
    <div class="article_discover">
        <div class="container">
            <div class="text-col">
                <div class="col">
                    <h1>{{ get_field('section_3_header') }}</h1>
                    {{ get_field('section_3_paragraph_copy') }}
                </div>
                <div class="col">
                {{ Helper::image(get_field('section_3_image'), 'full') }}
                </div>
            </div>
            @if(!empty(get_field('section_3_key_point_repeater')))
            <ul class="list-plus">
                @foreach(get_field('section_3_key_point_repeater') as $point)
                <li>
                    <div class="ico">
                    {{ Helper::image($point['key_point_icon'], 'full', array('width' => $point['key_point_icon_width'])) }}
                    </div>
                    <span>{{ $point['key_point_description'] }}</span>
                </li>
                @endforeach
            </ul>
            @endif
            <div class="promo-box">
                <h2>{{ get_field('section_4_header') }}</h2>
                @if(!empty(get_field('section_4_bullet_point_repeater')))
                <ul class="list-dot column-2">
                    @foreach(get_field('section_4_bullet_point_repeater') as $point)
                    <li>
                        <strong>{{ $point['bullet_point_header'] }}: </strong> {{ $point['bullet_point'] }}
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="two-col">
                <div class="col">
                    <h1>{{ get_field('section_5_header') }}</h1>
                    {{ get_field('section_5_paragraph_copy') }}
                </div>
                <div class="col">
                    @if(!empty(get_field('section_5_bullet_point_repeater')))
                    <ul class="list-dot">
                        @foreach(get_field('section_5_bullet_point_repeater') as $point)
                        <li>{{ $point['bullet_point'] }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
            <h2 class="h1-sm text-center">{{ get_field('section_5_footer') }}</h2>
        </div>
    </div>
</main>
<?php endwhile; ?>

@endsection