<?php
  $companyName = "Oproepjes Nederland";
  include('includes/nav_items.php');
  $config = include('includes/config.php');

  // Enable verbose error reporting only when APP_DEBUG=true
  if (!empty($config['DEBUG'])) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
  }
?>
<!DOCTYPE html>
<html lang="nl-NL">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gratis datingsite - Ben jij op zoek naar een leuke gratis date? Hier vind je meer dan duizend singles die willen daten. Aanmelding is helemaal gratis.">
    <meta name="author" content="Oproepjes Nederland">
    <link rel="apple-touch-icon" sizes="57x57" href="img/fav/apple-icon-57x57.png">
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
    <link rel="manifest" href="img/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php
        // Canonical URL logic
        $baseUrl = "https://oproepjesnederland.nl";
        $canonicalUrl = $baseUrl; // Default canonical URL
        $title = "Oproepjes Nederland"; // Default title
        if (isset($_GET['item'])) {
            $canonicalUrl = $baseUrl . "/dating-" . htmlspecialchars($_GET['item']);
            $title = "Dating " . htmlspecialchars($_GET['item']);
        } else if (isset($_GET['id'])) {
            $id = preg_replace('/[^0-9]/', '', $_GET['id']);
            $apiResponse = @file_get_contents("https://16hl07csd16.nl/profile/get0/8/" . $id);
            if ($apiResponse !== false) {
                $data = json_decode($apiResponse, true);
                if (isset($data['profile']['name'])) {
                    $profileName = $data['profile']['name'];
                    $slug = strtolower($profileName);
                    $slug = preg_replace('/\s+/', '-', $slug);
                    $slug = preg_replace('/[^a-z0-9-]/', '', $slug);
                    $slug = trim($slug, '-');
                    $canonicalUrl = $baseUrl . '/daten-met-' . $slug;
                    $title = 'Daten met ' . htmlspecialchars($profileName);
                } else {
                    $canonicalUrl = $baseUrl . "/profile?id=" . htmlspecialchars($_GET['id']);
                    $title = "Daten met " . htmlspecialchars($_GET['id']);
                }
            } else {
                $canonicalUrl = $baseUrl . "/profile?id=" . htmlspecialchars($_GET['id']);
                $title = "Daten met " . htmlspecialchars($_GET['id']);
            }
        } else if (isset($_GET['tip'])) {
            $canonicalUrl = $baseUrl . "/datingtips-" . htmlspecialchars($_GET['tip']);
            $title = "Datingtips " . htmlspecialchars($_GET['tip']);
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
        // Mapping van URL-sleutels naar Open Graph gegevens
        $og_title = $default_title;
        $og_description = $default_description;
        $og_image = $default_image;
        $og_url = $default_url;
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

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
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




