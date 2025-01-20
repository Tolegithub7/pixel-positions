@props(['employer', 'width'=> 100])
<img src="http://picsum.photos/seed/{{ rand(1,100) }}/{{ $width }}" alt="Placeholder" class="rounded-xl">
{{-- <img src="{{ asset($employer->logo) }}" alt="" width="{{$width}}" class="rounded-xl"> --}}