<div>
    <button wire:click="$dispatch('openModal', { component: 'edit-user-modal' })"
        class="px-4 py-2 text-white bg-blue-600 rounded-md">
        Create User
    </button>
    <table class="mt-4 w-full">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <button
                        wire:click="$dispatch('openModal', { component: 'edit-user-modal', arguments: { userId: {{ $user->id }} } })"
                        class="px-2 py-1 text-white bg-blue-600 rounded">
                        Edit
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>