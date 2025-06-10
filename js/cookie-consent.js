function acceptCookies() {
  localStorage.setItem('cookieConsent', 'accepted');
  document.getElementById('cookie-banner').style.display = 'none';
  loadGoogleAnalytics();
}

function declineCookies() {
  localStorage.setItem('cookieConsent', 'declined');
  document.getElementById('cookie-banner').style.display = 'none';
}

function loadGoogleAnalytics() {
  const script = document.createElement('script');
  script.src = 'https://www.googletagmanager.com/gtag/js?id=G-5M538168N4';
  script.async = true;
  document.head.appendChild(script);

  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-5M538168N4');
}

window.onload = function () {
  const consent = localStorage.getItem('cookieConsent');
  if (consent === 'accepted') {
    loadGoogleAnalytics();
  } else if (!consent) {
    document.getElementById('cookie-banner').style.display = 'block';
  }
};
=======
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
})