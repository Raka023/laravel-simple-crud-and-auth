<x-partials.app>

    <div class="w-xs flex justify-start px-2">
        <h2 class="text-xl font-medium">Login</h2>
    </div>

    <br>

    <form action="/login" method="POST" class="flex items-center w-full max-w-xs mb-8" novalidate>
        @csrf
        <table class="table w-full">
            <tr>
                <td class="text-left px-2 py-1" colspan="2">
                    <input
                        type="text"
                        name="email"
                        id="email"
                        class="w-full border border-gray-300 rounded px-2 py-1"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        placeholder="Enter your email"
                    >
                    @error('email')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="text-left px-2 py-1" colspan="2">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="w-full border border-gray-300 rounded px-2 py-1"
                        required
                        autocomplete="current-password"
                        placeholder="Enter your password"
                    >
                    @error('password')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="text-left px-2 py-1">
                    <a
                        href="{{ route('register') }}"
                        class="py-2 text-blue-600 hover:underline transition-colors font-medium"
                    >
                        Register
                    </a>
                </td>
                <td class="text-right px-2 py-1">
                    <button
                        type="submit"
                        class="px-4 py-1.5 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors font-medium"
                    >
                        Login
                    </button>
                </td>
            </tr>
        </table>
    </form>
    
</x-partials.app>