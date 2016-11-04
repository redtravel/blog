<?php /* Smarty version 2.6.26, created on 2016-11-02 13:05:34
         compiled from wizard/checks.template */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "wizard/header.template", 'smarty_include_vars' => array('title' => 'Preinstallation Checks','step' => 1,'mode' => $this->_tpl_vars['mode'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <form name="databaseInfo" action="wizard.php" method="post">
  <fieldset class="inputField">
   <legend>Requirements Checking</legend>  
   <?php if ($this->_tpl_vars['viewIsError'] || ! $this->_tpl_vars['ok']): ?>
    <div class="wizardError">
     <img src="imgs/admin/icon_error-16.png" alt="Error" class="wizardInfoIcon" />
     <p style="color:red;margin-left:20px;">Welcome to the configuration wizard of LifeType. These are some basic checks of your current
      system in order to ensure that LifeType can run properly.<br/><br/>
      Unfortunately, not all the checks were successful. Please have a look at the output below and correct these problems. The
      installation process will not proceed until all the checks are successful.
      </p>
    </div> 
   <?php else: ?>
     <div class="wizardInfo">
      <img src="imgs/admin/icon_info-16.png" alt="Info" class="wizardInfoIcon" />
      <p class="wizardInfoText">Welcome to the configuration wizard of LifeType. These are some basic checks of your current
      system in order to ensure that LifeType can run properly.
      <br/><br/>
	  <b>IMPORTANT NOTE:</b>If you previously upgraded from LifeType 1.1.x to 1.2.0, there are some changes that need to be done to some of your resources. 
	  This is a known issue in the upgrade process of LifeType 1.1.x to 1.2.0 that did not convert the name of some preview files correctly. 
	   In order to have this issue fixed, click <a href="?nextStep=Fix120">here</a> and let the browser window reload.</p>
     </div>
   <?php endif; ?>
   
   <?php $_from = $this->_tpl_vars['checkGroups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['checkGroup'] => $this->_tpl_vars['checks']):
?>
       <div class="checkCategory"><?php echo $this->_tpl_vars['checkGroup']; ?>
</div>
	   <?php $_from = $this->_tpl_vars['checks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['checkId'] => $this->_tpl_vars['check']):
?>
	    	    <?php if ($this->_tpl_vars['check']->isValid()): ?>
	        <img src="imgs/summary/icon_accept-16.png" class="checkImage" alt="PASSED" />
	    <?php else: ?>
	        <?php if ($this->_tpl_vars['check']->isCritical()): ?>
	            <img src="imgs/summary/icon_cancel-16.png" class="checkImage" alt="ERROR" />
	        <?php else: ?>
	            <img src="imgs/summary/icon_warning-16.png" class="checkImage" alt="NOT CRITICAL" />
	        <?php endif; ?>
	    <?php endif; ?>
	    <div class="checkItem">
	    <?php echo $this->_tpl_vars['check']->getDesc(); ?>
 <?php if (! $this->_tpl_vars['check']->isCritical()): ?>(optional)<?php endif; ?>
	    <?php if (! $this->_tpl_vars['check']->isValid()): ?>
	    	<div class="checkError">
	    	<?php if ($this->_tpl_vars['check']->isCritical()): ?>
	    		<span style="color: red;"><?php echo $this->_tpl_vars['check']->getSolution(); ?>
</span>
	    	<?php else: ?>
	    		<span style="color: green;"><?php echo $this->_tpl_vars['check']->getSolution(); ?>
</span>
	    	<?php endif; ?>
	    	</div>
	    <?php endif; ?>
	    </div>
	   <?php endforeach; endif; unset($_from); ?>
   <?php endforeach; endif; unset($_from); ?>

   </fieldset>
   <div class="buttons">
    <?php if ($this->_tpl_vars['ok']): ?>
      <input type="hidden" name="nextStep" value="Intro"/>
      <input type="submit" name="Next" value="Next &raquo;"/>
    <?php else: ?>
      <input type="hidden" name="nextStep" value="Checks"/>
      <input type="submit" name="Next" value="Retry"/>    
    <?php endif; ?>
   </div> 
 </form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "wizard/footer.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>