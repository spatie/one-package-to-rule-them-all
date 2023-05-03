<x-dashboard-tile :position="$position" :refresh-interval="$refreshIntervalInSeconds">
    <div class="grid grid-rows-auto-1 gap-4">
        @isset($title)
            <h1 class="uppercase font-bold">
                {{ $title }}
            </h1>
        @endisset
        <ul class="divide-y-2 -my-2">
            @foreach($tweets as $tweet)
                <li class="overflow-hidden py-4">
                    <div class="grid gap-2">
                        <div class="grid grid-cols-auto-1 gap-2 items-center">
                            <div class="overflow-hidden w-8 h-8 rounded-full relative">
                                <img
                                    src="{{ $tweet->authorAvatar() }}"
                                    class="block w-8 h-8 object-cover filter-gray"
                                    style="filter: contrast(75%) grayscale(1) brightness(150%)"
                                />
                                <div class="absolute inset-0 bg-accent opacity-25"></div>
                            </div>
                            <div class="leading-tight min-w-0">
                                <h2 class="truncate text-sm font-bold">{{ $tweet->authorName() }}</h2>
                                <div class="truncate text-xs text-dimmed">
                                    {{ $tweet->authorScreenName() }}

                                    @if ($tweet->date())
                                        – {{ $tweet->date()->diffForHumans() }}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="text-xs">
                            <div>{!! $tweet->html() !!}</div>
                            @if ($tweet->hasQuote())
                                <div class="mt-1 text-dimmed">
                                    <span> In reply to {{ $tweet->quote()->authorScreenName() }} </span>
                                </div>
                            @endif
                        </div>

                        @if($tweet->image())
                            <img alt="tweet image" class="max-h-48 mx-auto" style="objection-fit: cover;"
                                 src="{{ $tweet->image() }}"/>
                        @endif

                        @if ($tweet->hasQuote())
                            <div class="py-2 pl-2 text-xs text-dimmed border-l-2 border-screen">
                                {!! $tweet->quote()->html() !!}
                            </div>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-dashboard-tile>
