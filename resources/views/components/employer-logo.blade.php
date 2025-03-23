@props(['width' => 90])
<img
    src="https://picsum.photos/seed/{{ random_int(0, 10000) }}/{{ $width }}"
    style="width: {{ $width }}px; height: {{ $width }}px"
    alt=""
    class="rounded-xl"
>
