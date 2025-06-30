<!-- Navigation Bar -->
<nav class="bg-sky-800 shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo Section -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <!-- You can replace this with your actual logo image -->
                    <span class="text-xl font-bold text-white">Logo</span>
                </a>
            </div>

            <!-- Desktop Menu (center) -->
            <div class="hidden md:flex items-center justify-center flex-1">
                <div class="flex space-x-8">
                    <a href="{{ route('guest.home') }}"
                        class="px-3 py-2 rounded-md text-md font-medium text-gray-800 {{ Request::is('/') ? 'text-white font-semibold' : 'text-gray-700 hover:text-gray-900' }}">
                        Home
                    </a>
                    <a href="{{ route('guest.teams') }}"
                        class="px-3 py-2 rounded-md text-md font-medium text-gray-800 {{ Request::is('teams*') ? 'text-white font-semibold' : 'text-gray-700 hover:text-gray-900' }}">
                        Teams
                    </a>
                    <a href="{{ route('guest.about') }}"
                        class="px-3 py-2 rounded-md text-md font-medium text-gray-800 {{ Request::is('about*') ? 'text-white font-semibold' : 'text-gray-700 hover:text-gray-900' }}">
                        About
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button type="button"
                    class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu icon -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="md:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/" class="text-gray-700 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">
                Home
            </a>
            <a href="/teams" class="text-gray-700 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">
                Teams
            </a>
            <a href="/about" class="text-gray-700 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">
                About
            </a>
        </div>
    </div>
</nav>

<!-- Add this JavaScript for mobile menu toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.querySelector('.mobile-menu-button');
        const menu = document.querySelector('#mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    });
</script>
