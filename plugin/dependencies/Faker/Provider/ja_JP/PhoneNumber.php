<?php

namespace AIKit\Dependencies\Faker\Provider\ja_JP;

class PhoneNumber extends \AIKit\Dependencies\Faker\Provider\PhoneNumber
{
    /**
     * @see http://www.soumu.go.jp/main_sosiki/joho_tsusin/top/tel_number/number_shitei.html#kotei-denwa
     */
    protected static $formats = [
        '080-####-####',
        '090-####-####',
        '0#-####-####',
        '0####-#-####',
        '0###-##-####',
        '0##-###-####',
        '0##0-###-###',
    ];
}
