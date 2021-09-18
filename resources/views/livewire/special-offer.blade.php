<div x-data="{ isOpen: false }">

    <div  x-show="isOpen" class="discounts-special-offers">
        <span @click.prevent="isOpen = false" class="close-btn" id="close-offer-btn"><i class="ti-close"></i></span>
        <h2>Discounts & Special Offers</h2>
        
        <p>Keep in touch with us for special offers and discounts!</p>
        <form action="">
            <input type="text" placeholder="Enter Your Email...">
            
            <button>Subscribe</button>
        </form>

    </div>
    
    <div class="reach-us">
        <div class="contact-info">
          Contact: support@ecomm.shop -Tel: 0712345678
        </div>

        <button id="special-offer-btn" @click.prevent="isOpen = true">
            <i class="ti-location-arrow"></i>Subscribe For Special Offers
        </button>
    </div>

</div>
