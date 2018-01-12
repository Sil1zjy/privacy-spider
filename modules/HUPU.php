<?php
/*
 * Silicon
 * Github @Si1icon
 * zhaoj
 */
$op1=array(
    generate_outputArray("hupu_","gender","gender",'//*[@id="content"]/table[1]/tbody/tr[1]/td[2]',"xpath"),
    generate_outputArray("hupu_","likedSports","sports",'//*[@id="content"]/table[2]/tbody/tr[1]/td[2]',"xpath"),
);

add_pattern("hupu","hupuuid","https://my.hupu.com/%%/profile",$op1)
echo "hupuA";

$op1=array(
    generate_outputArray("hupu_","nickname","nickname",'//*[@id="main"]/div[1]/div[2]/h3/div/text()',"xpath"),
    generate_outputArray("hupu_","location","location",'//*[@id="main"]/div[1]/div[2]/div/span[4]','xpath'),
);

add_pattern("hupu","hupuuid","https://my.hupu.com/%%",$op1)
echo "hupuB";
