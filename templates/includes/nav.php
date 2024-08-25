<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                        'custom-blue': '#282f49',
                        'custom-red': '#8a2b31'
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
        }
    </style>
</head>

<body>
    <header class="text-black py-4 border-b-custom-red relative">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="../assets/images/logo.png" alt="University Logo" class="h-12 w-10">
                <span class="ml-4 text-2xl font-bold">University Name</span>
            </div>

            <!-- Navigation -->
            <nav id="navBar" class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-custom-red hover:border-b-custom-red rounded w-20 text-center">Home</a>
                <a href="#" class="hover:text-custom-red hover:border-b-custom-red rounded w-20 text-center">About</a>
                <a href="#" class="hover:text-custom-red hover:border-b-custom-red rounded w-20 text-center">Contact</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button id="navToggle" class="md:hidden text-2xl">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
                <span class="bold">Menu</span>
            </button>
        </div>

        <!-- Dropdown Menu (hidden by default) -->
        <div id="mobileMenu" class="absolute right-0 mt-4 mr-4 hidden bg-white shadow-md rounded-lg p-4 space-y-2 md:hidden">
            <a href="#" class="block text-center hover:text-custom-red hover:border-b-custom-red">Home</a>
            <a href="#" class="block text-center hover:text-custom-red hover:border-b-custom-red">About</a>
            <a href="#" class="block text-center hover:text-custom-red hover:border-b-custom-red">Contact</a>
        </div>
    </header>

    <script>
        const navToggle = document.getElementById('navToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        navToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>




<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
        theme: {
            extend: {
            colors: {
                clifford: '#da373d',
                'custom-blue': '#282f49',
                'custom-red': '#8a2b31'
            }
            }
        }
        }
  </script>
    <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
</head>
<body>
<header class=" text-black py-4 border border-b-custom-red-2 ">
  <div class="container mx-auto flex items-center justify-between">
    <!-- Logo closing comment tag
    <div class="flex items-center">
      <img src="../assets/images/logo.png" alt="University Logo" class="h-12 w-10">
      <span class="ml-4 text-2xl font-bold">University Name</span>
    </div>

    <!-- Navigation closing comment tag
    <nav id="navBar" class="md:flex space-x-6">
      <a href="#" class="hover:text-custom-red hover:border border-b-custom-red rounded w-20 text-center">Home</a>
      <a href="#" class="hover:text-custom-red hover:border border-b-custom-red rounded w-20 text-center">About</a>
      <a href="#" class="hover:text-custom-red hover:border border-b-custom-red rounded w-20 text-center">Contact</a>
    </nav>
    
    <!-- Mobile Menu Button comment closing tag
    <button id="navToggle" class="md:hidden text-2xl">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
      <span class="bold">Menu</span>
    </button>
  </div>
</header>
<script src="./assets/js/modules/navbar.js"></script>
</body>
</html> -->