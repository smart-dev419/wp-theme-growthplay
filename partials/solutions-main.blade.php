<header class="heading">
    <h1>{{ get_field('section_1_header') }}</h1>
    {{ get_field('section_1_paragraph_copy') }}
</header>
@if(!empty(get_field('section_1_tertiary_page_column_repeater')))
<div class="methods">
    @foreach(get_field('section_1_tertiary_page_column_repeater') as $key => $tertiary)
    <div class="col blue0{{$key+1}}">
        @if(!empty($tertiary['tertiary_page_tile_row_repeater']))
            @foreach($tertiary['tertiary_page_tile_row_repeater'] as $tile)
            <div class="box popup-holder">
                <a href="{{ $tile['collapsed_view_tertiary_page_learn_more_url'] }}" data-hash="{{ sanitize_title( $tile['tertiary_page_title'] ) }}" class="inner opener">
                    <div class="txt">
                        <h3>{{ $tile['tertiary_page_title'] }}</h3>
                        <p>{{ $tile['collapsed_view_tertiary_page_subheader'] }}</p>
                    </div>
                    <span class="link">{{ _e( 'Learn More' ) }}</span>
                </a>
                <div class="popup">
                    <div class="popup-heading">
                        <a href="#" class="close"><i class="icon-cross"></i></a>
                        <h3>{{ $tile['tertiary_page_title'] }}</h3>
                    </div>
                    <div class="popup-body flex">
                        <div class="col">
                            <h3>{{ $tile['expanded_view_column_1_header'] }}</h3>
                            {{ $tile['expanded_view_column_1_paragraph_copy'] }}
                        </div>
                        <div class="col">
                            <h3>{{ $tile['expanded_view_column_2_header'] }}</h3>
                            @if(!empty($tile['expanded_view_column_2_bullet_point_repeater']))
                            <ul class="list-dot">
                                @foreach($tile['expanded_view_column_2_bullet_point_repeater'] as $point)
                                <li>{{ $point['bullet_point'] }}</li>
                                @endforeach
                            </ul>
                             @endif
                        </div>
                        <div class="col">
                            @if(!empty($tile['expanded_view_column_3_cta_button_repeater']))
                                @foreach($tile['expanded_view_column_3_cta_button_repeater'] as $cta)
                                    <a href="{{ $cta['cta_button_url'] }}" class="btn btn-{{ $cta['cta_button_color'] }}">{{ $cta['cta_button_text'] }}</a>
                                @endforeach
                            @endif
                            <?php
                                    $no_padding = $tile['expanded_view_column_3_square_cta_padding'] == 'off';
                                ?>
                            <a class="logo-blue {{ $no_padding ? 'no-padding' : null }}" href="{{ $tile['expanded_view_column_3_case_study_cta_url'] }}" target="{{ $tile['new_tab'] ? '_blank':'_self' }}">
                                {{ Helper::image($tile['expanded_view_column_3_case_study_cta_logo'], ($no_padding?  'square-306': 'logo')) }}
                                <span class="link {{ $tile['expanded_view_column_3_case_study_cta_button_text_color'] == 'text-white' ? 'has-blue-bg': null }} {{ $tile['expanded_view_column_3_case_study_cta_button_text_color'] }}">{{ $tile['expanded_view_column_3_case_study_cta_btn_txt'] ? $tile['expanded_view_column_3_case_study_cta_btn_txt'] : _e( 'View Case Study' ) }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
    @endforeach
</div>
@endif

<div class="intro">
    <h2 class="h1-sm">{{ get_field('section_1_subheader') }}</h2>
    {{ get_field('section_1_subheader_paragraph_copy') }}
    <a href="{{ get_field('section_1_cta_button_url') }}"
       target="{{ get_field('new_tab') ? '_blank': '_self' }}"
       class="btn btn-green">{{ get_field('section_1_cta_button_text') }}</a>
</div>
