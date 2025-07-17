<nav class="bg-white shadow p-4 flex justify-between items-center">
  <div class="space-x-6">
    <a href="{{ route('dashboard') }}" class="text-blue-600 font-semibold">Home</a>
    <a href="{{ route('tasks.index') }}" class="text-blue-600 font-semibold">Tasks</a>
    <a href="{{ route('categories.index') }}" class="text-blue-600 font-semibold">Categories</a>
  </div>

  <!-- Profile Dropdown -->
  <div class="hidden sm:flex sm:items-center sm:ml-6">
    <x-dropdown align="right" width="48">
      <x-slot name="trigger">
        <button class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition">
          <div>Hi, {{ Auth::user()->name }}</div>

          <div class="ml-1">
            <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
        </button>
      </x-slot>

      <x-slot name="content">
        <!-- Profile -->
        <x-dropdown-link :href="route('profile.edit')">
          {{ __('Profile') }}
        </x-dropdown-link>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault(); this.closest('form').submit();">
            {{ __('Log Out') }}
          </x-dropdown-link>
        </form>
      </x-slot>
    </x-dropdown>
  </div>
</nav>
