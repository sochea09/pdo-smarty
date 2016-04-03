<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Cambodia Free" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Cambodia Free" />
	<meta name="description" content="Cambodia Free" />
	<title>Home Page</title>
	<link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>

	{block name='style'}{/block}
</head>
<body>
{include file="../include/business-page/header.tpl"}
<div class="row">
	<div class="col-md-3">
		{include file="../include/business-page/left-sidebar.tpl"}
	</div>
	<div class="col-md-9">
		{block name='content'}{/block}
	</div>
</div>

{* Footer *}
<script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/javascript/global.js"></script>

{block name='script'}{/block}
</body>
</html>
