<?php

$this->require_acl ('admin', 'lemur');

$page->layout = 'admin';
$page->title = __ ('Sort Categories');
$page->add_style ('/apps/lemur/css/admin.css');
$page->add_script ('/apps/lemur/js/admin.js');
$page->add_script ('/js/jquery-ui/jquery-ui.min.js');

echo $tpl->render (
	'lemur/category/sort',
	array (
		'categories' => lemur\Category::sorted ()
	)
);

?>