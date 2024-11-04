<?php
$text = get_sub_field('content');
$id = get_sub_field("id");
?>
<div class="text-module" id="<?= $id ?>">
	<div class="">
		<div class="text-content prose">
			<?= $text ?>
		</div>
	</div>
</div>