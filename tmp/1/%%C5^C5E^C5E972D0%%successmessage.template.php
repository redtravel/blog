<?php /* Smarty version 2.6.26, created on 2016-11-02 10:43:33
         compiled from ./templates/admin/successmessage.template */ ?>
<?php if ($this->_tpl_vars['viewIsSuccess']): ?>
<div id="FormInfo">
  <img src="imgs/admin/icon_info-16.png" alt="Info" class="InfoIcon" />
  <p class="InfoText"><?php if ($this->_tpl_vars['message'] == ""): ?><?php echo $this->_tpl_vars['viewSuccessMessage']; ?>
<?php else: ?><?php echo $this->_tpl_vars['message']; ?>
<?php endif; ?></p>
</div>
<?php endif; ?>