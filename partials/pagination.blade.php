<ul class="pagination">
    @for($i = 1; $i<= $pagination->total_pages; $i++)
        <li class="{{($i === $pagination->current_page) ? 'active' : ''}}">
            <a href="{{$pagination->base_url.'/'.$i}}">{{$i}}</a>
        </li>
    @endfor
</ul>