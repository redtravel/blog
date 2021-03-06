<?php /* Smarty version 2.6.26, created on 2016-11-02 13:08:38
         compiled from admin/newblogcategory.template */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/header.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/navigation.template", 'smarty_include_vars' => array('showOpt' => 'newBlogCategory','title' => $this->_tpl_vars['locale']->tr('newBlogCategory'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 <form name="addBlogCategory" method="post" action="admin.php">
  <fieldset class="inputField">
   <legend><?php echo $this->_tpl_vars['locale']->tr('newBlogCategory'); ?>
</legend>
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/formvalidate.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>   
   
   <div class="field">
    <label for="categoryName"><?php echo $this->_tpl_vars['locale']->tr('name'); ?>
</label>
    <span class="required">*</span>
    <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('category_name_help'); ?>
</div>
    <input type="text" value="<?php echo $this->_tpl_vars['categoryName']; ?>
" id="categoryName" name="categoryName" />
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'categoryName','message' => $this->_tpl_vars['locale']->tr('error_empty_name'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   </div>
   
   <div class="field">
    <label for="categoryDescription"><?php echo $this->_tpl_vars['locale']->tr('description'); ?>
</label>
    <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('category_description_help'); ?>
</div>	
    <textarea name="categoryDescription" cols="60" id="categoryDescription" rows="5"><?php echo $this->_tpl_vars['categoryDescription']; ?>
</textarea>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'categoryDescription','message' => $this->_tpl_vars['locale']->tr('error_empty_description'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>  
   </div>
   
  </fieldset>
  <div class="buttons">
   <input type="hidden" name="op" value="addBlogCategory" />
   <input type="reset" name="Reset" value="<?php echo $this->_tpl_vars['locale']->tr('reset'); ?>
" />
   <input type="submit" name="Add" value="<?php echo $this->_tpl_vars['locale']->tr('add'); ?>
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