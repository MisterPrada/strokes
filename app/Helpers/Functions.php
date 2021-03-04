<?php

namespace App\Helpers;

class Functions
{

    public static function check_google($recaptchaResponse, $userIp)
    {
        //TODO: Может передавать реквекс а тут уже получать g-recaptcha-response и $request->ip()

        $publicKey = '6LfVYHAaAAAAAEc_yNfnj3iA2-qTzli6RY0KBBne';
        $secretKey = '6LfVYHAaAAAAAHzCf0CEbYmTlZeAn2d3eb7QKrVx';
        $captchaUrl = 'https://www.google.com/recaptcha/api/siteverify';

        $url = $captchaUrl . "?secret=" . $secretKey . "&response=" . $recaptchaResponse . "&remoteip=" . $userIp;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
        $curlData = curl_exec($curl);
        curl_close($curl);
        $curlData = json_decode($curlData, true);

        if ($curlData['success']) {
            return true;
        }

        return false;
    }


}