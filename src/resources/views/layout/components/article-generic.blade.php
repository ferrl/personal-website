@php
/**
 * @var App\Work|App\Project $resource
 */
@endphp
<article class="article">
    <header class="article__header">
        <h3 class="article__title">{{ $resource->title }}</h3>
        <div class="article__meta">
            <time datetime="{{ $resource->begin->format('Y-m-d') }}">
                {{ $resource->begin->formatLocalized('%b %Y') }}
            </time>
            –
            @if (is_null($resource->end))
                {{ trans('pages.default.show.terms.present') }}
            @else
                <time datetime="{{ $resource->end->format('Y-m-d') }}">
                    {{ $resource->end->formatLocalized('%b %Y') }}
                </time>
            @endif
        </div>
    </header>
    {!! $resource->content !!}
</article>
