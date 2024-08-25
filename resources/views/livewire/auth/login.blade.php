<div>

    <div class="h-screen flex justify-center items-center">
        <form action="" class="w-[500px]" wire:submit='login'>

            <x-common.alert/>

            <div class="py-2 flex justify-between items-center">
            
                <div class="">
                    <h1 class="text-xl font-bold">Login</h1>
                    <p>Login now to access and manage your important documents securely in one convenient place.</p>
                </div>
                <x-common.themeSwitch/>
            </div>

            <div class="mb-2">
                <label for="email">Email</label>
                <input type="email" placeholder="Type here" class="input input-bordered w-full" wire:model="email"  id="email"/>
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
                <button class="btn btn-primary w-full" type="submit" >
                    <span class="loading loading-dots loading-xs"></span>
                    <span>Submit</span>
                </button>
            </div>
            <p class="text-center"> -- OR --</p>
            <p class="text-center">Don't have an account ?<a href="{{ route('register') }}" wire:navigate class="text-primary font-bold"> Register</a></p>

        </form>
    </div>

</div>
