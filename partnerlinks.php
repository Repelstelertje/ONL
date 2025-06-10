<?php
include('includes/header.php');

$partnerLinks = [
    ['url' => 'https://18date.net/', 'label' => '18Date.net'],
    ['url' => 'https://sex55.net/', 'label' => 'sex55.net'],
    ['url' => 'https://zoekertjesbelgie.be', 'label' => 'Zoekertjes België'],
    ['url' => 'https://flirthonk.nl', 'label' => 'De grootste gratis dating website van Nederland en België'],
    ['url' => 'https://www.meidenzoekensex.nl', 'label' => 'Meiden zoeken sex'],
    ['url' => 'https://www.topadultsites.nl', 'label' => 'Top Adultsites.nl'],
    ['url' => 'https://www.18plussexdating.nl', 'label' => '18plus sexdating'],
    ['url' => 'https://www.sextoplijst.com', 'label' => 'SexToplijst.com'],
    ['url' => 'https://www.huisvrouwenvoorsex.nl', 'label' => 'huisvrouwen voor sex'],
    ['url' => 'https://www.topswingersites.nl', 'label' => 'TopSwingersites'],
    ['url' => 'https://www.stellensexdating.nl', 'label' => 'Stellen sexdating'],
    ['url' => 'https://www.erotiektop100.nl', 'label' => 'Erotiek Top 100'],
    ['url' => 'https://www.hoerensexgids.nl', 'label' => 'Hoerensex gids'],
    ['url' => 'https://www.datingwebsites.nl/', 'label' => 'Datingwebsites.nl'],
    ['url' => 'https://www.contact-xXx.nl', 'label' => 'contact-xXx.nl'],
    ['url' => 'https://www.adulttop50.nl', 'label' => 'Adult Top 50'],
    ['url' => 'https://gratis-datingsites.jouwpagina.nl', 'label' => 'datingsites'],
    ['url' => 'https://dating.jouwpagina.nl', 'label' => 'dating jouwpagina'],
    ['url' => 'https://gratissex.boogolinks.nl', 'label' => 'gratissex'],
    ['url' => 'https://dating.boogolinks.nl', 'label' => 'dating'],
    ['url' => 'https://casualdating.bestelinks.nl', 'label' => 'casualdating'],
    ['url' => 'https://dating.bestelinks.nl', 'label' => 'dating bestelinks'],
    ['url' => 'https://dating-websites.links.nl', 'label' => 'dating-websites'],
    ['url' => 'https://dating.links.nl', 'label' => 'dating'],
    ['url' => 'https://daten.links.nl', 'label' => 'daten links'],
    ['url' => 'https://date.startguide.nl', 'label' => 'date startguide'],
    ['url' => 'https://dating.sitelinkje.nl/', 'label' => 'dating sitelinkje'],
    ['url' => 'https://dating.m4n.nl', 'label' => 'dating'],
    ['url' => 'https://date.m4n.nl', 'label' => 'date m4n'],
    ['url' => 'https://datingsites.jouwpagina.be', 'label' => 'jouw datingsites'],
    ['url' => 'https://dating.jouwpagina.be', 'label' => 'dating pagina be'],
    ['url' => 'https://dating.jouwbegin.nl', 'label' => 'jouw dating'],
    ['url' => 'https://date.jouwbegin.nl', 'label' => 'date begin'],
    ['url' => 'https://dating.uwpagina.nl', 'label' => 'uw dating'],
    ['url' => 'https://date.uwpagina.nl', 'label' => 'date pagina'],
    ['url' => 'https://dating.beginthier.nl', 'label' => 'dating'],
    ['url' => 'https://date.beginthier.nl', 'label' => 'date beginthier'],
    ['url' => 'https://dating.linkjespagina.nl', 'label' => 'dating'],
    ['url' => 'https://date.linkjespagina.nl', 'label' => 'date'],
    ['url' => 'https://sexdate.linkjespagina.nl', 'label' => 'sexdate linkjespagina'],
    ['url' => 'https://dating.eigenstart.nl', 'label' => 'eigen dating'],
    ['url' => 'https://date.eigenstart.nl', 'label' => 'date start'],
    ['url' => 'https://dating.expertpagina.nl', 'label' => 'expert dating'],
    ['url' => 'https://date.expertpagina.nl', 'label' => 'date'],
    ['url' => 'https://daten.expertpagina.nl', 'label' => 'daten pagina'],
    ['url' => 'https://dating.startbewijs.nl', 'label' => 'start dating'],
    ['url' => 'https://dating-nl.startbewijs.nl', 'label' => 'dating-nl bewijs'],
    ['url' => 'https://dating.allepaginas.nl', 'label' => 'alle dating'],
    ['url' => 'https://date.allepaginas.nl', 'label' => 'date'],
    ['url' => 'https://daten.allepaginas.nl', 'label' => 'daten paginas'],
    ['url' => 'https://dating.b9.nl', 'label' => 'dating'],
    ['url' => 'https://date.b9.nl', 'label' => 'date'],
    ['url' => 'https://sexdate.b9.nl', 'label' => 'sexdate b9'],
    ['url' => 'https://dating.linkexplorer.nl', 'label' => 'link dating'],
    ['url' => 'https://date.linkexplorer.nl', 'label' => 'date'],
    ['url' => 'https://sexdate.linkexplorer.nl', 'label' => 'sexdate explorer'],
    ['url' => 'https://dating.startpagina.net', 'label' => 'start dating'],
    ['url' => 'https://date.startpagina.net', 'label' => 'date'],
    ['url' => 'https://sexdate.startpagina.net', 'label' => 'sexdate pagina'],
    ['url' => 'https://datingsites.favos.nl', 'label' => 'dating'],
    ['url' => 'https://date.favos.nl', 'label' => 'date'],
    ['url' => 'https://sexdate.favos.nl', 'label' => 'sexdate favos'],
    ['url' => 'https://dating.start.be', 'label' => 'dating'],
    ['url' => 'https://date.start.be', 'label' => 'date'],
    ['url' => 'https://datingsite.start.be', 'label' => 'datingsite start'],
    ['url' => 'https://dating.startplezier.nl', 'label' => 'start dating'],
    ['url' => 'https://date.startplezier.nl', 'label' => 'date'],
    ['url' => 'https://sexdate.startplezier.nl', 'label' => 'sexdate plezier'],
    ['url' => 'https://dating.linkspot.nl', 'label' => 'link dating'],
    ['url' => 'https://date.linkspot.nl', 'label' => 'date'],
    ['url' => 'https://sexdate.linkspot.nl', 'label' => 'sexdate spot'],
    ['url' => 'https://dating.vindjeviahier.nl', 'label' => 'dating'],
    ['url' => 'https://date.vindjeviahier.nl', 'label' => 'date vindjeviahier'],
    ['url' => 'https://dating.tipjes.nl', 'label' => 'dating'],
    ['url' => 'https://date.tipjes.nl', 'label' => 'date'],
    ['url' => 'https://sexdate.tipjes.nl', 'label' => 'sexdate tipjes'],
    ['url' => 'https://dating.eigenoverzicht.nl', 'label' => 'eigen dating'],
    ['url' => 'https://date.eigenoverzicht.nl', 'label' => 'date overzicht'],
    ['url' => 'https://dating.webgidsje.nl', 'label' => 'dating'],
    ['url' => 'https://date.webgidsje.nl', 'label' => 'date'],
    ['url' => 'https://sexdate.webgidsje.nl', 'label' => 'sexdate webgidsje'],
    ['url' => 'https://dating.opzijnbest.nl', 'label' => 'dating opzijnbest'],
    ['url' => 'https://dating.zoekvinden.nl', 'label' => 'zoek dating'],
    ['url' => 'https://date.zoekvinden.nl', 'label' => 'date'],
    ['url' => 'https://sexdate.zoekvinden.nl', 'label' => 'sexdate vinden'],
    ['url' => 'https://dating.linkgoed.nl', 'label' => 'link dating'],
    ['url' => 'https://date.linkgoed.nl', 'label' => 'date'],
    ['url' => 'https://sexdate.linkgoed.nl', 'label' => 'sexdate goed'],
    ['url' => 'https://www.linkorado.com/', 'label' => 'Linkorado'],
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
                    <a href="https://www.linkorado.com/">Linkorado</a><br />Linkorado is a link exchange directory where you can find websites related to your site and request link exchanges<br /><br />
                </ul>
            </div>
        </div><!-- row -->
    </div>
</div><!-- /.container -->
<?php include('includes/footer.php'); ?>
