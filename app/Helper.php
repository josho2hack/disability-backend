<?php

function formatDateThai($FullDate){
    // dd(strlen($FullDate));
    if ($FullDate!="") {
        $strDate = explode(" ", $FullDate);
        $strDateSplited = explode("-", $strDate[0]);
        $strYear = date("Y",strtotime($strDateSplited[0]))+543;
        // $strMonth= date("j",strtotime($strDateSplited[1]));
        $strMonth= returnMonthNum($strDateSplited[1]);
        $strDay= $strDateSplited[2];
        // $strHour= date("H",strtotime($strDate));
        // $strMinute= date("i",strtotime($strDate));
        // $strSeconds= date("s",strtotime($strDate));
        $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
        $strMonthThai=$strMonthCut[$strMonth];

        $finalDate = $strDay." ".$strMonthThai." ".$strYear." ".$strDate[1];
    } else {
      $finalDate = "ร่าง";
    }

    return $finalDate;

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

function returnMonthNum($value) {
    switch ($value) {
        case '01': $finaleValue = '1'; break;
        case '1': $finaleValue = '1'; break;
        case '02': $finaleValue = '2'; break;
        case '2': $finaleValue = '2'; break;
        case '03': $finaleValue = '3'; break;
        case '3': $finaleValue = '3'; break;
        case '04': $finaleValue = '4'; break;
        case '4': $finaleValue = '4'; break;
        case '05': $finaleValue = '5'; break;
        case '5': $finaleValue = '5'; break;
        case '06': $finaleValue = '6'; break;
        case '6': $finaleValue = '6'; break;
        case '07': $finaleValue = '7'; break;
        case '7': $finaleValue = '7'; break;
        case '08': $finaleValue = '8'; break;
        case '8': $finaleValue = '8'; break;
        case '09': $finaleValue = '9'; break;
        case '9': $finaleValue = '9'; break;
        case '10': $finaleValue = '10'; break;
        case '11': $finaleValue = '11'; break;
        case '12': $finaleValue = '12'; break;

        default: 0; break;
    }

    return $finaleValue;
}

?>