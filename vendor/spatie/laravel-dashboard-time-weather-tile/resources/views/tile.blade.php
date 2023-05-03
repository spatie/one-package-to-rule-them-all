<x-dashboard-tile :position="$position">
    <div
        class="grid gap-2 justify-items-center h-full text-center"
        style="grid-template-rows: auto 1fr auto;"
        x-data="clock()"
        x-init="tick"
    >
        <h1 class="font-medium text-dimmed text-sm uppercase tracking-wide tabular-nums" x-text="date"></h1>

        <div class="self-center font-bold text-4xl tracking-wide leading-none" x-text="time"></div>

        <div wire:poll.600s class="uppercase">
            <div class="flex w-full justify-center space-x-4 items-center">
                <span> {{ $outsideTemperature }}°{{ $unit == 'metric' ? 'C': 'F'}}  <span class="text-sm uppercase text-dimmed">out</span></span>
                <span class="text-2xl">{{ $emoji }}</span>
                @isset($insideTemperature)
                    <span> {{ $insideTemperature }}°{{ $unit == 'metric' ? 'C': 'F'}}  <span class="text-sm uppercase text-dimmed">in</span></span>
                @endisset
            </div>
            <div class="text-xs">{{ $city }}, {{ $countryCode }}</div>
        </div>

        <div
            wire:poll.60s
            class="absolute bottom-0 left-0 h-full w-full grid items-end"
            style="
                grid-gap: 1px;
                grid-template-columns: repeat(12, 1fr);
                opacity: .15"
        >
            @foreach($forecasts as $forecast)
                <div
                    class="rounded-sm bg-accent"
                    style="height:{{ $forecast['rain'] * 100 }}%"
                ></div>
            @endforeach
        </div>
    </div>

    <script>
        function clock() {
            return {
                dateTime: new Date(),

                tick() {
                    setInterval(() => {
                        this.dateTime = new Date();
                    }, 1000);
                },

                get date() {
                    const day = this.dateTime
                        .toLocaleDateString('{{ app()->getLocale() }}', { weekday: 'long' })
                        .substr(0, 3);

                    const date = [
                        this.dateTime.getDate(),
                        this.dateTime.getMonth() + 1,
                    ].map(this.padNumber).join('/');

                    return `${day} ${date}`;
                },

                get time() {
                    return [
                        this.dateTime.getHours(),
                        this.dateTime.getMinutes(),
                    ].map(this.padNumber).join(':');
                },

                padNumber(number) {
                    return String(number).padStart(2, '0');
                }
            }
        }
    </script>

</x-dashboard-tile>
