<?php /* Smarty version 2.6.26, created on 2016-11-02 13:08:21
         compiled from admin/siteusers.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'admin/siteusers.template', 37, false),array('modifier', 'truncate', 'admin/siteusers.template', 92, false),array('block', 'check_perms', 'admin/siteusers.template', 61, false),array('function', 'adminpager', 'admin/siteusers.template', 129, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/header.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/navigation.template", 'smarty_include_vars' => array('showOpt' => 'editSiteUsers','title' => $this->_tpl_vars['locale']->tr('editSiteUsers'))));
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
            
<form id="viewUsers" action="admin.php" method="post">
 <fieldset>
  <legend><?php echo $this->_tpl_vars['locale']->tr('show_by'); ?>
</legend>
   <div class="list_nav_option">
    <label for="status"><?php echo $this->_tpl_vars['locale']->tr('status'); ?>
</label>
	<br />
    <select name="status" id="status">
    <?php $_from = $this->_tpl_vars['userstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
    <input type="hidden" name="op" value="editSiteUsers" />
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
 
        <form id="siteUsers" action="admin.php" method="post">
	
			<?php $this->_tag_stack[] = array('check_perms', array('adminperm' => 'update_user')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>	
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
            <table id="list" class="info" summary="<?php echo $this->_tpl_vars['locale']->tr('editSiteUsers'); ?>
">
                <thead>
                    <tr>
                        <th><input class="checkbox" type="checkbox" name="all" id="all" value="1" onclick="toggleAllChecks('siteUsers');" /></th>
                        <th style="width:5%;">UID</th>
                        <th style="width:20%;"><?php echo $this->_tpl_vars['locale']->tr('username'); ?>
</th>
                        <th style="width:30%;"><?php echo $this->_tpl_vars['locale']->tr('full_name'); ?>
</th>                        
                        <th style="width:25%;"><?php echo $this->_tpl_vars['locale']->tr('email'); ?>
</th>
                        <th style="width:10%;"><?php echo $this->_tpl_vars['locale']->tr('status'); ?>
</th>
                        <th style="width:10%;"><?php echo $this->_tpl_vars['locale']->tr('actions'); ?>
</th>
                    </tr>
                </thead>
                <tbody>
                   <?php $_from = $this->_tpl_vars['siteusers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['siteuser']):
?>
                    <tr>
                        <td>
                            <input class="checkbox" type="checkbox" name="userIds[<?php echo $this->_tpl_vars['siteuser']->getId(); ?>
]" id="checks_<?php echo $this->_tpl_vars['siteuser']->getId(); ?>
" value="<?php echo $this->_tpl_vars['siteuser']->getId(); ?>
" />
                        </td>
                        <td class="col_highlighted">
                            <?php echo $this->_tpl_vars['siteuser']->getId(); ?>

                        </td>
                        <td class="col_highlighted">
                            <a href="?op=editSiteUser&amp;userId=<?php echo $this->_tpl_vars['siteuser']->getId(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['siteuser']->getUsername())) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...") : smarty_modifier_truncate($_tmp, 20, "...")); ?>
</a>
                        </td>
                        <td>
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['siteuser']->getFullName())) ? $this->_run_mod_handler('truncate', true, $_tmp, 70, "...") : smarty_modifier_truncate($_tmp, 70, "...")); ?>

                        </td>                        
                        <td>
                            <a href="mailto:<?php echo $this->_tpl_vars['siteuser']->getEmail(); ?>
">
                            <?php echo $this->_tpl_vars['siteuser']->getEmail(); ?>

                            </a>
                        </td>
                        <td>
                          <?php $_from = $this->_tpl_vars['userstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['status']):
?>
                           <?php if ($this->_tpl_vars['siteuser']->getStatus() == $this->_tpl_vars['status']): ?>
                            <?php if ($this->_tpl_vars['status'] == 2): ?><span style="color:red"><?php echo $this->_tpl_vars['locale']->tr($this->_tpl_vars['name']); ?>
</span>
							<?php else: ?><?php echo $this->_tpl_vars['locale']->tr($this->_tpl_vars['name']); ?>
<?php endif; ?>
						   <?php endif; ?>
                          <?php endforeach; endif; unset($_from); ?>                           
                        </td>
                        <td>
                            <div class="list_action_button">
							<?php $this->_tag_stack[] = array('check_perms', array('adminperm' => 'update_user')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                            <a href="?op=editSiteUser&amp;userId=<?php echo $this->_tpl_vars['siteuser']->getId(); ?>
" title="<?php echo $this->_tpl_vars['locale']->tr('edit'); ?>
">
	                           <img src="imgs/admin/icon_edit-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('edit'); ?>
" />
	                        </a>
                            <a href="?op=deleteUser&amp;userId=<?php echo $this->_tpl_vars['siteuser']->getId(); ?>
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
		<a name="bulkEdit"></a>
        <div id="list_action_bar">
        <?php echo smarty_function_adminpager(array('style' => 'list'), $this);?>

		<?php $this->_tag_stack[] = array('check_perms', array('adminperm' => 'update_user')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
             <input type="submit" name="delete" value="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
" class="submit" />
             <input type="hidden" name="op" value="deleteUsers" />
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('check_perms', array('adminperm' => 'update_user')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	    <div id="massiveChangeOption" style="display: none">
	        <fieldset>	
	        <legend><?php echo $this->_tpl_vars['locale']->tr('massive_change_option'); ?>
</legend>            
	            <label for="userStatus"><?php echo $this->_tpl_vars['locale']->tr('status'); ?>
</label>
	            <select name="userStatus" id="userStatus">
	              <option value="-1">-<?php echo $this->_tpl_vars['locale']->tr('select'); ?>
-</option>
			    	<?php $_from = $this->_tpl_vars['userstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['status']):
?>
			      		<?php if ($this->_tpl_vars['status'] != -1): ?><option value="<?php echo $this->_tpl_vars['status']; ?>
"><?php echo $this->_tpl_vars['locale']->tr($this->_tpl_vars['name']); ?>
</option><?php endif; ?>
			    	<?php endforeach; endif; unset($_from); ?>	
	            </select>
	            <input type="button" name="changeUserStatus" value="<?php echo $this->_tpl_vars['locale']->tr('change_status'); ?>
" class="submit" onClick="javascript:submitUsersList('changeUserStatus');" /> 
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