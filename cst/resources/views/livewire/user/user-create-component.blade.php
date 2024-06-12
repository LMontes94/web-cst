
<div class="content-start w-64 ">
    <!-- Formulario para crear usuario -->
    <form wire:submit.prevent="createUser">
        <div class="mb-3">
            <div class="d-flex flex-column">
                <label for="name" class="form-label mt-4">Name:</label>
                <input wire:model="name" type="email" class="form-control rounded" id="name" placeholder="Enter name">
            </div>
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <div class="d-flex flex-column">
                <label for="email" class="form-label mt-4">Email address</label>
                <input wire:model="email" type="email" class="form-control rounded" id="email" placeholder="Enter email">
            </div>
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <div class="d-flex flex-column">
                <label for="password" class="form-label mt-4">Password</label>
                <input wire:model="password" type="password" class="form-control rounded" id="password" placeholder="Password" autocomplete="off">      
            </div>
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <div class="d-flex flex-column">
                <label for="password_confirmation" class="form-label mt-4">Confirm Password:</label>
                <input wire:model="password_confirmation" type="password" class="form-control rounded" id="password_confirmation" placeholder="Confirm Password" autocomplete="off">      
            </div>
            @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <div class="d-flex flex-column">
                <label for="exampleSelect1" class="form-label mt-4">Tipo de Usuario</label>
                <select wire:model="userTypeId" class="form-select rounded" id="exampleSelect1">
                    @foreach($userTypes as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <button class="btn btn-primary" type="submit">Create User</button>
    </form>
</div>
