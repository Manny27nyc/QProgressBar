/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

$objPlugin = new QPlugin();
$objPlugin->strName = "QProgressBar";
$objPlugin->strDescription = 'A basic horizontal progress bar, with predefined values and dymanic updates.';
$objPlugin->strVersion = "0.11";
$objPlugin->strPlatformVersion = "1.1";
$objPlugin->strAuthorName = "Eduardo Garcia aka enzo";
$objPlugin->strAuthorEmail ="enzo [at] anexusit [dot] com";

$components = array();

$components[] = new QPluginControlFile("includes/QProgressBar.class.php");

$components[] = new QPluginJsFile("js/jquery.progressbar.js");

$components[] = new QPluginImageFile("images/progressbar.gif");
$components[] = new QPluginImageFile("images/progressbg_black.gif");
$components[] = new QPluginImageFile("images/progressbg_green.gif");
$components[] = new QPluginImageFile("images/progressbg_orange.gif");
$components[] = new QPluginImageFile("images/progressbg_red.gif");
$components[] = new QPluginImageFile("images/progressbg_yellow.gif");

$components[] = new QPluginExampleFile("example/qprogressbar.php");
$components[] = new QPluginExampleFile("example/qprogressbar.tpl.php");

$components[] = new QPluginIncludedClass("QProgressBar", "includes/QProgressBar.class.php");

$components[] = new QPluginExample("example/qprogressbar.php", "Example usage of a Horizontal Progress Bar");

$objPlugin->addComponents($components);
$objPlugin->install();
	
?>
