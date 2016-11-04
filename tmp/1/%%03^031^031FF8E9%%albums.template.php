<?php /* Smarty version 2.6.26, created on 2016-11-02 10:43:37
         compiled from andreas-3-columns/albums.template */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['blogtemplate'])."/header.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['blogtemplate'])."/sidebar-l.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['blogtemplate'])."/sidebar-r.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
<h2><?php echo $this->_tpl_vars['locale']->tr('albums'); ?>
</h2>
 <!-- album contents go here -->
<table style="border:0px;width:90%;" summary="Albums">
<tr>
  <?php $this->assign('counter', 0); ?>
  <?php $_from = $this->_tpl_vars['albums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['album']):
?>
  <td style="width:33%;" align="center">
   <a class="nodecoration" href="<?php echo $this->_tpl_vars['url']->albumLink($this->_tpl_vars['album']); ?>
">
   <img style="border:0px;" src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/admin/icon_folder-72.png"); ?>
" alt="Folder" /><br/>
   <?php echo $this->_tpl_vars['album']->getName(); ?>
 (<?php echo $this->_tpl_vars['album']->getNumResources(); ?>
)
  </a>
  <?php $this->assign('counter', ($this->_tpl_vars['counter']+1)); ?>
  </td>
  <?php if ($this->_tpl_vars['counter']%3 == 0): ?>
   </tr>
   <tr>
  <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?>
 <td></td></tr>
 </table>
 <!-- end of the albums -->
 </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['blogtemplate'])."/footer.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>