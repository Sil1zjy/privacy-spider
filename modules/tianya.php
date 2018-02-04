<?php
/*
 * Github @Si1icon
 * suna
 */
$op1=array(
    generate_outputArray('tianya_','username','username','//*[@id="home_wrapper"]/div[1]/div[1]/div[1]/h2/a[1]','xpath'),
    generate_outputArray("tianya_","profile_photo","profile_photo",'//*[@id="home_wrapper"]/div[1]/div[1]/div[1]/div[1]/img',"xpath"),
    generate_outputArray("tianya_","location","location",'//*[@id="home_wrapper"]/div[1]/div[2]/div/div/div/ul/li[1]/i',"xpath"),
    generate_outputArray("tianya_","note","note",'//*[@id="home_wrapper"]/div[1]/div[2]/div/div/div/ul/li[2]/i',"xpath"),
);

add_pattern("tianya","tianya_uid","http://www.tianya.cn/%%",$op1);