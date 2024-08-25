<div>
    <button class="btn btn-error btn-sm" onClick="deleteModal_{{$id}}.show()">Delete</button>
    <!-- Open the modal using ID.showModal() method -->
    <dialog id="deleteModal_{{$id}}" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Are you sure !</h3>
            <p class="py-1">This Action completely delete your file.</p>
            <div class="modal-action">
                <button class="btn btn-sm btn-error" wire:click="deleteFile">Yes Delete it!</button>
                <form method="dialog">
                    <!-- if there is a button in form, it will close the modal -->
                    
                    <button class=" btn btn-sm ">Close</button>
                </form>
            </div>
        </div>
    </dialog>
</div>
