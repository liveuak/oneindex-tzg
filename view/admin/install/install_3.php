<?php view::layout('install/layout')?>
<?php view::begin('content');?>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
<br/>
    <div class="container">
	<br><br><br>
	<h2>安装程序 <small>完成安装</small></h2>
	<br>
	<?php if($refresh_token):?>
		<div class="alert alert-success" role="alert">OneIndex 安装成功!</div>
		<div class="alert alert-dark" role="alert">初始密码: oneindex</div>
		<br><br>
		<a class="btn btn-primary" href="?/admin/" >登陆后台</a>
		<a class="btn btn-primary" href="./">访问 OneIndex</a>
	<?php else:?>
		<div class="alert alert-danger" role="alert">OneIndex 安装失败!</div>
		<br>
		<a class="btn btn-primary" href="?step=2">重新绑定</a>
	<?php endif;?>
</div>

<?php view::end('content');?>