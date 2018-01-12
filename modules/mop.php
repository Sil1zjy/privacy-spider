<?php
/*
 * Silicon
 * Github @Si1icon
 * zhaoj
 */
$op1=array(
    generate_outputArray("mop_","nickname","nickname",'/html/body/div[4]/div[2]/div/div[3]/div/div[1]/ul/li[1]/div[2]','xpath'),
    generate_outputArray("mop_","birthday","baith-date",'/html/body/div[4]/div[2]/div/div[3]/div/div[1]/ul/li[4]/div[2]','xpath'),
    generate_outputArray("mpo_","location","location",'/html/body/div[4]/div[2]/div/div[3]/div/div[1]/ul/li[2]/div[2]','xpath'),
);

add_pattern("mop","mopuid",'http://hi.mop.com/space/%%/profile',$op1);
