<?php
/*
+----------------------------------------------------------------+
|																
|	WordPress 2.5 Plugin: Paginator 0.2.4							
|	Copyright (c) 2008 Olzhas Murtazin							
|																
|	File Written By:											
|	- Olzhas Murtazin										
|	- http://dzhus.com								
|															
|	File Information:										
|	- Paginator Options Page							
|	- wp-content/plugins/paginator/options.php	
|												
+----------------------------------------------------------------+
*/

# Form Processing 
// Update Options
if(!empty($_POST['Submit'])) {
	$paginator_options = array();
	$paginator_options['num_pages'] = intval(trim($_POST['paginator_num_pages']));
	$paginator_options['display_total'] = intval(trim($_POST['paginator_display_total']));
	
	if(($paginator_options['num_pages']<2)){
		$paginator_options['num_pages']=2;
	}
	
	$update_paginator_queries = array();
	$update_paginator_queries[] = update_option('paginator_options', $paginator_options);
}
else{

	if($paginator_options['num_pages']<2){
		$paginator_options['num_pages']=2;
	}
}
?>

<?php $paginator_options = get_option('paginator_options'); ?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>"> 
<div class="wrap"> 
	<h2><?php _e('Paginator Options', 'paginator'); ?></h2>
	<table class="form-table">
		<tr>
			<th scope="row" valign="top"><?php _e('Number Of Pages Visible At Once (must be at least 2)?', 'paginator'); ?></th>
			<td>
				<input type="text" name="paginator_num_pages" value="<?php echo stripslashes($paginator_options['num_pages']); ?>" size="4" />
			</td>
		</tr>
		<tr>
			<th scope="row" valign="top"><?php _e('Do you want to display total number of pages?', 'paginator'); ?></th>
			<td>
				<select name="paginator_display_total" size="1">
					<option value="1"<?php selected('1', $paginator_options['display_total']); ?>><?php _e('Yes', 'paginator'); ?></option>
					<option value="0"<?php selected('0', $paginator_options['display_total']); ?>><?php _e('No', 'paginator'); ?></option>
				</select>
			</td> 
		</tr>
	</table>
	<p class="submit">
		<input type="submit" name="Submit" class="button" value="<?php _e('Save Changes', 'paginator'); ?>" />
	</p>
</div>
</form> 