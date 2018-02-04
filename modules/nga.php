<?php
/*
 * Silicon
 * Github @Si1icon
 * zhaoj
 */
$op1=array(
    generate_outputArray("nga_","username","username",'//*[@id="ucpuser_info_blockContent"]/div/span/ul[2]/li[2]/span/span','xpath'),
    generate_outputArray("nga_","user_gruop","user_group",'//*[@id="ucpuser_info_blockContent"]/div/span/ul[2]/li[3]/span/span','xpath'),
    generate_outputArray("nga_","sign_up_date",'//*[@id="ucpuser_info_blockContent"]/div/span/ul[2]/li[5]/span/span','xpath'),
    generate_outputArray("nga_",'profile_photo','profile_photo','//*[@id="ucpuser_avatar_blockContent"]/div/span/img','xpath'),
    generate_outputArray('nga_','signature','signature','//*[@id="userSignC"]','xpath')
    
);
add_pattern("NGA","NGAuid","http://bbs.nga.cn/nuke.php?func=ucp&uid=%%",$op1);
