<?php
/**

* 按符号截取字符串的指定部分

* @param string $str 需要截取的字符串

* @param string $sign 需要截取的符号

* @param int $number 如是正数以0为起点从左向右截 负数则从右向左截

* @return string 返回截取的内容

*/

function cut_str($str, $sign, $number)

{

$array = explode($sign, $str);

$length = count($array);

if ($number < 0) {

$new_array = array_reverse($array);

$abs_number = abs($number);

if ($abs_number > $length) {

return 'error';

} else {

return $new_array[$abs_number - 1];

}

} else {

if ($number >= $length) {

return 'error';

} else {

return $array[$number];

}

}

}
?>