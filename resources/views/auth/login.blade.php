<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Employed Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-4xl mx-4">
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden flex flex-col md:flex-row">
            <!-- Bagian Kiri (Gambar atau Ilustrasi) -->
            <div class="w-full md:w-1/2 bg-gradient-to-r from-blue-600 to-purple-700 p-10 flex flex-col justify-center items-center text-white">
                <h1 class="text-5xl font-bold mb-4">Selamat Datang</h1>
                <p class="text-lg text-center">Di Employed Management</p>
                <p class="text-sm text-gray-200 mt-2 text-center">Sistem Manajemen Karyawan Rumah Sakit dr. Fauziah Bireuen.</p>
            </div>

            <!-- Bagian Kanan (Form Login) -->
            <div class="w-full md:w-1/2 p-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Login</h2>

                <!-- Tampilkan pesan error -->
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <!-- Email -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" 
                            class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" required autofocus>
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password" 
                            class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" required>
                    </div>

                    <!-- Tombol Login -->
                    <div class="flex items-center justify-between">
                        <button type="submit" 
                            class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>