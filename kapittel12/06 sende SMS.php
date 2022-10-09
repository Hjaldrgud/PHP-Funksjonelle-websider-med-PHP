<?php
    function sendsms($sms){
        $url = "https://****.***/SMS/sendmsg?user=xxx&pwd=xxx&";
        $url .= http_build_query($sms);
        //Sender forespørsel med cURL
    }
    $sms = array(
        'to' = "xxx",
        'msg'= "xxx"
    );
    sendsms($sms);
?>