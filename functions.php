<?php 

function debug($data) {
    echo '<pre>' . print_r($data, return:1) . '</pre>';
}

function load($data) {
    foreach ($_POST as $item => $v) {

        if(array_key_exists($k, $data)) {
            $data[$k] ['value'] = trim($v); 
        }
    }
return $data;
}
function validate($data) {
    $errors ='';
    foreach ($data as $k => $v) {
        if ($data[$k] ['required'] && empty($data[$k] ['value'])){
            $errors .= "<li>You did not fill in the field {$data[$k] ['field_name']}</li>";
        } 
    }
    return $errors;
}