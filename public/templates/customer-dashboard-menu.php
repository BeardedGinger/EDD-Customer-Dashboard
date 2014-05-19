<?php
$task = ! empty( $_GET['task'] ) ? $_GET['task'] : '';
?>
<nav class="customer-dashboard-menu">
	<?php
	foreach ( $menu_items as $item => $value ) {
		if( $task == $value['task'] ) {
			$class = 'active';
		} else {
			$class = '';
		}
	?>

		<li class="<?php echo $value[ 'task' ] . ' ' . $class; ?>">
			<a href="<?php echo add_query_arg( 'task', $value['task'], get_permalink() ); ?>">
				<?php echo $value[ 'name' ]; ?>
			</a>
		</li>
	<?php
	}
	?>
</nav>