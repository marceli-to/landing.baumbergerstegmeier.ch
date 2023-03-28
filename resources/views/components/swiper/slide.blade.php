@props(['image', 'caption', 'alt'])
<div class="swiper-slide">
  <figure>
    <x-content.picture :image="$image" :alt="$alt" />
    <div class="swiper-lazy-preloader"></div>
  </figure>
</div>