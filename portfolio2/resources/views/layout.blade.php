<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('component.head')
</head>

<body>
  <div id="particles-js" class=" bg-black fixed top-0 bottom-0 w-screen">
  </div>

  <div class="relative font-sans smooth-scroll-wrapper">
    <div class="absolute z-10 w-10/12 translate-x-[-50%] left-1/2">
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

</html>