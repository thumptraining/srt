<?php

namespace App\Http\Livewire\Plan\Components\Intermediate;

use Livewire\Component;
use App\Models\Intermediate;

class Especifico extends Component
{
    public function render()
    {
        $intermediates = Intermediate::where('stages', 'Específico')->orderBy('created_at', 'DESC')->get();
        return view('livewire.plan.components.intermediate.especifico', compact('intermediates'));
    }
}
