@props(['employer', 'width' => 90])

<img
    src="{{ asset($employer->logo) }}"
    style="width: {{ $width }}px; height: {{ $width }}px"
    alt=""
    class="rounded-xl"
>
