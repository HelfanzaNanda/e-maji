<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserIndex extends Component
{
    
    protected $listeners = [
        'userCreated' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.user.user-index',[
            'users' => User::where('role', '!=', 'admin')->get(),
        ]);
    }

}
