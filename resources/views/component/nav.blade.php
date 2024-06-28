<nav class="col-start-2 col-end-12 text-white pt-8">
    <div class="flex justify-between items-center border-solid border-b-2 border-gray md:pb-8 pb-2">
        <h1 class="text-xl">Cao Nhật Linh</h1>
        <div class="hidden md:block">
            <ul class="text-base flex gap-8 ">
                <li class="inline-block w-28 text-center py-4 {{$template =='home' ? 'bg-hover-300 rounded-xl' : 'hover:bg-hover-300 rounded-xl'}} "><a href="#about">About</a></li>
                <li class="inline-block w-28 py-4 text-center {{$template =='projects' ? 'bg-hover-300 rounded-xl' : 'hover:bg-hover-300 rounded-xl'}}"><a href="#projects">Projects</a></li>
                <li class="inline-block w-28 py-4 text-center {{$template =='articles' ? 'bg-hover-300 rounded-xl' : 'hover:bg-hover-300 rounded-xl'}}"><a href="#articles">Articles</a></li>
                <li class="inline-block w-28 py-4 text-center {{$template =='contacts' ? 'bg-hover-300 rounded-xl' : 'hover:bg-hover-300 rounded-xl'}}"><a href="#contacts">Contacts</a></li>
            </ul>
        </div>
        <div class="flex md:hidden">
            <!-- Mobile menu button -->
            <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="hidden md:block">
        </div>
    </div>
    <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white text-end" aria-current="page">Dashboard</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-light hover:bg-gray-700 hover:text-white text-end">Team</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-light hover:bg-gray-700 hover:text-white text-end">Projects</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-light hover:bg-gray-700 hover:text-white text-end">Calendar</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-light hover:bg-gray-700 hover:text-white text-end">Reports</a>
        </div>
    </div>
</nav>