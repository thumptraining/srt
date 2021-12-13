<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserEdit extends Component
{
   

    public function render()
    {
        $roles = Role::all();
        return view('livewire.admin.user-edit');
    }
}
