<?php /* Smarty version 2.6.26, created on 2016-11-02 10:44:27
         compiled from andreas-3-columns/postandcomments.template */ ?>
<?php $this->assign('postPageTitle', $this->_tpl_vars['post']->getTopic()); ?>
<?php $this->assign('postPageTitle', " | ".($this->_tpl_vars['postPageTitle'])); ?>

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
	<?php $this->assign('poster', $this->_tpl_vars['post']->getUserInfo()); ?>
	<!-- <?php echo $this->_tpl_vars['url']->postTrackbackLink($this->_tpl_vars['post']); ?>
 -->
	<a title="<?php echo $this->_tpl_vars['locale']->tr('permalink_title'); ?>
" href="<?php echo $this->_tpl_vars['url']->postPermalink($this->_tpl_vars['post']); ?>
"><h2><?php echo $this->_tpl_vars['post']->getTopic(); ?>
</h2></a>
	<?php $this->assign('postDate', $this->_tpl_vars['post']->getDateObject()); ?>
	<?php $this->assign('postOwner', $this->_tpl_vars['post']->getUserInfo()); ?>
	<span class="date"><?php echo $this->_tpl_vars['postOwner']->getUsername(); ?>
 | <?php echo $this->_tpl_vars['locale']->formatDate($this->_tpl_vars['postDate'],"%d %B, %Y %H:%M"); ?>
</span>
	<p><?php echo $this->_tpl_vars['post']->getText(); ?>
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
</a>	<br>
		
				<?php $this->assign('nextpost', $this->_tpl_vars['post']->getNextArticle()); ?>
		<?php if ($this->_tpl_vars['nextpost'] == true): ?>
			<a href="<?php echo $this->_tpl_vars['url']->postPermalink($this->_tpl_vars['nextpost']); ?>
" title="Next post: <?php echo $this->_tpl_vars['nextpost']->getTopic(); ?>
">&laquo;Next post</a> |
		<?php endif; ?>
		<?php $this->assign('prevpost', $this->_tpl_vars['post']->getPrevArticle()); ?>
		<?php if ($this->_tpl_vars['prevpost'] == true): ?>
			<a href="<?php echo $this->_tpl_vars['url']->postPermalink($this->_tpl_vars['prevpost']); ?>
" title="Previous post: <?php echo $this->_tpl_vars['prevpost']->getTopic(); ?>
">Previous post&raquo;</a>
		<?php endif; ?>
	</p>

	<?php if ($this->_tpl_vars['blogsettings']->getValue('comments_enabled') && $this->_tpl_vars['post']->getCommentsEnabled() == 1): ?>
	<h2 id="comments">Comments</h2>
	<ol id="commentlist">
	
	<?php $this->assign('counter', 1); ?>
	<?php $_from = $this->_tpl_vars['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['comment'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comment']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['comment']):
        $this->_foreach['comment']['iteration']++;
?>
		<a name="<?php echo $this->_tpl_vars['comment']->getId(); ?>
"></a>
		<li id="comment-<?php echo $this->_tpl_vars['comment']->getId(); ?>
">
			<p class="header"><strong><?php echo $this->_tpl_vars['counter']; ?>
.</strong>
			<a href="<?php echo $this->_tpl_vars['comment']->getUserUrl(); ?>
"><?php echo $this->_tpl_vars['comment']->getUsername(); ?>
</a> &nbsp;|&nbsp; <?php $this->assign('commentDate', $this->_tpl_vars['comment']->getDateObject()); ?> <?php echo $this->_tpl_vars['locale']->formatDate($this->_tpl_vars['commentDate'],"%m/%d,%Y"); ?>
 at <?php echo $this->_tpl_vars['locale']->formatDate($this->_tpl_vars['commentDate'],"%H:%M"); ?>
</p>
			<p><?php if ($this->_tpl_vars['comment']->IsPosterAuthenticated()): ?>
	<?php $this->assign('poster', $this->_tpl_vars['comment']->getUser()); ?>
	<?php if ($this->_tpl_vars['poster']->hasPicture()): ?>
		<?php $this->assign('posterimg', $this->_tpl_vars['poster']->getPicture()); ?>
		<img src="<?php echo $this->_tpl_vars['posterimg']->getPreviewLink(); ?>
" alt="<?php echo $this->_tpl_vars['poster']->getUserName(); ?>
" align="right" class="poster_avatar"/>
	<?php endif; ?>
<?php endif; ?>
<?php echo $this->_tpl_vars['comment']->gettext(); ?>
</p>
		</li>
		<?php $this->assign('counter', ($this->_tpl_vars['counter']+1)); ?>
	<?php endforeach; endif; unset($_from); ?>
	</ol>
	<a name="comments"></a>
	
	<h2 id="commentsformheader">Leave a Reply</h2>
	
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['misctemplatepath'])."/commentform.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?> 

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['blogtemplate'])."/footer.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>