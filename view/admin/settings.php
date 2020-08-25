<?php view::layout('layout')?>

<?php view::begin('content');?>
<div class="mdui-container-fluid">

	<div class="mdui-typo">
	  <h1> 基本设置 <small>设置OneIndex基本参数</small></h1>
	</div>
	<form action="" method="post">
		<div class="mdui-textfield">
		  <h4>网站名称</h4>
		  <input class="mdui-textfield-input" type="text" name="site_name" value="<?php echo $config['site_name'];?>"/>
		</div>

		<div class="mdui-textfield">
		  <h4>主题<small></small></h4>
		  <select name="style" class="mdui-select">
			  <?php 
				foreach(scandir(ROOT.'view') as $k=>$s){
				    $styles[$k] = trim($s, '/');
				}
				$styles = array_diff($styles, [".", "..", "admin"]);
				$style = config("style")?config("style"):'material';
				$cache_type  = config("cache_type")?config("cache_type"):'secache';
			 	foreach($styles as $style_name):
			  ?>
			  <option value ="<?php echo $style_name;?>" <?php echo ($style==$style_name)?'selected':'';?>><?php echo $style_name;?></option>
			  <?php endforeach;?>
		  </select>
		</div>

		<div class="mdui-textfield">
		  <h4>OneDrive起始目录(空为根目录)<small>例：仅共享share目录 /share</small></h4>
		  <input class="mdui-textfield-input" type="text" name="onedrive_root" value="<?php echo $config['onedrive_root'];?>"/>
		</div>


		<div class="mdui-textfield">
		  <h4>需要隐藏的目录<small> 不需要列出的目录(一行一个) 清空缓存后生效</small></h4>
		  <textarea class="mdui-textfield-input" placeholder="输入后回车换行" name="onedrive_hide"><?=@$config['onedrive_hide'];?></textarea>
		  <small>这里是通配识别，就是存在以上字符文件夹一律会隐藏</small>
		</div>

		<div class="mdui-textfield">
		  <h4>防盗链(白名单)<small> 不填写则不启用, 多个用英文 <code>;</code> 分割</small></h4>
		  <input class="mdui-textfield-input" name="onedrive_hotlink" value="<?=@$config['onedrive_hotlink'];?>"/>
		  <small>支持通配符 例: <code>*.domain.com</code></small>
		</div>

		<div class="mdui-textfield">
		  <h4>缓存类型<small></small></h4>
		  <select name="cache_type" class="mdui-select">
			  <?php 
			 	foreach(['secache', 'filecache', 'memcache', 'redis'] as $type):
			  ?>
			  <option value ="<?php echo $type;?>" <?php echo ($type==$cache_type)?'selected':'';?>><?php echo $type;?></option>
			  <?php endforeach;?>
		  </select>
		</div>

		<div class="mdui-textfield">
		  <h4>缓存过期时间(秒)</h4>
		  <input class="mdui-textfield-input" type="text" name="cache_expire_time" value="<?php echo $config['cache_expire_time'];?>"/>
		</div>

		<div class="mdui-textfield">
		  <h4>去掉地址栏中的<code style="color: #c7254e;background-color: #f7f7f9;font-size:16px;">/?/</code> (需配合伪静态使用)</h4>
		  <label class="mdui-textfield-label"></label>
		  <label class="mdui-switch">
			  <input type="checkbox" name="root_path" value="?" <?php echo empty($config['root_path'])?'checked':'';?>/>
			  <i class="mdui-switch-icon"></i>
		  </label>
		</div>

		<div class="mdui-textfield">
		  <h4>开启 SharePoint Proxy (Beta)</h4>
		  <label class="mdui-textfield-label"></label>
		  <label class="mdui-switch">
		  	  <input type="checkbox" name="sharepoint_proxy" value="?" <?php echo $config['sharepoint_proxy'] == "true"?'checked':'';?>/>
			  <i class="mdui-switch-icon"></i>
		  </label>
		</div>

		<div class="mdui-textfield" style=<?php echo $config['sharepoint_proxy'] == "false"?'display:none':'display:inline';?>>
		  <h4>SharePoint 链接</h4>
		  <input class="mdui-textfield-input" name="sharepoint_link" value="<?=@$config['sharepoint_link'];?>"/>
		  <small>例: <code>xxxx-my.sharepoint.com</code></small>
		</div>

		<div class="mdui-textfield" style=<?php echo $config['sharepoint_proxy'] == "false"?'display:none':'display:inline';?>>>
		  <h4>SharePoint Proxy 链接</h4>
		  <input class="mdui-textfield-input" name="sharepoint_proxy_link" value="<?=@$config['sharepoint_proxy_link'];?>"/>
		  <small>开启/关闭 SharePoint Proxy 后, 请<a href="./?/admin/cache">清除所有缓存</a>来使设置立即生效.</small>
		</div>

	   <button type="submit" class="mdui-btn mdui-color-theme-accent mdui-ripple mdui-float-right">
	   	<i class="mdui-icon material-icons">&#xe161;</i> 保存
	   </button>
	</form>
</div>
<?php view::end('content');?>
