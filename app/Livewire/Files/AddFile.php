<?php

namespace App\Livewire\Files;
use App\Models\Files;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AddFile extends Component
{
    use WithFileUploads;
    public $title;
    public $image;

    public function render()
    {
        return view('livewire.files.add-file');
    }

    public function store(){

        $this->validate([
            'title' => 'required|string|min:2|max:191',
            'image' => 'required|mimes:pdf,doc,docx,jpg,jpeg,png',
        ]);

        $user = Auth::guard('web')->user();
        $filename = $this->image->store('image_'.$user->id);
        Files::create(["title" => $this->title,"image" => $filename, "user_id" => $user->id ]);
        session()->flash('success','File uploaded successfully!');
        $this->redirectRoute('dashboard', navigate:true);

    }
}
