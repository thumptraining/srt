<?php

namespace App\Http\Livewire\Plan\Components\Intermediate;

use Livewire\Component;
use App\Models\Intermediate;

class General extends Component
{
    public function render()
    {
        $intermediates = Intermediate::where('stages', 'General')->orderBy('created_at', 'DESC')->get();
        return view('livewire.plan.components.intermediate.general', compact('intermediates'));
    }
}
