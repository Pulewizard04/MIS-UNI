<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'custom-red': '#8a2b31',
                        'custom-blue': '#282f49'
                    }
                }
            }
        }
    </script>
</head>
<body>
<footer class="bg-custom-blue text-white mx-auto p-6 mt-10 border-t-4 border-custom-red">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
        <!-- Contact Info -->
        <div class="flex flex-col items-center md:items-start mb-6 md:mb-0 space-y-2">
            <h3 class="text-xl font-bold">University Name</h3>
            <p class="text-sm mt-2">1234 University Ave, City, State, ZIP</p>
            <p class="text-sm mt-1">Phone: (123) 456-7890</p>
            <p class="text-sm mt-1">Email: info@university.com</p>
        </div>

        <!-- Quick Links -->
        <div class="mb-6 md:mb-0">
            <h4 class="text-lg font-semibold">Quick Links</h4>
            <ul class="mt-2 space-y-2">
                <li><a href="#" class="hover:text-custom-red">Home</a></li>
                <li><a href="#" class="hover:text-custom-red">Programs</a></li>
                <li><a href="#" class="hover:text-custom-red">Admissions</a></li>
                <li><a href="#" class="hover:text-custom-red">Student Portal</a></li>
                <li><a href="#" class="hover:text-custom-red">Contact</a></li>
            </ul>
        </div>

        <!-- Follow Us -->
        <div class="flex flex-col items-center md:items-start space-y-4">
            <h4 class="text-lg font-semibold">Follow Us</h4>
            <ul class="mt-2 space-y-2">
                <li><a href="#" class="hover:text-custom-red">Facebook</a></li>
                <li><a href="#" class="hover:text-custom-red">Twitter</a></li>
                <li><a href="#" class="hover:text-custom-red">LinkedIn</a></li>
                <li><a href="#" class="hover:text-custom-red">Instagram</a></li>
            </ul>
        </div>
        <!-- <div>
            <img class="flex flex-col" src="../assets/images/logo.png" alt="">
        </div> -->
    </div>
    <div class="text-center text-sm mt-6 border-t border-gray-700 pt-4">
        <p>&copy; 2024 University Name. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
