<?php

namespace Page;

class YandexVideo
{
    // include url of current page
    public static $URL = '/video';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    public static $FIRST_VIDEO = '.stream-card__thumb:nth-child(1)';
}
