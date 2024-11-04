

<?php
//repeater, so need to do this
while (have_rows('goal')) {
	the_row();

	$goalHeading = get_sub_field("heading");
	$goalContent = get_sub_field("text");
}

?>

<section class="goal-module">
	<div class="container">
		<div>
			<p><?= $goalContent ?></p>
		</div>
	</div>
</section>