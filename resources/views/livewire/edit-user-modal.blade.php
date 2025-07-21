<div>
    <div class="p-6">
        <h2 class="text-lg font-medium text-gray-900">
            {{ $userId ? 'Edit User' : 'Create User' }}
        </h2>
        <div class="mt-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" wire:model="name" id="name"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mt-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" wire:model="email" id="email"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mt-6 flex justify-end">
            <button wire:click="closeModal" class="px-4 py-2 text-sm text-gray-700 bg-gray-200 rounded-md mr-2">
                Cancel
            </button>
            <button wire:click="save" class="px-4 py-2 text-sm text-white bg-blue-600 rounded-md">
                Save
            </button>
        </div>
        381c

    </div>
</div>