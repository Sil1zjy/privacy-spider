<?php
/*
 * Silicon/
 * Github @Si1icon
 * zhaoj/suna
 */
$op1=array(
    generate_outputArray('hupu_','username','username','//*[@id="main"]/div[1]/div[2]/h3/div','xpath'),
    generate_outputArray("hupu_","gender","gender",'//*[@id="main"]/div[1]/div[2]/div/span[2]',"xpath"),
    generate_outputArray("hupu_","occupation","occupation",'//*[@id="main"]/div[1]/div[2]/div/span[2]',"xpath"),
    generate_outputArray("hupu_","basketball","basketball",'//*[@id="main"]/div[1]/div[2]/div/span[6]/a',"xpath"),
    generate_outputArray("hupu_","csl","csl",'//*[@id="main"]/div[1]/div[2]/div/span[10]/a','xpath'),
    generate_outputArray("hupu_","la_liga","la_liga",'//*[@id="main"]/div[1]/div[2]/div/span[14]/a','xpath'),
    generate_outputArray("hupu_","seire_a","seire_a",'//*[@id="main"]/div[1]/div[2]/div/span[16]/a','xpath'),
    generate_outputArray("hupu_","premier_league","prem_league",'//*[@id="main"]/div[1]/div[2]/div/span[10]/a','xpath'),
    generate_outputArray("hupu_","bundesliga","bundesliga",'//*[@id="main"]/div[1]/div[2]/div/span[12]/a','xpath'),
    generate_outputArray("hupu_","ligue1","ligue1",'//*[@id="main"]/div[1]/div[2]/div/span[20]/a','xpath'),
    generate_outputArray("hupu_","nfl","nfl",'//*[@id="main"]/div[1]/div[2]/div/span[20]/a','xpath'),
    generate_outputArray("hupu_","interest","interest",'//*[@id="main"]/div[2]/div[3]','xpath'),
);

add_pattern("HUPU","HUPUuid","https://my.hupu.com/%%",$op1);
echo "hupuB";
