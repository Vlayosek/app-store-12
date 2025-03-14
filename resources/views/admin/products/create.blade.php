<x-layouts.app>
    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('dashboard')">Dashboard</flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('admin.products.index')">Productos</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="#">Nuevo</flux:breadcrumbs.item>
    </flux:breadcrumbs>
    <div class="card">
        <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <flux:select   name="category_id" label="Categoria" >
                <flux:select.option value="" selected>Seleccione una categoria</flux:select.option>
                @foreach ($categories as $category)
                    <flux:select.option value="{{ $category->id }}">{{ $category->name }}</flux:select.option>
                @endforeach
            </flux:select>
            <flux:field>
                <flux:label>Nombre</flux:label>
                <flux:input name="name" placeholder="Ej. Libro" value="{{ old('name') }}" autofocus />
                <flux:error name="name" />
            </flux:field>
            <flux:field class="mt-4">
                <flux:label>Descripci&oacute;n</flux:label>
                <flux:input name="description" placeholder="Ej. Libro de lectura" value="{{ old('description') }}" />
                <flux:error name="description" />
            </flux:field>
            <flux:field class="mt-4">
                <flux:label>Precio</flux:label>
                <flux:input name="price" placeholder="Ej. 100" value="{{ old('price') }}" />
                <flux:error name="price" />
            </flux:field>
            <flux:field class="mt-4">
                <flux:label>Stock</flux:label>
                <flux:input name="stock" placeholder="Ej. 100" value="{{ old('stock') }}" />
                <flux:error name="stock" />
            </flux:field>
            <flux:field class="mt-4">
                <flux:label>Imagen</flux:label>
                <flux:input type="file" name="image" />
                <flux:error name="image" />
            </flux:field>
            <flux:button class="mt-4" type="submit" variant="primary">Guardar</flux:button>
        </form>
    </div>
</x-layouts.app>

