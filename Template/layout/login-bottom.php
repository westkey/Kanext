<div id="login-bottom">
	<ul>
		<?php
            foreach ($this->app->configHelper->get('login-link') as $link) {
                echo '<li><a href="'.$link[1].'" target="'.$link[2].'">'.$link[0].'</a></li>'."\n";
            }
    ?>
	</ul>
</div>
