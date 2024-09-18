<x-app-layout>
  <x-slot:page_title> Register Page </x-slot:page_title>
  <x-slot:heading></x-slot:heading>
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <a href="{{ route('home') }}" class="text-center text-6xl font-bold text-gray-900">
        <h1>Barta</h1>
      </a>
      <h1 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
        Create a new account
      </h1>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route('register') }}" method="POST">
        @csrf
        <!-- Name -->
        <x-input name="name" type="text" autocomplete="name" placeholder="Alp Arslan" required
          :data="['id' => 'name', 'label' => 'Full Name']"></x-input>

        <!-- Username -->
        <x-input name="username" type="text" autocomplete="username" placeholder="alparslan1029" required
          :data="['id' => 'username', 'label' => 'Username']"></x-input>

        <!-- Email -->
        <x-input name="email" type="email" autocomplete="email" placeholder="alp.arslan@mail.com" required
          :data="['id' => 'email', 'label' => 'Email address']"></x-input>

        <!-- Password -->
        <x-input name="password" type="password" autocomplete="password" placeholder="••••••••" required
          :data="['id' => 'password', 'label' => 'Password']"></x-input>

        <!-- submit button -->
        <x-submit>Register</x-submit>
      </form>
      <p class="mt-10 text-center text-sm text-gray-500">
        Already a member?
        <a href="{{ route('login') }}" class="font-semibold leading-6 text-black hover:text-black">Sign In</a>
      </p>
    </div>
  </div>
</x-app-layout>
