<?php 
	define("TITLE", "Datingtips | Oproepjes Nederland");

        include('includes/array_tips.php');
        include('includes/array_prov.php');
        include('includes/utils.php');
	
$tipData = null;
if(isset($_GET['tip'])) {
        $datingtip = strip_bad_chars($_GET['tip']);
        if (isset($datingtips[$datingtip])) {
                $tipData = $datingtips[$datingtip];
        }
}
if (!$tipData) {
        include('404.php');
        exit;
}
$tips = $tipData;
include('includes/header.php');
?>

<div class="container">
	<div class='jumbotron my-4'>
		<h1 class='text-center'><?php echo $tips["title"]; ?></h1>
	</div>
	<div class='jumbotron my-4'>
		<?php echo $tips["tekst"]; ?>
	</div>
</div>

<?php include('includes/footer.php'); ?>