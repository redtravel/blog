<?php /* Smarty version 2.6.26, created on 2016-11-01 23:49:53
         compiled from admin/usersettings.template */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/header.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/navigation.template", 'smarty_include_vars' => array('showOpt' => 'userSettings','title' => $this->_tpl_vars['locale']->tr('userSettings'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <form name="userSettings" action="admin.php" method="post">
    <fieldset class="inputField">
     <legend><?php echo $this->_tpl_vars['locale']->tr('userSettings'); ?>
</legend>
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
     <div style="float:left;width:73%;border-right:1px solid #DEDEDE;">
      <div class="field">
        <label for="userName"><?php echo $this->_tpl_vars['locale']->tr('username'); ?>
</label>
        <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('username_help'); ?>
</div>
        <input type="text" class="readOnly" readonly="readonly" id="userName" value="<?php echo $this->_tpl_vars['user']->getUsername(); ?>
" />
      </div>

      <div class="field">
        <label for="userFullName"><?php echo $this->_tpl_vars['locale']->tr('full_name'); ?>
</label>
        <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('full_name_help'); ?>
</div>		
        <input type="text" name="userFullName" value="<?php echo $this->_tpl_vars['userFullName']; ?>
" id="userFullName" />
      </div>

     <div class="field">
       <label for="userSettingsPassword"><?php echo $this->_tpl_vars['locale']->tr('password'); ?>
</label>
       <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('password_help'); ?>
</div>
       <input type="password" name="userSettingsPassword" value="<?php echo $this->_tpl_vars['userSettingsPassword']; ?>
" id="userSettingsPassword" />
       <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'userSettingsPassword','message' => $this->_tpl_vars['locale']->tr('error_invalid_password'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
       <br/>
       <label for="confirmPassword"><?php echo $this->_tpl_vars['locale']->tr('confirm_password'); ?>
</label><br/>
       <input type="password" name="confirmPassword" value="" id="confirmPassword" />
       <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'confirmPassword','message' => $this->_tpl_vars['locale']->tr('error_passwords_dont_match'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>       
     </div>
 
     <div class="field">
       <label for="userEmail"><?php echo $this->_tpl_vars['locale']->tr('email'); ?>
</label>
       <span class="required">*</span>
       <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('email_help'); ?>
</div>
       <input type="text" name="userEmail" value="<?php echo $this->_tpl_vars['userEmail']; ?>
" id="userEmail" />
       <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'userEmail','message' => $this->_tpl_vars['locale']->tr('error_incorrect_email_address'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>		 
     </div>

     <div class="field">
       <label for="userAbout"><?php echo $this->_tpl_vars['locale']->tr('bio'); ?>
</label>
       <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('bio_help'); ?>
</div>
       <textarea cols="60" rows="10" name="userAbout" id="userAbout"><?php echo $this->_tpl_vars['userAbout']; ?>
</textarea>
     </div>
    </div>

    <div style="width:20%;float:left;margin-left:18px;">
     <div class="field">
       <label for="userPictureId"><?php echo $this->_tpl_vars['locale']->tr('picture'); ?>
</label>
       <br/>
       <?php if ($this->_tpl_vars['user']->hasPicture()): ?> 
	     <?php $this->assign('userPicture', $this->_tpl_vars['user']->getPicture()); ?>
	     <?php $this->assign('imgInfo', $this->_tpl_vars['userPicture']->getMetadataReader()); ?>
	     <img alt="Picture" src="<?php echo $this->_tpl_vars['userPicture']->getPreviewLink(); ?>
" id="userPicture"  style="display:block;margin-left:auto;margin-right:auto" />
       <?php else: ?>
	     <img alt="Picture" src="imgs/no-user-picture.jpg" id="userPicture" style="display:block;margin-left:auto;margin-right:auto"/>	
       <?php endif; ?>
	   <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('user_picture_help'); ?>
</div>
       <a href="javascript:userPictureSelectWindow();"><?php echo $this->_tpl_vars['locale']->tr('choose'); ?>
...</a>
	   |
	   <a href="javascript:resetUserPicture();"><?php echo $this->_tpl_vars['locale']->tr('reset'); ?>
</a>
       <input type="hidden" name="userPictureId" id="userPictureId" value="<?php echo $this->_tpl_vars['user']->getPictureId(); ?>
" />
     </div>
    </div>
    </fieldset>

    <div class="buttons">
     <input type="reset" name="reset" value="<?php echo $this->_tpl_vars['locale']->tr('reset'); ?>
" />
     <input type="submit" name="Update" value="<?php echo $this->_tpl_vars['locale']->tr('update'); ?>
"/>
     <input type="hidden" name="op" value="updateUserSettings" />
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