<?php



function flattenArray($array) {
    $result = array();
    foreach ($array as $key => $value) {
        if (!in_array($key, $result)) {
            $result[] = $key;
        }
        if (is_array($value)) {
            $result = array_merge($result, flattenArray($value));
        } else {
            $result[] = $value;
        }
    }
    // print_r($result);
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


// $arrData = array('a'=>array('b'=>'c', 'd'=>'e'), 'f'=>'g', 'h'=>'i', 'j'=>array('k'=>'l'), 'm'=>'n', 'n'=>array('o'=>'p', 'q'=>array('r'=>'s','t'=>'u')));

$flattenedArray = flattenArray($arrData);
$output = implode(',', $flattenedArray);

print($output);

?>
