<?php /* Smarty version 2.6.26, created on 2016-11-01 23:52:28
         compiled from admin/editarticlecategories.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'admin/editarticlecategories.template', 22, false),array('function', 'counter', 'admin/editarticlecategories.template', 62, false),array('function', 'adminpager', 'admin/editarticlecategories.template', 93, false),array('block', 'check_perms', 'admin/editarticlecategories.template', 65, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/header.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/navigation.template", 'smarty_include_vars' => array('showOpt' => 'editArticleCategories','title' => $this->_tpl_vars['locale']->tr('editArticleCategories'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">
<?php echo '
YAHOO.util.Event.addListener( window, "load", function() {
		var t = new Lifetype.UI.TableEffects( "list" );
		t.stripe();
		t.highlightRows();
	});
'; ?>

</script>
        <div id="list_nav_bar">
            <div id="list_nav_select">
            
<form id="viewArticleCategories" action="admin.php" method="post">
 <fieldset>
  <legend><?php echo $this->_tpl_vars['locale']->tr('show_by'); ?>
</legend>

   <div class="list_nav_option">
   <label for="search"><?php echo $this->_tpl_vars['locale']->tr('search_terms'); ?>
</label>
   <br />
   <input type="text" name="searchTerms" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchTerms'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" size="15" id="search" />
   </div>   
   
   <div class="list_nav_option">
    <br />
    <input type="hidden" name="op" value="editArticleCategories" />
    <input type="submit" name="Show" value="<?php echo $this->_tpl_vars['locale']->tr('show'); ?>
" />
   </div>

	<div class="list_nav_option">
		<br/>
		<a href="<?php echo $this->_tpl_vars['pager']->getCurrentPageLink(); ?>
" title="<?php echo $this->_tpl_vars['locale']->tr('bookmark_this_filter'); ?>
">
			<img style="border:0px" src="imgs/admin/icon_link-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('bookmark_this_filter'); ?>
" />
		</a>
	</div>

  </fieldset> 
 </form> 
 </div>
 <br style="clear:both" />
 </div> 

 <form id="deleteCategories" action="admin.php" method="post">
 <div id="list">
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/successmessage.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/errormessage.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <table class="info" id="info" summary="<?php echo $this->_tpl_vars['locale']->tr('editArticleCategories'); ?>
">
  <thead>
   <tr>
    <th><input class="checkbox" type="checkbox" name="all" id="all" value="1" onclick="toggleAllChecks('deleteCategories');" /></th>
    <th style="width:50%;"><?php echo $this->_tpl_vars['locale']->tr('category'); ?>
</th>
    <th style="width:20%"><?php echo $this->_tpl_vars['locale']->tr('posts'); ?>
</th>
    <th style="width:20%"><?php echo $this->_tpl_vars['locale']->tr('show_in_main_page'); ?>
</th>
    <th style="width:10%;"><?php echo $this->_tpl_vars['locale']->tr('actions'); ?>
</th>
   </tr>
  </thead>
  <tbody> 
  <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
  <tr class="even">
   <td>
      <input class="checkbox" type="checkbox" name="categoryIds[<?php echo smarty_function_counter(array(), $this);?>
]" id="checks_<?php echo $this->_tpl_vars['category']->getId(); ?>
" value="<?php echo $this->_tpl_vars['category']->getId(); ?>
" />
   </td>  
   <td class="col_highlighted">
    <?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_category')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><a href="admin.php?op=editArticleCategory&amp;categoryId=<?php echo $this->_tpl_vars['category']->getId(); ?>
"><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo $this->_tpl_vars['category']->getName(); ?>
<?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_category')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?></a><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
   </td>
   <?php if ($this->_tpl_vars['category']->getNumAllArticles() > 0): ?>
    <td><?php $this->_tag_stack[] = array('check_perms', array('perm' => 'view_articles')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><a href="admin.php?op=editPosts&amp;showCategory=<?php echo $this->_tpl_vars['category']->getId(); ?>
&amp;showStatus=0&amp;showMonth=-1"><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>(<?php echo $this->_tpl_vars['category']->getNumAllArticles(); ?>
)<?php $this->_tag_stack[] = array('check_perms', array('perm' => 'view_articles')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?></a><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
   <?php else: ?>
    <td>(0)</td>
   <?php endif; ?>
   <td>
    <?php if ($this->_tpl_vars['category']->isInMainPage()): ?><?php echo $this->_tpl_vars['locale']->tr('yes'); ?>
<?php else: ?><?php echo $this->_tpl_vars['locale']->tr('no'); ?>
<?php endif; ?>
   </td>
   <td>
     <div class="list_action_button">
	 <?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_category')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
       <a href="?op=editArticleCategory&amp;categoryId=<?php echo $this->_tpl_vars['category']->getId(); ?>
" title="<?php echo $this->_tpl_vars['locale']->tr('edit'); ?>
">
	     <img src="imgs/admin/icon_edit-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('edit'); ?>
" />
	   </a>
       <a href="?op=deleteArticleCategory&amp;categoryId=<?php echo $this->_tpl_vars['category']->getId(); ?>
" title="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
">
	     <img src="imgs/admin/icon_delete-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
" />
	   </a>
	 <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
     </div>
   </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
 </tbody> 
 </table>
 </div>
 <div id="list_action_bar">
  <?php echo smarty_function_adminpager(array('style' => 'list'), $this);?>

  <?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_category')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
   <input type="hidden" name="op" value="deleteArticleCategories"/>
   <input type="submit" name="Delete selected" value="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
"/>
  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
 </div>
 </form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/footernavigation.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/footer.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>