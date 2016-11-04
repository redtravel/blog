<?php /* Smarty version 2.6.26, created on 2016-11-01 23:15:06
         compiled from wizard/step5.template */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "wizard/header.template", 'smarty_include_vars' => array('title' => "Done!",'mode' => 'install','step' => 7)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form method="post">
 <fieldset class="inputField">
  <div class="wizardInfo">
  <img src="imgs/admin/icon_info-16.png" alt="Info" class="wizardInfoIcon" />   
  <p class="wizardInfoText">Installation is complete!<br/>
  <br/>
  <?php echo $this->_tpl_vars['message']; ?>

  </p>
  </div>
  <p>
    <span style="color: red;">NOTICE: </span>
	For security reasons, please remove the write permissions from file <b>config/config.properties.php</b>.
  </p>
  <?php if ($this->_tpl_vars['safeMode'] == 1): ?>
  <p>
    <span style="color: red;">NOTICE: </span>
    You have safe mode enabled. Please set the ownership of all files to the user running the webserver.
  </p>
  <?php endif; ?>
  <p>
   <span style="color:red">WARNING: </span>For security reasons, you must now remove this file, <b>wizard.php</b>. If you are
   not planning to allow internet users to create new blogs in this server, then you should also
   remove <b>summary.php</b>.<br/><br/>
   Enjoy,<br/>
  <a href="<?php echo $this->_tpl_vars['projectPage']; ?>
">The LifeType team</a>.
  </p>
 </fieldset>
 <div class="buttons">
  <input value="Go to blog" type="button" onClick="javascript:window.location='index.php'" /> 
  <input value="Go to Summary" type="button" onClick="javascript:window.location='summary.php'" /> 
  <input value="Go to administration interface" type="button" onClick="javascript:window.location='admin.php'" />
 </div> 
</form> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "wizard/footer.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>