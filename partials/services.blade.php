
@if(!empty($services))
<div class="grid">
    @foreach($services as $service)
    <div class="col-md-4">
        <article class="thumbnail thumbnail--{{$service['service_color']}}">
            <a href="{{ $service['service_cta_button_url'] }}"><h2 class="thumbnail-title">{{ $service['service_header'] }}</h2></a>
            <div style="height: 250px" class="bg-cover">
                <a href="{{ $service['service_cta_button_url'] }}">
                {{ Helper::image($service['service_image'], 'featured-size') }}
                </a>
            </div>
            <div class="thumbnail-body">
                <h3>{{ $service['service_subheader'] }}</h3>
                <p>{{ $service['service_paragraph_copy'] }}</p>
                <a href="{{ $service['service_cta_button_url'] }}" class="btn"><span>{{ $service['service_cta_button_text'] }}</span></a>
            </div>
        </article>
    </div>
    @endforeach
</div>
@endif
