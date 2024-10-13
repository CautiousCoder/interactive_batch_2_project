<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Profile') }}
    </h2>
  </x-slot>

  <main class="container max-w-2xl mx-auto space-y-8 mt-8 px-2 min-h-screen">
    <!-- Cover Container -->
    <section
      class="bg-white border-2 p-8 border-gray-800 rounded-xl min-h-[400px] space-y-8 flex items-center flex-col justify-center">
      <!-- Profile Info -->
      <div class="flex gap-4 justify-center flex-col text-center items-center">
        <!-- Avatar -->
        <div class="relative">
          <img class="w-32 h-32 rounded-full border-2 border-gray-800" src="{{ asset($user->img) }}"
            alt="{{ $user->fname . ' ' . $user->lname }}" />
          <span
            class="bottom-2 right-4 absolute w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
        </div>
        <!-- /Avatar -->

        <!-- User Meta -->
        <div>
          <h1 class="font-bold md:text-2xl">{{ ucwords($user->fname . ' ' . $user->lname) }}</h1>
          <p class="text-gray-700">{{ $user->bio }}</p>
        </div>
        <!-- / User Meta -->
      </div>
      <!-- /Profile Info -->

    </section>
    <!-- /Cover Container -->


    <!-- Newsfeed -->
    <section id="newsfeed" class="space-y-6">

      @forelse ($posts as $post)
        <article class="bg-white border-2 border-black rounded-lg shadow mx-auto max-w-none px-4 py-5 sm:px-6">
          <!-- Barta Card Top -->
          <header>
            <div class="flex items-center justify-between">
              <div class="flex items-center space-x-3">
                <!-- User Avatar -->
                <div class="flex-shrink-0">
                  <img class="h-10 w-10 rounded-full object-cover" src="{{ asset($post->user->img) }}"
                    alt="{{ $post->user->fname . ' ' . $post->user->lname }}" />-->
                </div>
                <!-- /User Avatar -->

                <!-- User Info -->
                <div class="text-gray-900 flex flex-col min-w-0 flex-1">
                  <a href="profile.html" class="hover:underline font-semibold line-clamp-1">
                    {{ ucwords($post->user->fname . ' ' . $post->user->lname) }}
                  </a>

                  <a href="profile.html" class="hover:underline text-sm text-gray-500 line-clamp-1">
                    {{ '@' . $post->user->username }}
                  </a>
                </div>
                <!-- /User Info -->
              </div>

              <!-- Card Action Dropdown -->
              <div class="flex flex-shrink-0 self-center" x-data="{ open: false }">
                <div class="relative inline-block text-left">
                  <div>
                    <button @click="open = !open" type="button"
                      class="-m-2 flex items-center rounded-full p-2 text-gray-400 hover:text-gray-600"
                      id="menu-0-button">
                      <span class="sr-only">Open options</span>
                      <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path
                          d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z">
                        </path>
                      </svg>
                    </button>
                  </div>
                  <!-- Dropdown menu -->
                  <div x-show="open" @click.away="open = false"
                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <a href="{{ route('posts.show', $post->id) }}"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1"
                      id="user-menu-item-0"> {{ __('Show') }} </a>
                    @if ($post->user_id === auth()->id())
                      <a href="{{ route('posts.edit', $post->id) }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1"
                        id="user-menu-item-0"> {{ __('Edit') }} </a>
                      <div class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"
                        tabindex="-1" id="user-menu-item-1">
                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                          @csrf
                          @method('delete')

                          <input class="w-full text-left cursor-pointer" type="submit" value="{{ __('Delete') }}">
                        </form>
                      </div>
                    @endif
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"
                      tabindex="-1" id="user-menu-item-1"> {{ __('Share') }} </a>
                  </div>
                </div>

              </div>
              <!-- /Card Action Dropdown -->
            </div>
          </header>

          <!-- Content -->
          <div class="py-4 text-gray-700 font-normal">
            <p>
              {{ $post->description }}
            </p>
          </div>

          <!-- Date Created & View Stat -->
          <div class="flex items-center gap-2 text-gray-500 text-xs my-2">
            <span class="">{{ $post->created_at->diffForHumans() }}</span>
            <span class="">•</span>
            <span>{{ $post->no_views . ' views' }}</span>
          </div>


        </article>

      @empty
        <!-- Barta Card -->
        <article class="bg-white border-2 border-black rounded-lg shadow mx-auto max-w-none px-4 py-5 sm:px-6">

          <!-- Content -->
          <div class="py-4 text-gray-700 font-normal">
            <p class="text-center">
              Oopsss! No Post found.
            </p>
          </div>

        </article>

        <!-- Barta Card -->
      @endforelse

    </section>
    <!-- /Newsfeed -->
  </main>
</x-app-layout>
