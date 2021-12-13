<?php

namespace App\Http\Livewire\Speed;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use App\Models\Speed;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $speeds = Speed::where('user_id', Auth::user()->id)-> orderBy('created_at', 'DESC')->paginate(5);
        return view('livewire.speed.index', compact( 'speeds'));
    }
}
