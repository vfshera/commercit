require('./bootstrap');











document.querySelector('#special-offer-btn').addEventListener('click', toggleOffer);
document.querySelector('#close-offer-btn').addEventListener('click', toggleOffer);
const discountsView = document.querySelector('.discounts-special-offers');


function toggleOffer(){
    if(discountsView.style.display = 'block') {
        discountsView.style.display = 'none'
    }else{
        discountsView.style.display = 'block';
    }
    
}