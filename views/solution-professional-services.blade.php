@layout('layouts/master')
<?php /* Template Name: Solution Professional Services */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    @include('partials/page-header')
    <section class="section-solution">
        <div class="container">
            @include('partials/solutions-main')
            <hr>
            <div class="text-col text-col--1 revenue-frame">
                <div class="col">
                    <h1>{{ get_field('section_2_header') }}</h1>
                    {{ get_field('section_2_paragraph_copy') }}
                    <a class="btn btn-blue" href="{{ get_field('section_2_cta_button_url') }}">{{ get_field('section_2_cta_button_text') }}</a>
                </div>
                <div class="col">
                    <div class="circle-step">
                        {{ Helper::image(get_field('section_2_image'), 'full', array('width' => get_field('section_2_image_width'), 'width' => get_field('section_2_image_height'))) }}
                        <span class="txt">{{ get_field('section_2_image_header') }}</span>
                    </div>
                </div>
            </div>
            @if(!empty(get_field('section_2_process_step_repeater')))
            <ul class="list-defination">
                @foreach(get_field('section_2_process_step_repeater') as $key => $process)
                <li class="blue{{$key+1}}">
                    <h3>{{ $process['step_title'] }}</h3>
                    {{ $process['step_description'] }}
                </li>
                @endforeach
            </ul>
            @endif
        </div>
    </section>
</main>

<?php endwhile; ?>

@endsection