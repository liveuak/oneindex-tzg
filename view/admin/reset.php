<!DOCTYPE html>
<html lang="zh-CN">
	  <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="renderer" content="webkit">
		<meta name="theme-color" content="#3F51B5" />
		<title>OneIndex-TZG重置页</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@1.0.0/dist/css/mdui.min.css" integrity="sha384-2PJ2u4NYg6jCNNpv3i1hK9AoAqODy6CdiC+gYiL2DVx+ku5wzJMFNdE3RoWfBIRP" crossorigin="anonymous"/>
    	<script src="https://cdn.jsdelivr.net/npm/mdui@1.0.0/dist/js/mdui.min.js" integrity="sha384-aB8rnkAu/GBsQ1q6dwTySnlrrbhqDwrDnpVHR2Wgm8pWLbwUnzDcIROX3VvCbaK+" crossorigin="anonymous"></script>
        </head>
		
        <div class="mdui-p-a-2">
			<div class="mdui-panel" mdui-panel>
				<div class="mdui-panel-item mdui-panel-item-open">
					<div class="mdui-panel-item-body">
						<p></p>
						<div class="mdui-typo">
                            <h3>OneIndex重置</h3>
                            <h5>完成后，请点击<a href="/">这里</a>进行初始化操作。</h5>
                            <h5>如果出现passthru() has been disabled字样，请将passthru函数解禁。</h5>
                            <h5><?php passthru("./reset.sh");?></a>
                            </h5>
						</div>
					</div>
				</div>
			</div>
        </div>
	</body>
</html>