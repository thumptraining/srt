<?php

namespace App\Http\Livewire\Weight;

use Livewire\Component;
use App\Models\Weight;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $weights = Weight::where('user_id', Auth::user()->id)-> orderBy('created_at', 'DESC')->paginate(5);
        
        return view('livewire.weight.index', compact( 'weights'));
    }
}
