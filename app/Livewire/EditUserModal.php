<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class EditUserModal extends Component
{
    public $userId;
    public $name;
    public $email;

    public function mount($userId = null)
    {
        if ($userId) {
            $user = User::find($userId);
            $this->userId = $userId;
            $this->name = $user->name;
            $this->email = $user->email;
        }
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);
        if ($this->userId) {
            User::find($this->userId)->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt('password')
            ]);
        }
        $this->closeModal();
        $this->dispatch('refreshUsers');
    }

    public function modalMaxwidth(): string
    {
        return 'lg';
    }






    public function render()
    {
        return view('livewire.edit-user-modal');
    }
}
