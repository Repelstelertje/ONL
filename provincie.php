<?php 
  include('includes/array_prov.php');
  function strip_bad_chars( $input ) {
    $output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
    return $output;
  }

  $zoek = null;
  if(isset($_GET['item'])) {
    $provincie = strip_bad_chars( $_GET['item'] );
    if (isset($provincies[$provincie])) {
      $zoek = $provincies[$provincie];
    }
  }
  if (!$zoek) {
    include('404.php');
    exit;
  }
  include('includes/header.php');
?>
  
  <div class="container">
    <div class="jumbotron my-4">
      <h1 class="text-center"><?php echo $zoek['title']; ?></h1>
    </div>

    <div class="row" v-cloak>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item" 
           id="Slankie"
           v-for="profile in filtered_profiles"
          >
        <div class="card h-100">
            <a :href="'profile.php?id=' + profile.id"><img class="card-img-top" :src="profile.src.replace('150x150', '300x300')" :alt="'Daten in ' + profile.province + ' met ' + profile.name" :title="'Bekijk het profiel van ' + profile.name + ' uit ' + profile.city" @error="imgError"></a>
            <div class="card-body">
              <div class="card-top">
                  <h4 class="card-title">{{ profile.name }}</h4>  
              </div>
              <ul class="list-group">
                <li class="list-group-item">Leeftijd: {{ profile.age }}</li>
                <li class="list-group-item">Relatie: {{ profile.relationship }}</li>
                <li class="list-group-item">Stad: {{ profile.city }}</li>
                <li class="list-group-item">Provincie: {{ profile.province }}</li>
              </ul>
            </div>
            <a :href="'profile.php?id=' + profile.id" class="card-footer btn btn-primary">Bekijk profiel</a></div>
        </div>
      </div>
    </div><!-- /.row -->

    <script nonce="<?php echo $nonce; ?>">
     var api_url= "https://16hl07csd16.nl/profile/province/nl/<?=$zoek['name']?>/120";
    </script>

    <!-- Pagination -->
    <nav class="nav-pag" aria-label="Page navigation">
      <ul class="pagination flex-wrap justify-content-center">
        <li class="page-item">
          <a class="page-link" aria-label="Vorige"
             v-on:click="set_page_number(page-1)"
             >
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Vorige</span>
          </a>
        </li>
          
        <li v-for="page_number in max_page_number"
            class="page-item"
            v-bind:class="{ active: page_number == page }"
            >
          <a class="page-link" v-on:click="set_page_number(page_number)">{{ page_number }}</a>
        </li>
          
        <li class="page-item">
          <a class="page-link" aria-label="Volgende"
              v-on:click="set_page_number(page+1)"
             >
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Volgende</span>
          </a>
        </li>
      </ul>
    </nav>
  </div> <!-- row -->
  <div class="container">
      <div class="jumbotron">
        <?php echo $zoek['tekst']; ?>
      </div>
      <div class="jumbotron text-center">
        <a href="https://18date.net/sexdate-<?php echo $zoek['img']; ?>" class="btn btn-primary btn-tips" target="_blank">18+ Sexdate <?php echo $zoek['name']; ?></a>
        <a href="https://sex55.net/sexdates-<?php echo $zoek['img']; ?>" class="btn btn-primary btn-tips" target="_blank">55+ Sexdate <?php echo $zoek['name']; ?></a>
        <a href="https://shemaledaten.net/shemale-<?php echo $zoek['img']; ?>" class="btn btn-primary btn-tips" target="_blank">Shemale sexdate <?php echo $zoek['name']; ?></a>
      </div>
  </div> <!-- container -->

<?php
  include('includes/footer.php');
?>