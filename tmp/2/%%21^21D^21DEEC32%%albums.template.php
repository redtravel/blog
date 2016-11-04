<?php /* Smarty version 2.6.26, created on 2016-11-02 10:33:50
         compiled from silver/albums.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'silver/albums.template', 13, false),array('modifier', 'truncate', 'silver/albums.template', 13, false),array('modifier', 'escape', 'silver/albums.template', 13, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['blogtemplate'])."/header.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
 <h2><?php echo $this->_tpl_vars['locale']->tr('albums'); ?>
</h2>
<?php $_from = $this->_tpl_vars['albums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['album']):
?>
 <?php $this->assign('aDate', $this->_tpl_vars['album']->getTimestamp()); ?>
 <div class="post">
    <h3 class="storytitle"><a href="<?php echo $this->_tpl_vars['url']->albumLink($this->_tpl_vars['album']); ?>
"><?php echo $this->_tpl_vars['album']->getName(); ?>
</a></h3>
    <div class="meta">
        <?php echo $this->_tpl_vars['locale']->tr('created'); ?>
 <?php echo $this->_tpl_vars['locale']->formatDate($this->_tpl_vars['aDate'],"%d %b, %Y"); ?>

    </div>
    <div class="storycontent">
    <p>
       <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['album']->getDescription())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 255, "...") : smarty_modifier_truncate($_tmp, 255, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

    </p>
    </div>
    <div class="feedback">
      <a href="<?php echo $this->_tpl_vars['url']->albumLink($this->_tpl_vars['album']); ?>
">  
       <img src="<?php echo $this->_tpl_vars['url']->getTemplateFile("folderblue.gif"); ?>
" width="10" height="11" style="border:0px;" />
        <?php echo $this->_tpl_vars['locale']->tr('view'); ?>
 (<?php echo $this->_tpl_vars['album']->getNumResources(); ?>
)
       </a>
    </div>
 </div>
<?php endforeach; endif; unset($_from); ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['blogtemplate'])."/panel.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['blogtemplate'])."/footer.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>