// core version + navigation, pagination modules:
import Swiper from 'swiper';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// init Swiper:
const swiper = new Swiper('.swiper', {
  modules: [Navigation, Pagination, Autoplay],
  speed: 1200,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  loop: true,
  centeredSlides: false,
  centeredSlidesBounds: true,
  slidesPerView: 1,
  autoHeight: false,
  autoplay: {
    delay: 3500,
    disableOnInteraction: true,
  },
  spaceBetween: 40,
  breakpoints: {
    769: {
      slidesPerView: 2.5,
      spaceBetween: 30,
    },
    1000: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

export {};
