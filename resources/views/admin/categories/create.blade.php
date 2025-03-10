<x-layouts.app>
    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('dashboard')">Dashboard</flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('admin.categories.index')">Categorias</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="#">Nuevo</flux:breadcrumbs.item>
    </flux:breadcrumbs>
    <div class="card">
        <form action="{{ route('admin.categories.store') }}" method="post">
            @csrf
            <flux:input type="text" name="name" label="Nombre" placeholder="Ej. Libro" class="mb-4" required></flux:input>
            <flux:input type="text"  name="description" label="Descripción" placeholder="Ej. Libro de lectura" class="mb-4" required ></flux:input>
            <flux:button variant="primary">Guardar</flux:button>
        </form>
    </div>

</x-layouts.app>
