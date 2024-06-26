<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  @include('component.head')
</head>z

<body>
  <div id="particles-js" class=" bg-black fixed top-0 bottom-0 w-screen">
  </div>

  <div class="relative font-sans smooth-scroll-wrapper">
    <div class="absolute w-full z-10 grid grid-cols-12">
      @include('component.nav')
      @include($template)
    </div>
  </div>
  <!-- scripts -->
  <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>

  @include('component.script')
</body>
sđsa
</html>