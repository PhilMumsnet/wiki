<div>
    @foreach ($pages as $page)
        <div>
            <a href="{{ route('pages.page.show', ['page' => $page]) }}">{{ $page->title }}</a>
        </div>
    @endforeach
</div>
