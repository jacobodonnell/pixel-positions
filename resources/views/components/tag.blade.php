@props(['tag', 'size' => 'base'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300';
    if ($size === 'base') {
        $classes .= ' px-5 py-0.5 text-sm';
    } elseif ($size === 'small') {
        $classes .= ' px-3 py-0.5 text-2xs';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }} inline-block">{{ $tag->name }}</a>
