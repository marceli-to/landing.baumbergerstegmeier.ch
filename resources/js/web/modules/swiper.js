import Swiper, { Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';

const swiper = new Swiper('.swiper', {
  modules: [Autoplay],
  direction: 'horizontal',
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
});