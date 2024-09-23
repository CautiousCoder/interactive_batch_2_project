<x-layout>
  <x-slot:title>Barta | Edit Profile</x-slot:title>

  <x-slot:main_content>

    <form class="space-y-6" action="{{ route('user.update') }}" method="POST">
      @csrf
      @method('put')
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <h2 class="text-xl font-semibold leading-7 text-gray-900">
            Edit Profile
          </h2>
          <p class="mt-1 text-sm leading-6 text-gray-600">
            This information will be displayed publicly so be careful what you
            share.
          </p>
          <div class="mt-10 border-b border-gray-900/10 pb-12">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <x-form-input type="text" name="fname" autocomplete="given-name" value="{{ $user->fname }}"
                :data="['id' => 'fname', 'label' => 'First Name']"></x-form-input>

              <x-form-input type="text" name="lname" autocomplete="given-name" value="{{ $user->lname }}"
                :data="['id' => 'lname', 'label' => 'Last Name']"></x-form-input>

              <x-form-input type="email" name="email" autocomplete="email" value="{{ $user->email }}"
                :data="['id' => 'email', 'label' => 'Email address']"></x-form-input>

              {{-- <div class="col-span-full">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                <div class="mt-2">
                  <input type="password" name="password" id="password" autocomplete="password"
                    class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
                </div>
              </div> --}}
              <x-form-input type="password" name="password" autocomplete="password"
                placeholder="Enter Your New Password." :data="['id' => 'password', 'label' => 'Password']"></x-form-input>
            </div>
          </div>

          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="col-span-full">
              <label for="bio" class="block text-sm font-medium leading-6 text-gray-900">Bio</label>
              <div class="mt-2">
                <textarea id="bio" name="bio" rows="3"
                  class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6">
                  {{ $user->bio }}</textarea>
              </div>
              <p class="mt-3 text-sm leading-6 text-gray-600">
                Write a few sentences about yourself.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">
          Cancel
        </button> --}}
        <button type="submit"
          class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
          Save
        </button>
      </div>
    </form>

  </x-slot:main_content>

</x-layout>
