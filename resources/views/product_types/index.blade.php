<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 sm:px-6 lg:px-8">
                    <div class="sm:flex sm:items-center">
                        <div class="mt-4 sm:mt-0  sm:flex-none">
                            <a href="{{ route('product_types.create') }}"
                                class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{
                                __('Nuevo Producto') }}</a>
                        </div>
                    </div>
                    <div class="mt-8 flow-root">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                                    {{ __('Nombre') }}</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">{{
                                                    __('Creación') }}</th>
                                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                    <span class="sr-only">{{ __('Acción') }}</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">
                                            @foreach ($productTypes as $type)
                                            <tr>
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                    {{ $type->name }}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    {{ $type->created_at->format('d/m/Y') }}</td>
                                                <td
                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                    <span class="isolate inline-flex rounded-md shadow-sm">
                                                        <a href="{{ route('product_types.show', $type->id) }}"
                                                            class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-blue-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">{{
                                                            __('Ver') }}</a>
                                                        <a href="{{ route('product_types.edit', $type->id) }}"
                                                            class="relative -ml-px inline-flex items-center bg-white px-3 py-2 text-sm font-semibold text-green-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">{{
                                                            __('Editar') }}</a>
                                                        <form action="{{route('product_types.destroy', $type->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="relative -ml-px inline-flex items-center rounded-r-md bg-white px-3 py-2 text-sm font-semibold text-red-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">{{
                                                                __('Eliminar') }}</button>
                                                        </form>
                                                    </span>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>