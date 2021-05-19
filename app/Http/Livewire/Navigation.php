<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class Navigation extends Component
{
    
    public function render()
    {
        $level = User::where('level', 2)->get();
        //dd($levelU);
        return view ('livewire.navigation', compact('level'));
    }
}
