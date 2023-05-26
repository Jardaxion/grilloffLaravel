<?php
    function phone($phone){
        $phone = '+'.$phone;
        $phone = $phone[0].' '.$phone[1].' ('.$phone[2].$phone[3].$phone[4].') '.$phone[5].$phone[6].$phone[7].'-'.$phone[8].$phone[9].'-'.$phone[10].$phone[11];
        
        return $phone;
    }