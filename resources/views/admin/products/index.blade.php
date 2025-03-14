<x-layouts.app>
    <div class="mb-4 flex justify-between items-center">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item :href="route('dashboard')">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item href="#">Productos</flux:breadcrumbs.item>
        </flux:breadcrumbs>

        <a href="{{ route('admin.products.create') }}" class="btn btn-blue text-xs">
            Crear Producto
        </a>
    </div>

    <div class="relative overflow-x-auto">
         <table id="myTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descripci&oacute;n
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $product->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $product->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->description }}
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-blue text-xs">
                                Editar
                            </a>
                            <form class="delete-form" action="{{ route('admin.products.destroy', $product) }}" method="post"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-red text-xs ml-2">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $products->links() }}
    </div>

    @push('js')
    <script>
        forms = document.querySelectorAll('.delete-form');
        forms.forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Estas seguro que desea eliminar el registro?',
                    text: "No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminarlo!',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                })
            })
        })
    </script>
    @endpush



   {{--  <script>
        import {Datatables} from 'simple-datatables';
        new simpleDatatables.DataTable('#myTable');
    </script> --}}
</x-layouts.app>

