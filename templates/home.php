<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
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
</head>

<body class="bg-gray-100">
    <!-- Navigation -->
    <?php include('C:/xampp/htdocs/new/templates/includes/navtrial2.php') ?>

    <!-- Main Content -->
    <section class="py-8">
        <div class="max-w-7xl mx-auto p-4">
            <h1 class="text-2xl font-bold text-center text-custom-blue mb-8">Student Dashboard</h1>

            <!-- Dashboard Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Remaining Fees Balance -->
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-custom-red mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.1 0-2 .9-2 2h4c0-1.1-.9-2-2-2zm-6.93 5.34a8.12 8.12 0 00.1 4.46A2 2 0 005 19h14a2 2 0 001.83-1.2 8.16 8.16 0 00.1-4.46l-1.41-7.05a2 2 0 00-1.92-1.57H6.27a2 2 0 00-1.92 1.57L2.93 13.34zm8.07 5.16h-2v2a1 1 0 001 1h0a1 1 0 001-1v-2zm0-4v-2h-2v2h2z"/>
                    </svg>
                    <h2 class="text-lg font-bold text-center mb-2">Remaining Fees Balance</h2>
                    <p class="text-xl font-semibold text-green-500">$500</p>
                </div>

                <!-- School Status -->
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-custom-blue mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.5a3 3 0 00-3 3v.5H6.75a1 1 0 00-.75.3l-4 4a1 1 0 000 1.4l4 4a1 1 0 00.75.3H9v.5a3 3 0 003 3v0a3 3 0 003-3v-.5h2.25a1 1 0 00.75-.3l4-4a1 1 0 000-1.4l-4-4a1 1 0 00-.75-.3H15v-.5a3 3 0 00-3-3v0z"/>
                    </svg>
                    <h2 class="text-lg font-bold text-center mb-2">School Status</h2>
                    <p class="text-xl font-semibold text-green-500">Active</p>
                </div>

                <!-- Registration Status -->
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center">
                <svg class="h-[70px]"  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-share"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h3" /><path d="M16 22l5 -5" /><path d="M21 21.5v-4.5h-4.5" /></svg>
                    <h2 class="text-lg font-bold text-center mb-2">Registration Status</h2>
                    <p class="text-xl font-semibold text-green-500">Registered</p>
                </div>

                <!-- Timetable -->
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center md:col-span-2 lg:col-span-3">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-stats"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" /><path d="M18 14v4h4" /><path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M15 3v4" /><path d="M7 3v4" /><path d="M3 11h16" /></svg>
                    <h2 class="text-lg font-bold text-center mb-2">Timetable</h2>
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                            <tr>
                                <th class="py-3 px-6">Time</th>
                                <th class="py-3 px-6">Monday</th>
                                <th class="py-3 px-6">Tuesday</th>
                                <th class="py-3 px-6">Wednesday</th>
                                <th class="py-3 px-6">Thursday</th>
                                <th class="py-3 px-6">Friday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <td class="py-4 px-6">08:00 - 09:00</td>
                                <td class="py-4 px-6">Math</td>
                                <td class="py-4 px-6">Physics</td>
                                <td class="py-4 px-6">Chemistry</td>
                                <td class="py-4 px-6">Biology</td>
                                <td class="py-4 px-6">English</td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="py-4 px-6">09:00 - 10:00</td>
                                <td class="py-4 px-6">Physics</td>
                                <td class="py-4 px-6">Math</td>
                                <td class="py-4 px-6">Biology</td>
                                <td class="py-4 px-6">English</td>
                                <td class="py-4 px-6">Chemistry</td>
                            </tr>
                            <!-- Add more rows as necessary -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="mt-8 bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-lg font-bold text-custom-blue mb-4">Upcoming Events</h2>
                <ul class="list-disc pl-6">
                    <li class="mb-2"><strong>Exam Week:</strong> March 10 - March 20</li>
                    <li class="mb-2"><strong>Spring Break:</strong> April 5 - April 12</li>
                    <li><strong>Graduation Day:</strong> June 15</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('C:/xampp/htdocs/new/templates/includes/footer.php') ?>
</body>

</html>
