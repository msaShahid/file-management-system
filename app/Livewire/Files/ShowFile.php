<?php

namespace App\Livewire\Files;

use App\Models\Files;
use Livewire\Component;

class ShowFile extends Component
{

    #[Title('Show Image')]
    #[Layout('components.layouts.app')]
    public $id;
    public function mount($id)
    {
        $this->id = $id;
    }
    public function placeholder()
    {
        return view('components.common.loader');
    }
    public function render()
    {
        //sleep(3);
        $file = Files::find($this->id);
        return view('livewire.files.show-file',['file'=>$file]);
    }
}
