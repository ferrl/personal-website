@php
/**
 * @var App\Work $work
 */
@endphp
<article class="article" id="work-3">
    <header class="article__header">
        <h3 class="article__title">{{ $work->title }}</h3>
        <div class="article__meta">
            <time datetime="{{ $work->begin->format('Y-m-d') }}">
                {{ $work->begin->formatLocalized('%b %Y') }}
            </time>
            –
            @if (is_null($work->end))
                {{ trans('resources.terms.present') }}
            @else
                <time datetime="{{ $work->end->format('Y-m-d') }}">
                    {{ $work->end->formatLocalized('%b %Y') }}
                </time>
            @endif
        </div>
    </header>
    {!! $work->content !!}
</article>
