@extends('web.app')
@section('content')
  <section>
    <x-swiper>
      <x-swiper.slide :image="'baumberger-stegmeier-1'" :alt="''" />
      <x-swiper.slide :image="'baumberger-stegmeier-2'" :alt="''" />
      <x-swiper.slide :image="'baumberger-stegmeier-3'" :alt="''" />
      <x-swiper.slide :image="'baumberger-stegmeier-4'" :alt="''" />
      <x-swiper.slide :image="'baumberger-stegmeier-5'" :alt="''" />
      <x-swiper.slide :image="'baumberger-stegmeier-6'" :alt="''" />
      <x-swiper.slide :image="'baumberger-stegmeier-7'" :alt="''" />
    </x-swiper>
  </section>
  <section class="md:flex md:justify-between mt-8 xl:mt-12">
    <div>
      <h1 class="text-xl xl:text-2xl leading-none mb-10 xl:mb-7 font-regular">1.4.23: Wir sind umgezogen</h1>
      <p class="mb-0 leading-6">Baumberger Stegmeier Architektur<br>Weststrasse 70, CH-8003 Zürich<br>
        <a href="mailto:info@baumbergerstegmeier.ch">info@baumbergerstegmeier.ch</a>, <a href="tel:+41435005400">+41 43 500 54 00</a>
      </p>
    </div>
    <div class="flex justify-end mt-10 xl:mt-0">
      <a href="https://www.baumbergerstegmeier.ch/" class="block w-60 h-34">
        <x-icon.arrow-right />
      </a>
    </div>
  </section>
@endsection