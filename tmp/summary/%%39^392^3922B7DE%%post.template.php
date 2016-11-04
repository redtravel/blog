<?php /* Smarty version 2.6.26, created on 2016-11-02 10:45:06
         compiled from summary/post.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'summary/post.template', 12, false),array('modifier', 'truncate', 'summary/post.template', 15, false),array('modifier', 'capitalize', 'summary/post.template', 30, false),)), $this); ?>
<?php $this->assign('blog', $this->_tpl_vars['post']->getBlogInfo()); ?>
<?php $this->assign('request', $this->_tpl_vars['blog']->getBlogRequestGenerator()); ?>
<?php $this->assign('postDate', $this->_tpl_vars['post']->getDateObject()); ?>
<?php $this->assign('postOwner', $this->_tpl_vars['post']->getUserInfo()); ?>	
<?php $this->assign('postCategories', $this->_tpl_vars['post']->getCategories()); ?>
<?php $this->assign('artGlobalCategory', $this->_tpl_vars['post']->getGlobalCategory()); ?> 
	
    <?php if ($this->_tpl_vars['postOwner']->hasPicture()): ?>
	<?php $this->assign('picture', $this->_tpl_vars['postOwner']->getPicture()); ?>
	<img src="<?php echo $this->_tpl_vars['picture']->getPreviewLink(); ?>
"  width="60" height="60" class="postgrav" />
    <?php else: ?>
    <img src="templates/summary/nouser.gif" class="postgrav" width="60" height="60" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['postOwner']->getUsername())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" />	
    <?php endif; ?>    
    <h3>
    	<a href="<?php echo $this->_tpl_vars['request']->postPermalink($this->_tpl_vars['post']); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['post']->getTopic())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 60) : smarty_modifier_truncate($_tmp, 60)); ?>
</a>
    </h3>
    	
    <div class="subtitle">
    	<?php echo $this->_tpl_vars['locale']->tr('posted_in'); ?>
 <a href="<?php echo $this->_tpl_vars['request']->blogLink(); ?>
"><?php echo $this->_tpl_vars['blog']->getBlog(); ?>
</a><?php if ($this->_tpl_vars['artGlobalCategory']): ?> | <?php echo $this->_tpl_vars['locale']->tr('category'); ?>
: <a href="?op=PostList&amp;globalArticleCategoryId=<?php echo $this->_tpl_vars['artGlobalCategory']->getId(); ?>
"><?php echo $this->_tpl_vars['artGlobalCategory']->getName(); ?>
</a><?php endif; ?>
    </div>
    
    <p>
        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['post']->getText())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 140, "...") : smarty_modifier_truncate($_tmp, 140, "...")); ?>

    </p>
    
    <div class="postinfo">
        <img src="imgs/post.png" width="10" height="11" alt="Author" />
         <strong><?php echo $this->_tpl_vars['postOwner']->getUsername(); ?>
</strong>, <?php echo $this->_tpl_vars['locale']->formatDate($this->_tpl_vars['postDate'],"%e %B %Y"); ?>
 |
        <img src="imgs/comment.png" width="11" height="10" alt="<?php echo $this->_tpl_vars['locale']->tr('comments'); ?>
" />
        <a href="<?php echo $this->_tpl_vars['request']->postPermalink($this->_tpl_vars['post']); ?>
#comments"><?php if ($this->_tpl_vars['post']->getTotalComments() == 0): ?><?php echo $this->_tpl_vars['locale']->tr('comment on this'); ?>
<?php else: ?><?php echo $this->_tpl_vars['post']->getTotalComments(); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['locale']->tr('comments'))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
<?php endif; ?></a>
    </div>
    
    <div class="clearleft">&nbsp;</div>