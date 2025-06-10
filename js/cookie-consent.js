$(function(){
    $.cookieBar({
        message:"Deze website gebruikt tracking cookies.",
        acceptText:"Accepteren",
        declineText:"Weigeren",
        policyText:"Privacybeleid",
        policyURL:"/privacy.php",
        cookie:"cookieBar",
        expireDays:365
    });
});
