<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

function is_active($value1, $value2) {
    if ($value1 == $value2) { echo ' class="active"';  }
}

function to_url_string($string) {
    $string = strip_tags($string);
    $string = strtolower($string);
    $string = str_replace(' ','-',$string);
    $string = str_replace('!','',$string);
    $string = str_replace('@','',$string);
    $string = str_replace('#','',$string);
    $string = str_replace('$','',$string);
    $string = str_replace('%','',$string);
    $string = str_replace('^','',$string);
    $string = str_replace('&','',$string);
    $string = str_replace('*','',$string);
    $string = str_replace('(','',$string);
    $string = str_replace(')','',$string);
    $string = str_replace('{','',$string);
    $string = str_replace('}','',$string);
    $string = str_replace('"','',$string);
    $string = str_replace('"','',$string);
    $string = str_replace("'",'',$string);
    $string = str_replace('&','',$string);
    $string = str_replace('.','-',$string);
    $string = str_replace(',','-',$string);
    $string = strtolower($string);
    return $string;
}

function money($float) {

    $money = number_format($float, 2, '.', ',');
    list($integer,$decimal) = explode('.',$money);
    return '<span class="money"><span class="dollarsymbol">$</span><span class="integer">' . $integer . '</span><span class="period">.</span><span class="decimal">' . $decimal . '</span></span>';

}

function get_post() {

    foreach($_POST as $key => $value) {

        if($key != 'submit' && $key != 'nyromodal' && $key != 'robot'){

            $data[$key] = $value;

        }

    }

    return $data;

}

function make_float($data,$keys) {

    foreach($keys as $key) {
        if(array_key_exists($key,$data)) {
            $data[$key] = number_format((float)$data[$key]);
        }
    }
    
    return $data;

}
