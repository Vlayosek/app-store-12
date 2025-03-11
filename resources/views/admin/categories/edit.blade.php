<x-layouts.app>
    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('dashboard')">Dashboard</flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('admin.categories.index')">Categorias</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="#">Nuevo</flux:breadcrumbs.item>
    </flux:breadcrumbs>
    <div class="card">
        <form action="{{ route('admin.categories.update', $category) }}"  method="post">
            @csrf
            @method('PUT')
            <flux:field>
                <flux:label>Nombre</flux:label>
                <flux:input name="name" placeholder="Ej. Libro" value="{{ old('name', $category->name) }}" autofocus />
                <flux:error name="name" />
            </flux:field>
            <flux:field class="mt-4">
                <flux:label>Descripci&oacute;n</flux:label>
                <flux:input name="description" placeholder="Ej. Libro de lectura" value="{{ old('description', $category->description) }}" />
                <flux:error name="description" />
            </flux:field>
            <flux:button class="mt-4" type="submit" variant="primary">Guardar</flux:button>
        </form>
    </div>
</x-layouts.app>

