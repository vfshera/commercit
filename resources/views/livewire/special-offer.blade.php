<div x-data="{ isOpen: true }">

    <div  x-show="isOpen" 
        class="discounts-special-offers"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90"
        >
        <span @click.prevent="isOpen = false" class="close-btn" id="close-offer-btn"><i class="ti-close"></i></span>
        <h2>Discounts & Special Offers</h2>
        
        <p>Keep in touch with us for special offers and discounts!</p>
        <form action="" wire:submit.prevent="addOfferMail">
            <input wire:model="email" type="text" placeholder="Enter Your Email...">
            
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
