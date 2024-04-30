<?php 
// date formatting
$day = date("l"); // day of month (01 - 31)
$daya = date("D"); // day (3 letters)
$month = date("F"); // month (full name)
$mon = date("M"); // month (3 letters)
$mo = date("n"); // numeric representation of month (1 - 12)
$mot = date("t"); // number of days in given month
$year = date("Y"); // Year (four digit)
$yr = date("y"); // year (two digit)
$dom = date("j"); // day of month
$dow = date("w"); // day of week (numeric)
$doy = date("z"); // day of year
$week = date("W"); // week number of year
$nday = date('jS'); // nth day
$hms = date("H:i:s"); // hours: minutes: seconds
$datetime = date("Y-m-d H:i:s"); // 2001-03-10 17:16:18 (the MySQL DATETIME format)

// timezone
$get_tz = date_default_timezone_get();
$tz = date('T');

// common date formats
$dmy = date("d.m.y"); // DD.MM.YY
$ymd = date("y.m.d"); // YY.MM.DD
$mdy = date("m.d.y"); // MM.DD.YY
$mdyt = date("F j, Y, g:i a"); // March 10, 2001, 5:16 pm
$mdytz = date("F j, Y, g:i a T"); // March 10, 2001, 5:16 pm EST

// future and past dates
$tmrw = strtotime("tomorrow");
$tomorrow = date("l", $tmrw);
$ystrd = strtotime("yesterday");
$yesterday = date("l", $ystrd);
$lmonth = strtotime("last month");
$lastmonth = date("F",$lmonth);
$nmonth = strtotime("next month");
$nextmonth = date("F",$nmonth);
$lyear = strtotime("last year");
$lastyear = date("Y",$lyear);
$nyear = strtotime("next year");
$nextyear = date("Y",$nyear);
$lweek = strtotime("-7 days");
$lastweek = date("W",$lweek);
$nweek = strtotime("+7 days");
$nextweek = date("W",$nweek);

// days until New Years?
$unyd=strtotime("January 1 ".$nextyear);
$until_nyd=ceil(($unyd-time())/60/60/24);

// days until Christmas?
$iuxmas=strtotime("December 25 ".$year);
$tuxmas=ceil(($iuxmas-time())/60/60/24);
if($tuxmas<=0){
	$uxmas=strtotime("December 25 ".$nextyear);
	$until_xmas=ceil(($uxmas-time())/60/60/24);
} else {
	$uxmas=strtotime("December 25 ".$year);
	$until_xmas=ceil(($uxmas-time())/60/60/24);
}

// days until halloween?
$iuhal=strtotime("October 31 ".$year);
$tuhal=ceil(($iuhal-time())/60/60/24);
if($tuhal<=0){
	$uhallo=strtotime("October 31 ".$nextyear);
	$until_halloween=ceil(($uhallo-time())/60/60/24);
} else {
	$uhallo=strtotime("October 31 ".$year);
	$until_halloween=ceil(($uhallo-time())/60/60/24);
}
// days until valentine's day?
$iuval=strtotime("February 14 ".$year);
$tuval=ceil(($iuval-time())/60/60/24);
if($tuval<=0){
	$uval=strtotime("February 14 ".$nextyear);
	$until_valentines=ceil(($uval-time())/60/60/24);
} else {
	$uval=strtotime("February 14 ".$year);
	$until_valentines=ceil(($uval-time())/60/60/24);
}

// days until Earth Day?
$iued=strtotime("April 22 ".$year);
$tued=ceil(($iued-time())/60/60/24);
if($tued<=0){
	$ued=strtotime("April 22 ".$nextyear);
	$until_earthday=ceil(($ued-time())/60/60/24);
} else {
	$ued=strtotime("April 22 ".$year);
	$until_earthday=ceil(($ued-time())/60/60/24);
}

// is it a leap year?
$isleapy = date("L");
if($isleapy==1) {$leapyear="true"; $is_leapyear=true;} else {$leapyear="false"; $is_leapyear=false;}

// last modified
$lastmod = date('m/d/Y h:i:sa', getlastmod());

?>