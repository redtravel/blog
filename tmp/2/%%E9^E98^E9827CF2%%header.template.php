<?php /* Smarty version 2.6.26, created on 2016-11-02 10:33:35
         compiled from ./templates//silver/header.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', './templates//silver/header.template', 5, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['locale']->getLanguageId(); ?>
" 
      lang="<?php echo $this->_tpl_vars['locale']->getLanguageId(); ?>
" dir="<?php echo $this->_tpl_vars['locale']->getDirection(); ?>
">
<head>
    <title><?php echo ((is_array($_tmp=$this->_tpl_vars['pageTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</title>
    <meta http-equiv="Content-Type" content="text/html;charset=<?php echo $this->_tpl_vars['locale']->getCharset(); ?>
" />
    <meta name="generator" content="<?php echo $this->_tpl_vars['version']; ?>
" />
    <meta http-equiv="Content-Language" content="<?php echo $this->_tpl_vars['locale']->getLanguageId(); ?>
" />
    
    <link rel="stylesheet" title="default" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['url']->getTemplateFile("style.css"); ?>
" />
    <link rel="alternate" type="text/xml" title="RSS 2.0" href="<?php echo $this->_tpl_vars['url']->rssLink('rss20'); ?>
" />
    <link rel="alternate" type="text/xml" title="RSS 1.0" href="<?php echo $this->_tpl_vars['url']->rssLink('rss10'); ?>
" />
    <link rel="alternate" type="text/xml" title="RSS 0.90" href="<?php echo $this->_tpl_vars['url']->rssLink('rss090'); ?>
" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php echo $this->_tpl_vars['url']->rssLink('atom'); ?>
" />
 <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->_tpl_vars['url']->getTemplateFile("favicon.ico"); ?>
" />
<?php if ($this->_tpl_vars['badbehavior']): ?>
   <?php echo $this->_tpl_vars['badbehavior']->showBB2JavaScript(); ?>

<?php endif; ?>
</head>

<body>
<div id="rap">
    <h1 id="header"><a href="<?php echo $this->_tpl_vars['url']->blogLink(); ?>
" title="<?php echo $this->_tpl_vars['blog']->getBlog(); ?>
"><?php echo $this->_tpl_vars['blog']->getBlog(); ?>
</a></h1>

