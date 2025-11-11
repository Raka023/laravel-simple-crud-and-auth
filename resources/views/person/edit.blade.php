<x-partials.app>

    <div class="w-3xl flex justify-between mb-4">
        <a href="/" class="inline-flex items-center px-4 py-2 bg-gray-200 text-blue-700 font-medium rounded hover:bg-gray-300 transition-colors">
            &larr; Go Back
        </a>
        <form action="{{ route('logout') }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="inline-flex items-center px-4 py-2 bg-red-500 text-white font-medium rounded hover:bg-red-400 transition-colors">
                Logout
            </button>
        </form>
    </div>

    <form action="/persons/{{ $person->id }}" method="POST" class="w-full max-w-3xl mb-8" novalidate>
        @method('PATCH')
        @csrf
        <table class="table border border-collapse border-gray-400 w-full">
            <tr>
                <td class="text-left border border-gray-400 px-2 py-1 w-1/4">
                    <label for="name" class="font-medium">Name</label>
                </td>
                <td class="text-left border border-gray-400 px-2 py-1">
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="w-full border border-gray-300 rounded px-2 py-1"
                        value="{{ old('name') ?? $person->name }}"
                        required
                    >
                    @error('name')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="text-left border border-gray-400 px-2 py-1 w-1/4">
                    <label for="age" class="font-medium">Age</label>
                </td>
                <td class="text-left border border-gray-400 px-2 py-1">
                    <input
                        type="number"
                        name="age"
                        id="age"
                        class="w-full border border-gray-300 rounded px-2 py-1"
                        value="{{ old('age') ?? $person->age }}"
                        required
                    >
                    @error('age')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="text-left border border-gray-400 px-2 py-1 w-1/4">
                    <label for="address" class="font-medium">Address</label>
                </td>
                <td class="text-left border border-gray-400 px-2 py-1">
                    <input
                        type="text"
                        name="address"
                        id="address"
                        class="w-full border border-gray-300 rounded px-2 py-1"
                        value="{{ old('address') ?? $person->address }}"
                        required
                    >
                    @error('address')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-right border border-gray-400 px-2 py-2">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
                </td>
            </tr>
        </table>
    </form>

    <form action="/persons/{{ $person->id }}/edit" method="GET" class="flex items-center mb-6 w-full max-w-3xl">
        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            class="flex-1 border border-gray-300 rounded px-3 py-2 mr-2"
            placeholder="Search by name, age, or address..."
        >
        <button
            type="submit"
            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors font-medium"
        >
            Search
        </button>
    </form>

    <x-person-data :data="$data" />

</x-partials.app>