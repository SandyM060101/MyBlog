<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>My Blog</title>
    <style>
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 1s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-gray-900">
    <section class="min-h-screen bg-gradient-to-b from-orange-600 via-orange-500 to-orange-400 flex items-center">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6 py-12 fade-in">
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-5xl font-extrabold text-white leading-tight mb-5">
                    Project Ujian Akhir Semester
                    <span class="px-3 bg-orange-900 rounded shadow-md">
                        <a href="" target="_blank"
                            class="underline decoration-wavy decoration-orange-200 hover:decoration-orange-100 
                            text-transparent bg-clip-text bg-gradient-to-r from-orange-300 to-orange-500">
                            Pemrogramman Web 2
                        </a>
                    </span>
                </h1>
                <p class="text-lg text-white mb-6">
                    Proyek ini dikembangkan sebagai bagian dari penilaian akhir UAS untuk menunjukkan implementasi
                    Laravel dalam membangun aplikasi web Admin yang kuat dan efisien.
                </p>
                <a href="/admin"
                    class="bg-white text-orange-600 px-6 py-3 rounded-lg shadow-md font-semibold text-lg 
                    transition duration-300 ease-in-out hover:bg-orange-100">
                    Login to Panel Admin
                </a>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end mt-10 md:mt-0 fade-in"
                style="animation-delay: 0.5s;">
                <div
                    class="rounded-lg shadow-lg overflow-hidden bg-gradient-to-r from-yellow-500 via-red-500 to-orange-800 p-1">
                    <div class="bg-gray-800 p-2">
                        <img src="{{ asset('image/images.png') }}" alt="Filapanel Dashboard Screenshot"
                            class="rounded-md shadow-md w-full">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
