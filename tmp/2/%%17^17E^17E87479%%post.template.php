<?php /* Smarty version 2.6.26, created on 2016-11-02 10:33:35
         compiled from ./templates//silver/post.template */ ?>
<?php $this->assign('postDate', $this->_tpl_vars['post']->getDateObject()); ?>
<?php $this->assign('postOwner', $this->_tpl_vars['post']->getUserInfo()); ?>

<h3 class="storytitle"><a href="<?php echo $this->_tpl_vars['url']->postPermalink($this->_tpl_vars['post']); ?>
"><?php echo $this->_tpl_vars['post']->getTopic(); ?>
</a></h3>

<?php $this->assign('postCategory', $this->_tpl_vars['post']->getCategory()); ?>
<?php $this->assign('postText', $this->_tpl_vars['post']->getText()); ?>
<div class="meta">

  <?php $_from = $this->_tpl_vars['post']->getCategories(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['categories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['postCategory']):
        $this->_foreach['categories']['iteration']++;
?> 
    <a href="<?php echo $this->_tpl_vars['url']->categoryLink($this->_tpl_vars['postCategory']); ?>
"
		   title="<?php echo $this->_tpl_vars['postCategory']->getName(); ?>
">
		   <?php echo $this->_tpl_vars['postCategory']->getName(); ?>
</a><?php if (! ($this->_foreach['categories']['iteration'] == $this->_foreach['categories']['total'])): ?>, <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>

 &#8212; <?php echo $this->_tpl_vars['locale']->tr('posted_by'); ?>
 <?php echo $this->_tpl_vars['postOwner']->getUsername(); ?>
 @ <?php echo $this->_tpl_vars['locale']->formatDate($this->_tpl_vars['postDate'],"%H:%M"); ?>

</div>
<div class="storycontent">
    <?php echo $this->_tpl_vars['postText']; ?>
 
    <br style="clear: both;" />
 </div>
<div class="feedback">
    <a href="<?php echo $this->_tpl_vars['url']->postPermalink($this->_tpl_vars['post']); ?>
#comments" title="<?php echo $this->_tpl_vars['locale']->tr('comment on this'); ?>
">
        <?php if ($this->_tpl_vars['post']->getNumComments() == 0): ?><?php echo $this->_tpl_vars['locale']->tr('comment on this'); ?>
<?php else: ?><?php echo $this->_tpl_vars['post']->getNumComments(); ?>
 <?php echo $this->_tpl_vars['locale']->tr('comments'); ?>
<?php endif; ?>
    </a> |
	<?php if ($this->_tpl_vars['post']->getNumTrackbacks() > 0): ?>
	  <a href="<?php echo $this->_tpl_vars['url']->postTrackbackStatsLink($this->_tpl_vars['post']); ?>
" title="<?php echo $this->_tpl_vars['locale']->tr('trackbacks'); ?>
"><?php echo $this->_tpl_vars['post']->getNumTrackbacks(); ?>
 <?php echo $this->_tpl_vars['locale']->tr('trackbacks'); ?>
</a>
	<?php else: ?>
	  <?php echo $this->_tpl_vars['post']->getNumTrackbacks(); ?>
 <?php echo $this->_tpl_vars['locale']->tr('trackbacks'); ?>

	<?php endif; ?>
</div>    
