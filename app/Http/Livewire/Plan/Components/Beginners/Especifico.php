<?php

namespace App\Http\Livewire\Plan\Components\Beginners;

use Livewire\Component;
use App\Models\Beginner;

class Especifico extends Component
{
    public function render()
    {
        $beginners = Beginner::where('stages', 'Específico')->orderBy('created_at', 'DESC')->get();
       
        return view('livewire.plan.components.beginners.especifico', compact('beginners'));
        
    }
}
