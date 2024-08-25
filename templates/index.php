<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<?php include('C:/xampp/htdocs/new/templates/includes/navtrial2.php') ?>

    <section class="py-8">
        <div class="max-w-md mx-auto p-4">
            <div class="w-full max-w-[20rem] mx-auto mb-10 p-4 logo-link">
                <a href="#">
                    <img src="../assets/images/logo.png" alt="University Logo" class="w-full h-auto">
                </a>
            </div>

            <!-- Sign-in box -->
            <div class="relative bg-custom-red mx-auto border border-custom-red rounded-lg p-6 space-y-6">
                <div class="flex flex-col items-center justify-center p-4 bg-transparent text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#000000" class="w-6 h-6">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
                        <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" />
                    </svg>
                    <h2 class="text-lg font-bold">Sign In/Login</h2>
                </div>
                <form action="#" method="post" class="bg-transparent">
                    <div class="space-y-4">
                        <div class="flex items-center space-x-2 p-4 bg-transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#000000" class="w-6 h-6">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
                                <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" />
                            </svg>
                            <label for="username" class="flex-1 text-sm font-medium text-black">Username:</label>
                            <input type="text" id="username" placeholder="Enter Username" required="required" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"/>
                        </div>
                        <div class="flex items-center space-x-2 p-4 bg-transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#282f49" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M12 10v4" />
                                <path d="M10 13l4 -2" />
                                <path d="M10 11l4 2" />
                                <path d="M5 10v4" />
                                <path d="M3 13l4 -2" />
                                <path d="M3 11l4 2" />
                                <path d="M19 10v4" />
                                <path d="M17 13l4 -2" />
                                <path d="M17 11l4 2" />
                            </svg>
                            <label for="password" class="flex-1 text-sm font-medium text-black">Password:</label>
                            <input type="password" id="password" placeholder="Enter Password" required="required" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-custom-red focus:border-custom-red sm:text-sm"/>
                        </div>
                        <button type="submit" class="flex items-center mx-auto border border-red-950 rounded-lg bg-blue-950 text-white px-4 py-2 hover:bg-white hover:text-custom-red active:scale-95"><a href="http://localhost/new/templates/home.php">Submit</a></button>
                    </div>
                    <div class="text-center mt-4">
                        <p>Forgot your password? <a href="#"><span class="text-white">Click Here</span></a></p>
                    </div>
                    <div class="text-center mt-4">
                        <p>Not a Student? <a href="#"><span class="text-white">Click Here</span></a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include('C:/xampp/htdocs/new/templates/includes/footer.php') ?>
</body>
</html>
