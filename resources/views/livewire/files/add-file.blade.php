<div>
    <!-- Open the modal using ID.showModal() method -->
    <dialog id="AddFileModal" class="modal" wire:ignore.self>
        <div class="modal-box">
            <!-- Header -->
            <div class="py-2 flex justify-between items-center">
                <h3 class="text-lg font-bold">Add file</h3>
                <form method="dialog">
                    <button class="btn btn-sm btn-rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </button>
                </form>
            </div>
            <!-- body -->

            <div

                x-data="{ uploading: false, progress: 0 }"
                x-on:livewire-upload-start="uploading = true"
                x-on:livewire-upload-finish="uploading = false"
                x-on:livewire-upload-cancel="uploading = false"
                x-on:livewire-upload-error="uploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress"

            >

                <div x-show="uploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>

                <form class="mt-4" wire:submit="store">
                    <div class="mb-2">
                        <label for="title">Title</label>
                        <input type="title" placeholder="Type here" class="input input-bordered w-full " id="title" wire:model='title' />
                        @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <label for="image">Image</label>
                        <input type="file" class="file-input file-input-bordered w-full" id="image" wire:model="image" accept="image/png,image/jpeg/image/jpg/pdf" />
                        @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
                        @if($image) 
                            <img src="{{ $image->temporaryUrl() }}" class="w-full rounded-md object-contain my-2">
                        @endif
                    </div>

                    <div class="mb-2"> 
                        <button class="btn btn-primary w-full">Submit</button>
                    </div>

                </form>

            </div>
           

        </div>
    </dialog>
</div>
