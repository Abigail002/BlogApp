<x-base-layout>
    <div class="wrapper d-flex flex-column justify-between">
        <!-- Navbar -->
        @include('layouts.partials.navbar')

        <main class="flex-grow-1">
            @yield('content')
        </main>

        <!-- Footer -->
        @include('layouts.partials.footer')
    </div>
</x-base-layout>
