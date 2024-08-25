<?php

namespace App\Livewire;

use App\Models\Files;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;

class Dashboard extends Component
{
    #[Title('dashboard')]
    #[Url]

    public $search;

    public function render()
    {
        $user = Auth::guard('web')->user();
        $files = Files::where('user_id', $user->id)->where('title','ilike','%'.$this->search.'%')->orderBy('id','desc')->paginate(5);
        return view('livewire.dashboard',compact('files'));
    }
}
