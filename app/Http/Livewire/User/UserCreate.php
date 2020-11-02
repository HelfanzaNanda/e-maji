<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserCreate extends Component
{
  
    public $name, $email, $telp, $role;
    protected $rules = [
        'name' => ['required', 'string'],
        'email'  => ['required', 'email', 'unique:users'],
        'telp' => ['required'],
        'role' => ['required']
    ];
  
    public function render()
    {
        return view('livewire.user.user-create');
    }

    public function store()
    {
        
        $this->validate();

        User::create([
            'name'      => $this->name,
            'email'     => $this->email,
            'password'  => Hash::make($this->telp),
            'telp'      => $this->telp,
            'role'      => $this->role,
        ]);

        $this->resetProperty();
        $this->emit('userCreated');

    }

    private function resetProperty()
    {
        $this->name = "";
        $this->email = "";
        $this->telp = "";
        $this->role = "";
    }
}
