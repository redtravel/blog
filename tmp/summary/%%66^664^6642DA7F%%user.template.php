<?php /* Smarty version 2.6.26, created on 2016-11-02 10:45:18
         compiled from summary/user.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'summary/user.template', 5, false),)), $this); ?>
       <?php if ($this->_tpl_vars['user']->hasPicture()): ?>
	<?php $this->assign('picture', $this->_tpl_vars['user']->getPicture()); ?>
	     <img src="<?php echo $this->_tpl_vars['picture']->getPreviewLink(); ?>
"  width="60" height="60" class="postgrav" />
    <?php else: ?>
        <img src="templates/summary/nouser.gif" class="postgrav" width="60" height="60" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getUsername())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" />	
    <?php endif; ?> 

        <h3><a href="?op=UserProfile&amp;userId=<?php echo $this->_tpl_vars['user']->getId(); ?>
"><?php echo $this->_tpl_vars['user']->getUsername(); ?>
</a></h3>
		<div class="subtitle">
		 <b><?php echo $this->_tpl_vars['locale']->tr('blogs'); ?>
:</b>
		 <?php $this->assign('userBlogs', $this->_tpl_vars['user']->getBlogs($this->_tpl_vars['blogActive'])); ?>
		 <?php $_from = $this->_tpl_vars['userBlogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['userBlogsLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['userBlogsLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['userBlog']):
        $this->_foreach['userBlogsLoop']['iteration']++;
?>
		  <?php $this->assign('urlGen', $this->_tpl_vars['userBlog']->getBlogRequestGenerator()); ?>
		  <a href="<?php echo $this->_tpl_vars['urlGen']->blogLink(); ?>
"><?php echo $this->_tpl_vars['userBlog']->getBlog(); ?>
</a><?php if (! ($this->_foreach['userBlogsLoop']['iteration'] == $this->_foreach['userBlogsLoop']['total'])): ?>, <?php endif; ?>
		 <?php endforeach; endif; unset($_from); ?>
		</div>
		<div class="footer"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getAboutMyself())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</div>
		<div class="clearleft">&nbsp;</div>