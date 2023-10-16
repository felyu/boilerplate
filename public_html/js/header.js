// Listen for click on the subscribe_to_newsletter_cta button
document.getElementById("subscribe_to_newsletter_cta").addEventListener("click", function() {
    console.log("subscribe_to_newsletter_cta clicked");
    // hide the subscribe_to_newsletter_cta button
    document.getElementById("subscribe_to_newsletter_cta").classList.add('hidden');
    // show the subscribe_to_newsletter_form
    document.getElementById("subscribe_to_newsletter_form").classList.remove('hidden');
    // focus on the email input
    document.getElementById("subscribe_to_newsletter_email").focus();
});


// To make appear/disapear the topbar
last_pos = 0;
actual_pos = 0;
window.addEventListener("scroll", function(event) {  
    last_pos = actual_pos,
    actual_pos = this.scrollY;
    if(actual_pos > 150 && last_pos < actual_pos){
        document.getElementById('header_top_bar').classList.add('-translate-y-full')
    }else{
        document.getElementById('header_top_bar').classList.remove('-translate-y-full')
    }
}, false);

// On click
document.getElementById('menu_button').onclick  = function(){
    if(document.getElementById('menu_button').getAttribute('data-is-toggled') == "false"){
        open_modal();
    }else{
        close_modal();
    }
};

// On click subscribe_to_newsletter_button
document.getElementById('subscribe_to_newsletter_button').onclick = function(){
    // Validate email
    subscribe_to_newsletter_email = document.getElementById('subscribe_to_newsletter_email').ariaValueMax
    // Regex to validate the email

    // Redirect to the subscribe url with get parameter email
    window.location = "https://thingstodoingeneva.com/subscribe?email=" + subscribe_to_newsletter_email
}

// Open Modal
function open_modal(){
    document.getElementById('header_top_bar').classList.add('!translate-y-0')

    document.getElementById('mobile_menu').classList.remove('hidden')
    document.querySelector('body').classList.add('!overflow-clip')
    document.getElementById('menu_button').innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-cs-darkbrown" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" /></svg>'
    document.getElementById('menu_button').classList.add('rotate-90')

    document.getElementById('menu_button').setAttribute('data-is-toggled',"true")
}

// Close Modal
function close_modal(){
    document.getElementById('header_top_bar').classList.remove('!translate-y-0')

    document.getElementById('mobile_menu').classList.add('hidden')
    document.querySelector('body').classList.remove('!overflow-clip')
    document.getElementById('menu_button').innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-cs-darkbrown" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path></svg>'
    document.getElementById('menu_button').classList.remove('rotate-90')

    document.getElementById('menu_button').setAttribute('data-is-toggled','false')
}

// Get the 