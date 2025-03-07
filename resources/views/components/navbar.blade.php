<!-- resources/views/components/navbar.blade.php -->
<nav class="fixed top-0 left-0 h-full w-64 bg-gradient-to-b from-blue-800 to-blue-900 text-white shadow-xl">
    <!-- Logo -->
    <div class="p-6 border-b border-blue-700">
        <div class="flex items-center">
            <!--<img src="https://via.placeholder.com/50" alt="Logo" class="h-10 w-10 rounded-full">-->
            <span class="ml-3 text-xl font-bold">Employed Management</span>
        </div>
    </div>

    <!-- Menu -->
    <ul class="mt-6">
        <li>
            <a href="{{ route('pegawai.index') }}" class="flex items-center px-6 py-3 hover:bg-blue-700 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span class="ml-3">Data Pegawai</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center px-6 py-3 hover:bg-blue-700 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                <span class="ml-3">Index Pegawai</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center px-6 py-3 hover:bg-blue-700 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <span class="ml-3">Diagram dan Grafik</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center px-6 py-3 hover:bg-blue-700 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span class="ml-3">Profile Akun</span>
            </a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="flex items-center px-6 py-3 hover:bg-blue-700 transition duration-300 w-full text-left">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span class="ml-3">Logout</span>
                </button>
            </form>
        </li>
    </ul>

    <!-- Footer Navbar (Opsional) -->
    <div class="absolute bottom-0 left-0 w-full p-6 border-t border-blue-700">
        <div class="text-center text-sm text-blue-300">
            &copy; 2025 SIMRS. All rights reserved.
        </div>
    </div>
</nav>