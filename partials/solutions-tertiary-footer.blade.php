<div class="teaser-wrap">
    <div class="teaser_1">
        <div class="container">
            <?php $img = wp_get_attachment_image_src(get_field('section_4_image'), 'full'); ?>
            <div class="teaser-img" style="background-image: url('{{ $img[0] }}');"></div>
            <div class="teaser-body">
                <h2 class="h1">{{ get_field('section_4_header_1') }}</h2>
                {{ get_field('section_4_paragraph_copy_1') }}
            </div>
        </div>
    </div>
    <div class="container">
        <div class="two-col">
            <div class="col">
                <h2 class="h1">{{ get_field('section_4_header_2') }}</h2>
                {{ get_field('section_4_paragraph_copy_2') }}
            </div>

            
            <div class="col">
                <h3>{{ get_field('section_4_subheader') ? get_field('section_4_subheader') : 'Your success is our success. That’s the GrowthPlay way.' }}</h3>
                @if( get_field('section_4_cta_button_url') != "" && get_field('section_4_cta_button_text') != "" )
                <a href="{{ get_field('section_4_cta_button_url') }}" class="btn btn-blue">{{ get_field('section_4_cta_button_text') }}</a>
                @endif
            </div>
        </div>
        @if( get_field('section_4_back_cta_button_url') != "" && get_field('section_4_back_cta_button_text') != "" )
        <div class="text-right hidden-mobile">
            <a href="{{ get_field('section_4_back_cta_button_url') }}" class="link">{{ get_field('section_4_back_cta_button_text') }}</a>
        </div>
        @endif
    </div>
</div>