<?php
  $companyName = "Oproepjes Nederland";
  include('includes/nav_items.php');
  include('includes/config.php');

  // Enable verbose error output only when running in development
  if (getenv('ONL_ENV') === 'development') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
  }

  if (empty($page_title)) {
    $page_title = 'Contact Advertenties';
  }
$nonce = base64_encode(random_bytes(16));
?>

<!DOCTYPE html>
<html lang="nl-NL">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gratis datingsite - Ben jij op zoek naar een leuke gratis date? Hier vind je meer dan duizend singles die willen daten. Aanmelding is helemaal gratis.">
    <meta name="author" content="Oproepjes Nederland">
    <link rel="apple-touch-icon" sizes="57x57" href="img/fav/apple-icon-57x57.png">
<meta http-equiv="Content-Security-Policy" content="
        default-src 'self';
        font-src 'self' https://fonts.gstatic.com;
        img-src 'self' https://16hl07csd16.nl https://region1.google-analytics.com www.googletagmanager.com https://ssl.gstatic.com https://www.gstatic.com https://www.google-analytics.com https://20fhbe2020.be;
        style-src 'self' https://tagmanager.google.com https://fonts.googleapis.com 'unsafe-inline';
        style-src-elem 'self' https://tagmanager.google.com https://fonts.googleapis.com 'unsafe-inline';
        connect-src 'self' https://region1.google-analytics.com https://tagmanager.google.com https://www.google-analytics.com https://16hl07csd16.nl https://20fhbe2020.be;
        script-src 'self' https://16hl07csd16.nl https://www.googletagmanager.com https://www.google-analytics.com https://ssl.google-analytics.com https://ajax.googleapis.com https://maxcdn.bootstrapcdn.com https://unpkg.com 'nonce-<?php echo $nonce; ?>' 'sha256-WwSlXI54tpz3oRisOne8KKEqXFjbTYCI2AzKef7+7nE='
    " >
    <link rel="apple-touch-icon" sizes="60x60" href="img/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?php
        // Canonical URL logic
        $canonicalUrl = $baseUrl; // Default canonical URL
        $title = "Dating Advertenties Nederland"; // Default title

        if (isset($_GET['item']) && !empty($_GET['item'])) {
            $item = htmlspecialchars($_GET['item']);
            $canonicalUrl = $baseUrl . "/dating-" . $item;
            $title = "Dating " . $item;
        } else if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = htmlspecialchars($_GET['id']);
            $canonicalUrl = $baseUrl . "/profile?id=" . $id;
            $title = "Daten met " . $id;
        } else if (isset($_GET['tip']) && !empty($_GET['tip'])) {
            $tip = htmlspecialchars($_GET['tip']);
            $canonicalUrl = $baseUrl . "/datingtips-" . $tip;
            $title = "Datingtips " . $tip;
        }

        echo '<link rel="canonical" href="' . $canonicalUrl . '" >';
        echo '<title>' . $title . '</title>';
    ?>

    <?php
        // Stel standaardwaarden in
        $default_title = "Oproepjes Nederland - Dé plek voor oproepjes in Nederland";
        $default_description = "Vind en plaats oproepjes in heel Nederland. Eenvoudig platform om jouw oproepje snel en gemakkelijk te delen.";
        $default_image = $baseUrl . "/img/bg.jpg";
        $default_url = $baseUrl;

        // Dynamisch genereren van inhoud gebaseerd op de pagina-URL
        $current_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        // Standaardwaarden instellen
        $og_title = $default_title;
        $og_description = $default_description;
        $og_image = $default_image;
        $og_url = $default_url;

        // Koppeling tussen slug en Open Graph data
        $og_pages = [
            'dating-drenthe' => [
                'title' => 'Dating in Drenthe - Vind je date op Oproepjes Nederland',
                'description' => 'Op zoek naar een date in Drenthe? Plaats je oproepje of reageer op een oproep via Oproepjes Nederland.',
                'image' => $baseUrl . '/img/nederland/drenthe.png'
            ],
            'dating-flevoland' => [
                'title' => 'Dating in Flevoland - Ontmoet singles via Oproepjes Nederland',
                'description' => 'Vind singles in Flevoland en plaats je datingoproep eenvoudig op Oproepjes Nederland.',
                'image' => $baseUrl . '/img/nederland/flevoland.png'
            ],
            'dating-friesland' => [
                'title' => 'Dating in Friesland - Vind je match via Oproepjes Nederland',
                'description' => 'Zoek of plaats een datingoproep in Friesland op Oproepjes Nederland. Dé plek voor contact en nieuwe ontmoetingen.',
                'image' => $baseUrl . '/img/nederland/friesland.png'
            ],
            'dating-gelderland' => [
                'title' => 'Dating in Gelderland - Oproepjes Nederland voor singles',
                'description' => 'Ontmoet nieuwe mensen in Gelderland. Plaats eenvoudig je datingoproep op Oproepjes Nederland.',
                'image' => $baseUrl . '/img/nederland/gelderland.png'
            ],
            'dating-groningen' => [
                'title' => 'Dating in Groningen - Vind je match op Oproepjes Nederland',
                'description' => 'Zoek of plaats een datingoproep in Groningen via Oproepjes Nederland. Eenvoudig, snel en gratis.',
                'image' => $baseUrl . '/img/nederland/groningen.png'
            ],
            'dating-limburg' => [
                'title' => 'Dating in Limburg - Ontmoet singles via Oproepjes Nederland',
                'description' => 'Op zoek naar een date in Limburg? Plaats of bekijk oproepjes via Oproepjes Nederland.',
                'image' => $baseUrl . '/img/nederland/limburg.png'
            ],
            'dating-noord-brabant' => [
                'title' => 'Dating in Noord-Brabant - Vind jouw match via Oproepjes Nederland',
                'description' => 'Zoek of plaats een datingoproep in Noord-Brabant via Oproepjes Nederland. Ontmoet singles bij jou in de buurt.',
                'image' => $baseUrl . '/img/nederland/noordbrabant.png'
            ],
            'dating-noord-holland' => [
                'title' => 'Dating in Noord-Holland - Ontmoet singles via Oproepjes Nederland',
                'description' => 'Vind singles in Noord-Holland en plaats je datingoproep eenvoudig op Oproepjes Nederland.',
                'image' => $baseUrl . '/img/nederland/noordholland.png'
            ],
            'dating-overijssel' => [
                'title' => 'Dating in Overijssel - Vind je match via Oproepjes Nederland',
                'description' => 'Ontmoet nieuwe mensen in Overijssel. Plaats je oproepje op Oproepjes Nederland en vind je date.',
                'image' => $baseUrl . '/img/nederland/overijssel.png'
            ],
            'dating-utrecht' => [
                'title' => 'Dating in Utrecht - Plaats of zoek oproepjes op Oproepjes Nederland',
                'description' => 'Zoek of plaats een datingoproep in Utrecht via Oproepjes Nederland. Vind jouw match eenvoudig.',
                'image' => $baseUrl . '/img/nederland/utrecht.png'
            ],
            'dating-zeeland' => [
                'title' => 'Dating in Zeeland - Vind je date via Oproepjes Nederland',
                'description' => 'Ontmoet singles in Zeeland. Plaats of bekijk datingoproepjes via Oproepjes Nederland.',
                'image' => $baseUrl . '/img/nederland/zeeland.png'
            ],
            'dating-zuid-holland' => [
                'title' => 'Dating in Zuid-Holland - Vind je match via Oproepjes Nederland',
                'description' => 'Zoek of plaats een datingoproep in Zuid-Holland via Oproepjes Nederland en ontmoet nieuwe mensen.',
                'image' => $baseUrl . '/img/nederland/zuidholland.png'
            ],
        ];

        // Zoek een match in de array
        foreach ($og_pages as $keyword => $data) {
            if (strpos($current_url, $keyword) !== false) {
                $og_title = $data['title'];
                $og_description = $data['description'];
                $og_image = $data['image'];
                $og_url = $current_url;
                break;
            }
        }
    ?>

    <!-- Voeg dynamische Open Graph-tags toe in de HTML -->
    <meta property="og:title" content="<?php echo $og_title; ?>">
    <meta property="og:description" content="<?php echo $og_description; ?>">
    <meta property="og:url" content="<?php echo $og_url; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo $og_image; ?>">

    <!-- Twitter Cards voor betere integratie met Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $og_title; ?>">
    <meta name="twitter:description" content="<?php echo $og_description; ?>">
    <meta name="twitter:image" content="<?php echo $og_image; ?>">
    <meta name="twitter:url" content="<?php echo $og_url; ?>">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5M538168N4" nonce="<?php echo $nonce; ?>" SameSite=None; Secure></script>
    <script nonce="<?php echo $nonce; ?>" SameSite=None; Secure>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-5M538168N4');
    </script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="top">
    <div id="oproepjes">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="https://oproepjesnederland.nl/">Oproepjes Nederland</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu</button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php include('includes/nav.php'); ?>
            </div>
        </div>
    </nav>




