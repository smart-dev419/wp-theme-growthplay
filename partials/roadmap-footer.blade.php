<section class="section-roadmap">

    <div class="container">

        <h1>{{ get_field('footer_title', 'option') }}</h1>

        <div class="grid">

            <div class="col-md-5 col-md-offset-1 pull-right">
                {{ Helper::image(get_field('footer_image', 'option'), 'full', array('width' => '368', 'class' => 'hidden-mobile')) }}
                {{ Helper::image(get_field('footer_mobile_image', 'option'), 'full', array('width' => '198', 'class' => 'visible-mobile')) }}
            </div>

            <div class="col-md-6">
                @if(!empty(get_field('footer_values_repeater', 'option')))
                <ul class="list-tick">
                    @foreach(get_field('footer_values_repeater', 'option') as $value)
                    <li><strong class="text-green">{{ $value['value_title'] }} </strong>{{ $value['value_paragraph'] }}</li>
                    @endforeach
                </ul>
                @endif

            </div>

        </div>

        <div class="grid">

            <div class="col-md-6">

                <a href="{{ get_field('footer_cta_button_url', 'option') }}" class="btn btn-green">{{ get_field('footer_cta_button_text', 'option') }}</a>

            </div>

        </div>

    </div>

</section>