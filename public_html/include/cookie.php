<?php
if(!isset($_COOKIE['cookie_consent'])){
    echo '<div id="cookie_consent_container_fixed" class="fixed opacity-75 bottom-6 left-6 z-30">
        <div id="cookie_consent_container" class="transform duration-300 inline-flex p-2 py-3 md:p-4 bg-white border text-xs md:text-sm font-chivo font-bold text-aba-brown justify-center space-x-2 items-center rounded">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="h-7 w-7" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 2a10 10 0 0 0-8.4 4.59a10 10 0 0 0 14.66 13.2A10 10 0 0 0 12 2zm2 2.26A8 8 0 0 1 19.74 10A9.78 9.78 0 0 0 15 11.38a15.7 15.7 0 0 0-2.4-2.21A10.06 10.06 0 0 0 14 4.26zM12 4a7.9 7.9 0 0 1-1.14 4.07c-.15-.08-.29-.17-.44-.24a15.52 15.52 0 0 0-4.09-1.47A8 8 0 0 1 12 4zM5 8.16A13.75 13.75 0 0 1 9.49 9.6l.13.08A7.93 7.93 0 0 1 4 12a8 8 0 0 1 1-3.84zm5 11.58A8 8 0 0 1 4.26 14a9.9 9.9 0 0 0 7.08-3.21a14 14 0 0 1 2 1.8A10 10 0 0 0 10 19.74zm2 .26a8 8 0 0 1 2.56-5.85c.06.08.12.15.17.23a14 14 0 0 1 1.84 4.18A7.93 7.93 0 0 1 12 20zm6.21-3a16 16 0 0 0-1.8-3.75L16.2 13a7.93 7.93 0 0 1 3.8-1a8 8 0 0 1-1.79 5z" fill="currentColor"></path></svg>
            <span>Ce site utilise des cookies</span>
            <button id="cookie_consent_button" class="p-1 bg-black font-semibold text-white tracking-wider rounded">OK !</button>
        </div>
    </div> <script src="js/library/cookie.js"></script>';  
}
?>
