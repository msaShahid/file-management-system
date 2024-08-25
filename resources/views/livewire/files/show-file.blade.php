<div>
    <div class="px-50 lg:px-32">
        <div class="py-2 flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold">{{ $file->title }}</h2>
                <p class="text-sm">{{ $file->created_at->format('d-m-Y h:m:s a') }}</p>
            </div>
            <button href="{{ route('dashboard') }}" wire:navigate class="btn btn-sm btn-info">Back</button>
        </div>
        <img src="{{ asset('storage/' . $file->image) }}" alt="your_img" class="w-full rounded-lg object-contain mt-4" />
    </div>
</div>