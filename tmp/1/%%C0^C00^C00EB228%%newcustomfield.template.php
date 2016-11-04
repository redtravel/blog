<?php /* Smarty version 2.6.26, created on 2016-11-02 13:08:53
         compiled from admin/newcustomfield.template */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/header.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/navigation.template", 'smarty_include_vars' => array('showOpt' => 'newCustomField','title' => $this->_tpl_vars['locale']->tr('newCustomField'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 <form name="newCustomField" method="post" action="admin.php" onSubmit="listSelectAll('fieldValues');return true">
  <fieldset class="inputField">
   <legend><?php echo $this->_tpl_vars['locale']->tr('newCustomField'); ?>
</legend>
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/formvalidate.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>   
   
   <div class="field">
    <label for="fieldName"><?php echo $this->_tpl_vars['locale']->tr('name'); ?>
</label>
    <span class="required">*</span>
    <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('field_name_help'); ?>
</div>
    <input type="text" name="fieldName" value="<?php echo $this->_tpl_vars['fieldName']; ?>
" id="fieldName" />
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'fieldName','message' => $this->_tpl_vars['locale']->tr('error_empty_name'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   </div>
   
   <div class="field">
    <label for="fieldDescription"><?php echo $this->_tpl_vars['locale']->tr('description'); ?>
</label>
    <span class="required"></span>
    <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('field_description_help'); ?>
</div>
    <input type="text" name="fieldDescription" value="<?php echo $this->_tpl_vars['fieldDescription']; ?>
" id="fieldDescription" />
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'fieldDescription','message' => $this->_tpl_vars['locale']->tr('error_empty_description'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   </div>
   
   <div class="field">
    <label for="fieldType"><?php echo $this->_tpl_vars['locale']->tr('type'); ?>
</label>
    <span class="required">*</span>
    <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('field_type_help'); ?>
</div>
    <select name="fieldType" id="fieldType" <?php echo 'onChange="elem=document.getElementById(\'fieldValuesBlock\');if(this.selectedIndex==4){elem.style.display=\'block\';}else{elem.style.display=\'none\';}"'; ?>
>
     <option value="1" <?php if ($this->_tpl_vars['fieldType'] == 1): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('text_field'); ?>
</option>
     <option value="2" <?php if ($this->_tpl_vars['fieldType'] == 2): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('text_area'); ?>
</option>
     <option value="3" <?php if ($this->_tpl_vars['fieldType'] == 3): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('checkbox'); ?>
</option>
     <option value="4" <?php if ($this->_tpl_vars['fieldType'] == 4): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('date_field'); ?>
</option>    
	 <option value="5" <?php if ($this->_tpl_vars['fieldType'] == 5): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('dropdown_list_field'); ?>
</option>
    </select>   
   </div>

   <div class="field" id="fieldValuesBlock" <?php if ($this->_tpl_vars['fieldType'] != 5): ?>style="display:none"<?php endif; ?>>
	<label for="fieldValues"><?php echo $this->_tpl_vars['locale']->tr('values'); ?>
</label>
	<span class="required">*</span>
	<div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('field_values'); ?>
</div>
		<select name="fieldValues[]" id="fieldValues" multiple="multiple" style="width:40%" size="5">
		<?php $_from = $this->_tpl_vars['fieldValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
		   <option value="<?php echo $this->_tpl_vars['value']; ?>
"><?php echo $this->_tpl_vars['value']; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
		</select>
		<br />
		<input type="button" class="button" <?php echo 'onClick="newValue=window.prompt(\'Enter new value for the custom field\');if(newValue!=\'\'){appendDocumentList(document,\'fieldValues\',newValue,newValue);}"'; ?>
 value="<?php echo $this->_tpl_vars['locale']->tr('add'); ?>
" />
		<input type="button" class="button" onClick="Lifetype.Forms.List.removeSelected('fieldValues')" value="<?php echo $this->_tpl_vars['locale']->tr('remove_selected'); ?>
" />
   </div>

   <div class="field">
    <label for="fieldHidden"><?php echo $this->_tpl_vars['locale']->tr('hidden'); ?>
</label>
    <span class="required"></span>
    <div class="formHelp">
	  <input class="checkbox" type="checkbox" id="fieldHidden" name="fieldHidden" value="1" <?php if ($this->_tpl_vars['fieldHidden']): ?>checked="checked"<?php endif; ?> />
	  <?php echo $this->_tpl_vars['locale']->tr('field_hidden_help'); ?>

	</div>
   </div>
  </fieldset>  
  <div class="buttons"> 
    <input type="hidden" name="fieldSearchable" value="1" />
    <input type="hidden" name="op" value="addCustomField" />
    <input type="reset" name="Rest" value="<?php echo $this->_tpl_vars['locale']->tr('reset'); ?>
" />
    <input type="submit" name="<?php echo $this->_tpl_vars['locale']->tr('add'); ?>
" value="<?php echo $this->_tpl_vars['locale']->tr('add'); ?>
" />
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