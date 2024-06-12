<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserListComponent extends Component
{
    public $users;
    protected $listeners = ['userUpdated' => 'fetchUsers'];

    public function mount()
    {
        $this->fetchUsers();
    }

    public function fetchUsers()
    {
        $this->users = User::all();
    }

    public function editUser($id)
    {
        $this->emit('userSelected', User::findOrFail($id));
    }

    public function toggleUserState($id)
    {
        $user = User::findOrFail($id);
        $user->state = $user->state ? 0 : 1; // Cambia el estado: 0 -> activo, 1 -> desactivado
        $user->save();
        
        $this->fetchUsers(); // Actualiza la lista de usuarios
    }
    
    public function render()
    {
        $users = $this->users;
        return view('livewire.user.user-list-component',compact('users'));
    }
}
