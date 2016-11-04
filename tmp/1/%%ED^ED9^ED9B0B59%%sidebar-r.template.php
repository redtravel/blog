<?php /* Smarty version 2.6.26, created on 2016-11-02 10:43:37
         compiled from ./templates//andreas-3-columns/sidebar-r.template */ ?>
<div id="extras">
	<?php $this->assign('blogOwner', $this->_tpl_vars['blog']->getOwnerInfo()); ?>
	<?php if ($this->_tpl_vars['blogOwner']->getAboutMyself()): ?>
	<H3>About</H3>
	<P><?php echo $this->_tpl_vars['blogOwner']->getfullName(); ?>
</P>
	<?php $this->assign('owner', $this->_tpl_vars['blog']->getOwnerInfo()); ?>
	<P><?php echo $this->_tpl_vars['blogOwner']->getAboutMyself(); ?>
</P>
	<?php endif; ?>
	
	<h3>Categories</h3>
	<p>
	<?php $_from = $this->_tpl_vars['articlecategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['articleCategory']):
?>
	<a href="<?php echo $this->_tpl_vars['url']->categoryLink($this->_tpl_vars['articleCategory']); ?>
"><?php echo $this->_tpl_vars['articleCategory']->getName(); ?>
</a> [<?php echo $this->_tpl_vars['articleCategory']->getNumArticles(); ?>
]<br/>
	<?php endforeach; endif; unset($_from); ?>
	</p>
	
	<h3>Links</h3>
	<p>
	<?php $_from = $this->_tpl_vars['mylinkscategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['linkcategory']):
?>
	<b><?php echo $this->_tpl_vars['linkcategory']->getName(); ?>
</b><br/>
		<?php $_from = $this->_tpl_vars['linkcategory']->getLinks(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?>
			- <a href="<?php echo $this->_tpl_vars['link']->getUrl(); ?>
" title="<?php echo $this->_tpl_vars['link']->getDescription(); ?>
"><?php echo $this->_tpl_vars['link']->getName(); ?>
</a><br/>
		<?php endforeach; endif; unset($_from); ?>
	<?php endforeach; endif; unset($_from); ?>
	</p>
	
	<h3>Syndicate</h3>
	<p>
		<a class="nodecoration" title="Link to the RSS 0.90 feed." href="<?php echo $this->_tpl_vars['url']->rssLink('rss090'); ?>
"><img src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/rss090_logo.gif"); ?>
" style="border:0px;" alt="RSS 0.90" /></a><br/>
		<a class="nodecoration" title="Link to the RSS 1.0 feed." href="<?php echo $this->_tpl_vars['url']->rssLink('rss10'); ?>
"><img src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/rss10_logo.gif"); ?>
" style="border:0px;" alt="RSS 1.0" /></a><br/>
		<a class="nodecoration" title="Link to the RSS 2.0 feed." href="<?php echo $this->_tpl_vars['url']->rssLink('rss20'); ?>
"><img src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/rss20_logo.gif"); ?>
" style="border:0px;" alt="RSS 2.0" /></a><br/>
		<a class="nodecoration" title="Link to the Atom 0.3 feed." href="<?php echo $this->_tpl_vars['url']->rssLink('atom'); ?>
"><img src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/atom_logo.png"); ?>
" style="border:0px;" alt="Atom 0.3" /></a><br/>	
	</p>
	
	<h3>Version:</h3>
	<p>andreas01 v1.3</p>
</div>
 
 