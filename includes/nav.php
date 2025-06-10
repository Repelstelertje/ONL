<ul class="navbar-nav ml-auto">
    <!-- Provincie links -->
    <li class="nav-item dropdown"> 
        <a class="nav-link dropdown-toggle drpdwn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Daten in Nederland</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php foreach ($navItems as $item) {echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";} ?>
        </div>
    </li>
    <!-- Datingtips links -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle drpdwn" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Datingtips</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <?php foreach ($navItems2 as $item2) {echo "<a class=\"dropdown-item\" href=\"$item2[slug]\">$item2[title]</a>"; } ?>
        </div>
    </li>
    <!-- Nieuwe sociale media links -->
    <li class="nav-item">
        <a class="nav-link" href="https://facebook.com/contactoproepjes" target="_blank"><img src="img/fb.png" alt="Facebook Contactoproepjes"></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://instagram.com/oproepjes_nederland" target="_blank"><img src="img/ig.png" alt="Instagram Oproepjes Nederland"></a>
    </li>
</ul>