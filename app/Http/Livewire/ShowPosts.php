<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class ShowPosts extends Component
{

    public function render()
    {
        $users = User::all();
        return view('livewire.show-posts', compact('users'));
    }
}
