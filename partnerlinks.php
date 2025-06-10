<?php
include('includes/header.php');

$partnerLinks = [
    ['url' => 'https://18date.net/', 'label' => '18Date.net'],
    ['url' => 'https://sex55.net/', 'label' => 'sex55.net'],
    ['url' => 'http://zoekertjesbelgie.be', 'label' => 'Zoekertjes België'],
    ['url' => 'https://flirthonk.nl', 'label' => 'De grootste gratis dating website van Nederland en België'],
    ['url' => 'http://www.meidenzoekensex.nl', 'label' => 'Meiden zoeken sex'],
    ['url' => 'http://www.topadultsites.nl', 'label' => 'Top Adultsites.nl'],
    ['url' => 'https://www.18plussexdating.nl', 'label' => '18plus sexdating'],
    ['url' => 'http://www.sextoplijst.com', 'label' => 'SexToplijst.com'],
    ['url' => 'http://www.huisvrouwenvoorsex.nl', 'label' => 'huisvrouwen voor sex'],
    ['url' => 'http://www.topswingersites.nl', 'label' => 'TopSwingersites'],
    ['url' => 'https://www.stellensexdating.nl', 'label' => 'Stellen sexdating'],
    ['url' => 'http://www.erotiektop100.nl', 'label' => 'Erotiek Top 100'],
    ['url' => 'http://www.hoerensexgids.nl', 'label' => 'Hoerensex gids'],
    ['url' => 'https://www.datingwebsites.nl/', 'label' => 'Datingwebsites.nl'],
    ['url' => 'http://www.contact-xXx.nl', 'label' => 'contact-xXx.nl'],
    ['url' => 'http://www.adulttop50.nl', 'label' => 'Adult Top 50'],
    ['url' => 'http://gratis-datingsites.jouwpagina.nl', 'label' => 'datingsites'],
    ['url' => 'http://dating.jouwpagina.nl', 'label' => 'dating jouwpagina'],
    ['url' => 'http://gratissex.boogolinks.nl', 'label' => 'gratissex'],
    ['url' => 'http://dating.boogolinks.nl', 'label' => 'dating'],
    ['url' => 'http://casualdating.bestelinks.nl', 'label' => 'casualdating'],
    ['url' => 'http://dating.bestelinks.nl', 'label' => 'dating bestelinks'],
    ['url' => 'http://dating-websites.links.nl', 'label' => 'dating-websites'],
    ['url' => 'http://dating.links.nl', 'label' => 'dating'],
    ['url' => 'http://daten.links.nl', 'label' => 'daten links'],
    ['url' => 'http://date.startguide.nl', 'label' => 'date startguide'],
    ['url' => 'http://dating.sitelinkje.nl/', 'label' => 'dating sitelinkje'],
    ['url' => 'http://dating.m4n.nl', 'label' => 'dating'],
    ['url' => 'http://date.m4n.nl', 'label' => 'date m4n'],
    ['url' => 'http://datingsites.jouwpagina.be', 'label' => 'jouw datingsites'],
    ['url' => 'http://dating.jouwpagina.be', 'label' => 'dating pagina be'],
    ['url' => 'http://dating.jouwbegin.nl', 'label' => 'jouw dating'],
    ['url' => 'http://date.jouwbegin.nl', 'label' => 'date begin'],
    ['url' => 'http://dating.uwpagina.nl', 'label' => 'uw dating'],
    ['url' => 'http://date.uwpagina.nl', 'label' => 'date pagina'],
    ['url' => 'http://dating.beginthier.nl', 'label' => 'dating'],
    ['url' => 'http://date.beginthier.nl', 'label' => 'date beginthier'],
    ['url' => 'http://dating.linkjespagina.nl', 'label' => 'dating'],
    ['url' => 'http://date.linkjespagina.nl', 'label' => 'date'],
    ['url' => 'http://sexdate.linkjespagina.nl', 'label' => 'sexdate linkjespagina'],
    ['url' => 'http://dating.eigenstart.nl', 'label' => 'eigen dating'],
    ['url' => 'http://date.eigenstart.nl', 'label' => 'date start'],
    ['url' => 'http://dating.expertpagina.nl', 'label' => 'expert dating'],
    ['url' => 'http://date.expertpagina.nl', 'label' => 'date'],
    ['url' => 'http://daten.expertpagina.nl', 'label' => 'daten pagina'],
    ['url' => 'http://dating.startbewijs.nl', 'label' => 'start dating'],
    ['url' => 'http://dating-nl.startbewijs.nl', 'label' => 'dating-nl bewijs'],
    ['url' => 'http://dating.allepaginas.nl', 'label' => 'alle dating'],
    ['url' => 'http://date.allepaginas.nl', 'label' => 'date'],
    ['url' => 'http://daten.allepaginas.nl', 'label' => 'daten paginas'],
    ['url' => 'http://dating.b9.nl', 'label' => 'dating'],
    ['url' => 'http://date.b9.nl', 'label' => 'date'],
    ['url' => 'http://sexdate.b9.nl', 'label' => 'sexdate b9'],
    ['url' => 'http://dating.linkexplorer.nl', 'label' => 'link dating'],
    ['url' => 'http://date.linkexplorer.nl', 'label' => 'date'],
    ['url' => 'http://sexdate.linkexplorer.nl', 'label' => 'sexdate explorer'],
    ['url' => 'http://dating.startpagina.net', 'label' => 'start dating'],
    ['url' => 'http://date.startpagina.net', 'label' => 'date'],
    ['url' => 'http://sexdate.startpagina.net', 'label' => 'sexdate pagina'],
    ['url' => 'http://datingsites.favos.nl', 'label' => 'dating'],
    ['url' => 'http://date.favos.nl', 'label' => 'date'],
    ['url' => 'http://sexdate.favos.nl', 'label' => 'sexdate favos'],
    ['url' => 'http://dating.start.be', 'label' => 'dating'],
    ['url' => 'http://date.start.be', 'label' => 'date'],
    ['url' => 'http://datingsite.start.be', 'label' => 'datingsite start'],
    ['url' => 'http://dating.startplezier.nl', 'label' => 'start dating'],
    ['url' => 'http://date.startplezier.nl', 'label' => 'date'],
    ['url' => 'http://sexdate.startplezier.nl', 'label' => 'sexdate plezier'],
    ['url' => 'http://dating.linkspot.nl', 'label' => 'link dating'],
    ['url' => 'http://date.linkspot.nl', 'label' => 'date'],
    ['url' => 'http://sexdate.linkspot.nl', 'label' => 'sexdate spot'],
    ['url' => 'http://dating.vindjeviahier.nl', 'label' => 'dating'],
    ['url' => 'http://date.vindjeviahier.nl', 'label' => 'date vindjeviahier'],
    ['url' => 'http://dating.tipjes.nl', 'label' => 'dating'],
    ['url' => 'http://date.tipjes.nl', 'label' => 'date'],
    ['url' => 'http://sexdate.tipjes.nl', 'label' => 'sexdate tipjes'],
    ['url' => 'http://dating.eigenoverzicht.nl', 'label' => 'eigen dating'],
    ['url' => 'http://date.eigenoverzicht.nl', 'label' => 'date overzicht'],
    ['url' => 'http://dating.webgidsje.nl', 'label' => 'dating'],
    ['url' => 'http://date.webgidsje.nl', 'label' => 'date'],
    ['url' => 'http://sexdate.webgidsje.nl', 'label' => 'sexdate webgidsje'],
    ['url' => 'http://dating.opzijnbest.nl', 'label' => 'dating opzijnbest'],
    ['url' => 'http://dating.zoekvinden.nl', 'label' => 'zoek dating'],
    ['url' => 'http://date.zoekvinden.nl', 'label' => 'date'],
    ['url' => 'http://sexdate.zoekvinden.nl', 'label' => 'sexdate vinden'],
    ['url' => 'http://dating.linkgoed.nl', 'label' => 'link dating'],
    ['url' => 'http://date.linkgoed.nl', 'label' => 'date'],
    ['url' => 'http://sexdate.linkgoed.nl', 'label' => 'sexdate goed'],
    ['url' => 'http://www.linkorado.com/', 'label' => 'Linkorado'],
];
?>
<div class="container">
    <div class="jumbotron my-4">
        <h1 class="text-center">Partnerlinks:</h1>
        <div class="row">
<?php
    $columns = array_chunk($partnerLinks, ceil(count($partnerLinks)/2));
    foreach ($columns as $col) {
        echo "<div class=\"col-md-6 col-12\"><ul>";
        foreach ($col as $link) {
            echo "<li><a href=\"{$link['url']}\" target=\"_blank\" class=\"m-0\">{$link['label']}</a></li>";
        }
        echo "</ul></div>";
    }
?>
            <div class="col-md-6 col-12">
                <ul>
                    <a href="http://www.linkorado.com/">Linkorado</a><br />Linkorado is a link exchange directory where you can find websites related to your site and request link exchanges<br /><br />
                </ul>
            </div>
        </div><!-- row -->
    </div>
</div><!-- /.container -->
<?php include('includes/footer.php'); ?>
