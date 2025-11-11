<x-partials.app>

    <div class="w-3xl flex justify-between mb-4">
        <h2 class="text-3xl font-medium">Persons</h2>
        <form action="{{ route('logout') }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="inline-flex items-center px-4 py-2 bg-red-500 text-white font-medium rounded hover:bg-red-400 transition-colors">
                Logout
            </button>
        </form>
    </div>

    <br>

    <form action="persons" method="POST" class="w-full max-w-3xl mb-8" novalidate>
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
                        value="{{ old('name') }}"
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
                        value="{{ old('age') }}"
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
                        value="{{ old('address') }}"
                        required
                    >
                    @error('address')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-right border border-gray-400 px-2 py-2">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create</button>
                </td>
            </tr>
        </table>
    </form>

    <form action="/persons" method="GET" class="flex items-center mb-6 w-full max-w-3xl">
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