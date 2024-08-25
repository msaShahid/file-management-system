<div>

    <div class="h-screen flex justify-center items-center">
        <form action="" class="w-[500px]" wire:submit='register'>

            <div class="flex justify-between items-center">
                <div class="mb-2">
                    <h1 class="text-xl font-bold">Register</h1>
                    <p>Register now to securely manage all your important documents in one convenient place.</p>
                </div>
                <x-common.themeSwitch/>
            </div>

            <div class="mb-2">
                <label for="name">Full Name</label>
                <input type="text" placeholder="Type here" class="input input-bordered w-full" wire:model="name"  id="name" />
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-2">
                <label for="email">Email</label>
                <input type="email" placeholder="Type here" class="input input-bordered w-full" wire:model="email"  id="email" />
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-2 ">
                <label for="password">Password</label>
                <input type="password" placeholder="Type here" class="input input-bordered w-full" wire:model="password" id="password" />
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2 ">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" placeholder="Type here" class="input input-bordered w-full" wire:model="password_confirmation" id="password_confirmation" />
            </div>

            <div class="mb-2 ">
                <button class="btn btn-primary w-full" type="submit" >
                    <span class="loading loading-dots loading-xs"></span>
                    <span>Submit</span>
                </button>
            </div>
            <p class="text-center"> -- OR --</p>
            <p class="text-center">Already have an account ?<a href="{{ route('login') }}" wire:navigate class="text-primary font-bold"> Login</a></p>

        </form>
    </div>

</div>
