<?php view::layout('install/layout')?>

<?php view::begin('content');?>
	
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
<br/>
      <div class="container">
	  <br><br><br>
        <h2>安装程序 <small>绑定 OneDrive 账号</small></h2>
		<div class="alert alert-primary" role="alert">在这一步操作中,您将会被重定向至 Microsoft 所属网站完成绑定操作.之后,您将会通过重定向 URL 回到您的站点以继续安装.</div>
	 <a class="btn btn-primary" type="button" href="?step=1">上一步</a>
	 <a href="<?php echo onedrive::authorize_url();?>" class="btn btn-primary" type="button">绑定账号</a>
	</form>
</div>

<?php view::end('content');?>