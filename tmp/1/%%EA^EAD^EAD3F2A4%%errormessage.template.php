<?php /* Smarty version 2.6.26, created on 2016-11-02 10:43:33
         compiled from ./templates/admin/errormessage.template */ ?>
<?php if ($this->_tpl_vars['viewIsError']): ?>
<div id="FormError">
  <img src="imgs/admin/icon_warning-16.png" alt="Info" class="InfoIcon" />
  <p class="ErrorText"><?php if ($this->_tpl_vars['message'] == ""): ?><?php echo $this->_tpl_vars['viewErrorMessage']; ?>
<?php else: ?><?php echo $this->_tpl_vars['message']; ?>
<?php endif; ?></p>
</div>
<?php endif; ?>