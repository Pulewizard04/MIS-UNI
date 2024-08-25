<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                        'custom-blue': '#282f49',
                        'custom-red': '#8a2b31',
                        'custom-green': '#3ba55d'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100">
    <header class="bg-custom-blue text-white relative">
        <div class="container mx-auto flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="../assets/images/logo.png" alt="University Logo" class="h-10 w-10">
                <span class="ml-3 text-xl font-bold">University Name</span>
            </div>
            <!-- Navbar -->
            <nav class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-custom-red">Home</a>
                <a href="#" class="hover:text-custom-red">Programs</a>
                <a href="#" class="hover:text-custom-red">Admissions</a>
                <a href="#" class="hover:text-custom-red">Contact</a>
                <a href="#" class="hover:text-custom-red">About</a>
            </nav>
            <!-- Mobile Menu Button -->
            <button id="menuButton" class="md:hidden focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden absolute right-0 left-0 bg-custom-blue z-50">
            <nav class="flex flex-col items-center space-y-2 py-4">
                <a href="#" class="block w-full text-center py-2 hover:bg-custom-red">Home</a>
                <a href="#" class="block w-full text-center py-2 hover:bg-custom-red">Programs</a>
                <a href="#" class="block w-full text-center py-2 hover:bg-custom-red">Admissions</a>
                <a href="#" class="block w-full text-center py-2 hover:bg-custom-red">Contact</a>
                <a href="#" class="block w-full text-center py-2 hover:bg-custom-red">About</a>
            </nav>
        </div>
    </header>

    <script>
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
