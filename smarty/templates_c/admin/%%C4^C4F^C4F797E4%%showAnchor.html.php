<?php /* Smarty version 2.6.18, created on 2015-06-03 22:34:59
         compiled from showAnchor.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
  <tr>
    <td class="head" colspan="2"><b>操作菜单</b></td>
  </tr>
  <tr>
    <td class="b_title">
    	<a href="anchor.php?action=new" target="_self">添加主持人信息</a>&nbsp;
    	<a href="anchor.php" target="_self">主持人信息管理(全台)</a>&nbsp;
		<?php $_from = $this->_tpl_vars['channel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['channel'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['channel']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['channel']):
        $this->_foreach['channel']['iteration']++;
?>
			<a href="anchor.php?action=anchor&cid=<?php echo $this->_tpl_vars['channel']['channelId']; ?>
" target="_self"><?php echo $this->_tpl_vars['channel']['name']; ?>
</a>&nbsp;
		<?php endforeach; endif; unset($_from); ?>
    </td>
  </tr>
</table>
<br />
<form name="fmEdit" id="fmEdit" action="anchor.php?action=delete" method="post">
    <table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
		<tr>
        	<td colspan="3" class="head">主持人信息管理</td>
        </tr>
        <tr>
			<td width="70%" class="head_2">主持人名称</td>          	
	  	  	<td width="10%" class="head_2">管理</td>
			<td width="20%" class="head_2">删除</td>
		</tr>
		<?php $_from = $this->_tpl_vars['anchor']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['anchor'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['anchor']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['anchor']):
        $this->_foreach['anchor']['iteration']++;
?>
		<tr>
			<td width="70%" class="b"><a href="http://app.rgd.com.cn/radio_app/anchor.php?anchorId=<?php echo $this->_tpl_vars['anchor']['anchorId']; ?>
" target="_blank"><?php echo $this->_tpl_vars['anchor']['name']; ?>
</a></td>           
   			<td width="10%" class="b">
            	<a href='anchor.php?action=new&anchorId=<?php echo $this->_tpl_vars['anchor']['anchorId']; ?>
'>修改</a>
		  	</td>
			<td width="20%" class="b">
				<input type="checkbox" name="chk1[]" id="chk1" value="<?php echo $this->_tpl_vars['anchor']['anchorId']; ?>
" />
			</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="2" class="b">
				<input type="submit" name="Submit" value="删除" />
			</td>
			<td width="20%" class="b">
				全选/全不选<input type="checkbox" name="chk2" id="chk2" />
			</td>
		</tr>
		<tr>
			<td colspan="3" class="b"><?php echo $this->_tpl_vars['paggingbar']; ?>
</td>
		</tr>  
	</table>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>