<div class="navbar-wrapper">
    <header>
       @livewire('special-offer')
  
        <div class="brand-name-search">
          <span>E-Comm Store</span>
          <form action="">
              <input type="text" placeholder="Search Items ...">
              <select name="" id="">
                  <option value="">All Categories</option>
                  <option value="">Printer</option>
                  <option value="">Copier Files</option>
                  <option value="">Chairs</option>
                  <option value="">Toners</option>
                  <option value="">Pens & Ink</option>
              </select>
              <button><i class="ti-search"></i></button>
          </form>
        </div>
       
      </header>
  
      <nav>
          
          <ul>
              <li>
                  <a href="#">Home</a>
              </li>
              <li>
                  <a href="#">Stationery</a>
              </li>
              <li>
                  <a href="#">IT</a>
              </li>
              <li>
                  <a href="#">Furniture</a>
              </li>
              <li>
                  <a href="#">About Us</a>
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