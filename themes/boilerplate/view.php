<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/head_elements.php');
$this->inc('elements/header_main.php');
?>
<div class="content-wrap">
	<?php print $innerContent; ?>
     <div class="clearfix"></div>
</div>
<?php 
$this->inc('elements/footer.php');
?>
