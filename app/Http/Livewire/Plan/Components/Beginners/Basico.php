<?php

namespace App\Http\Livewire\Plan\Components\Beginners;

use Livewire\Component;
use App\Models\Beginner;

class Basico extends Component
{
    public function render()
    {
        $beginners = Beginner::where('stages', 'Básico')->orderBy('created_at', 'DESC')->get();
        return view('livewire.plan.components.beginners.basico', compact('beginners'));
    }
}
