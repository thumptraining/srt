<?php

namespace App\Http\Livewire\Plan\Components\Beginners;

use Livewire\Component;
use App\Models\Beginner;

class General extends Component
{
    public function render()
    {
        
        $beginners = Beginner::where('stages', 'General')->orderBy('created_at', 'DESC')->get();
        

        return view('livewire.plan.components.beginners.general', compact('beginners'));
    }
}
