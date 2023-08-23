<section class='intro'>
	<div class="inner-column">
		<div class="casual-intro">
			<h1>Hi</h1>
			<h2>I'm a <span class='scary'>Web Developer</span> based out of Sacramento California.</h2>
		</div>


		<div class="extra-information">
			<div class="what-im-doing">
				<h2>Currently I'm:</h2>
				<ul>
					<li>Working at <a href="https://perpetual.education/">Perpetual Education</a> as a web developer</li>
					<li>Running a web agency at <a href="https://www.unwrapdesign.com/">Unwrap Design</a></li>
				</ul>
			</div>

			<div class="education">
				<h2>Education:</h2>
				<ul>
					<li>4th year Computer Science student at Sacramento State</li>
					<li>Associates of Math</li>
					<li>Associates of Science</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class='projects'>
	<div class="inner-column">
		<h2 class='section-title'>Projects</h2>
		<div class="featured-projects">
			<?php 
				$featuredCards = get_posts(array(
			      'post_type' => 'project',
			      'orderby' => 'date',
			      'order' => 'ASC',
			      'numberposts' => '-1',
			      'meta_query' => array(
			        array(
			          'key'   => 'featured',
			          'value' => '1',
			        )
			      )
			    ));

			    if ($featuredCards) {
			      foreach ($featuredCards as $featuredCard) {
			        include(getFile("templates/components/featured-projects.php"));
			      }
			    }
			   wp_reset_postdata();
		    ?>
		</div>
	</div>
</section>

<!-- <section>
	<div class="inner-column">
		<h2 class="section-title">Writing</h2>
		<div class="featured-writing">
			<div class="writing-cards">
				<?php 
					$parameters = array(
						"post_type" => "post",
						"category_name"  => "featured",
					);

					$query = new WP_Query($parameters);
					while ($query->have_posts()) : $query->the_post();
						include(getFile("templates/components/featured-writing.php"));

					endwhile;

					//reset what was done above.
					//Allows looping of more items below this.
					wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</section> -->