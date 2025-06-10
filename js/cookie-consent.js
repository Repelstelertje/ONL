function setCookieConsent(statistics, marketing) {
  const consent = {
    necessary: true,
    statistics: statistics,
    marketing: marketing,
    timestamp: new Date().toISOString()
  };
  localStorage.setItem('cookieConsent', JSON.stringify(consent));
}

function getCookieConsent() {
  try {
    return JSON.parse(localStorage.getItem('cookieConsent'));
  } catch {
    return null;
  }
}

function loadAnalytics() {
  const script = document.createElement('script');
  script.src = 'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXX';
  script.async = true;
  document.head.appendChild(script);

  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-XXXXXXX');
}

function loadMarketing() {
  const script = document.createElement('script');
  script.src = 'https://www.googletagmanager.com/gtag/js?id=AW-XXXXXXX';
  script.async = true;
  document.head.appendChild(script);

  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-XXXXXXX');

  // Facebook Pixel (placeholder)
  // Insert your pixel script here if needed
}

function initializeCookies() {
  const consent = getCookieConsent();
  if (!consent) {
    document.getElementById('cookie-banner').style.display = 'block';
  } else {
    if (consent.statistics) loadAnalytics();
    if (consent.marketing) loadMarketing();
  }
}

document.getElementById('cookie-form').addEventListener('submit', function(e) {
  e.preventDefault();
  const statistics = document.getElementById('cookie-statistics').checked;
  const marketing = document.getElementById('cookie-marketing').checked;
  setCookieConsent(statistics, marketing);
  document.getElementById('cookie-banner').style.display = 'none';
  if (statistics) loadAnalytics();
  if (marketing) loadMarketing();
});

function acceptAllCookies() {
  document.getElementById('cookie-statistics').checked = true;
  document.getElementById('cookie-marketing').checked = true;
  setCookieConsent(true, true);
  document.getElementById('cookie-banner').style.display = 'none';
  loadAnalytics();
  loadMarketing();
}

window.onload = initializeCookies;
