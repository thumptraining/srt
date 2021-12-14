<?php

namespace App\Http\Livewire\Components\Users;

use App\Models\User;
use App\Models\Weight;

use Livewire\Component;

class Peso extends Component
{


    public function render()
    {
        $user = User::all();
        return view('livewire.components.users.peso', compact('user'));
    }
}
