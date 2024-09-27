<?php
$text = get_sub_field('content');
$id = get_sub_field("id");
?>
<section class="text-module" id="<?= $id ?>">
	<div class="container">
		<div class="text-content prose">
			<?= $text ?>
		</div>
	</div>
</section>