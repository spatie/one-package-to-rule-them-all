<x-dashboard-tile :position="$position" :refresh-interval="$refreshIntervalInSeconds">
    <div class="grid grid-rows-auto-1 gap-2 h-full">
        <div
            class="flex items-center justify-center w-10 h-10 rounded-full"
            style="background-color: rgba(255, 255, 255, .9)"
        >
            <div class="text-3xl leading-none -mt-1">
                🚲
            </div>
        </div>
        <ul class="self-center | divide-y-2">
            @foreach($stations as $station)
                <li class="grid grid-cols-1-auto py-1">
                    <span class="truncate {{ $station->displayClass() }}">
                        {{ $station->shortName() }}
                    </span>
                    <span>
                        <span class="
                            font-bold tabular-nums
                            {{ $station->isNearlyEmpty() ? $station->displayClass() : '' }}
                        ">
                            {{ $station->numberOfBikesAvailable() }}
                        </span>
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
</x-dashboard-tile>
