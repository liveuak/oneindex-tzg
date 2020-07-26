<?php view::layout('layout')?>
<?php view::begin('content');?>
<div class="mdui-container-fluid">

<div class="mdui-typo">
	<h1>关于</h1>
</div>
<div class="mdui-textfield">
    <h3>OneIndex-TZG   <small>一个 OneIndex 分支改进版，保留原版的简洁。</small></h3>
    <h4>GitHub：<a href="https://github.com/TheZihanGu/oneindex-tzg">TheZihanGu/oneindex-tzg</a></h4>
</div>
<div class="mdui-textfield">
    <h2>重置 OneIndex</h2>
    <h4>此操作允许您重新配置 OneIndex，重置后当前配置将被删除，请知晓。</h4>
	<div class="mdui-container">
    <button class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple" mdui-dialog="{target: '#reset'}">重置</button>

  <div class="mdui-dialog" id="reset">
    <div class="mdui-dialog-title">确定重置吗？</div>
    <div class="mdui-dialog-content">你将永远丢失当前的配置！使用前请确保 passthru 函数可用。</div>
    <div class="mdui-dialog-actions">
        <button class="mdui-btn mdui-ripple" mdui-dialog-close>算了吧</button>
        <a href="/view/admin/reset.php">
            <button class="mdui-btn mdui-ripple">确定</button>
        </a>
    </div>
  </div>
</div>
<?php view::end('content');?>