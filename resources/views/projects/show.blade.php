<x-layouts.app>

    <div class="grid grid-cols-3 gap-6">
        {{-- $project Equivale a :project="$project" (pois tem o mesmo nome da variável) --}}
        <livewire:projects.show :$project />
        <livewire:projects.proposals :$project />
    </div>
</x-layouts.app>