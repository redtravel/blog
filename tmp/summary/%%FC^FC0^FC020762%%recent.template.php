<?php /* Smarty version 2.6.26, created on 2016-11-02 10:45:06
         compiled from summary/recent.template */ ?>
<h2><?php echo $this->_tpl_vars['locale']->tr('summary_latest_posts'); ?>

<?php $this->assign('posts', $this->_tpl_vars['summaryStats']->getRecentArticles()); ?>
  <?php if ($this->_tpl_vars['posts']): ?>
          <a href="<?php echo $this->_tpl_vars['url']->getRssUrl(); ?>
?summary=1">
        <img src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/rss_logo_mini.gif"); ?>
" alt="RSS" />
      </a>
  <?php endif; ?>
</h2>
<?php $_from = $this->_tpl_vars['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['post']):
?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "summary/post.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endforeach; endif; unset($_from); ?>