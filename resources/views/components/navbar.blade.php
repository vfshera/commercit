<div class="navbar-wrapper" x-data="{ showCart: false }">
  <header>
    @livewire('special-offer')

    @livewire('search-box')

  </header>

  <nav>
    <ul>
      <li>
        <a href="{{ route('welcome') }}">Home</a>
      </li>
      <li>
        <a href="{{ route('collections.categories') }}">Categories</a>
      </li>
      <li>
        <a href="{{ route('collections.featured') }}">Featured</a>
      </li>
      <li>
        <a href="{{ route('about') }}">About Us</a>
      </li>
    </ul>


    <ul>

      <span class="cart-icon mx-6 cursor-pointer" @click="showCart = ! showCart">
        Cart<i class="ti-bag h-6 ml-1"></i>
      </span>



      @if (Route::has('login'))
      <div class="space-x-4 self-end">
        @auth
        <a class="font-bold" href="{{ route('dashboard') }}">{{ auth()->user()->name }}</a>
        <a href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
          class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
          Log out
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        @else
        <a href="{{ route('login') }}"
          class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Log
          in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}"
          class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
        @endif
        @endauth
      </div>
      @endif
    </ul>

  </nav>



  <div x-show="showCart" x-transition:enter.duration.500ms x-transition:leave.duration.400ms>
    @livewire('shopping-cart')
  </div>

</div>