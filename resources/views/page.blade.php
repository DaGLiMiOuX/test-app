<x-layout>
    @if ($page)
        <pre class="dark:text-white text-black max-w-full">{!! $page->toJson(JSON_PRETTY_PRINT) !!}</pre>
    @else
        <div>
            No page model
        </div>
    @endif
</x-layout>