<header class="bg-white shadow-lg fixed w-full top-0 left-0 z-50  ">
    <div class="max-w-7xl mx-auto flex items-center justify-between p-4">

        <a href="http://localhost/" class="font-bold text-lg">Air BnB Copy</a>

        <nav class="hidden md:flex gap-8 text-black  font-medium">
            <a href="http://localhost/appartements" class="hover:text-gray-400 transition">All available flats</a>
            <a href="http://localhost/appartements/create" class="hover:text-gray-400 transition">Propose a new Air
                bnb</a>
            <a href="http://localhost/editapt/1" class="hover:text-gray-400  transition">Edit a new Air bnb</a>
            <a href="http://localhost/detailapt/1" class="hover:text-gray-400  transition">Detail of a Air bnb</a>
            <a href="http://localhost/Register" class="hover:text-gray-400  transition">Register</a>
            <a href="http://localhost/Login" class="hover:text-gray-400  transition">Log in</a>
        </nav>

        <button id="menu-btn" aria-label="Toggle menu" class="md:hidden focus:outline-none">
            <svg class="w-7 h-7 text-blue-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <nav id="mobile-menu" class="hidden md:hidden bg-white text-black shadow-lg p-4 flex flex-col gap-4">
        <a href="http://localhost/appartements" class="hover:text-gray-400 transition">All available flats</a>
        <a href="http://localhost/newapt" class="hover:text-gray-400 transition">Propose a new Air bnb</a>
        <a href="http://localhost/editapt" class="hover:text-gray-400  transition">Edit a new Air bnb</a>
        <a href="http://localhost/detailapt" class="hover:text-gray-400  transition">Detail of a Air bnb</a>
        <a href="http://localhost/Register" class="hover:text-gray-400  transition">Register</a>
        <a href="http://localhost/Login" class="hover:text-gray-400  transition">Log in</a>
    </nav>

    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</header>
