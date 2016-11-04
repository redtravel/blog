<?php /* Smarty version 2.6.26, created on 2016-11-02 10:45:12
         compiled from summary/blog.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'summary/blog.template', 11, false),)), $this); ?>
    <?php $this->assign('updateDate', $this->_tpl_vars['blog']->getUpdateDateObject()); ?>
    <?php $this->assign('BlogCreateDate', $this->_tpl_vars['blog']->getCreateDateObject()); ?>
    <?php $this->assign('owner', $this->_tpl_vars['blog']->getOwnerInfo()); ?>
	<?php $this->assign('request', $this->_tpl_vars['blog']->getBlogRequestGenerator()); ?>
	<?php $this->assign('category', $this->_tpl_vars['blog']->getBlogCategory()); ?>
   
                      <?php if ($this->_tpl_vars['owner']->hasPicture()): ?>
	<?php $this->assign('picture', $this->_tpl_vars['owner']->getPicture()); ?>
	     <img src="<?php echo $this->_tpl_vars['picture']->getPreviewLink(); ?>
"  width="60" height="60" class="postgrav" />
    <?php else: ?>
        <img src="templates/summary/nouser.gif" class="postgrav" width="60" height="60" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['owner']->getUsername())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" />	
    <?php endif; ?> 
    <h3>
	 <a href="<?php echo $this->_tpl_vars['request']->blogLink(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['blog']->getBlog())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</a>
	</h3>
    <div class="subtitle"><?php echo $this->_tpl_vars['locale']->tr('articles'); ?>
: <?php echo $this->_tpl_vars['blog']->getTotalPosts(); ?>
 | <?php echo $this->_tpl_vars['locale']->tr('comments'); ?>
: <?php echo $this->_tpl_vars['blog']->getTotalComments(); ?>
 | <?php echo $this->_tpl_vars['locale']->tr('trackbacks'); ?>
: <?php echo $this->_tpl_vars['blog']->getTotalTrackbacks(); ?>
<?php if ($this->_tpl_vars['category']): ?> | <?php echo $this->_tpl_vars['locale']->tr('category'); ?>
: <a href="?op=BlogList&amp;blogCategoryId=<?php echo $this->_tpl_vars['category']->getId(); ?>
"><?php echo $this->_tpl_vars['category']->getName(); ?>
</a><?php endif; ?>
    </div>

         <div class="footer">
			<?php $this->assign('blogUsers', $this->_tpl_vars['blog']->getUsersInfo()); ?>
			<?php echo $this->_tpl_vars['locale']->tr('create_date'); ?>
: <?php echo $this->_tpl_vars['locale']->formatDate($this->_tpl_vars['BlogCreateDate'],"%e %B %Y"); ?>
 | <?php echo $this->_tpl_vars['locale']->tr('users'); ?>
: 
			<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['owner']->getUsername())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
<?php $_from = $this->_tpl_vars['blogUsers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['blogUsersLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['blogUsersLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['blogUser']):
        $this->_foreach['blogUsersLoop']['iteration']++;
?><?php if ($this->_tpl_vars['owner']->getId() != $this->_tpl_vars['blogUser']->getId()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['blogUser']->getUsername())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
<?php endif; ?><?php endforeach; endif; unset($_from); ?></strong>
        </div>

        <div class="clearleft">&nbsp;</div>