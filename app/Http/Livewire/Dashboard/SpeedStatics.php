<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Speed;
use Illuminate\Support\Facades\Auth;

class SpeedStatics extends Component
{
    public function render()
    {
        $speed = Speed::where('user_id', Auth::user()->id)-> orderBy('created_at', 'DESC')->first();

        if($speed != null){
            $Calculo = Speed::where('user_id', Auth::user()->id)-> orderBy('created_at', 'DESC')->take(2)->get();

            $a= $Calculo->first()->distance;
            $b= $Calculo->last()->distance;
            $c= $a-$b;
            return view('livewire.dashboard.speed-statics', compact( 'speed','c'));
        }else{
            return view('livewire.dashboard.speed-statics');
        }
        
    }
}
