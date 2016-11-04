<?php /* Smarty version 2.6.26, created on 2016-11-02 10:44:28
         compiled from ./templates/default/commentform.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'dynamic', './templates/default/commentform.template', 26, false),)), $this); ?>
<?php $this->_cache_serials['/alidata/www/gitspace/juchi/lifetype/tmp/1/%%3F^3F2^3F2BCD9C%%commentform.template.inc'] = '5aaf97055f751a530bc66788d31b8ec1'; ?><?php if ($this->_tpl_vars['allowComments']): ?>
<div id="CommentForm">
<form id="NewComment" action="<?php echo $this->_tpl_vars['url']->getIndexUrl(); ?>
" method="post">
<fieldset>
<legend id="add_comment_title"><?php echo $this->_tpl_vars['locale']->tr('add_comment'); ?>
</legend>
<table border="0">
<tr id="add_comment_topic">
 <td><label for="commentTopic"><?php echo $this->_tpl_vars['locale']->pr('comment_topic'); ?>
</label></td>
 <td><input type="text" name="commentTopic" id="commentTopic" value="<?php echo $this->_tpl_vars['topic']; ?>
" /></td>
</tr>
<tr id="add_comment_text">
  <td><label for="commentText"><?php echo $this->_tpl_vars['locale']->pr('comment_text'); ?>
<sup class="required">*</sup></label></td>
  <td><textarea rows="10" cols="50" name="commentText" id="commentText"></textarea></td>
 </tr>

<?php if ($this->_tpl_vars['smileys'] && $this->_tpl_vars['smileys']->isEnabled()): ?>
  <script type="text/javascript" src="<?php echo $this->_tpl_vars['url']->getBaseUrl(); ?>
/plugins/smileys/js/smileys/smileys.js"></script>
  <tr id="add_comment_smileys">
    <td>&nbsp;</td><td><?php echo $this->_tpl_vars['smileys']->generateSmileysBar(); ?>
</td>
  </tr>
<?php endif; ?>

<tr id="add_comment_username">
  <td><label for="userName"><?php echo $this->_tpl_vars['locale']->pr('comment_username'); ?>
<sup class="required">*</sup></label></td>
  <td>
   <?php if ($this->caching && !$this->_cache_including): echo '{nocache:5aaf97055f751a530bc66788d31b8ec1#0}'; endif;$this->_tag_stack[] = array('dynamic', array()); $_block_repeat=true;smarty_block_dynamic($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php if ($this->_tpl_vars['authuser']): ?>
     <span id="AuthUser"><?php echo $this->_tpl_vars['authuser']->getUsername(); ?>
 (<?php echo $this->_tpl_vars['locale']->tr('form_authenticated'); ?>
)</span>
	 <input type="hidden" name="userName" id="userNameHidden" value="<?php echo $this->_tpl_vars['authuser']->getUsername(); ?>
" />
	<?php else: ?>
	 <input type="text" name="userName" id="userName" value="" />
	<?php endif; ?>
   <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_dynamic($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:5aaf97055f751a530bc66788d31b8ec1#0}'; endif;?>
  </td>
</tr>

<tr id="add_comment_useremail">
  <td><label for="userEmail"><?php echo $this->_tpl_vars['locale']->tr('comment_email'); ?>
</label></td>
  <td><input type="text" name="userEmail" id="userEmail" value="" /></td>
</tr>
<tr id="add_comment_userurl">
  <td><label for="userUrl"><?php echo $this->_tpl_vars['locale']->tr('comment_url'); ?>
</label></td>
  <td><input type="text" name="userUrl" id="userUrl" value="" /></td>
</tr>

  <?php if ($this->_tpl_vars['authimage'] && $this->_tpl_vars['authimage']->isEnabled()): ?>
   <tr id="add_comment_authimage">
     <td><label for="authImage"><?php echo $this->_tpl_vars['locale']->tr('authimage_type_code'); ?>
</label></td>
     <td><input type="text" name="authImage" id="authImage" value="" />&nbsp;<?php echo $this->_tpl_vars['authimage']->show(); ?>
</td>
   </tr>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['subscribe'] && $this->_tpl_vars['subscribe']->isEnabled()): ?>
   <tr id="add_comment_subscribe">
     <td colspan="2"><input type="checkbox" name="subscribe" /> E-mail me when comments occur on this article</td>
   </tr>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['hiddeninput'] && $this->_tpl_vars['hiddeninput']->isEnabled()): ?>
   <tr id="add_comment_hiddeninput">
    <td><?php echo $this->_tpl_vars['hiddeninput']->printHiddenFields(); ?>
</td>
   </tr>
  <?php endif; ?>

<tr id="add_comment_submit">
 <td colspan="2">
  <input id="Add" type="submit" value="<?php echo $this->_tpl_vars['locale']->pr('comment_send'); ?>
" name="Add" />
 <input type="hidden" name="op" value="AddComment" />
 <input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['post']->getId(); ?>
" />
 <input type="hidden" name="blogId" value="<?php echo $this->_tpl_vars['blog']->getId(); ?>
" />
 <input type="hidden" name="parentId" value="<?php echo $this->_tpl_vars['parentId']; ?>
" />
 </td>
</tr>

</table>

</fieldset>
</form>

<?php if ($this->_tpl_vars['remembercommentdata'] && $this->_tpl_vars['remembercommentdata']->isEnabled()): ?>
  <?php echo $this->_tpl_vars['remembercommentdata']->show(); ?>

<?php endif; ?>

</div>
<?php endif; ?>