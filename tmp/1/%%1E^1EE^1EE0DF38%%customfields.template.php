<?php /* Smarty version 2.6.26, created on 2016-11-02 13:09:17
         compiled from admin/customfields.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'check_perms', 'admin/customfields.template', 35, false),array('function', 'adminpager', 'admin/customfields.template', 64, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/header.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/navigation.template", 'smarty_include_vars' => array('showOpt' => 'blogCustomFields','title' => $this->_tpl_vars['locale']->tr('blogCustomFields'))));
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
        <form id="customFields" action="admin.php" method="post">
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
		
            <table id="list" class="info" summary="<?php echo $this->_tpl_vars['locale']->tr('blogCustomFields'); ?>
">
                <thead>
                    <tr>
                        <th><input class="checkbox" type="checkbox" name="all" id="all" value="1" onclick="toggleAllChecks('customFields');" /></th>
                        <th style="width:25%;"><?php echo $this->_tpl_vars['locale']->tr('name'); ?>
</th>
                        <th style="width:40%"><?php echo $this->_tpl_vars['locale']->tr('description'); ?>
</th>
                        <th style="width:15%"><?php echo $this->_tpl_vars['locale']->tr('type'); ?>
</th>                        
                        <th style="width:10%"><?php echo $this->_tpl_vars['locale']->tr('hidden'); ?>
</th>
                        <th style="width:10%"><?php echo $this->_tpl_vars['locale']->tr('actions'); ?>
</th>
                    </tr>
                </thead>
				<tbody>
				 <?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
				 <tr>
				   <td>
				     <input class="checkbox" type="checkbox" name="fieldIds[<?php echo $this->_tpl_vars['field']->getId(); ?>
]" id="checks_1" value="<?php echo $this->_tpl_vars['field']->getId(); ?>
" />				   
				   </td>
				   <td class="col_highlighted">
				     <?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_custom_field')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><a href="admin.php?op=editCustomField&amp;fieldId=<?php echo $this->_tpl_vars['field']->getId(); ?>
"><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo $this->_tpl_vars['field']->getName(); ?>
<?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_custom_field')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?></a><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				   </td>
				   <td>
				     <?php echo $this->_tpl_vars['field']->getDescription(); ?>

				  </td>
				  <td>
				    <?php if ($this->_tpl_vars['field']->getType() == 1): ?><?php echo $this->_tpl_vars['locale']->tr('text_field'); ?>
<?php endif; ?>
					<?php if ($this->_tpl_vars['field']->getType() == 2): ?><?php echo $this->_tpl_vars['locale']->tr('text_area'); ?>
<?php endif; ?>
					<?php if ($this->_tpl_vars['field']->getType() == 3): ?><?php echo $this->_tpl_vars['locale']->tr('checkbox'); ?>
<?php endif; ?>
					<?php if ($this->_tpl_vars['field']->getType() == 4): ?><?php echo $this->_tpl_vars['locale']->tr('date_field'); ?>
<?php endif; ?>
					<?php if ($this->_tpl_vars['field']->getType() == 5): ?><?php echo $this->_tpl_vars['locale']->tr('dropdown_list_field'); ?>
<?php endif; ?>					
				 </td>	
				 <td>
				   <?php if ($this->_tpl_vars['field']->isHidden()): ?><?php echo $this->_tpl_vars['locale']->tr('yes'); ?>
<?php else: ?><?php echo $this->_tpl_vars['locale']->tr('No'); ?>
<?php endif; ?>
				 </td>
                 <td>
                    <div class="list_action_button">
					   <?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_custom_field')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                       <a href="?op=editCustomField&amp;fieldId=<?php echo $this->_tpl_vars['field']->getId(); ?>
"><img src="imgs/admin/icon_edit-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('editCustomField'); ?>
" /></a>
                       <a href="?op=deleteCustomField&amp;fieldId=<?php echo $this->_tpl_vars['field']->getId(); ?>
"><img src="imgs/admin/icon_delete-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
" /></a>
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

		<?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_custom_field')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <input type="submit" name="delete" value="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
" class="submit" />
            <input type="hidden" name="op" value="deleteCustomFields" />
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