<?php

namespace App\Livewire\Files;

use App\Models\Files;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class DeleteFile extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }
    public function render()
    {
        return view('livewire.files.delete-file');
    }

    public function deleteFile()
    {
        try{
            $file = Files::findOrFail($this->id);
            if($file->user_id != auth()->user()->id){
                session()->flash('error', 'You do not have permission to delete this file');
                return $this->redirectRoute('dashboard', navigate:true);
            }

            // Delete file from Storage

            Storage::delete($file->image);
            Files::where('id',$this->id)->delete();
            session()->flash('success', 'File deleted successfully!');
            return $this->redirectRoute('dashboard', navigate:true);

        }catch(\Exception $e){
            session()->flash('error', $e->getMessage());
            return $this->redirectRoute('dashboard', navigate:true);
        }
    }
}
