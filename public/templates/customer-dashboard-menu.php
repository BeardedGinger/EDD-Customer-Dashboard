<?php
$task = ! empty( $_GET['task'] ) ? $_GET['task'] : '';
$home = get_bloginfo( 'url' );
?>
<nav class="customer-dashboard-menu">
    <ul class="menu">
		<?php
		$i = 1;
		foreach ( $menu_items as $item => $value ) {
			if( empty($task) && $i == 1 ){
				$class = 'active';
			}
			else{
				if( $task == $value['task'] ) {
					$class = 'active';
				} else {
					$class = '';
				}
			}
			?>
            <li class="<?php echo $value[ 'task' ] . ' ' . $class; ?>">
                <a href="<?php echo add_query_arg( 'task', $value['task'], get_permalink() ); ?>">
					<?php echo $value[ 'name' ]; ?>
                </a>
            </li>
			<?php
			$i++;
		}
		?>
        <li><a href="<?php echo wp_logout_url( $home ); ?>">Logout</a></li>
    </ul>
</nav>