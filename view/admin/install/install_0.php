<?php view::layout('install/layout')?>
<?php view::begin('content');?>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
<br/>
      <div class="container">
	  <br><br><br>
        <h2>安装先决条件</h2>
		<ul class="list-group">
			<?php if($check['php']): ?>
				<li class="list-group-item list-group-item-success">PHP版本 > 5.6<td>
	        <?php else:?>
				<li class="list-group-item list-group-item-danger">PHP版本 > 5.6<td>
	        <?php endif;?></li>

			<?php if($check['curl']): ?>
  				<li class="list-group-item list-group-item-success">PHP-cURL 已安装</li>
			<?php else:?>
				<li class="list-group-item list-group-item-danger">PHP-cURL 已安装</li>
			<?php endif;?></li>

			<?php if($check['cache']): ?>
  				<li class="list-group-item list-group-item-success">程序 config/ 目录可读可写</li>
			<?php else:?>
				<li class="list-group-item list-group-item-danger">程序 config/ 目录可读可写</li>
			<?php endif;?></li>
		</ul>
		<br>
		<?php if(array_sum($check) == count($check)):?>
			<a class="btn btn-primary" type="button" href="?step=1">下一步</a>
		<?php else:?>
			<button type="button" class="btn btn-primary disabled" disabled>下一步</button>
		<?php endif;?>
        <br/>
      </div>
    </main>
<?php view::end('content');?>