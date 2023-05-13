<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    <div class="border-t border-gray-100">
                        <dl class="divide-y divide-gray-100">
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-900">{{ __('Nombre') }}</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $productType->name }}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-900">{{ __('Flete') }}</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $productType->freight }}%
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-900">{{ __('Gastos de importación') }}</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{ $productType->import_cost }}%</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-900">{{ __('Seguro') }}</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $productType->sure }}%</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-900">{{ __('Impuestos') }}</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $productType->tax }}%</dd>
                            </div>

                        </dl>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>