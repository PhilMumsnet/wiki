<div>
    <h1>
        {{ Illuminate\Mail\Markdown::parse($page->title) }}
    </h1>

    {{ Illuminate\Mail\Markdown::parse($page->contents) }}
</div>
