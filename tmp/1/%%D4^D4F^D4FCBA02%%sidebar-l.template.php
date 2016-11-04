<?php /* Smarty version 2.6.26, created on 2016-11-02 10:43:37
         compiled from ./templates//andreas-3-columns/sidebar-l.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', './templates//andreas-3-columns/sidebar-l.template', 24, false),array('modifier', 'strip_tags', './templates//andreas-3-columns/sidebar-l.template', 24, false),array('modifier', 'escape', './templates//andreas-3-columns/sidebar-l.template', 24, false),)), $this); ?>
<div id="avmenu">
<?php $this->assign('blogOwner', $this->_tpl_vars['blog']->getOwnerInfo()); ?>
<?php $this->assign('AboutMyself', $this->_tpl_vars['blogOwner']->getAboutMyself()); ?>
<?php if ($this->_tpl_vars['blogOwner']->hasPicture() && $this->_tpl_vars['AboutMyself']): ?>  
  	<h2><?php echo $this->_tpl_vars['locale']->tr('about_myself'); ?>
</h2>
  	<div id="AboutMyself">
  	<?php $this->assign('picture', $this->_tpl_vars['blogOwner']->getPicture()); ?>
  	<img id="UserPicture" src="<?php echo $this->_tpl_vars['picture']->getPreviewLink(); ?>
" alt="<?php echo $this->_tpl_vars['blogOwner']->getUsername(); ?>
" />
  	<p><?php echo $this->_tpl_vars['AboutMyself']; ?>
</p>
  	</div>
<?php endif; ?>
	<h2 class="hide">Menu:</h2>
	<ul>
		<li><a href="<?php echo $this->_tpl_vars['url']->blogLink(); ?>
">Home</a></li>
		<li><a href="<?php echo $this->_tpl_vars['url']->albumLink(); ?>
">Albums</a></li>
		<li><a href="<?php echo $this->_tpl_vars['url']->getAdminUrl(); ?>
">Admin</a></li>
		<li><a title="<?php echo $this->_tpl_vars['locale']->tr('archives'); ?>
" href="<?php echo $this->_tpl_vars['url']->templatePage('archives'); ?>
">Archives</a></li>
		<li><a title="<?php echo $this->_tpl_vars['locale']->tr('summary'); ?>
" href="<?php echo $this->_tpl_vars['url']->getUrl("/summary.php"); ?>
">Summary</a></li>
	</ul>

<h3>Recent Entries</h3>		
		<ul>
		<?php $_from = $this->_tpl_vars['recentposts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['recentpost']):
?>
			<li><a title="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['recentpost']->getText())) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, "...") : smarty_modifier_truncate($_tmp, 150, "...")))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" href="<?php echo $this->_tpl_vars['url']->postLink($this->_tpl_vars['recentpost']); ?>
"><?php echo $this->_tpl_vars['recentpost']->getTopic(); ?>
</a></li>
		<?php endforeach; endif; unset($_from); ?>
		</ul>

	<form method="post" action="<?php echo $this->_tpl_vars['url']->getIndexUrl(); ?>
">
		<LABEL for=s>Search this site:</LABEL>
		<input type="text" name="searchTerms" value="" size="13" />
		<input type="hidden" name="op" value="Search" />
		<input type="hidden" name="blogId" value="<?php echo $this->_tpl_vars['blog']->getId(); ?>
"/>
		<input type="submit" name="Search" value="Go" />
	</form>

</div>