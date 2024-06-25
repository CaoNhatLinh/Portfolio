<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <title>particles.js</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <link rel="stylesheet" href="./css/custom.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="
    https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
    " rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
  </style>

  <script>

    tailwind.config = {
      theme: {
        colors: {
          transparent: 'transparent',
          current: 'currentColor',
          'purple': '#3f3cbb',
          'midnight': '#121063',
          'metal': '#565584',
          'tahiti': '#3ab7bf',
          'silver': '#ecebff',
          'bubble-gum': '#ff77e9',
          'bermuda': '#78dcca',
          'gray-dark': '#3d3d3d',
          'gray': '#8492a6',
          'gray-light': '#a6a6a6',
          'black': '#121212',
          'white': '#f5f5f5',
          'black-light': '#1212129c',
          'hover': {
            100: '#cffafe',
            200: '#a5f3fc',
            300: '#50505075',
            400: '#22d3ee',
            500: '#06b6d4',
            600: '#0891b2',
            700: '#0e7490',
            800: '#155e75',
            900: '#164e63',
          },
        },
        fontFamily: {
          sans: ['"Open Sans"', 'sans-serif'],
          serif: ['Merriweather', 'serif'],
          firacode: ['"Fira Code"', 'serif'],
        },

      }
    }
  </script>
</head>

<body>
  <div id="particles-js" class=" bg-black fixed top-0 bottom-0 w-screen">
  </div>

  <div class="relative font-sans smooth-scroll-wrapper">
    <div class="absolute z-10 w-10/12 translate-x-[-50%] left-1/2">
      <header class="flex justify-between items-center text-white pb-8 pt-8 border-solid border-b-2 border-gray">
        <h1 class="text-xl">Cao Nhật Linh</h1>
        <nav>
          <ul class="text-base flex gap-8">
            <li class="inline-block w-28 text-center py-4 bg-hover-300 rounded-xl" aria-current="page"><a
                href="#about">About</a></li>
            <li class="inline-block w-28 py-4  text-center hover:bg-hover-300 rounded-xl"><a
                href="#projects">Projects</a></li>
            <li class="inline-block w-28 py-4 text-center hover:bg-hover-300 rounded-xl"><a
                href="#articles">Articles</a></li>
            <li class="inline-block w-28 py-4 text-center hover:bg-hover-300 rounded-xl"><a
                href="#contacts">Contacts</a></li>
          </ul>
        </nav>
        <div>
        </div>
      </header>
      @include($template)
    </div>
  </div>


  <!-- scripts -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
  <script src="./js/scroll.js"></script>
  <script src="./js/particles.js"></script>
  <script src="./js/app.js"></script>


</body>

</html>