@layout('layouts/master')
<?php /* Template Name: Solutions Page Template */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    @include('partials/page-header')
    <section class="section-solution">
        <div class="container">
            @include('partials/solutions-main')
            <hr>
            <div class="text-col text-col--1">
                <div class="col">
                    <h1>{{ get_field('section_2_header') }}</h1>
                </div>
                <div class="col">
                    {{ get_field('section_2_paragraph_copy') }}
                </div>
            </div>

            @if(!empty(get_field('section_2_process_step_repeater')))
            <ul class="list-steps">
                @foreach(get_field('section_2_process_step_repeater') as $key => $process)
                <li>
                    <div class="ico_step ico--blue{{$key+1}}">
                        <div class="ico-img">
                            <i class="icon-{{ $process['step_icon_select'] }}"></i>
                        </div>
                        <div class="ico-cap">{{ $process['step_title'] }}</div>
                    </div>
                </li>
                @endforeach
            </ul>
            @endif

            @if(!empty(get_field('section_2_process_step_repeater')))
            <ul class="list-defination">
                @foreach(get_field('section_2_process_step_repeater') as $key => $process)
                <li class="blue{{$key+1}}">
                    <h3>{{ $process['step_title'] }}</h3>
                    {{ $process['step_description'] }}
                    @if($key == count(get_field('section_2_process_step_repeater'))-1)
                    <a class="btn btn-blue"
                       target="{{ get_field('new_tab_open') ? '_blank': '_self' }}"
                       href="{{ get_field('section_2_cta_button_url') }}">{{ get_field('section_2_cta_button_text') }}</a>
                    @endif
                </li>
                @endforeach
            </ul>
            @endif
        </div>
    </section>
    <div class="promo">
        <div class="container-flex">
            <div class="col-lg-6">
                <h2 class="h1-sm">{{ get_field('footer_header') }}</h2>
            </div>
            <div class="col-lg-6">
                {{ get_field('footer_paragraph_copy') }}
                @if(!empty(get_field('footer_cta_button_repeater')))
                <div class="btns">
                    @foreach(get_field('footer_cta_button_repeater') as $cat)
                    <a href="{{ $cat['cta_button_url'] }}" target="{{ get_field('new_tab') ? '_blank': '_self' }}" class="btn btn-green">{{ $cat['cta_button_text'] }}</a>
                    @endforeach
                </div>
                @endif
            </div>
            <span class="copyright">{{ get_field('copyright', 'option') }}</span>
        </div>
    </div>
</main>
<?php endwhile; ?>

@endsection