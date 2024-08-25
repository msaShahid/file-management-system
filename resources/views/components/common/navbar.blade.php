<div class="navbar bg-base-100 shadow-lg">
  <div class="flex-1">
    
    <a href="{{ route('dashboard') }}" wire:navigate class="btn btn-ghost text-xl">File Management System
        <img src="{{ asset('images/file.png') }}" alt="" srcset="" class="w-8 h-8">
    </a>
  </div>
  <div class="flex-none">

    <button class="btn btn-sm btn-primary mr-3" href="#" onclick="AddFileModal.showModal()">Add files</button>
    <x-common.themeSwitch/>
 
    <div class="dropdown dropdown-end ml-4">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img
            alt="Tailwind CSS Navbar component"
            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
        </div>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
        <li>
          <a class="justify-between">
            Profile
          </a>
        </li>
        <li><a>Settings</a></li>
        <li><a href="#" onclick="logoutModal.showModal()">Logout</a></li>
      </ul>
    </div>
  </div>

<!-- Add Modal here -->
  <livewire:auth.logout />
  <livewire:files.add-file />

</div>