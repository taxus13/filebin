<?php
if (is_cli_client() && !isset($force_full_html)) {
	return;
}
?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?php echo isset($title) ? $title : 'FileBin'; ?></title>
	<meta name="robots" content="noindex,nofollow" />
	<meta name="description" content="">
	<meta name="author" content="">

	<link href="<?php echo link_with_mtime("/data/css/ui-lightness/jquery-ui-1.8.23.custom.css"); ?>" rel="stylesheet">
	<link href="<?php echo link_with_mtime("/data/css/bootstrap-2.1.1.min.css"); ?>" rel="stylesheet">
	<link href="<?php echo link_with_mtime("/data/css/bootstrap-responsive-2.1.1.min.css"); ?>" rel="stylesheet">
	<link href="<?php echo link_with_mtime("/data/css/style.css"); ?>" rel="stylesheet">
</head>

<body>
	<div class="navbar navbar-fixed-top navbar-inverse">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="<?php echo site_url(); ?>">FileBin</a>
				<?php if(!isset($GLOBALS["is_error_page"])) { ?>
					<ul class="nav pull-right">
						<?php if(isset($username) && $username) { ?>
							<li><a href="<?php echo site_url("/user/logout"); ?>">Logout</a></li>
						<?php } else { ?>
							<li class="dropdown">
										<a class="dropdown-toggle" href="#" data-toggle="dropdown">Login <b class="caret"></b></a>
										<div class="dropdown-menu" style="padding: 15px;">
										<?php echo form_open("user/login"); ?>
											<input type="text" name="username" placeholder="Username" class="input-medium">
											<input type="password" name="password" placeholder="Password" class="input-medium">
											<button type="submit" name="process" class="btn btn-primary pull-right">Login</button>
										</form>
									</div>
							</li>
						<?php } ?>
					</ul>
					<?php }; ?>
					<ul class="nav">
						<?php if(isset($username) && $username) { ?>
							<li><a href="<?php echo site_url("file/index") ?>"><i class="icon-pencil icon-white"></i> New</a></li>
							<li><a href="<?php echo site_url("file/upload_history") ?>"><i class="icon-book icon-white"></i> History</a></li>
							<li><a href="<?php echo site_url("user/invite") ?>"><i class="icon-plus icon-white"></i> Invite</a></li>
						<?php } ?>
					</ul>
			</div>
		</div>
	</div>

	<div class="container">