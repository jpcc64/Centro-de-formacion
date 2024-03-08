@include('layouts.nav')
<div class="flex justify-center pt-3">
    <div class="bg-white rounded-lg shadow-lg p-5 w-full md:w-80">
        <form method="POST" action="{{ route('inicia-sesion') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md"
                    aria-describedby="emailHelp">
                <p class="text-xs text-gray-500" id="emailHelp">We'll never share your email with anyone else.</p>
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md">
                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <input type="checkbox" id="remember" class="form-checkbox text-sky-800 rounded-sm" />
                <label for="remember" class="inline-block ml-2 text-sm text-gray-700">Remember me</label>
            </div>
            <button type="submit"
                class="bg-sky-800 hover:bg-sky-800-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</div>

@include('layouts.footer')
