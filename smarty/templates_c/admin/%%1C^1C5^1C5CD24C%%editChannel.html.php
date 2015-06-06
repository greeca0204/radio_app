<?php /* Smarty version 2.6.18, created on 2015-06-03 13:59:12
         compiled from editChannel.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
  <tr>
    <td class="head" colspan="2"><b>操作菜单</b></td>
  </tr>
  <tr>
    <td class="b_title">
    	<a href="channel.php?action=new" target="_self">添加频道信息</a>&nbsp;
    	<a href="channel.php" target="_self">频道信息管理</a>
    </td>
  </tr>
</table>
<br />
<form name="fmEdit" id="fmEdit" method="post" action="channel.php?action=save" enctype="multipart/form-data">
	<input type="hidden" name="channelId" id="channelId" value="<?php echo $this->_tpl_vars['channel']['channelId']; ?>
" />
	<table width="70%" align="center" cellspacing="1" cellpadding="3" class="i_table">
		<tr>
			<td colspan="2" class="head">频道信息管理</td>
        </tr>
        <tr>
			<td width="20%" class="b">*名称</td>
			<td class="b">
				<input type="text" name="name" id="name" value="<?php echo $this->_tpl_vars['channel']['name']; ?>
"  class="frminput" />
			</td>
	  	</tr>
		<tr>
			<td width="20%" class="b">图片</td>
            <td class="b_sel">        
				<input name="image" type="file">
				<input type="hidden" name="hasimg" value="<?php echo $this->_tpl_vars['channel']['image']; ?>
" />  
		  </td>
	  	</tr>
        <?php if ($this->_tpl_vars['channel']['image'] != ''): ?>
        <tr>
			<td width="20%" class="b">图片</td>
			<td class="b">
				<img src="../<?php echo $this->_tpl_vars['channel']['image']; ?>
" width="341" height="341" alt="" />
			</td>
	  	</tr>
	  	<?php endif; ?> 
	  	<tr>
			<td width="20%" class="b">简介</td>
			<td class="b">
				<textarea name="summary"  id="summary" style="width:100%;height:100px; resize:none;"><?php echo $this->_tpl_vars['channel']['summary']; ?>
</textarea>
			</td>
	  	</tr>
	  	<tr>
			<td width="20%" class="b">地址</td>
			<td class="b">
				<input type="text" name="url" id="url" value="<?php echo $this->_tpl_vars['channel']['url']; ?>
"  class="frminput" />
			</td>
	  	</tr>
	  	<tr>
			<td width="20%" class="b">点击次数</td>
			<td class="b">
				<input type="text" name="clickCount" id="clickCount" value="<?php echo $this->_tpl_vars['channel']['clickCount']; ?>
"  class="frminput" />
			</td>
	  	</tr>
	  	<tr>
			<td width="20%" class="b">*是否为视频</td>
			<td class="b">
				<input type="text" name="isVideo" id="isVideo" value="<?php echo $this->_tpl_vars['channel']['isVideo']; ?>
"  class="frminput" />
			</td>
	  	</tr>
		<tr>
			<td colspan="2" class="b">
				<input type="submit" value="提交">
				<input type="reset" value="重置">
			</td>
		</tr>
	</table>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>