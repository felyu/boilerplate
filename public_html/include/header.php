<header id="header_top_bar" class="flex transform duration-500 flex-col !sticky border-b py-2.5 px-6 justify-center items-center top-0 top bg-white backdrop-blur w-full z-50">

<!-- Navigation bar -->
<nav class="flex justify-between items-center container">
    <!-- Logo -->
    <div class="text-xl space-x-1 flex justify-center items-center flex-row md:text-2xl tracking-tight font-black">
        <a href="#">
            <img class="h-[29px] md:h-[32px] w-auto" src="./img/LogoThingsToDoInGeneva.svg" alt="" srttdet="">
        </a>
    </div>

    <!-- CTA -->
    <div id="top" class="inline-flex justify-center items-center space-x-4 md:space-x-0">

        <ul class="space-x-4 hidden mr-2  text-ttd-darkbrown  tracking-wide md:inline-flex justify-center items-center font-lc text-base font-black">
            <li class="duration-50 hover:border-b-[2px] border-ttd-darkbrown">
                <a href="https://chatstudy.io/chat.php">Deals</a>
            </li>

            <li class="duration-50 hover:border-b-[2px] border-ttd-darkbrown">
                <a href="https://chatstudy.io/offres.php">Places</a>
            </li>

            <li class="duration-50 hover:border-b-[2px] border-ttd-darkbrown">
                <a href="https://chatstudy.io/contact.php">Events</a>
            </li>

            <li class="duration-50 hover:border-b-[2px] border-ttd-darkbrown">
                <a href="https://chatstudy.io/foire-aux-questions.php">Blog</a>
            </li>

            <li class="duration-50 hover:border-b-[2px] border-ttd-darkbrown">
                <a href="https://chatstudy.io/foire-aux-questions.php">Stats</a>
            </li>

            <!-- <li class="duration-50 group relative inline-flex justify-center items-center  border-ttd-darkbrown">
                <img class="h-[22px] w-auto" src="./img/Globe.svg" alt="" srttdet="">
                <a id="language_switcher_button" href="#">English</a>
                <img class="h-[18px] w-auto" src="./img/ChevronDown.svg" alt="" srttdet="">

                <div id="language_switcher_popup" class="absolute hidden group group-hover:block top-10 text-center p-2 pb-2.5 space-y-2  border-ttd-gray-border border border-t-0 left-0 z-30 w-full bg-white rounded-b-sm">
                    <div>
                        <a class="hover:underline" href="https://chatstudy.io/foire-aux-questions.php">Français</a>
                    </div>
                    <div>
                        <a class="hover:underline" href="https://chatstudy.io/foire-aux-questions.php">Deutsch</a>
                    </div>
                </div> 
            </li> -->
        </ul>

        <form id="subscribe_to_newsletter_form" class="hidden inline-flex justify-center items-center space-x-1">
            <input id="subscribe_to_newsletter_email" placeholder="Enter your email" class="h-[36px] bg-ttd-darkbrown/5 rounded-sm border-[1px] outline-1 outline-ttd-darkbrown border-ttd-darkbrown/50" type="email">
            <button type="button" id="subscribe_to_newsletter_button"><div class="px-4 font-mw font-bold tracking-tighter text-sm md:text-sm bg-ttd-orange duration-300 shadow-ttd-orange/50 hover:outline-4 text-white py-2 rounded-sm shadow-sm hover:ring-2 hover:underline ring-ttd-orange/30">Send</div></button>
        </form>

        <a id="subscribe_to_newsletter_cta" href="#"><div class="ml-2 px-4 font-mw font-bold tracking-tight text-xs md:text-sm bg-ttd-orange duration-150 shadow-ttd-orange/0 hover:outline-4 text-white py-2 rounded-sm shadow-sm hover:ring-2 hover:underline ring-ttd-orange/80">Join our Newsletter</div></a>

        <a data-is-toggled="false" class="transform duration-300 md:hidden" id="menu_button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-ttd-darkbrown" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </a>
    </div>
</nav>
</header>

<div id="mobile_menu" class="h-screen hidden md:hidden bg-opacity-95 backdrop-blur-lg backdrop-filter bg-white w-screen fixed top-0 z-40 pt-28">
    <ul class=" text-ttd-darkbrown tracking-wide flex flex-col justify-center items-center font-chivo text-2xl space-y-6 font-bold">
        <li class="duration-100 hover:border-b-[3px] border-ttd-violet">
            <a href="https://chatstudy.io">Accueil</a>
        </li>

        <li class="duration-100 hover:border-b-[3px] border-ttd-violet">
            <a href="https://chatstudy.io/chat.php">Chat</a>
        </li>

        <li class="duration-100 hover:border-b-[3px] border-ttd-violet">
            <a href="https://chatstudy.io/offres.php">Offres</a>
        </li>

        <li class="duration-100 hover:border-b-[3px] border-ttd-violet">
            <a href="https://chatstudy.io/contact.php">Contact</a>
        </li>

        <li class="duration-100 hover:border-b-[3px] border-ttd-violet">
            <a href="https://chatstudy.io/faq.php">FAQ</a>
        </li>

        <li class="duration-100 hover:border-b-[3px] border-ttd-violet">
            <a href="https://chatstudy.io/legal">Legal</a>
        </li>
    </ul>
</div>
