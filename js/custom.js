

// $(function() {
//     new WOW().init();
//     $('.templatemo-nav').singlePageNav({
//     	offset: 70
//     });

//     /* Hide mobile menu after clicking on a link
//     -----------------------------------------------*/
//     $('.navbar-collapse a').click(function(){
//         $(".navbar-collapse").collapse('hide');
//     });
// })

document.addEventListener("DOMContentLoaded", () => {
  const logo = document.getElementById("icon-logo");
  const anchor = document.getElementById("visibile-icon"); // Anchor

  window.addEventListener("scroll", () => {
    const anchorPosition = anchor.getBoundingClientRect().top;

    if (anchorPosition <= 0) {
      logo.style.opacity = "1"; // Show logo
    } else {
      logo.style.opacity = "0"; // Hide logo
    }
  });
});

AOS.init({
  duration: 800,      
  once: true          
})

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1, // по умолчанию одна карточка
  spaceBetween: 30, // расстояние между карточками
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    768: {
      slidesPerView: 2, // на планшетах 2 карточки
    },
    992: {
      slidesPerView: 3, // на десктопах 3 карточки
    }
  }
});

