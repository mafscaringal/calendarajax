<?php
$year = (!empty($_GET['year'])) ? $_GET['year'] : false;
$month = (!empty($_GET['month'])) ? $_GET['month'] : false;
$day = 0;
$is_leap = (($year % 4) == 0) ? true :false;

switch ($month) {
	case 'jan':
	case 'mar':
	case 'may':
	case 'july':
	case 'aug':
	case 'oct':
	case 'dec':
		$day = 31;
		break;
	case 'feb':
		if ($is_leap) {
			$day = 29;
		}else{
			$day = 28;
		}
		break;
	default:
		$day = 30;
}






// if (in_array($year, array('feb'))){
// 	$days = 28;
// }elseif (in_array($year. array('apr', 'june', 'sep', 'nov'))){
// 	$days = 30;
// }elseif (in_array($year, array('jan', 'mar', 'may', 'july', 'aug', 'oct', 'dec' ))){
// 	$days = 31;
// }else {
// 	$days = false;
// }

echo json_encode(
	array(
		'year' => $year,
		'result' => 'success',
		'month' => $month,
		'day' => $day
		)
	);
?>