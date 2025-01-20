@props(['job'])

<x-panel class="flex gap-x-6 items-center">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
        <h3 class="font-bold text-xl mt-2 group-hover:text-blue-800 transition-colors duration-1000">
            <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a>
        </h3>
        <p class="text-sm text-gray-300 mt-5">{{ $job->salary }}</p>
    </div>
    <div class="flex items-center justify-between mt-auto gap-x-5">
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>