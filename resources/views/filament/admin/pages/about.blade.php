<!-- resources/views/filament/pages/about.blade.php -->

<x-filament::page>
    <div class="flex flex-col items-center justify-center p-4 bg-gray-50">
        <h1 class="text-5xl font-extrabold mb-6 text-center text-blue-700">
            Meet Our Team
        </h1>
        <br>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-5xl">
            <div
                class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                <img alt="Salsa Dwiyanti" class="w-full h-48 object-cover" src="{{ asset('image/Salsa.png') }}" />
                <div class="p-4">
                    <h2 class="text-2xl font-semibold text-blue-600 mb-1">
                        Salsa Dwiyanti
                    </h2>
                    <p class="text-gray-500 text-sm mb-2">
                        2169700001
                    </p>
                    <p class="text-gray-700">
                        Salsa adalah seorang desainer UI/UX yang berfokus pada pengalaman pengguna yang intuitif.
                    </p>
                </div>
            </div>
            <div
                class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                <img alt="Sandy Meliyawan" class="w-full h-48 object-cover" src="{{ asset('image/Sandy.png') }}" />
                <div class="p-4">
                    <h2 class="text-2xl font-semibold text-blue-600 mb-1">
                        Sandy Meliyawan
                    </h2>
                    <p class="text-gray-500 text-sm mb-2">
                        2169700003
                    </p>
                    <p class="text-gray-700">
                        Sandy adalah seorang pengembang web yang berpengalaman dalam menggunakan Laravel dan Tailwind
                        CSS..
                    </p>
                </div>
            </div>
            <div
                class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                <img alt="Listiani Lesveva S" class="w-full h-48 object-cover" src="{{ asset('image/Listi.png') }}" />
                <div class="p-4">
                    <h2 class="text-2xl font-semibold text-blue-600 mb-1">
                        Listiani Lesveva S
                    </h2>
                    <p class="text-gray-500 text-sm mb-2">
                        2169700006
                    </p>
                    <p class="text-gray-700">
                        Listiani adalah seorang analis sistem yang ahli dalam merancang solusi perangkat lunak.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-filament::page>
