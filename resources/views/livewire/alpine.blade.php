<div>
    <p>Count: {{$count}}</p>
    {{-- alpine -> --}}
    <div x-data="{count: @entangle('count')}">
        <p>Count dentro de alpine: <span x-text="count"></span></p>

        <button @click="count++">
            Aumentar
        </button>

    </div>

</div>
