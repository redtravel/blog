<?php /* Smarty version 2.6.26, created on 2016-11-02 10:45:12
         compiled from summary/blogslist.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'summary/blogslist.template', 51, false),array('function', 'pager', 'summary/blogslist.template', 75, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "summary/header.template", 'smarty_include_vars' => array('selected' => 'blogslist','columns' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="onecolumn">

    <?php if (empty ( $this->_tpl_vars['currentBlogCategory'] )): ?>
      <h2><?php echo $this->_tpl_vars['locale']->tr('all'); ?>

		<?php if ($this->_tpl_vars['blogs']): ?>
		  <a href="<?php echo $this->_tpl_vars['url']->getRssUrl(); ?>
?summary=1&amp;type=blogslist">
			<img src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/rss_logo_mini.gif"); ?>
" alt="RSS" />
		  </a>
		<?php endif; ?>
      </h2>
    <?php else: ?>
      <h2><?php echo $this->_tpl_vars['currentBlogCategory']->getName(); ?>
 (<?php echo $this->_tpl_vars['currentBlogCategory']->getNumBlogs(); ?>
)
		<?php if ($this->_tpl_vars['blogs']): ?>
	      <a href="<?php echo $this->_tpl_vars['url']->getRssUrl(); ?>
?summary=1&amp;type=blogslist&amp;blogCategoryId=<?php echo $this->_tpl_vars['currentBlogCategory']->getId(); ?>
">
		    <img src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/rss_logo_mini.gif"); ?>
" alt="RSS" />
		  </a>
		<?php endif; ?>
      </h2>
    <?php endif; ?>
    

           
<div id="boxes">
<div id="searchbox">
<form id="searchForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>
">
<div>
            <label for="searchTerms"><input type="text" tabindex="1" name="searchTerms" id="searchTerms" value="" size="14" /></label>
        <input type="hidden" name="searchType" id="searchType" value="2" />     
        <input type="hidden" name="op" value="summarySearch" />            
        <input type="submit" class="button" name="summarySearch" value="<?php echo $this->_tpl_vars['locale']->tr('search'); ?>
" tabindex="21" />
    </div>
    </form>
    
</div>
<div id="categories">
    
<h3><?php echo $this->_tpl_vars['locale']->tr('blog_categories'); ?>
</h3>
	<ul>
	<li>
	<?php if ($this->_tpl_vars['blogCategoryId'] != 0): ?>
	<a href="?op=BlogList&amp;globalArticleCategoryId=0"><?php echo $this->_tpl_vars['locale']->tr('all'); ?>
</a>
	<?php else: ?>
	<?php echo $this->_tpl_vars['locale']->tr('all'); ?>
	
	<?php endif; ?>
	</li>	
	
	<?php $_from = $this->_tpl_vars['blogCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['blogCategory']):
?>
  <?php if ($this->_tpl_vars['blogCategory']->getNumBlogs() > 0): ?>
		<?php echo smarty_function_math(array('assign' => 'fontSize','equation' => "(int)((x-y)/step)+12",'x' => $this->_tpl_vars['blogCategory']->getNumActiveBlogs(),'y' => $this->_tpl_vars['min'],'step' => $this->_tpl_vars['step']), $this);?>

		<li>
		<?php if ($this->_tpl_vars['blogCategory']->getId() != $this->_tpl_vars['blogCategoryId']): ?>
		<a style="font-size: <?php echo $this->_tpl_vars['fontSize']; ?>
px" href="?op=BlogList&amp;blogCategoryId=<?php echo $this->_tpl_vars['blogCategory']->getId(); ?>
"><?php echo $this->_tpl_vars['blogCategory']->getName(); ?>
</a>
		<?php else: ?>
		<span style="font-size: <?php echo $this->_tpl_vars['fontSize']; ?>
px"><?php echo $this->_tpl_vars['blogCategory']->getName(); ?>
</span>
		<?php endif; ?>		
		</li>
	
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</ul> 

   
</div>   
</div> 
    
    
    
    <?php $_from = $this->_tpl_vars['blogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['blog']):
?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "summary/blog.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        
    <?php endforeach; endif; unset($_from); ?>

<?php echo smarty_function_pager(array('style' => 'links'), $this);?>


</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "summary/footer.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>