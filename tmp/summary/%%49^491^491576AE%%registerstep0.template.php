<?php /* Smarty version 2.6.26, created on 2016-11-02 10:45:15
         compiled from summary/registerstep0.template */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "summary/header.template", 'smarty_include_vars' => array('selected' => 'register','columns' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="onecolumn">
 <h2><?php echo $this->_tpl_vars['locale']->tr('register_step0_title'); ?>
</h2>
 <div id="intro">
<p>
  <?php echo $this->_tpl_vars['locale']->tr('read_service_agreement'); ?>

</p>
</div>  
<div id="registrationform">
<form action="register.php" method="post">
  <fieldset>
   <legend><?php echo $this->_tpl_vars['locale']->tr('agreement'); ?>
</legend>
   <div class="field">
    <!--user aggreement-->
    <textarea name="contract" id="contract" readonly="readonly" style="width:100%" rows="14">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "summary/agreement.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </textarea>
    <!--end user agreement-->
   </div>
  </fieldset>
  <div class="buttons">
   <input type="button" value="<?php echo $this->_tpl_vars['locale']->tr('decline'); ?>
" name="decline"  onclick="window.location.href='summary.php'" />
   <input type="submit" value="<?php echo $this->_tpl_vars['locale']->tr('accept'); ?>
" name="accept"/>
  </div>
 </form>
 </div>
 </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "summary/footer.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>