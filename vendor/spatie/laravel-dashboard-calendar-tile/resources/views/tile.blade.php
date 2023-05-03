<x-dashboard-tile :position="$position" :refresh-interval="$refreshIntervalInSeconds">
    <div class="grid {{ isset($title) ? 'grid-rows-auto-auto gap-2' : '' }} h-full">
        @isset($title)
            <h1 class="uppercase font-bold">
                {{ $title }}
            </h1>
        @endisset

        <ul class="self-center divide-y-2 divide-canvas">
            @foreach($events as $event)
                <li class="py-1">
                    <div class="my-2">
                        <div class="{{ $event['withinWeek'] ? 'font-bold' : '' }}">{{ $event['name'] }}</div>
                        <div class="text-sm text-dimmed">
                            {{ $event['presentableDate'] }}
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-dashboard-tile>
