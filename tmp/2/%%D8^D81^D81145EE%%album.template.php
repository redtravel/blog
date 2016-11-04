<?php /* Smarty version 2.6.26, created on 2016-11-02 10:33:53
         compiled from silver/album.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', 'silver/album.template', 77, false),array('function', 'pager', 'silver/album.template', 94, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['blogtemplate'])."/header.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="content">
<?php $this->assign('postDate', $this->_tpl_vars['album']->getTimestamp()); ?>
  <h2><?php echo $this->_tpl_vars['locale']->tr('album'); ?>
</h2>

  <div class="post">
    <h3 class="storytitle"><a href="<?php echo $this->_tpl_vars['url']->albumLink($this->_tpl_vars['album']); ?>
"><?php echo $this->_tpl_vars['album']->getName(); ?>
</a></h3>
    <div class="meta">
        <?php echo $this->_tpl_vars['locale']->tr('created'); ?>
 <?php echo $this->_tpl_vars['locale']->formatDate($this->_tpl_vars['postDate'],"%d %b, %Y"); ?>

    </div>    
    <div class="storycontent"><p><?php echo $this->_tpl_vars['album']->getDescription(); ?>
</p></div>
 
    
 <!-- album contents go here -->
<table style="border:0px;width:100%;" summary="<?php echo $this->_tpl_vars['locale']->tr('album'); ?>
">
 <tr>
  <td style="width:25%;" align="center" >
   <a href="<?php echo $this->_tpl_vars['url']->parentAlbumLink($this->_tpl_vars['album']); ?>
">
    <img style="border:0px;" src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/folder.gif"); ?>
" alt="Folder" /><br/>
    ..
   </a>
  </td>
  <?php $this->assign('counter', 1); ?>
  <?php $this->assign('children', $this->_tpl_vars['album']->getChildren()); ?>
  <?php $_from = $this->_tpl_vars['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['childalbum']):
?>
  <td style="width:25%;" align="center" >
   <a href="<?php echo $this->_tpl_vars['url']->albumLink($this->_tpl_vars['childalbum']); ?>
">
   <img style="border:0px;" src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/folder.gif"); ?>
" alt="Folder" /><br/>
   <?php echo $this->_tpl_vars['childalbum']->getName(); ?>
 (<?php echo $this->_tpl_vars['childalbum']->getNumResources(); ?>
)
  </a>
  <br/><br/>
  <?php $this->assign('counter', ($this->_tpl_vars['counter']+1)); ?>
  </td>
  <?php if ($this->_tpl_vars['counter']%4): ?>
   </tr>
   <tr>
  <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?>

 <!--- show the resources here -->

 
 <?php $_from = $this->_tpl_vars['resources']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['resource']):
?>
  <td style="width:25%;" align="center" >
  <?php if ($this->_tpl_vars['resource']->hasPreview()): ?>
      <a href="<?php echo $this->_tpl_vars['url']->resourceLink($this->_tpl_vars['resource']); ?>
">
    <img alt="<?php echo $this->_tpl_vars['resource']->getDescription(); ?>
" style="border:0px;" src="<?php echo $this->_tpl_vars['url']->resourcePreviewLink($this->_tpl_vars['resource']); ?>
" />
    <br/><?php echo $this->_tpl_vars['resource']->getFileName(); ?>

   </a>
  <?php else: ?>
   <a href="<?php echo $this->_tpl_vars['url']->resourceLink($this->_tpl_vars['resource']); ?>
">
   <?php if ($this->_tpl_vars['resource']->isSound()): ?>
    <img alt="Sound" src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/sound.gif"); ?>
" height="64" width="64" style="border:0px;" />
   <?php elseif ($this->_tpl_vars['resource']->isVideo()): ?>
    <img alt="Video" src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/video.gif"); ?>
" height="64" width="64" style="border:0px;" />
   <?php elseif ($this->_tpl_vars['resource']->isZip()): ?>
    <img alt="Zip" src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/compressed.gif"); ?>
" height="64" width="64" style="border:0px;" />   
   <?php else: ?>
    <img alt="File" src="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/file.gif"); ?>
" height="64" width="64" style="border:0px;" />    
   <?php endif; ?>
   <br/><?php echo $this->_tpl_vars['resource']->getFileName(); ?>

   </a>
  <?php endif; ?>
  <br/>
  <?php $this->assign('metadata', $this->_tpl_vars['resource']->getMetadataReader()); ?>
  <?php echo $this->_tpl_vars['metadata']->getRoundedSize(); ?>
<br/>
  <?php if ($this->_tpl_vars['resource']->isImage()): ?>
   <?php echo $this->_tpl_vars['metadata']->getWidth(); ?>
 x <?php echo $this->_tpl_vars['metadata']->getHeight(); ?>
<br/>
  <?php elseif ($this->_tpl_vars['resource']->isSound()): ?>
   <?php echo ((is_array($_tmp=$this->_tpl_vars['metadata']->getFormat())) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
 <?php echo $this->_tpl_vars['metadata']->getSampleRate(); ?>
 bps<br/>
  <?php elseif ($this->_tpl_vars['resource']->isVideo()): ?>
   <?php echo ((is_array($_tmp=$this->_tpl_vars['metadata']->getFormat())) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>

   <?php echo $this->_tpl_vars['metadata']->getWidth(); ?>
 x <?php echo $this->_tpl_vars['metadata']->getHeight(); ?>
, 
   <?php echo $this->_tpl_vars['metadata']->getLengthString(); ?>
<br/>
  <?php elseif ($this->_tpl_vars['resource']->isZip()): ?>
   <?php echo $this->_tpl_vars['metadata']->getTotalFiles(); ?>
 <?php echo $this->_tpl_vars['locale']->tr('files'); ?>
<br/>
  <?php endif; ?>
  <?php $this->assign('counter', ($this->_tpl_vars['counter']+1)); ?>
  </td>
  <?php if ($this->_tpl_vars['counter']%4 == 0): ?>
   </tr>
   <tr>
  <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?>
 <td></td></tr>
</table>
 <?php echo smarty_function_pager(array('style' => 'links'), $this);?>

 <!-- end of album contents -->
 
 </div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['blogtemplate'])."/panel.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['blogtemplate'])."/footer.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>