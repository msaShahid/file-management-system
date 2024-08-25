<div>
    <!-- Open the modal using ID.showModal() method -->
    <dialog id="logoutModal" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Are you sure !</h3>
            <!-- <p class="py-1">Press ESC key or click the button below to close</p> -->
            <div class="modal-action">
                <button class="btn btn-sm btn-error" wire:click="logout">Yes Logout</button>
                <form method="dialog">
                    <!-- if there is a button in form, it will close the modal -->
                    
                    <button class=" btn btn-sm ">Close</button>
                </form>
            </div>
        </div>
    </dialog>
</div>
