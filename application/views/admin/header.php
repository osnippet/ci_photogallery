<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Photo Gallery CMS</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="<?= base_url() ?>themes/prizzy/admin/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?= base_url() ?>jscripts/js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?= base_url() ?>jscripts/js/imgpreview.js"></script>
<script type="text/javascript" src="<?= base_url() ?>jscripts/ui/ui.core.js"></script>

</head>
 
<body>
	<div id="header">
			<h1 class="right">Photo Gallery CMS</h1>
			<h1><a href="#">Photo Gallery CMS</a></h1>
	</div>
	
	<ul id="nav">
			<li class="right"><a href="<?= site_url('home') ?>" target="_blank">View website</a></li>			
			<?php if (is_logged_in()): ?>
			<li class="right"><a href="<?= site_url('account/signout') ?>" target="_blank">Logout</a></li>			
			<?php endif; ?>
			<?php if (is_admin()): ?>
			<li><a href="<?= site_url('admin/user') ?>"  <?php echo isset($user_active) ? "class='$user_active'" : '' ?> >Users</a></li>			
			<?php endif; ?>
			<li><a href="<?= site_url('admin/album') ?>"  <?php echo isset($album_active) ? "class='$album_active'" : '' ?>>Albums</a></li>	
			<li><a href="<?= site_url('admin/gallery') ?>" <?php echo isset($gallery_active) ? "class='$gallery_active'" : '' ?>>Photos</a></li>	
			<li><a href="<?= site_url('admin/search') ?>" <?php echo isset($search_active) ? "class='$search_active'" : '' ?>>Search</a></li>	
	</ul>
	
	<div class="clear" />
	