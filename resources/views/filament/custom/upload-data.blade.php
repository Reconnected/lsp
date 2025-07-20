<div class='flex justify-between'>
    <form wire:submit="save" class="w-full max-w-sm flex" >
        <div class="mb-4">
            <label class="text-gray-700 text-sm font-bold mb-2" for="fileInput">Format File berupa CSV</label>
            <input class="shadow appearance-none border rounded w-full
            py-2 px-3 text-gray-700 leading-tight focus:outline-none
            focus:shadow-outline" id="fileInput" type="file" wire:model="file">
            </div>
    </form>
</div>