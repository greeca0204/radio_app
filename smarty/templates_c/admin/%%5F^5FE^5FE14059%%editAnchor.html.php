<?php /* Smarty version 2.6.18, created on 2015-06-03 22:41:46
         compiled from editAnchor.html */ ?>
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
    	<a href="anchor.php?action=new" target="_self">添加主持人信息</a>&nbsp;
		<a href="anchor.php" target="_self">主持人信息管理(全台)</a>&nbsp;
		<?php $_from = $this->_tpl_vars['channel2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['channel2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['channel2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['channel2']):
        $this->_foreach['channel2']['iteration']++;
?>
			<a href="anchor.php?action=anchor&cid=<?php echo $this->_tpl_vars['channel2']['channelId']; ?>
" target="_self"><?php echo $this->_tpl_vars['channel2']['name']; ?>
</a>&nbsp;
		<?php endforeach; endif; unset($_from); ?>
    </td>
  </tr>
</table>
<br />
<form name="fmEdit" id="fmEdit" method="post" action="anchor.php?action=save" enctype="multipart/form-data">
	<input type="hidden" name="anchorId" id="anchorId" value="<?php echo $this->_tpl_vars['anchor']['anchorId']; ?>
" />
	<table width="70%" align="center" cellspacing="1" cellpadding="3" class="i_table">
		<tr>
			<td colspan="2" class="head">主持人信息管理</td>
        </tr>
        <tr>
			<td width="20%" class="b">*主播名称</td>
			<td class="b">
				<input type="text" name="name" id="name" value="<?php echo $this->_tpl_vars['anchor']['name']; ?>
"  class="frminput" />
			</td>
	  	</tr>
		<tr>
			<td width="20%" class="b">头像</td>
            <td class="b_sel">        
				<input name="image" type="file">
				<input type="hidden" name="hasimg" value="<?php echo $this->_tpl_vars['anchor']['image']; ?>
" />  
		  </td>
	  	</tr>
        <?php if ($this->_tpl_vars['anchor']['image'] != ''): ?>
        <tr>
			<td width="20%" class="b">image</td>
			<td class="b">
				<img src="../<?php echo $this->_tpl_vars['anchor']['image']; ?>
" width="341" height="341" alt="" />
			</td>
	  	</tr>
	  	<?php endif; ?> 
	  	<tr>
			<td width="20%" class="b">*频道</td>
			<td class="sel">
				<select  name="Channel" id="Channel">
					<?php $_from = $this->_tpl_vars['channel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['channel'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['channel']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['channel']):
        $this->_foreach['channel']['iteration']++;
?>
					<option value="<?php echo $this->_tpl_vars['channel']['channelId']; ?>
" <?php if ($this->_tpl_vars['channel']['channelId'] == $this->_tpl_vars['anchor']['Channel']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['channel']['name']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
	  	</tr>
	  	<tr>
			<td width="20%" class="b">概述</td>
			<td class="b">
				<input type="text" name="summary" id="summary" value="<?php echo $this->_tpl_vars['anchor']['summary']; ?>
"  class="frminput" />
			</td>
	  	</tr>
	  	<tr>
			<td width="20%" class="b">点击次数</td>
			<td class="b">
				<input type="text" name="clickCount" id="clickCount" value="<?php echo $this->_tpl_vars['anchor']['clickCount']; ?>
"  class="frminput" />
			</td>
	  	</tr>
	  	<tr>
			<td width="20%" class="b">主持人介绍</td>
			<td class="b">
				<textarea name="content1"  id="content1" style="width:100%;height:350px; resize:none;"><?php echo $this->_tpl_vars['anchor']['anchor_content']; ?>
</textarea>
				
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