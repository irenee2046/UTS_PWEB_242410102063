<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Piket UKMKK</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex items-center justify-center bg-linear-to-br from-yellow-300 via-orange-300 to-yellow-500">

    <div class="bg-white/90 shadow-2xl rounded-3xl p-10 w-full max-w-md border-4 border-yellow-400">
        <div class="flex flex-col items-center mb-6">
            <h1 class="text-3xl font-bold text-orange-600">Login</h1>
        </div>

        <form method="POST" action="{{ route('prosesLogin') }}" class="space-y-6">
            @csrf

            <div>
                <label for="username" class="block text-gray-700 font-semibold">Username</label>
                <input type="text" name="username" id="username" required
                       class="w-full mt-1 px-4 py-2 border border-yellow-400 rounded-xl focus:ring-2 focus:ring-orange-400 outline-none">
            </div>

            <div>
                <label for="password" class="block text-gray-700 font-semibold">Password</label>
                <input type="password" name="password" id="password" required
                       class="w-full mt-1 px-4 py-2 border border-yellow-400 rounded-xl focus:ring-2 focus:ring-orange-400 outline-none">
            </div>

            @if(session('error'))
                <p class="text-red-600 text-center font-medium">{{ session('error') }}</p>
            @endif

            <button type="submit"
                class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded-xl transition">
                Masuk
            </button>
        </form>
    </div>

</body>
</html>
