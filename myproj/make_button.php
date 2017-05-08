<?php
/**
 * Created by PhpStorm.
 * User: shenpu
 * Date: 5/8/17
 * Time: 8:26 PM
 */
$button_text=$_REQUEST['button_text'];
$color=$_REQUEST['color'];
if(empty($button_text)||empty($color))
{
    echo 'Could not create image -form not filled out correctly';
    exit;

}