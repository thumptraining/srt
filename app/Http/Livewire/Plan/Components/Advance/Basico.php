<?php

namespace App\Http\Livewire\Plan\Components\Advance;

use Livewire\Component;
use App\Models\Advance;


class Basico extends Component
{
    public function render()
    {
        $advances = Advance::where('stages', 'Básico')->orderBy('created_at', 'DESC')->get();
        return view('livewire.plan.components.advance.basico', compact('advances'));
    }
}
