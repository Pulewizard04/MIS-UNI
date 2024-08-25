<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs Offered</title>
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
                        'custom-red': '#8a2b31',
                        'custom-green': '#3ba55d'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100">
    <!-- Navigation -->
    <?php include('C:/xampp/htdocs/new/templates/includes/navtrial2.php') ?>

    <!-- Main Content -->
    <section class="py-8">
        <div class="max-w-7xl mx-auto p-4">
            <h1 class="text-2xl font-bold text-center text-custom-blue mb-8">Programs Offered</h1>

            <!-- Programs Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Program Example -->
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-custom-blue mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4 -4"></path>
                    </svg>
                    <h2 class="text-lg font-bold text-center mb-2">Bachelor of Science in Computer Science</h2>
                    <p class="text-sm text-gray-600 mb-2">Duration: 4 years</p>
                    <p class="text-sm text-gray-600 text-center">Explore the world of computing, algorithms, and advanced programming techniques in our Computer Science program.</p>
                </div>

                <!-- Program Example -->
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-custom-red mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <h2 class="text-lg font-bold text-center mb-2">Bachelor of Business Administration</h2>
                    <p class="text-sm text-gray-600 mb-2">Duration: 4 years</p>
                    <p class="text-sm text-gray-600 text-center">Gain comprehensive knowledge in business management, finance, and marketing with our BBA program.</p>
                </div>

                <!-- Program Example -->
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-custom-green mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3h14v12H5zM5 21v-6h14v6"></path>
                    </svg>
                    <h2 class="text-lg font-bold text-center mb-2">Bachelor of Arts in Psychology</h2>
                    <p class="text-sm text-gray-600 mb-2">Duration: 4 years</p>
                    <p class="text-sm text-gray-600 text-center">Delve into the study of the human mind, behavior, and mental processes with our Psychology program.</p>
                </div>

                <!-- Program Example -->
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-custom-blue mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5v14h14V5H5zm9 5h-4v4h4v-4z"></path>
                    </svg>
                    <h2 class="text-lg font-bold text-center mb-2">Bachelor of Engineering in Civil Engineering</h2>
                    <p class="text-sm text-gray-600 mb-2">Duration: 5 years</p>
                    <p class="text-sm text-gray-600 text-center">Learn the fundamentals of designing, constructing, and maintaining infrastructure in our Civil Engineering program.</p>
                </div>

                <!-- Program Example -->
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-custom-red mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l9 4-9 4-9-4 9-4zm0 12v8m-9-4l9 4 9-4"></path>
                    </svg>
                    <h2 class="text-lg font-bold text-center mb-2">Bachelor of Fine Arts in Graphic Design</h2>
                    <p class="text-sm text-gray-600 mb-2">Duration: 4 years</p>
                    <p class="text-sm text-gray-600 text-center">Enhance your creativity and technical skills in visual communication with our Graphic Design program.</p>
                </div>

                <!-- Program Example -->
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-custom-green mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.1 0-2 .9-2 2h4c0-1.1-.9-2-2-2zm-6.93 5.34a8.12 8.12 0 00.1 4.46A2 2 0 005 19h14a2 2 0 001.83-1.2 8.16 8.16 0 00.1-4.46l-1.41-7.05a2 2 0 00-1.92-1.57H6.27a2 2 0 00-1.92 1.57L2.93 13.34zm8.07 5.16h-2v2a1 1 0 001 1h0a1 1 0 001-1v-2zm0-4v-2h-2v2h2z"/>
                    </svg>
                    <h2 class="text-lg font-bold text-center mb-2">Bachelor of Science in Nursing</h2>
                    <p class="text-sm text-gray-600 mb-2">Duration: 4 years</p>
                    <p class="text-sm text-gray-600 text-center">Prepare for a rewarding career in healthcare by studying patient care, anatomy, and medical procedures in our Nursing program.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('C:/xampp/htdocs/new/templates/includes/footer.php') ?>
</body>

</html>
