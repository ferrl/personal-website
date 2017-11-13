@php
/**
 * @var App\Project $resource
 */
@endphp
<article class="article" itemscope itemtype="http://schema.org/CreativeWork">
    <header class="article__header">
        <h3 class="article__title">
            <span itemprop="name">{{ $resource->title }}</span>
        </h3>
        <div class="article__meta">
            <meta itemprop="dateCreated" content="{{ $resource->begin->format('Y-m-d') }}">
            <time datetime="{{ $resource->begin->format('Y-m-d') }}">
                {{ $resource->begin->formatLocalized('%b %Y') }}
            </time>
            –
            @if (is_null($resource->end))
                {{ trans('pages.default.show.terms.present') }}
            @else
                <meta itemprop="datePublished" content="{{ $resource->end->format('Y-m-d') }}">
                <time datetime="{{ $resource->end->format('Y-m-d') }}">
                    {{ $resource->end->formatLocalized('%b %Y') }}
                </time>
            @endif
        </div>
    </header>
    <div class="article__header" itemprop="description">
        {!! $resource->content !!}
    </div>
</article>
