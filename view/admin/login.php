<?php view::layout('install/layout')?>
<?php view::begin('content');?>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
<br/>
      <div class="container">
	  <br><br><br>
	  <h2>OneIndex 控制台 <small>请登录</small></h2>
	  <form action="" method="post">
		  <div class="form-group">
		    <label>密码</label>
		    <input name="password" class="form-control" type="password"/>
		  </div>
		  <br>
		  <button class="btn btn-primary" type="submit">登录</button>
	  </form>
	</div>
	
</div>

<?php view::end('content');?>