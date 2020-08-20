<?php view::layout('install/layout')?>
<?php view::begin('content');?>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
<br/>
      <div class="container">
	  <br><br><br>
	  <h2>安装程序 <small>应用ID和机密</small></h2>
      <h4 class="doc-article-title">
	    填入<code>应用程序密码</code>和<code>应用程序ID</code>,
      	<a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps/ApplicationsListBlade" target="_blank" class="mdui-btn mdui-color-theme-accent mdui-ripple"><i class="mdui-icon material-icons">&#xe89e;</i> 前往应用注册</a>
      </h4>
	<br>
	<form action="" method="post">
		<div class="form-group">
			<label>应用程序(客户端) 密码</label>
			<input type="text" type="text" class="form-control" name="client_secret" required value="<?php echo config('client_secret');?>"/>
			<small class="form-text text-muted">应用程序(客户端) 密码不能为空.</small>
		</div>
		<br>

		<div class="form-group">
		  	<label>应用程序(客户端) ID</label>
		  	<input type="text" class="form-control" name="client_id" required value="<?php echo config('client_id');?>"/>
			<small class="form-text text-muted">应用程序 ID 不能为空.</small>
		</div>
		<br>

		<div class="form-group">
			<label>重定向 URL</label>
		   <input type="text" class="form-control" disabled  value="<?php echo $redirect_uri;?>"/>
		   <input type="hidden" class="mdui-textfield-input" name="redirect_uri" value="<?php echo $redirect_uri;?>"/>
		   <small class="form-text text-muted">重定向 URL 不能为空. 它将默认使用由我们提供的高可用重定向服务.</small>
		</div>
		<br>
	 <a class="btn btn-primary" type="button" href="?step=0">上一步</a>
	 <button type="button" class="btn btn-primary" type="submit">下一步</button>
	</form>	
</div>

<?php view::end('content');?>