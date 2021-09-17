{{-- <div class="product_pagination">
    <ul>
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled">{{ $element }}</li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active">{{ $page }}.</li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}.</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach --}}

        {{-- <li><a href="#">02.</a></li>
        <li><a href="#">03.</a></li> --}}
    {{-- </ul>
</div> --}}

<div class="home_slider_dots_container">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_slider_dots">
                    <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                        {{-- <li class="home_slider_custom_dot active">01.</li>
                        <li class="home_slider_custom_dot">02.</li>
                        <li class="home_slider_custom_dot">03.</li> --}}
                        @foreach ($elements as $element)
                            @if (is_string($element))
                                <li class="disabled">{{ $element }}</li>
                            @endif
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li class="home_slider_custom_dot active">{{ $page }}.</li>
                                    @else
                                        <li class="home_slider_custom_dot"><a href="{{ $url }}">{{ $page }}.</a></li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>	
</div>