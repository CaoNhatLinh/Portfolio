<header class="col-start-2 col-end-12 flex justify-between items-center text-white pb-8 pt-8 border-solid border-b-2 border-gray">
    <h1 class="text-xl">Cao Nhật Linh</h1>
    <nav>
        <ul class="text-base flex gap-8">
            <li class="inline-block w-28 text-center py-4 {{$template =='home' ? 'bg-hover-300 rounded-xl' : 'hover:bg-hover-300 rounded-xl'}} "><a href="#about">About</a></li>
            <li class="inline-block w-28 py-4 text-center {{$template =='projects' ? 'bg-hover-300 rounded-xl' : 'hover:bg-hover-300 rounded-xl'}}"><a href="#projects">Projects</a></li>
            <li class="inline-block w-28 py-4 text-center {{$template =='articles' ? 'bg-hover-300 rounded-xl' : 'hover:bg-hover-300 rounded-xl'}}"><a href="#articles">Articles</a></li>
            <li class="inline-block w-28 py-4 text-center {{$template =='contacts' ? 'bg-hover-300 rounded-xl' : 'hover:bg-hover-300 rounded-xl'}}l"><a href="#contacts">Contacts</a></li>
        </ul>
    </nav>
</header>