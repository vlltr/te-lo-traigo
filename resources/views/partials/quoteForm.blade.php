<div>
    <x-input-label for="name" :value="__('Nombre')" />
    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $quote->name ?? '')"
        required autofocus autocomplete="name" />
    <x-input-error class="mt-2" :messages="$errors->get('name')" />
</div>

<div class="mt-4">
    <x-input-label for="email" :value="__('Correo')" />
    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
        :value="old('email', $quote->email ?? '')" required autofocus autocomplete="email" />
    <x-input-error class="mt-2" :messages="$errors->get('email')" />
</div>

<div class="mt-4">
    <x-input-label for="weight" :value="__('Peso Lb.')" />
    <x-text-input id="weight" name="weight" type="number" class="mt-1 block w-full"
        :value="old('weight', $quote->weight ?? '')" required autofocus autocomplete="weight" />
    <x-input-error class="mt-2" :messages="$errors->get('weight')" />
</div>

<div class="mt-4">
    <x-input-label for="product_type_id" :value="__('Tipo de producto')" />
    <select id="product_type_id" name="product_type_id" required
        class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
        @foreach ($product_types as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
        @endforeach
    </select>
    <x-input-error class="mt-2" :messages="$errors->get('product_type_id')" />
</div>

<div class="mt-4">
    <x-input-label for="value" :value="__('Costo del producto')" />
    <x-text-input id="value" name="value" type="number" class="mt-1 block w-full" :value="old('value', $quote->value ?? '')"
        required autofocus autocomplete="value" />
    <x-input-error class="mt-2" :messages="$errors->get('value')" />
</div>


<div class="flex items-center gap-4 mt-4">
    <x-primary-button>{{ __('Crear') }}</x-primary-button>
</div>