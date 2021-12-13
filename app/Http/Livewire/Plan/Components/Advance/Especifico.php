<?php

namespace App\Http\Livewire\Plan\Components\Advance;

use Livewire\Component;
use App\Models\Advance;

class Especifico extends Component
{
    public function render()
    {
        $advances = Advance::where('stages', 'Específico')->orderBy('created_at', 'DESC')->get();
        return view('livewire.plan.components.advance.especifico', compact('advances'));
    }
}
