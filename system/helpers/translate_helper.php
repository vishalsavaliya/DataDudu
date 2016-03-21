<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */
// ------------------------------------------------------------------------

/**
 * CodeIgniter Translate Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		
  // On date     12-05-2010

 */
// ------------------------------------------------------------------------

/**
 * Translate 
 *
 * $s - default source language ( English )
 * $d - Destination language ( French , Spanish ... )
 * Converted the string using google translate API.
 * @return	string
 */
if (!function_exists('translate')) {

    function translate($text, $d = '') {
        $s = 'en';
        if ($d == '') {
            $d = 'zh-CN';
        }
        if ($d != 'en') {
            $lang_pair = urlencode($s . '|' . $d);
            $q = rawurlencode($text);
//          Google's API translator URL
//          $url = "https://www.googleapis.com/language/translate/v2?key=AIzaSyCbo7ZoyxZw1O6houZgiEkrgLMoiTuuMOg&source=en&target=".$d."&q=".$q;
//          $url = "https://www.googleapis.com/language/translate/v2?key=AIzaSyBO9iyrETMik3QeZ0ylurG5QBh0EaJVCvw&source=en&target=de&q=Hello%20world";
//            $ch = curl_init();
//            curl_setopt($ch, CURLOPT_URL, $url);
//            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//            curl_setopt($ch, CURLOPT_REFERER, "http://localhost/apidoc/");
//            $body = curl_exec($ch);
//            echo $body;
//            curl_close($ch);
//            $json = json_decode($body, true);
//
//            $tranlate =  $json['responseData']['translatedText'];
//            echo $tranlate;	
            
            $url = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160202T092633Z.22e43eabd3b30c45.204f3337d141baef304caa48b0f3b8cc6022bc9b&text=bhadresh&lang=zh";
            $handle = curl_init($url);
            curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);     //We want the result to be saved into variable, not printed out
            $response = curl_exec($handle);
            curl_close($handle);

            print_r(json_decode($response, true));
        } else {
            echo $text;
        }
    }

}

 	


// ------------------------------------------------------------------------
/* End of file translate_helper.php */
/* Location: ./system/helpers/translate_helper.php */