<?php /* Smarty version 2.6.26, created on 2016-11-01 23:15:06
         compiled from wizard/header.template */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>LifeType Installation</title>
<link rel="stylesheet" href="styles/admin.css" type="text/css" media="screen" />
<link rel="stylesheet" href="styles/wizard.css" type="text/css" media="screen" />
</head>
<body <?php if ($this->_tpl_vars['multipleSteps']): ?>onload="document.update2.submit();"<?php endif; ?>>

<div id="container" >

    <div id="header" >
        <h1><span>Wizard</span></h1>
    </div>

    <hr class="hide" />
    <div id="skipNav">
    <ul title="Accessibility options">
    <li><a href="#menubar">Skip to Menu Bar</a></li>
    <li><a href="#navigation">Skip to Navigation Bar</a></li>
    </ul>
    </div>
    <hr class="hide" />

    <div id="menubar">
        <div id="menu">
         <?php if ($this->_tpl_vars['mode'] == 'install'): ?>
          <ul>
		    <li <?php if ($this->_tpl_vars['step'] == 1): ?>class="currentStep"<?php endif; ?>>1 Checks</li>
            <li <?php if ($this->_tpl_vars['step'] == 2): ?>class="currentStep"<?php endif; ?>>&raquo; 2 Welcome</li>
            <li <?php if ($this->_tpl_vars['step'] == 3): ?>class="currentStep"<?php endif; ?>>&raquo; 3 Confirm</li>
            <li <?php if ($this->_tpl_vars['step'] == 4): ?>class="currentStep"<?php endif; ?>>&raquo; 4 Database</li>
            <li <?php if ($this->_tpl_vars['step'] == 5): ?>class="currentStep"<?php endif; ?>>&raquo; 5 First User</li>
            <li <?php if ($this->_tpl_vars['step'] == 6): ?>class="currentStep"<?php endif; ?>>&raquo; 6 First Blog</li>
            <li <?php if ($this->_tpl_vars['step'] == 7): ?>class="currentStep"<?php endif; ?>>&raquo; 7 Done!</li>
          </ul>
          <?php else: ?>
          <ul>
	       <li <?php if ($this->_tpl_vars['step'] == 1): ?>class="currentStep"<?php endif; ?>>1 Checks</li>
           <li <?php if ($this->_tpl_vars['step'] == 2): ?>class="currentStep"<?php endif; ?>>&raquo; 2 Configuration</li>
           <li <?php if ($this->_tpl_vars['step'] == 3): ?>class="currentStep"<?php endif; ?>>&raquo; 3 Options</li>
           <li <?php if ($this->_tpl_vars['step'] == 4): ?>class="currentStep"<?php endif; ?>>&raquo; 4 Database Changes</li>
           <li <?php if ($this->_tpl_vars['step'] == 5): ?>class="currentStep"<?php endif; ?>>&raquo; 5 Done!</li>
          </ul>
          <?php endif; ?>
          <br style="clear:both;"/>
        </div>

    </div>
    <div id="content" >
        <div id="nav_bar">
            <div id="section_title">
                <h2><?php echo $this->_tpl_vars['title']; ?>
</h2>
            </div>
            <br style="clear:both;" />
        </div>