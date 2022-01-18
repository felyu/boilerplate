// Cookie Consent
document.getElementById('cookie_consent_button').onclick = function(e){
    document.getElementById('cookie_consent_container').classList.add('-translate-x-full')
    document.getElementById('cookie_consent_container_fixed').classList.add('left-0')
    document.cookie = "cookie_consent"+ "=" +"accepted"+ ";" + "expires="+ new Date(new Date().getTime()+60*60*1000*24).toGMTString()+";path=/";
}