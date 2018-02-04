<?php
/*
 * Silicon
 * Github @Si1icon
 * zhaoj
 */
$op1=array(
    generate_outputArray("csdn_","nickname","nickname",'//*[@id="uid"]','xpath'),
);

add_pattern("csdn","nickname","http://blog.csdn.net/%%",$op1)
