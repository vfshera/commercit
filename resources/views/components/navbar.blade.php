<div class="navbar-wrapper">
    <header >
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
            @if (Route::has('login'))
            <div class="space-x-4 self-end">
                @auth
                    <a
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150"
                    >
                        Log out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
                    @endif
                @endauth
            </div>
        @endif
          </ul>
  
        </nav>
</div>