<?php

namespace App\Http\Livewire\Dashboard;
use App\Models\Weight;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class WeightStatics extends Component
{
    
    public function render()
    {    
        
        $weight = Weight::where('user_id', Auth::user()->id)-> orderBy('created_at', 'DESC')->first();
        
        if($weight != null){
            $Calculo = Weight::where('user_id', Auth::user()->id)-> orderBy('created_at', 'DESC')->take(2)->get();
            $a= $Calculo->first()->peso;
            $b= $Calculo->last()->peso;
            $c= $a-$b;
            return view('livewire.dashboard.weight-statics', compact('c', 'weight'));
        }else{
            return view('livewire.dashboard.weight-statics');
        }

        

    }
}
