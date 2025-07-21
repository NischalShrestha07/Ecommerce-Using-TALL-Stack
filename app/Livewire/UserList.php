<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.user-list', compact('users'));
    }
}
