<footer class="scecomm-container">

    

    <div class="info">
  
      <div class="drive">
        <h3>ABOUT THE SHOP</h3>
        <p><span>{{ config('app.name') }}</span> is the leading suppliers of Stationery, Office Furniture and IT with over 27 years of experience in East Africa</p>
      </div>
  
      <div class="copyright">
        &copy; {{ config('app.name'). " " .date('Y')}}  | By Franklin Shera
      </div>
  
    </div>
  
   <div class="footer-links">
      <h3>CUSTOMER SERVICE</h3>
      <ul>
          <li>
              <a href="#">How It Works</a>
          </li>
          <li>
              <a href="#">FAQs</a>
          </li>
          <li>
              <a href="#">Delivery & Shipping</a>
          </li>
          <li>
              <a href="#">Payment Policy</a>
          </li>
          <li>
              <a href="#">Contact Us</a>
          </li>
          <li>
              <a href="{{ route('policy') }}">Privacy Policy</a>
          </li>
          <li>
              <a href="{{ route('terms') }}">Terms & Conditions</a>
          </li>
      </ul>
    </div>
  </footer>