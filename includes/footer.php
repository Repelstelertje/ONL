<!-- Footer -->
<footer>
	<ul class="footer-links">
		<li><a href="https://18date.net/" target="_blank" class="m-0">18Date</a> - </li>
		<li><a href="https://sex55.net/" target="_blank" class="m-0">Sex55</a> - </li>
		<li><a href="https://shemaledaten.net/" target="_blank" class="m-0">Shemale Daten</a> - </li>
		<li><a href="https://zoekertjesbelgie.be" target="_blank" class="m-0">Zoekertjes België</a> - </li>
        <li><a href="https://datingcontact.co.uk/" target="_blank" class="m-0">Dating Contact UK</a> - </li>
        <li><a href="https://datingnebenan.de/" target="_blank" class="m-0">Dating Nebenan</a> - </li>
        <li><a href="https://e-notifyer.nl/" target="_blank" class="m-0">E-notifyer</a> - </li>
		<li><a href="partnerlinks" class="m-0">Meer partnerlinks...</a></li>
	</ul>
  	<span class="sub-text">Copyright &copy; <?php echo date('Y'); ?> <?php echo $companyName; ?> | De gratis datingsite van Nederland </span>
</footer>
<script src="js/vendor/vue.2.5.13.min.js"></script>
<script src="js/vendor/axios.0.17.1.min.js"></script>
<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/jquery.cookieBar.min.js"></script>
<script src="js/vendor/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/vue-router@3.5.3"></script>
<script type="text/javascript" nonce="<?php echo $nonce; ?>">

	////Random IMG
	var topper = ['1.gif', '2.gif', '3.gif', '4.gif', '5.gif', '6.gif', '7.gif', '8.gif', '9.gif', '10.gif'];
	$('<a href="https://testars-consin.icu/543064f4-6080-4845-8f43-30f049426cdf?site={ONL}"><img class="align-center" src="img/banners/' + topper[Math.floor(Math.random() * topper.length)] + '" alt="Spannende plekken om contact te maken"></a>').appendTo('#top-banner');
	var footer = ['1.gif', '2.gif', '3.gif', '4.gif', '5.gif', '6.gif', '7.gif', '8.gif', '9.gif', '10.gif'];
	$('<a href="https://testars-consin.icu/543064f4-6080-4845-8f43-30f049426cdf?site={ONL}"><img class="align-center" src="img/banners/' + footer[Math.floor(Math.random() * footer.length)] + '" alt="Spannende plekken om contact te maken"></a>').appendTo('#footer-banner');
</script>

<?php 
        if (isset($type) && $type == "profile") {
                echo '<script src="js/profile.js?02"></script>';
        } else {
                echo '<script src="js/oproepjes.js?04"></script>';
        }
        echo '<script src="js/cookie-consent.js"></script>';
?>

<div id="cookie-banner" style="position: fixed; bottom: 0; left: 0; right: 0; background: #fff; border-top: 1px solid #ccc; padding: 15px; font-family: Arial, sans-serif; display: none; z-index: 9999;">
  <div style="max-width: 960px; margin: auto; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between;">
    <div style="flex: 1; min-width: 200px; font-size: 14px; color: #333;">
      We use cookies to enhance your experience. Read our <a href="/cookie-policy.html" target="_blank">Cookie Policy</a>.
    </div>
    <div style="flex-shrink: 0; margin-left: 10px;">
      <button onclick="acceptCookies()" style="background-color: #007BFF; color: white; padding: 8px 12px; border: none; cursor: pointer; margin-right: 5px;">Accept</button>
      <button onclick="declineCookies()" style="background-color: #ccc; color: #333; padding: 8px 12px; border: none; cursor: pointer;">Decline</button>
    </div>
  </div>
</div>

</body>

</html>
