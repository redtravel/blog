<?php /* Smarty version 2.6.26, created on 2016-11-02 10:45:06
         compiled from summary/index.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'dynamic', 'summary/index.template', 33, false),array('modifier', 'strip_tags', 'summary/index.template', 62, false),array('modifier', 'truncate', 'summary/index.template', 62, false),)), $this); ?>
<?php $this->_cache_serials['./tmp/summary/%%FD^FD8^FD8C114A%%index.template.inc'] = '04fc89108b98703b555ad488eb2aca46'; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "summary/header.template", 'smarty_include_vars' => array('selected' => 'index')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<div id="maincolumn">
    <div id="intro">
        <p><?php echo $this->_tpl_vars['locale']->tr('summary_welcome_paragraph'); ?>
</p>
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "summary/recent.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<div id="column">
<div id="columncontainer">
    <h2><?php echo $this->_tpl_vars['locale']->tr('search_s'); ?>
</h2>
    <form id="searchForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>
">
    <fieldset class="inputField">
            <label for="searchTerms"><?php echo $this->_tpl_vars['locale']->tr('search'); ?>
:
            <input type="text" name="searchTerms" id="searchTerms" value="" size="14" /></label>
            <label for="searchType"><?php echo $this->_tpl_vars['locale']->tr('search_type'); ?>
:
	   	    <select name="searchType" id="searchType">
	    	   	<option value="1"><?php echo $this->_tpl_vars['locale']->tr('posts'); ?>
</option>
	    	   	<option value="2"><?php echo $this->_tpl_vars['locale']->tr('blogs'); ?>
</option>
	    	   	<option value="3"><?php echo $this->_tpl_vars['locale']->tr('resources'); ?>
</option>
    	    </select>
   </label>        
        <input type="hidden" name="op" value="summarySearch" />            
        <input type="submit" class="button" name="summarySearch" value="<?php echo $this->_tpl_vars['locale']->tr('search'); ?>
" />
    </fieldset>
    </form>

    <h2><?php echo $this->_tpl_vars['locale']->tr('login'); ?>
</h2>
    <form id="loginForm" method="post" action="admin.php">
    <fieldset class="inputField">
	    <?php if ($this->caching && !$this->_cache_including): echo '{nocache:04fc89108b98703b555ad488eb2aca46#0}'; endif;$this->_tag_stack[] = array('dynamic', array()); $_block_repeat=true;smarty_block_dynamic($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>		
	    <?php if ($this->_tpl_vars['authuser']): ?>
	      <?php $this->assign('userName', $this->_tpl_vars['authuser']->getUsername()); ?>
	      <?php echo $this->_tpl_vars['locale']->pr('summary_welcome_msg',$this->_tpl_vars['userName']); ?>
<br/>
	      <a href="admin.php?op=blogSelect"><?php echo $this->_tpl_vars['locale']->tr('summary_go_to_admin'); ?>
</a>
	    <?php else: ?>	
            <label for="userName"><?php echo $this->_tpl_vars['locale']->tr('username'); ?>
:
			<input type="text" tabindex="1" name="userName" id="userName" value="" size="8" maxlength="50" /></label>
            <label for="userPassword"><?php echo $this->_tpl_vars['locale']->tr('password'); ?>
: 
			<input type="password" tabindex="2" name="userPassword" id="userPassword" size="8" maxlength="50" /></label>
            <input type="submit" name="Login" tabindex="3" value="<?php echo $this->_tpl_vars['locale']->tr('login'); ?>
" class="button" />
            <input type="hidden" name="op" value="Login"  />
        	<br/>
	        <a href="?op=resetPasswordForm"><?php echo $this->_tpl_vars['locale']->tr('password_forgotten'); ?>
</a>	
		<?php endif; ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_dynamic($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:04fc89108b98703b555ad488eb2aca46#0}'; endif;?>
    </fieldset>
    </form>
    
    <h2><?php echo $this->_tpl_vars['locale']->tr('summary_most_active_blogs'); ?>

    <?php $this->assign('activeBlogs', $this->_tpl_vars['summaryStats']->getMostActiveBlogs()); ?>
      <a href="<?php echo $this->_tpl_vars['url']->getRssUrl(); ?>
?summary=1&amp;type=mostactiveblogs">
        <img src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/rss_logo_mini.gif"); ?>
" 
         alt="RSS" /></a>    
    </h2>
    <?php if ($this->_tpl_vars['activeBlogs']): ?>
      <ul class="itemList">
        <?php $_from = $this->_tpl_vars['activeBlogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['blog']):
?>
	      <?php $this->assign('url', $this->_tpl_vars['blog']->getBlogRequestGenerator()); ?>
          <li class="item"><a href="<?php echo $this->_tpl_vars['url']->blogLink(); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['blog']->getBlog())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 60) : smarty_modifier_truncate($_tmp, 60)); ?>
</a></li>
        <?php endforeach; endif; unset($_from); ?>
      </ul>
    <?php endif; ?>
    
    
    
        <?php $this->assign('recentBlogs', $this->_tpl_vars['summaryStats']->getRecentBlogs()); ?>
    <h2><?php echo $this->_tpl_vars['locale']->tr('summary_newest_blogs'); ?>

      <a href="<?php echo $this->_tpl_vars['url']->getRssUrl(); ?>
?summary=1&amp;type=newestblogs">
        <img src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/rss_logo_mini.gif"); ?>
" 
           alt="RSS" /></a>    
    </h2>
     <?php if ($this->_tpl_vars['recentBlogs']): ?>
      <ul class="itemList">
        <?php $_from = $this->_tpl_vars['recentBlogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['blog']):
?>
          <?php $this->assign('url', $this->_tpl_vars['blog']->getBlogRequestGenerator()); ?>
		            <li class="item"><a href="<?php echo $this->_tpl_vars['url']->blogLink(); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['blog']->getBlog())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 60) : smarty_modifier_truncate($_tmp, 60)); ?>
</a></li>
        <?php endforeach; endif; unset($_from); ?>
      </ul>
    <?php endif; ?>

    <h2><?php echo $this->_tpl_vars['locale']->tr('summary_most_read_articles'); ?>

      <?php $this->assign('readestBlogs', $this->_tpl_vars['summaryStats']->getMostReadArticles()); ?>
        <a href="<?php echo $this->_tpl_vars['url']->getRssUrl(); ?>
?summary=1&amp;type=mostread">
          <img src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/rss_logo_mini.gif"); ?>
" 
          alt="RSS" /></a>		
     </h2>
      <?php if ($this->_tpl_vars['readestBlogs']): ?>
        <ul class="itemList">
          <?php $_from = $this->_tpl_vars['readestBlogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['readest'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['readest']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['post']):
        $this->_foreach['readest']['iteration']++;
?>
            <?php $this->assign('blog', $this->_tpl_vars['post']->getBlogInfo()); ?>
	        <?php $this->assign('url', $this->_tpl_vars['blog']->getBlogRequestGenerator()); ?>		
            <li class="item">
              <a href="<?php echo $this->_tpl_vars['url']->postPermalink($this->_tpl_vars['post']); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['post']->getTopic())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 60) : smarty_modifier_truncate($_tmp, 60)); ?>
</a> (<?php echo $this->_tpl_vars['post']->getNumReads(); ?>
)<br />
           </li>
          <?php endforeach; endif; unset($_from); ?>
        </ul>
      <?php endif; ?>

    <h2><?php echo $this->_tpl_vars['locale']->tr('summary_most_commented_articles'); ?>

    <?php $this->assign('commentedPosts', $this->_tpl_vars['summaryStats']->getMostCommentedArticles()); ?>
      <a href="<?php echo $this->_tpl_vars['url']->getRssUrl(); ?>
?summary=1&amp;type=mostcommented">
        <img src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/rss_logo_mini.gif"); ?>
" 
         alt="RSS" /></a>
	</h2>
    <?php if ($this->_tpl_vars['commentedPosts']): ?> 
      <ul class="itemList">
        <?php $_from = $this->_tpl_vars['commentedPosts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['commented'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['commented']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['post']):
        $this->_foreach['commented']['iteration']++;
?>
	      <?php $this->assign('blog', $this->_tpl_vars['post']->getBlogInfo()); ?>
	      <?php $this->assign('url', $this->_tpl_vars['blog']->getBlogRequestGenerator()); ?>	
          <li class="item">		
            <a href="<?php echo $this->_tpl_vars['url']->postPermalink($this->_tpl_vars['post']); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['post']->getTopic())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 60) : smarty_modifier_truncate($_tmp, 60)); ?>
</a> (<?php echo $this->_tpl_vars['post']->getTotalComments(); ?>
)<br />
          </li>
        <?php endforeach; endif; unset($_from); ?>
      </ul>
    <?php endif; ?>    

</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "summary/footer.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>