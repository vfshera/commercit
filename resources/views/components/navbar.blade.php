<div class="navbar-wrapper">
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

      <span class="cart-icon mx-6 cursor-pointer">
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


  <div class="cart-wrapper relative">
    <section class="shopping-cart w-1/4 absolute right-0 z-20 bg-white border border-gray-100 shadow-md p-5 rounded-b">
      <h6 class="mb-1 text-gray-900 font-bold">Shopping Cart</h6>

      <div class="cart-items border-t border-brand-1 py-2">

        <ul>
          @foreach( range(1,6) as $cartItem)

          <li
            class="flex items-center justify-between py-1 border-b bg-white border-gray-300 cursor-pointer hover:bg-brand-3">
            <img class="w-14" src="{{ url('storage/images/products/product' . rand(1,6) .'.webp') }}" alt="">
            <span class="title ">Item {{ $cartItem}}</span>
            <span class="quatity ">{{ rand(1,20)}}</span>
            <span class="price ">{{ $cartItem * rand(50,100)}}Ksh</span>
          </li>
          @endforeach
        </ul>


      </div>


      <div class="action flex justify-between items-center">
        <div class="total">
          Total {{ rand(1500,9000) }} Ksh.
        </div>

        <button class="px-8 py-2 bg-brand-1 text-white rounded shadow">Checkout</button>
      </div>
    </section>
  </div>
</div>