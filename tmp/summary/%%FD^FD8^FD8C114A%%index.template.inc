<?php /* Smarty version 2.6.26, created on 2016-11-02 10:45:06
         compiled from summary/index.template */

$this->_cache_serials['./tmp/summary/%%FD^FD8^FD8C114A%%index.template.inc'] = '04fc89108b98703b555ad488eb2aca46';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'dynamic', 'summary/index.template', 33, false),array('modifier', 'strip_tags', 'summary/index.template', 62, false),array('modifier', 'truncate', 'summary/index.template', 62, false),)), $this); ?>
<?php
function _smarty_tplfunc_04fc89108b98703b555ad488eb2aca46_0(&$_smarty)
{
$_smarty->_tag_stack[] = array('dynamic', array()); $_block_repeat=true;smarty_block_dynamic($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>		
	    <?php if ($_smarty->_tpl_vars['authuser']): ?>
	      <?php $_smarty->assign('userName', $_smarty->_tpl_vars['authuser']->getUsername()); ?>
	      <?php echo $_smarty->_tpl_vars['locale']->pr('summary_welcome_msg',$_smarty->_tpl_vars['userName']); ?>
<br/>
	      <a href="admin.php?op=blogSelect"><?php echo $_smarty->_tpl_vars['locale']->tr('summary_go_to_admin'); ?>
</a>
	    <?php else: ?>	
            <label for="userName"><?php echo $_smarty->_tpl_vars['locale']->tr('username'); ?>
:
			<input type="text" tabindex="1" name="userName" id="userName" value="" size="8" maxlength="50" /></label>
            <label for="userPassword"><?php echo $_smarty->_tpl_vars['locale']->tr('password'); ?>
: 
			<input type="password" tabindex="2" name="userPassword" id="userPassword" size="8" maxlength="50" /></label>
            <input type="submit" name="Login" tabindex="3" value="<?php echo $_smarty->_tpl_vars['locale']->tr('login'); ?>
" class="button" />
            <input type="hidden" name="op" value="Login"  />
        	<br/>
	        <a href="?op=resetPasswordForm"><?php echo $_smarty->_tpl_vars['locale']->tr('password_forgotten'); ?>
</a>	
		<?php endif; ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_dynamic($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}



?>
