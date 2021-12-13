<?php

namespace App\Http\Livewire\Plan\Components\Advance;

use Livewire\Component;
use App\Models\Advance;

class General extends Component
{
    public function render()
    {
        $advances = Advance::where('stages', 'General')->orderBy('created_at', 'DESC')->get();
        return view('livewire.plan.components.advance.general', compact('advances'));
    }
}
