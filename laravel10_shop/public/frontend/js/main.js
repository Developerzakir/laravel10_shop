// *******hero-area*********
$('.hero-area').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
  dots:false,
  autoplay: true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
});// *******hero-area*********
// ******hot-deal-area********
$('.hot-deal-slider').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  dots:false,
  autoplay: true,
  autoplayTimeout: 2000,
  responsive:{
      0:{
          items:2
      },
      600:{
          items:4
      },
      1000:{
          items:6
      }
  }
});

// ******hot-deal-area********
// ******single-product-area*********
const minus = document.querySelector('.minus')
const num = document.querySelector('.num')
const num2 = document.querySelector('.num2')
const plus = document.querySelector('.plus')

let a  = 1;

minus.addEventListener('click', ()=> {
if(a > 1) {
    a--;
    num.innerText = a;
    num2.value = a;
}
})
plus.addEventListener('click', ()=> {
    a++;
    num.innerText = a;
    num2.value = a;
})
// ******single-product-area*********

// for single product page
const mainImage = document.getElementById('mainImage')
const smallImage = document.getElementsByClassName('smallImage')

smallImage[0].onclick = function() {
    mainImage.src = smallImage[0].src
}
smallImage[1].onclick = function() {
    mainImage.src = smallImage[1].src
}
smallImage[2].onclick = function() {
    mainImage.src = smallImage[2].src
}


// product related js code
