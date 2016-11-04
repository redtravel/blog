<?php /* Smarty version 2.6.26, created on 2016-11-02 13:08:40
         compiled from admin/siteblogs.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'admin/siteblogs.template', 28, false),array('modifier', 'round', 'admin/siteblogs.template', 89, false),array('block', 'check_perms', 'admin/siteblogs.template', 50, false),array('function', 'counter', 'admin/siteblogs.template', 72, false),array('function', 'adminpager', 'admin/siteblogs.template', 124, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/header.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/navigation.template", 'smarty_include_vars' => array('showOpt' => 'editSiteBlogs','title' => $this->_tpl_vars['locale']->tr('editSiteBlogs'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="js/ui/plogui.js"></script>
<script type="text/javascript">
	var errorStatusMsg = '<?php echo $this->_tpl_vars['locale']->tr('error_select_status'); ?>
';
	var showMassiveChangeOption = '<?php echo $this->_tpl_vars['locale']->tr('show_massive_change_option'); ?>
';
	var hideMassiveChangeOption = '<?php echo $this->_tpl_vars['locale']->tr('hide_massive_change_option'); ?>
';
</script>
        <div id="list_nav_bar">
            <div id="list_nav_select">
            
<form id="viewBlogs" action="admin.php" method="post">
 <fieldset>
  <legend><?php echo $this->_tpl_vars['locale']->tr('show_by'); ?>
</legend>
   <div class="list_nav_option">
    <label for="status"><?php echo $this->_tpl_vars['locale']->tr('status'); ?>
</label>
	<br />
    <select name="status" id="status">
    <?php $_from = $this->_tpl_vars['blogstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['status']):
?>
      <option value="<?php echo $this->_tpl_vars['status']; ?>
" <?php if ($this->_tpl_vars['currentstatus'] == $this->_tpl_vars['status']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr($this->_tpl_vars['name']); ?>
</option>
    <?php endforeach; endif; unset($_from); ?>
    </select>
   </div>
   
   <div class="list_nav_option">
   <label for="search"><?php echo $this->_tpl_vars['locale']->tr('search_terms'); ?>
</label>
   <br />
   <input type="text" name="searchTerms" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchTerms'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" size="15" id="search" />
   </div>   
   
   <div class="list_nav_option">
    <br />
    <input type="hidden" name="op" value="editSiteBlogs" />
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
 
 <form id="editBlogs" method="post" action="admin.php">
<?php $this->_tag_stack[] = array('check_perms', array('adminperm' => 'update_site_blog')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>	
     <div class="optionIcon">
		<a id="optionIconLink" href="#bulkEdit" title="<?php echo $this->_tpl_vars['locale']->tr('show_massive_change_option'); ?>
" onclick="switchMassiveOption()"><?php echo $this->_tpl_vars['locale']->tr('show_massive_change_option'); ?>
</a>
	</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	
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
   <table id="list" class="info" summary="<?php echo $this->_tpl_vars['locale']->tr('editSiteBlogs'); ?>
">
    <thead>
     <tr>
      <th><input class="checkbox" type="checkbox" name="all" id="all" value="1" onclick="toggleAllChecks('editBlogs');" /></th>
      <th style="width:35%;"><?php echo $this->_tpl_vars['locale']->tr('blog'); ?>
</th>
      <th style="width:25%"><?php echo $this->_tpl_vars['locale']->tr('owner'); ?>
</th>
      <th style="width:15%;"><?php echo $this->_tpl_vars['locale']->tr('status'); ?>
</th>
	  <th style="width:10%;"><?php echo $this->_tpl_vars['locale']->tr('quota'); ?>
</th> 
      <th style="width:25%;"><?php echo $this->_tpl_vars['locale']->tr('actions'); ?>
</th>
     </tr>
    </thead>
    <tbody>
     <?php $_from = $this->_tpl_vars['siteblogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['siteblog']):
?>
      <tr>
       <td><input class="checkbox" type="checkbox" name="blogIds[<?php echo smarty_function_counter(array(), $this);?>
]" value="<?php echo $this->_tpl_vars['siteblog']->getId(); ?>
"/></td>
       <td class="col_highlighted">
        <?php $this->_tag_stack[] = array('check_perms', array('adminperm' => 'update_site_blog')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><a href="?op=editBlog&amp;blogId=<?php echo $this->_tpl_vars['siteblog']->getId(); ?>
"><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo $this->_tpl_vars['siteblog']->getBlog(); ?>
<?php $this->_tag_stack[] = array('check_perms', array('adminperm' => 'update_site_blog')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?></a><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
       </td>
       <td>
	    <?php $this->assign('ownerInfo', $this->_tpl_vars['siteblog']->getOwnerInfo()); ?>
	    <a href="?op=editSiteUser&amp;userId=<?php echo $this->_tpl_vars['ownerInfo']->getId(); ?>
"><?php echo $this->_tpl_vars['ownerInfo']->getUsername(); ?>
</a>
	   </td>
       <td>
        <?php $_from = $this->_tpl_vars['blogstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['status']):
?>
          <?php if ($this->_tpl_vars['siteblog']->getStatus() == $this->_tpl_vars['status']): ?>
          <?php if ($this->_tpl_vars['status'] == 2): ?><span style="color:red"><?php echo $this->_tpl_vars['locale']->tr($this->_tpl_vars['name']); ?>
</span>
		  <?php else: ?><?php echo $this->_tpl_vars['locale']->tr($this->_tpl_vars['name']); ?>
<?php endif; ?>
		  <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>        
       </td>       
	   <td>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['siteblog']->getResourcesQuota())) ? $this->_run_mod_handler('round', true, $_tmp, $this->_tpl_vars['locale']) : smarty_modifier_round($_tmp, $this->_tpl_vars['locale'])); ?>

	   </td>
       <td>
        <div class="list_action_button">
	     <?php $this->_tag_stack[] = array('check_perms', array('adminperm' => 'update_site_blog')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
         <a href="?op=deleteBlog&amp;blogId=<?php echo $this->_tpl_vars['siteblog']->getId(); ?>
" title="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
">
	       <img src="imgs/admin/icon_delete-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
" />
	     </a>
         <a href="?op=editBlog&amp;blogId=<?php echo $this->_tpl_vars['siteblog']->getId(); ?>
" title="<?php echo $this->_tpl_vars['locale']->tr('edit'); ?>
">
	       <img src="imgs/admin/icon_edit-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('edit'); ?>
" />
	     </a>
		 <?php $this->assign('blogUrl', $this->_tpl_vars['siteblog']->getBlogRequestGenerator()); ?>
       	 <?php $this->assign('blogname', $this->_tpl_vars['siteblog']->getBlog()); ?>
		 <a href="<?php echo $this->_tpl_vars['blogUrl']->blogLink(); ?>
" title="<?php echo $this->_tpl_vars['locale']->pr('goto_blog_page',$this->_tpl_vars['blogname']); ?>
">
		   <img src="imgs/admin/icon_goto-16.png" alt="<?php echo $this->_tpl_vars['locale']->pr('goto_blog_page',$this->_tpl_vars['blogname']); ?>
" />
		 </a>
		 <?php if ($this->_tpl_vars['siteblog']->getStatus() == 3): ?>
         <a href="?op=resendConfirmation&amp;blogId=<?php echo $this->_tpl_vars['siteblog']->getId(); ?>
" title="<?php echo $this->_tpl_vars['locale']->tr('resend_confirmation_blog'); ?>
">
	       <img src="imgs/admin/icon_mail-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('resend_confirmation_blog'); ?>
" />
	     </a>
		 <?php endif; ?>
		 <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		 <?php $this->_tag_stack[] = array('check_perms', array('adminperm' => 'edit_blog_admin_mode')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		 <a href="?op=adminBlogSelect&amp;blogId=<?php echo $this->_tpl_vars['siteblog']->getId(); ?>
&amp;action=controlCenter" title="<?php echo $this->_tpl_vars['locale']->tr('administrate_user_blog'); ?>
">
		   <img src="imgs/admin/icon_lock_open-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('administrate_user_blog'); ?>
" />
		 </a>
		 <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
      </tr>
     <?php endforeach; endif; unset($_from); ?>
    </tbody> 
   </table>
  </div>
 <a name="bulkEdit"></a>
  <div id="list_action_bar">
	<?php echo smarty_function_adminpager(array('style' => 'list'), $this);?>

	<?php $this->_tag_stack[] = array('check_perms', array('adminperm' => 'update_site_blog')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <input type="hidden" name="op" value="deleteBlogs"/>
    <input type="submit" name="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
" value="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
"/>  
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $this->_tag_stack[] = array('check_perms', array('adminperm' => 'update_site_blog')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <div id="massiveChangeOption" style="display: none">
        <fieldset>	
        <legend><?php echo $this->_tpl_vars['locale']->tr('massive_change_option'); ?>
</legend>            
            <label for="blogStatus"><?php echo $this->_tpl_vars['locale']->tr('status'); ?>
</label>
            <select name="blogStatus" id="blogStatus">
              <option value="-1">-<?php echo $this->_tpl_vars['locale']->tr('select'); ?>
-</option>
		    	<?php $_from = $this->_tpl_vars['blogstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['status']):
?>
		      		<?php if ($this->_tpl_vars['status'] != -1): ?><option value="<?php echo $this->_tpl_vars['status']; ?>
"><?php echo $this->_tpl_vars['locale']->tr($this->_tpl_vars['name']); ?>
</option><?php endif; ?>
		    	<?php endforeach; endif; unset($_from); ?>	
            </select>
            <input type="button" name="changeBlogStatus" value="<?php echo $this->_tpl_vars['locale']->tr('change_status'); ?>
" class="submit" onClick="javascript:submitBlogsList('changeBlogStatus');" /> 
        </fieldset>
	</div>
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