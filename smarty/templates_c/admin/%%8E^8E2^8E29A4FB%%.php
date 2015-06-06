<?php /* Smarty version 2.6.18, created on 2015-06-03 22:37:00
         compiled from editNews.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'editNews.html', 82, false),)), $this); ?>
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
    	<a href="news.php?action=new" target="_self">添加新闻信息</a>&nbsp;
    	<a href="news.php" target="_self">新闻信息管理</a>
    </td>
  </tr>
</table>
<br />
<form name="fmEdit" id="fmEdit" method="post" action="news.php?action=save" enctype="multipart/form-data">
	<input type="hidden" name="newsId" id="newsId" value="<?php echo $this->_tpl_vars['news']['newsId']; ?>
" />
	<table width="70%" align="center" cellspacing="1" cellpadding="3" class="i_table">
		<tr>
			<td colspan="2" class="head">新闻信息管理</td>
        </tr>
        <tr>
			<td width="20%" class="b">*新闻标题</td>
			<td class="b">
				<input type="text" name="title" id="title" value="<?php echo $this->_tpl_vars['news']['title']; ?>
"  onkeyup="preloadTitle();"  class="frminput" />
			</td>
	  	</tr>
		<tr>
			<td width="20%" class="b">新闻图片</td>
            <td class="b_sel">        
				<input name="image" type="file">
				<input type="hidden" name="hasimg" value="<?php echo $this->_tpl_vars['news']['image']; ?>
" />  
		  </td>
	  	</tr>
        <?php if ($this->_tpl_vars['news']['image'] != ''): ?>
        <tr>
			<td width="20%" class="b">新闻图片</td>
			<td class="b">
				<img src="../<?php echo $this->_tpl_vars['news']['image']; ?>
" width="341" height="341" alt="" />
			</td>
	  	</tr>
	  	<?php endif; ?> 
	  	<tr>
			<td width="20%" class="b">新闻概述</td>
			<td class="b">
				<textarea name="summary"  id="summary" style="width:100%;height:100px; resize:none;"><?php echo $this->_tpl_vars['news']['summary']; ?>
</textarea>
			</td>
	  	</tr>
	  	<tr>
			<td width="20%" class="b">新闻内容</td>
			<td class="b">
				<input type="text" name="content" id="content" value="<?php echo $this->_tpl_vars['news']['content']; ?>
"  class="frminput" />
			</td>
	  	</tr>
	  	<tr>
			<td width="20%" class="b">*是否推荐</td>
			<td class="sel">
				<select  name="isComment" id="isComment">
					<option value="1" <?php if ($this->_tpl_vars['news']['isComment'] == 1): ?>selected="selected"<?php endif; ?>>推荐</option>
					<option value="0" <?php if ($this->_tpl_vars['news']['isComment'] == 0): ?>selected="selected"<?php endif; ?>>不推荐</option>
				</select>
			</td>
	  	</tr>
	  	<tr>
			<td width="20%" class="b">点击次数</td>
			<td class="b">
				<input type="text" name="clickCount" id="clickCount" value="<?php echo $this->_tpl_vars['news']['clickCount']; ?>
"  class="frminput" />
			</td>
	  	</tr>
	  	<tr>
			<td width="20%" class="b">*发布</td>
			<td class="sel">
				<select  name="isDeploy" id="isDeploy">
					<option value="1" <?php if ($this->_tpl_vars['news']['isDeploy'] == 1): ?>selected="selected"<?php endif; ?>>发布</option>
					<option value="0" <?php if ($this->_tpl_vars['news']['isDeploy'] == 0): ?>selected="selected"<?php endif; ?>>不发布</option>
				</select>
			</td>
	  	</tr>
	  	<tr>
			<td width="20%" class="b">*发布时间</td>
			<td class="b">
				<input type="text" name="deployTime" id="deployTime" onClick="return Calendar('deployTime');"  value="<?php echo ((is_array($_tmp=$this->_tpl_vars['news']['deployTime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
"  class="frminput" />
			</td>
	  	</tr>
	  	<tr>
			<td width="20%" class="b">*创建时间</td>
			<td class="b">
				<input type="text" name="create_time" id="create_time" onClick="return Calendar('create_time');" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['news']['create_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
"   class="frminput" />
			</td>
	  	</tr>
	  	<tr>
			<td width="20%" class="b">地址</td>
			<td class="b">
				<input type="text" name="url" id="url" value="<?php echo $this->_tpl_vars['news']['url']; ?>
"  class="frminput" />
			</td>
	  	</tr>
	  	<tr>
			<td width="20%" class="b">新闻内容</td>
			<td class="b">
				<textarea name="content1"  id="content1" style="width:100%;height:350px; resize:none;"><?php echo $this->_tpl_vars['news']['news_content']; ?>
</textarea>
			</td>
	  	</tr>
		
		<tr>
			<td colspan="2" class="b">
				<input type="submit" value="提交" />
				<input type="reset" value="重置" />
				
			</td>
		</tr>
	</table>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>