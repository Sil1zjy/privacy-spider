<?php
/*
 * Github @Si1icon
 * suna
 */
$op1=array(
    generate_outputArray('wip_','username','username','//*[@id="ct"]/div[2]/div/div/h2/a','xpath'),
    generate_outputArray("wip_","profile_photo","profile_photo",'//*[@id="ct"]/div[2]/div/div/p/a/img',"xpath"),
    generate_outputArray("wip_","signature","signature",'//*[@id="ct"]/div[1]/div/div[2]/div/div[1]/ul[2]/li/em',"xpath"),
    generate_outputArray("wip_","gender","gender",'//*[@id="ct"]/div[1]/div/div[2]/div/div[1]/ul[4]/li[1]/em',"xpath"),
    generate_outputArray("wip_","date_of_birth","date_of_birth",'//*[@id="ct"]/div[1]/div/div[2]/div/div[1]/ul[4]/li[1]/em','xpath'),
    generate_outputArray("wip_","time_zone","time_zone",'//*[@id="pbbs"]/li[6]/em','xpath'),
);

add_pattern("feng","fenguid","https://bbs.feng.com/home.php?mod=space&uid=%%&do=profile",$op1);