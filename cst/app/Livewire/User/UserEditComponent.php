<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class UserEditComponent extends Component
{
    public $userId;
    public $name;
    public $email;

    protected $listeners = ['userSelected' => 'loadUser'];

    public function loadUser($user)
    {
        $this->userId = $user['id'];
        $this->name = $user['name'];
        $this->email = $user['email'];
    }

    public function handleResponse($response){
        if ($response->successful()) {
            session()->flash('message', 'User updated successfully.');
            $this->emit('userUpdated'); 
        } else {
            session()->flash('error', 'Error updating user.');
        }
    }

    public function updateUser()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->userId,
        ]);

        $response = Http::put(route('users.update', $this->userId), [
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash('message', 'User updated successfully.');
        $this->emit('userUpdated'); // Emitir un evento para refrescar la lista de usuarios
    }

    public function render()
    {
        return view('livewire.user.user-edit-component');
    }
}
