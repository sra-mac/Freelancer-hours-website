<div>
    {{-- In work, do what you enjoy. --}}
    <input wire:model.live="search" />
    <br>
    <br>
    <ul>
        @foreach($users as $user)
        <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
