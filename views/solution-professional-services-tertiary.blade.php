@layout('layouts/master')
<?php /* Template Name: Solution Professional Services Tertiary */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    <header class="page-title border">
        <div class="container">
            <span class="page-subtitle">{{ get_field('page_sub_header') }}</span>
            <h1>{{ get_field('page_header') }}</h1>
        </div>
    </header>
    <div class="article article--lg">
        <div class="container">
            <div class="two-col">
                <div class="col">
                    <h2 class="h1">{{ get_field('section_1_header') }}</h2>
                    {{ get_field('section_1_paragraph_copy') }}
                </div>
                <div class="col col-right">
                    @include('partials/pack-box')

                    @if(get_field('section_1_bullet'))
                    <ul>
                        @foreach(get_field('section_1_bullet') as $bullet)
                        <li>{{ $bullet['text'] }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="col col-logo">
                    {{ Helper::image(get_field('section_1_image'), 'full') }}
                    <div class="logo">
                        {{ Helper::image(get_field('section_1_logo'), 'logo') }}
                    </div>
                    @if(get_field('section_1_cta_button_url'))
                    <a href="{{ get_field('section_1_cta_button_url') }}" class="btn btn-blue">{{ get_field('section_1_cta_button_text') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="article article--lg">
        <div class="container">
            <div class="two-col">
                <div class="col">
                    <h2 class="h1">{{ get_field('section_1_header') }}</h2>
                    <h3 class="h2">{{ get_field('section_1_sub_header') }}</h3>
                    {{ get_field('section_1_paragraph_copy') }}

                    @if(get_field('section_1_bullet'))
                    <ul>
                        @foreach(get_field('section_1_bullet') as $bullet)
                        <li>{{ $bullet['text'] }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="col">
                    <div class="six_pack-box add">
                        <span class="title">Laying the <br> <span>Foundation</span></span>
                        <ul class="box-list">
                            <li class="active"><a href="#">text</a></li>
                            <li><a href="#">text</a></li>
                            <li><a href="#">text</a></li>
                            <li><a href="#">text</a></li>
                        </ul>
                    </div>

                    <div class="card_case bg-cover">
                        {{ Helper::image(get_field('section_1_image'), 'full') }}
                        <div class="card-logo">
                            {{ Helper::image(get_field('section_1_logo'), 'full') }}
                        </div>
                        @if(get_field('section_1_cta_button_url'))
                            <a href="{{ get_field('section_1_cta_button_url') }}" class="btn btn-green">{{ get_field('section_1_cta_button_text') }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="jumbotron_1">
        <div class="container">
            <h2 class="h1">{{ get_field('section_2_header_1') }}</h2>
            {{ get_field('section_2_paragraph_copy') }}
        </div>
    </div>

    <!-- <div class="media_1">
        <div class="container">
            <div class="media-img" style="background-image: url('{{ get_field('section_2_image') }}');"></div>
            <div class="media-body">
                <h2>{{ get_field('section_2_header_1') }}</h2>
                <p>{{ get_field('section_2_sub_header') }}</p>
                @if(!empty(get_field('section_2_bullet_point_repeater')))
                <ul class="list-unstyled">
                    @foreach(get_field('section_2_bullet_point_repeater') as $point)
                    <li>{{ $point['bullet_point'] }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div> -->

    <div class="article article_outcomes">
        <div class="container">
            <div class="two-col">
                <div class="col">
                    <h2 class="h1">{{ get_field('section_3_header_1') }}</h2>
                </div>
                <div class="col">
                    {{ get_field('section_3_paragraph_copy_1') }}
                </div>
            </div>
            @if(!empty(get_field('case_studies')))
            <ul class="list-case">
                @foreach(get_field('case_studies') as $case_study)
                <li>
                    <div class="text">{{ $case_study['title'] }}</div>
                    <a href="{{ $case_study['cta_button_url'] }}" class="link">{{ $case_study['cta_button_text'] }}</a>
                </li>
                @endforeach
            </ul>
            @endif

            <div class="box-promo">
                <div class="box-green">
                    <h3>{{ get_field('section_3_header_2') }}</h3>
                    {{ get_field('section_3_paragraph_copy_2') }}
                </div>
                <div class="box-blue">
                    <h3>{{ get_field('section_3_header_2_copy') }}</h3>
                    {{ get_field('section_3_paragraph_copy_2_copy') }}
                </div>
                <div class="diamond"><span>{{ _e( 'or' ) }}</span></div>
            </div>
        </div>
    </div>
    
    @include('partials/solutions-tertiary-footer')
</main>

<?php endwhile; ?>

@endsection