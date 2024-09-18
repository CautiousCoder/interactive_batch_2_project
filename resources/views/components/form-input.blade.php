@props(['data'])
<div class="sm:col-span-3">
  <label for="{{ $data['id'] }}" class="block text-sm font-medium leading-6 text-gray-900">{{ $data['label'] }}</label>
  <div class="mt-2">
    <input id="{{ $data['id'] }}"
      {{ $attributes->merge([
          'class' =>
              'block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6',
      ]) }} />
  </div>
</div>

{{-- type="text" name="first-name" autocomplete="given-name" value="Ahmed Shamim Hasan" --}}
