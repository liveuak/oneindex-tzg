<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<title>OneIndex <?php e($title);?></title>
	<link rel="dns-prefetch" href="//cdn.bootcdn.net" />
	<link rel="dns-prefetch" href="//oi.tzg6.app" />
	<link rel="dns-prefetch" href="//g.tzg6.com" />
	<link rel="dns-prefetch" href="//portal.azure.com" />
	<link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
	<script src="https://g.tzg6.com/common/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://g.tzg6.com/common/bootstrap-4.5.2-dist/css/bootstrap.min.css">
	<script src="https://g.tzg6.com/common/bootstrap-4.5.2-dist/js/bootstrap.min.js"></script>
</head>
<body class="d-flex flex-column h-100">
    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">OneIndex</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    </header>
    <?php view::section('content');?>
</body>
</html>