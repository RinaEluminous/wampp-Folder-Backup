<?php
function singleDimentionalArray($array) {
    $result = array();
    foreach ($array as $key => $value) {
        if (!in_array($key, $result)) {
            $result[] = $key;
        }
        if (is_array($value)) {
            $result = array_merge($result, singleDimentionalArray($value));
        } else {
            $result[] = $value;
        }
    }
   return $result;
}
$arrData = array(
    'a' => array('b' => 'c', 'd' => 'e'),
    'f' => 'g',
    'h' => 'i',
    'j' => array('k' => 'l'),
    'm' => 'n',
    'n' => array('o' => 'p', 
                 'q' => array('r' => 's', 't' => 'u')
                 )
);

$singleDimentionalArray = singleDimentionalArray($arrData);
$output = implode(',', $singleDimentionalArray);
print($output);

?>
