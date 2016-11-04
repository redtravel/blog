<?php /* Smarty version 2.6.26, created on 2016-11-02 10:44:28
         compiled from ./templates/default/commentform.template */

$this->_cache_serials['/alidata/www/gitspace/juchi/lifetype/tmp/1/%%3F^3F2^3F2BCD9C%%commentform.template.inc'] = '5aaf97055f751a530bc66788d31b8ec1';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'dynamic', './templates/default/commentform.template', 26, false),)), $this); ?>
<?php
function _smarty_tplfunc_5aaf97055f751a530bc66788d31b8ec1_0(&$_smarty)
{
$_smarty->_tag_stack[] = array('dynamic', array()); $_block_repeat=true;smarty_block_dynamic($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php if ($_smarty->_tpl_vars['authuser']): ?>
     <span id="AuthUser"><?php echo $_smarty->_tpl_vars['authuser']->getUsername(); ?>
 (<?php echo $_smarty->_tpl_vars['locale']->tr('form_authenticated'); ?>
)</span>
	 <input type="hidden" name="userName" id="userNameHidden" value="<?php echo $_smarty->_tpl_vars['authuser']->getUsername(); ?>
" />
	<?php else: ?>
	 <input type="text" name="userName" id="userName" value="" />
	<?php endif; ?>
   <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_dynamic($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}



?>
