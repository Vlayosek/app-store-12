<x-layouts.app.sidebar>
    <flux:main>
        {{ $slot }}
    </flux:main>

    @stack('js')

    @if (session('swal'))
    <script type="module">
        Swal.fire(@json(session('swal')));
    </script>
    @endif

</x-layouts.app.sidebar>
