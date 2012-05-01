<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo link_with_mtime("/data/paste.css"); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo link_with_mtime("/data/paste-$current_highlight.css"); ?>" />
  </head>
  <body>
    <div class="top_bar">
      <a class="raw_link no" href="<?php echo site_url(); ?>">New</a> |
      <a class="raw_link no" href="<?php echo site_url($id); ?>">Raw</a> |
      <a class="raw_link no" href="<?php echo site_url($id."/plain"); ?>">Plain</a> |
      Currently: <?php echo $current_highlight; ?> |
      Timeout: <a class="raw_link no" href="<?php echo site_url("file/delete/".$id); ?>" title="delete"><?php echo $timeout; ?></a>
      <div style="float:right;">
        <a class="raw_link no" href="<?php echo site_url($id)."/"; ?>">Code</a> |
        <a class="raw_link no" href="<?php echo site_url($id."/rmd"); ?>">Render Markdown</a>
      </div>
    </div>
  <script type="text/javascript">
		/* <![CDATA[ */
function update_anchor_highlight() {
	var anchor = window.location.hash.substr(1);
	var element = document.getElementById("highlight_line");
	if (element) {
		element.parentNode.removeChild(element);
	}

	anchor = document.getElementById(anchor);
	if (!anchor) {
		return;
	}
	var newElement = document.createElement("div");
	newElement.setAttribute("id", "highlight_line");
	newElement.textContent=" ";
	anchor.parentNode.insertBefore(newElement, anchor.nextSibling);
}

if ("onhashchange" in window) {
	window.onload = function () {
		update_anchor_highlight();
	}
	window.onhashchange = function () {
		update_anchor_highlight();
	}
}
    /* ]]> */
  </script>
    <table class="content">
      <tr>
