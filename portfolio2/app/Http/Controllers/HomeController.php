<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }
    public function tailwindConfig()
    {
        return $config = [
            'js' => [
                'js/scroll.js',
                'js/particles.js',
                'js/app.js'
            ],
            'linkjs_head' => [
                'https://cdn.tailwindcss.com'
            ],
            'linkjs' => [
                'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js',
            ],
            'css' => [
                'css/custom.css',
                'css/style.css',
                'font-awesome/css/all.min.css'
            ],
            'linkcss' => ['https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css'],

            'script' => [
                'tailwind.config = {
                    theme: {
                        colors: {
                        transparent: \'transparent\',
                        current: \'currentColor\',
                        \'purple\': \'#3f3cbb\',
                        \'midnight\': \'#121063\',
                        \'metal\': \'#565584\',
                        \'tahiti\': \'#3ab7bf\',
                        \'silver\': \'#ecebff\',
                        \'bubble-gum\': \'#ff77e9\',
                        \'bermuda\': \'#78dcca\',
                        \'gray-dark\': \'#3d3d3d\',
                        \'gray\': \'#8492a6\',
                        \'gray-light\': \'#a6a6a6\',
                        \'black\': \'#121212\',
                        \'white\': \'#f5f5f5\',
                        \'black-light\': \'#1212129c\',
                        \'hover\': {
                            100: \'#cffafe\',
                            200: \'#a5f3fc\',
                            300: \'#50505075\',
                            400: \'#22d3ee\',
                            500: \'#06b6d4\',
                            600: \'#0891b2\',
                            700: \'#0e7490\',
                            800: \'#155e75\',
                            900: \'#164e63\',
                        },
                        },
                        fontFamily: {
                        sans: [\'"Open Sans"\', \'sans-serif\'],
                        serif: [\'Merriweather\', \'serif\'],
                        firacode: [\'"Fira Code"\', \'serif\'],
                        },

                    }
                    }'
            ],
            
        ];
    }
    public function index()
    {
        $title = "Portofolio";
        $config = $this->tailwindConfig();
        $template = 'home';
        return view('layout', compact(
            'template',
            'config',
            'title'
        ));
    }
}
