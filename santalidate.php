<?php


// Two options for connecting to the database:
class SantaliDate {
    private $santaliletter = array ("&#7248;", // 0
                                "&#7249;", // 1
                                "&#7250;", // 2
                                "&#7251;", // 3
                                "&#7252;", // 4
                                "&#7253;", // 5
                                "&#7254;", // 6
                                "&#7255;", // 7
                                "&#7256;", // 8
                                "&#7257;", // 9
                                );

    private $santalimonth = array (" ", // Nothing as 0 month
                                 "&#7265;&#7263;&#7281;&#7273;&#7267;&#7263;&#7272;&#7268;", //january
                                 "&#7279;&#7287;&#7278;&#7285;&#7293;&#7272;&#7273;&#7267;&#7263;&#7272;&#7268;", //february
                                 "&#7266;&#7263;&#7272;&#7274", //march
                                 "&#7278;&#7279;&#7272;&#7268;&#7262;", //april
                                 "&#7266;&#7278;", // may
                                 "&#7265;&#7273;&#7281;", // june
                                 "&#7265;&#7273;&#7262;&#7263;&#7277;", //july
                                 "&#7258;&#7260;&#7258;&#7269;&#7284;", // august
                                 "&#7269;&#7278;&#7279;&#7284;&#7278;&#7266;&#7285;&#7258;&#7272;", // september
                                 "&#7258;&#7264;&#7284;&#7258;&#7285;&#7258;&#7272;", //october
                                 "&#7281;&#7258;&#7285;&#7287;&#7278;&#7266;&#7285;&#7258;&#7272;", // november
                                 "&#7280;&#7268;&#7269;&#7278;&#7266;&#7285;&#7258;&#7272;", // december
                                );




    /**
     * Constructor
     */
    public function __construct(){
    }

    /*
    Get an instance of the Database
    @return Instance
    */

    public function getMahit($date) {
        $ret = "";
        if (empty($date)) {
            return $ret;
        }

        $items = strval($date);
        $dateString = str_split($items);

        foreach ($dateString as $value) {
            if ($value == 0 or !empty($value)) {
                 $ret .= $this->santaliletter[intval($value)];
            }
        }

        return $ret;
    }

    public function getMonth($month) {
        $ret = "";
        if (empty($month)) {
            return $ret;
        }

        $ret .= $this->santalimonth[intval($month)];

        return $ret;
    }
}

?>
