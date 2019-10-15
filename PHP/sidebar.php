
	<section id="sidebar" class="secondary clearfix" role="complementary">

		<?php
			// Check if Sidebar has widgets
			if( is_active_sidebar('sidebar') )
			{
			
				dynamic_sidebar('sidebar');
			}
			
		
			 ?>

	</section>