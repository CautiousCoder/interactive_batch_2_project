<x-app-layout>
  <x-slot:page_title> Login Page </x-slot:page_title>
  <x-slot:heading></x-slot:heading>
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <a href="{{ route('home') }}" class="text-center text-6xl font-bold text-gray-900">
        <h1>Barta</h1>
      </a>

      <h1 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
        Sign in to your account
      </h1>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route('userLogin') }}" method="POST">
        @csrf
        <!-- Email -->
        <x-input name="email" type="email" autocomplete="email" placeholder="alp.arslan@mail.com" required
          :data="['id' => 'email', 'label' => 'Email address']"></x-input>

        <!-- Password -->
        <x-input name="password" type="password" autocomplete="password" placeholder="••••••••" required
          :data="['id' => 'password', 'label' => 'Password']"></x-input>

        <!-- submit button -->
        <x-submit>Login</x-submit>
      </form>

      <p class="mt-10 text-center text-sm text-gray-500">
        Don't have an account yet?
        <a href="{{ route('register') }}" class="font-semibold leading-6 text-black hover:text-black">Sign Up</a>
      </p>
    </div>
  </div>
</x-app-layout>
