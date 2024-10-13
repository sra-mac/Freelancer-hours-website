<x-layouts.app>
    {{-- $project Equivale a :project="$project" (pois tem o mesmo nome da variável) --}}
    <livewire:projects.show :$project />
    <livewire:projects.proposals :$project />
</x-layouts.app>