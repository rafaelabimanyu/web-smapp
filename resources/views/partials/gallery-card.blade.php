@if($item->video_url)
    @php
        preg_match("/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/))([\w\-]+)/",
            $item->video_url, $m);
    @endphp
    @if(isset($m[1]))
        <iframe
            class="w-full aspect-video"
            src="https://www.youtube.com/embed/{{ $m[1] }}"
            allowfullscreen
            loading="lazy">
        </iframe>
    @endif
@else
    <img
        src="{{ $item->thumbnail_url }}"
        class="w-full aspect-video object-cover">
@endif

<div class="p-4 text-center">
    <h3 class="text-sm font-semibold line-clamp-2">
        {{ $item->title }}
    </h3>
    <p class="text-xs text-purple-600 mt-1">
        {{ $item->category }}
    </p>
</div>
