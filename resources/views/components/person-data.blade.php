<table class="table border border-collapse border-gray-400 w-3xl">
    <thead>
        <tr>
            <th class="text-left border border-gray-400 px-2 py-1">Name</th>
            <th class="text-left border border-gray-400 px-2 py-1">Age</th>
            <th class="text-left border border-gray-400 px-2 py-1" colspan="3">Address</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $person)                
            <tr>     
                <td class="text-left border border-gray-400 px-2 py-1">{{ $person->name }}</td>
                <td class="text-left border border-gray-400 px-2 py-1">{{ $person->age }}</td>
                <td class="text-left border border-gray-400 px-2 py-1">{{ $person->address }}</td>
                <td class="text-left border border-gray-400 px-2 py-1">
                    <a href="/persons/{{ $person->id }}/edit" class="text-blue-600 hover:underline">Edit</a>
                </td>
                <td class="text-left border border-gray-400 px-2 py-1">
                    <form action="/persons/{{ $person->id }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @method('DELETE')
                        @csrf
                        <button class="text-red-600 hover:underline">Delete</button></td>
                    </form>
            </tr>
        @empty
            <tr>
                <td class="border border-gray-400 px-2 py-1" colspan="3">No Data</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="flex w-3xl justify-end">
    {{ $data->links('pagination::default') }}
</div>