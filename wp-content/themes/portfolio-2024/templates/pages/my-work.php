<header class='page-header'>
	<div class="inner-column">
		<h1 class='page-title'>My Work</h1>
	</div>
	<div aria-hidden='true' class="bg"></div>
</header>

<section class='my-work'>
	<div class="inner-column">
		<?php
			// 46 == featured projects
			// 26 == Experiments
			$parameters = array(
				"post_type" => "project-type",
				"post__not_in" => array(46, 26),
				"orderby" => "ID",
				"order" => "ASC",
			);

			$query = new WP_Query($parameters);

			while ($query->have_posts()) {
				$query->the_post();

				$sectionTitle = get_field("section_title");
				$sectionDescription = get_field('section_description');

			?>
				<div class="<?=slugify($projectType)?>">
					<h2 class='section-title'><?=$sectionTitle?></h2>
					<div class="project-cards">
						<?php
							//Access all of the posts that are a project.
							//Get the ID of each project type by using a meta_query.
							//Compare ID of project_type on project, and ID of the individual project_type
							$cards = get_posts(array(
								'post_type' => 'project',
								'orderby' => 'date',
								'order' => 'ASC',
								'numberposts' => '-1',
								'meta_query' => array(
									array(
									"key" => "project_type", // name of custom field
									"value" => '"' . get_the_ID() . '"',
									// matches exactly "123", not just 123. This prevents a match for "1234"
									"compare" => "LIKE",
									),
								),
							));

							if ($cards) {
								foreach ($cards as $card) {
									include(getFile("templates/components/project-card.php"));
								}
							}
						?>
					</div>
				</div>
			<?php
				// include(getFile("templates/components/project-section.php"));
			}

			//reset what was done above.
			//Allows looping of more items below this.
			wp_reset_postdata();
		?>
	</div>
</section>