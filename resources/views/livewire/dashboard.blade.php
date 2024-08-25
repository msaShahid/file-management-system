<div>
   <div class="px-2 flex mt-5 justify-center flex-col items-center">

   <input type="text" placeholder="Type here" class="input input-bordered w-96 mb-4 rounded-2xl" wire:model.live="search"  id="search"/>

      <div class="grid grid-cols-1 md:grid-col-2 xl:grid-cols-3 gap-2">
         @if(count($files) > 0 )
            @foreach($files as $key => $file)
                <div class="card card-compact bg-base-100 w-96 shadow-xl">
                    <a href="{{ route('show.file', ['id' => $file->id]) }}" wire:navigate>
                        <figure>
                            <img
                                src="{{ asset('storage/'.$file->image)}}"
                                alt="file" class="h-52 object-cover w-full"
                            />
                        </figure>
                   </a>
                    <div class="card-body">
                        <h2 class="card-title">{{ $file->title }}</h2>
                        <div class="card-actions justify-end">
                            <livewire:files.delete-file :id="$file->id" :key="$key"/>
                        </div>
                    </div>
                </div>
            @endforeach

         @else
            <p>No files found</p>
         @endif
      </div>

   </div>

   <div class="text-center px-10 my-20 lg:px-32">
        {{ $files->links() }}
   </div>
   
</div>
