<?php /* Smarty version 2.6.26, created on 2016-11-02 10:44:17
         compiled from ./templates//andreas-3-columns/post.template */ ?>
<a title="<?php echo $this->_tpl_vars['locale']->tr('permalink_title'); ?>
" href="<?php echo $this->_tpl_vars['url']->postPermalink($this->_tpl_vars['post']); ?>
"><h2><?php echo $this->_tpl_vars['post']->getTopic(); ?>
</h2></a>
<?php $this->assign('postDate', $this->_tpl_vars['post']->getDateObject()); ?>
<?php $this->assign('postOwner', $this->_tpl_vars['post']->getUserInfo()); ?>
<span class="date"><?php echo $this->_tpl_vars['postOwner']->getUsername(); ?>
 | <?php echo $this->_tpl_vars['locale']->formatDate($this->_tpl_vars['postDate'],"%d %B, %Y %H:%M"); ?>
</span>
<p>
 <?php echo $this->_tpl_vars['post']->getText(); ?>

</p>

<p class="info">
	Posted in 
	<?php $_from = $this->_tpl_vars['post']->getCategories(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['categories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['postcategory']):
        $this->_foreach['categories']['iteration']++;
?>
		<a href="<?php echo $this->_tpl_vars['url']->categoryLink($this->_tpl_vars['postcategory']); ?>
"><?php echo $this->_tpl_vars['postcategory']->getName(); ?>
</a><?php if (! ($this->_foreach['categories']['iteration'] == $this->_foreach['categories']['total'])): ?>, <?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>. 
	<?php echo $this->_tpl_vars['locale']->tr('comment on this'); ?>
: <a href="<?php echo $this->_tpl_vars['url']->postPermalink($this->_tpl_vars['post']); ?>
">(<?php echo $this->_tpl_vars['post']->getNumComments(); ?>
)</a>. 
	<?php echo $this->_tpl_vars['locale']->tr('trackbacks'); ?>
:<a href="<?php echo $this->_tpl_vars['url']->postTrackbackStatsLink($this->_tpl_vars['post']); ?>
">(<?php echo $this->_tpl_vars['post']->getNumTrackbacks(); ?>
)</a>.
	<a title="<?php echo $this->_tpl_vars['locale']->tr('permalink_title'); ?>
" href="<?php echo $this->_tpl_vars['url']->postPermalink($this->_tpl_vars['post']); ?>
"><?php echo $this->_tpl_vars['locale']->tr('permalink'); ?>
</a>	
</p>
