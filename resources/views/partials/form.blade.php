<div>
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $productType->name ?? '')" required autofocus autocomplete="name" />
    <x-input-error class="mt-2" :messages="$errors->get('name')" />
</div>

<div class="mt-4">
    <x-input-label for="freight" :value="__('Flete')" />
    <x-text-input id="freight" name="freight" type="number" class="mt-1 block w-full" :value="old('freight', $productType->freight ?? '')" required autofocus autocomplete="freight" />
    <x-input-error class="mt-2" :messages="$errors->get('freight')" />
</div>

<div class="mt-4">
    <x-input-label for="import_cost" :value="__('Gastos de importación')" />
    <x-text-input id="import_cost" name="import_cost" type="number" class="mt-1 block w-full" :value="old('import_cost', $productType->import_cost ?? '')" required autofocus autocomplete="import_cost" />
    <x-input-error class="mt-2" :messages="$errors->get('import_cost')" />
</div>

<div class="mt-4">
    <x-input-label for="sure" :value="__('Seguro')" />
    <x-text-input id="sure" name="sure" type="number" class="mt-1 block w-full" :value="old('sure', $productType->sure ?? '')" required autofocus autocomplete="sure" />
    <x-input-error class="mt-2" :messages="$errors->get('sure')" />
</div>

<div class="mt-4">
    <x-input-label for="tax" :value="__('Impuestos')" />
    <x-text-input id="tax" name="tax" type="number" class="mt-1 block w-full" :value="old('tax', $productType->tax ?? '')" required autofocus autocomplete="tax" />
    <x-input-error class="mt-2" :messages="$errors->get('tax')" />
</div>


<div class="flex items-center gap-4 mt-4">
    <x-primary-button>{{ request()->routeIs('product_types.create') ?  __('Crear') : __('Editar') }}</x-primary-button>
</div>