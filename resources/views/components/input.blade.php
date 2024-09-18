@props(['data'])
<div>
  <label for="{{ $data['id'] }}" class="block text-sm font-medium leading-6 text-gray-900">{{ $data['label'] }}</label>
  <div class="mt-2">
    <input id="{{ $data['id'] }}"
      {{ $attributes->merge([
          'class' =>
              'block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6',
      ]) }} />
  </div>

  {{-- name="username" type="text" autocomplete="username" placeholder="alparslan1029" required --}}
