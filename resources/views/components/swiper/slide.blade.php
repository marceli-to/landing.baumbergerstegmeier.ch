@props(['image', 'caption', 'alt'])
<div class="swiper-slide">
  <figure>
    <x-content.picture :image="$image" :alt="$alt" />
  </figure>
</div>