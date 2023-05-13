<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Cotización') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('quotes.store') }}" method="POST">
                    <div class="py-6 px-4">
                        @csrf
                        @include('../partials/quoteForm')
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>