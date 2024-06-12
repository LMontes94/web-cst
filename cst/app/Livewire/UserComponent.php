<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class UserComponent extends Component
{
    public $userTypeId ;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $users = [];

    public function mount()
    {
        $this->fetchUsers();
    }

    public function fetchUsers()
    {
        $this->users = User::all();
    }

    public function handleResponse($response){
        if ($response->successful()) {
            $message = $response->json()['message'];
            session()->flash('message', $message);
            $this->fetchUsers();  // Actualiza la lista de usuarios
            $this->reset(['name', 'email', 'password', 'password_confirmation']);
        } else {
            $error = $response->json()['message'] ?? 'Error al procesar la solicitud.';
            session()->flash('error', $error);
            Log::error('Error creating user: ' . json_encode($response->json()));
        }
    }

    public function createUser()
    {
        $response = Http::post(route('users.store'), [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation,
        ]);

        $this->handleResponse($response);
    }

    public function render()
    {
        $userTypes = UserType::all();
        return view('livewire.user-component',[
            'userTypes' => $userTypes,
        ]);
    }
}
