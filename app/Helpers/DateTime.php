<?php
//Show Date with user timezone
if (! function_exists('show_date')) {
	function show_date($date, $format="d m Y H:i:s")
	{

		if(!($date instanceof \Carbon\Carbon)) {
			if(is_numeric($date)) {
				 // Assume Timestamp
				 $date = \Carbon\Carbon::createFromTimestamp($date);
			} else {
				$date = \Carbon\Carbon::parse($date);
			}
		}
        return $date->setTimezone(Auth::user()->timezone)->format($format);
		//return $date->format(formatDateThai($date("Y-m-d H:i:s")));
	}
}

if (! function_exists('formatDateThai')) {
	function formatDateThai($strDate)
	{
        $strYear = date("Y",strtotime($strDate))+543;
        $strMonth= date("n",strtotime($strDate));
        $strDay= date("j",strtotime($strDate));
        $strHour= date("H",strtotime($strDate));
        $strMinute= date("i",strtotime($strDate));
        $strSeconds= date("s",strtotime($strDate));
        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
        $strMonthThai=$strMonthCut[$strMonth];
        return "$strDay $strMonthThai $strYear";
	}
}

//Set Datetime to insert_db
if (! function_exists('insert_db_date')) {
	function insert_db_date($date, $format="Y-m-d H:i:s")
	{
		$output_timezone = \Config::get('app.timezone', 'UTC');
		$date = \Carbon\Carbon::parse($date);
        return \Carbon\Carbon::createFromFormat($format, $date->format($format), Auth::user()->timezone)->setTimezone($output_timezone)->format('Y-m-d H:i:s');
	}
}
