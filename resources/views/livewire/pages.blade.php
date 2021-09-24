<div>
    @foreach ($pages as $page)
        <div>
            <a href="{{ route('page', ['page' => $page]) }}">{{ $page->title }}</a>
        </div>
    @endforeach
</div>
