<?php /* Smarty version 2.6.26, created on 2016-11-02 10:43:37
         compiled from ./templates//andreas-3-columns/header.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', './templates//andreas-3-columns/header.template', 9, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['locale']->getLanguageId(); ?>
" 
      lang="<?php echo $this->_tpl_vars['locale']->getLanguageId(); ?>
" dir="<?php echo $this->_tpl_vars['locale']->getDirection(); ?>
">
<head>
 <meta http-equiv="Content-Type" content="text/html;charset=<?php echo $this->_tpl_vars['locale']->getCharset(); ?>
" />
 <meta name="generator" content="<?php echo $this->_tpl_vars['version']; ?>
" />
 <meta http-equiv="Content-Language" content="<?php echo $this->_tpl_vars['locale']->getLanguageId(); ?>
" />
 <meta name="author" content="Your Name / Original design: Andreas Viklund - http://andreasviklund.com/" />
 <title><?php echo ((is_array($_tmp=$this->_tpl_vars['pageTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</title>
 <link rel="stylesheet" title="Default" href="<?php echo $this->_tpl_vars['url']->getTemplateFile("andreas01.css"); ?>
" type="text/css" />
 <link rel="alternate" type="text/xml" title="RSS 2.0" href="<?php echo $this->_tpl_vars['url']->rssLink('rss20'); ?>
" />
 <link rel="alternate" type="text/xml" title="RSS 1.0" href="<?php echo $this->_tpl_vars['url']->rssLink('rss10'); ?>
" />
 <link rel="alternate" type="text/xml" title="RSS 0.90" href="<?php echo $this->_tpl_vars['url']->rssLink('rss090'); ?>
" />
 <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php echo $this->_tpl_vars['url']->rssLink('atom'); ?>
" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['url']->getTemplateFile("print.css"); ?>
" media="print" />
 <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->_tpl_vars['url']->getTemplateFile("favicon.ico"); ?>
" />
<?php if ($this->_tpl_vars['badbehavior']): ?>
   <?php echo $this->_tpl_vars['badbehavior']->showBB2JavaScript(); ?>

<?php endif; ?>
</head>
<body><div id="wrap">

<div id="header">
<h1><a href="<?php echo $this->_tpl_vars['url']->blogLink(); ?>
"><?php echo $this->_tpl_vars['blog']->getBlog(); ?>
</a></h1>
<p><?php echo $this->_tpl_vars['blog']->getAbout(); ?>
</p>
</div>

<img id="frontphoto" src="<?php echo $this->_tpl_vars['url']->getTemplateFile("front.jpg"); ?>
" width="760" height="175" alt="" />
