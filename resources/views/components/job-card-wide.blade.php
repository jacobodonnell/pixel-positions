@props(['job'])

<x-panel class="flex gap-6">
    <div>
        <x-employer-logo :employer="$job->employer" :width="100"/>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>

        <h3 class="group-hover:text-blue-800 transition-all duration-300 text-xl font-bold mt-2">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-gray-400 text-sm mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p>

    </div>

    <div>
        @foreach($job->tags as $tag)
            <x-tag :$tag/>
        @endforeach
    </div>
</x-panel>
