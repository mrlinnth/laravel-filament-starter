<x-filament::page>
    <div class="card w-96 shadow-xl p-4">
        <figure><img src="{{ $record->getFirstMediaUrl('hero') }}" alt="{{ $record->name }}" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">{{ $record->name }}</h2>
            <p>{{ $record->history }}</p>
            <div class="justify-end card-actions">
                @foreach ($record->traits as $trait)
                    <div class="badge badge-outline">{{ $trait }}</div>
                @endforeach
            </div>
        </div>
    </div>
</x-filament::page>
