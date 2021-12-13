<?php

namespace App\Http\Livewire\Plan\Components\Intermediate;

use Livewire\Component;
use App\Models\Intermediate;

class Basico extends Component
{
    public function render()
    {
        $intermediates = Intermediate::where('stages', 'Básico')->orderBy('created_at', 'DESC')->get();

        return view('livewire.plan.components.intermediate.basico', compact('intermediates'));
    }
}
