<div content-end w-64>
    <h1>Lista de Usuarios</h1>

    <ul class="list-group">
        @foreach ($users as $user)
            <li class="list-group-item d-flex justify-content-between align-items-center my-4">
                <span>{{ $user->name }}</span>
                <div>
                    <a href="#" wire:click.prevent="editUser({{ $user->id }})" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="#" wire:click.prevent="toggleUserState({{ $user->id }})" class="btn btn-link">
                        @if ($user->state == 0)
                            <i class="fa fa-trash"></i>
                        @else
                            <i class="fa fa-undo"></i>
                        @endif
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
</div>
