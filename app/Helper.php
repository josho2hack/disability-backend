<?php

function formatDateThai($FullDate){
    $strDate = explode(" ", $FullDate);
    $strDateSplited = explode("-", $strDate[0]);
    $strYear = date("Y",strtotime($strDateSplited[0]))+543;
    $strMonth= $strDateSplited[1];
    $strDay= $strDateSplited[2];
    // $strHour= date("H",strtotime($strDate));
    // $strMinute= date("i",strtotime($strDate));
    // $strSeconds= date("s",strtotime($strDate));
    $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
    $strMonthThai=$strMonthCut[$strMonth];

    $finalDate = $strDay." ".$strMonthThai." ".$strYear." ".$strDate[1];
    return  $finalDate;
}

function flexNformat($value, $pattern, $split_symbol) {
    $value_split = str_split($value, 1);
    $count_value = count($value_split);
    $pattern_splited = explode($split_symbol, $pattern);
    $numPatterSplited = count($pattern_splited);

    $sb = 0;
    for ($i=0; $i < $numPatterSplited; $i++) {
      for ($ii=0; $ii < strlen($pattern_splited[$i]); $ii++) {
        @$finalValue .= $value_split[$ii+$sb];
        if (($ii + 1) == strlen($pattern_splited[$i])) {
          $sb += strlen($pattern_splited[$i]);
          if ($sb != $count_value) {
            $finalValue .= $split_symbol;
          }
        }
      }
    }

    return $finalValue;
}

?>