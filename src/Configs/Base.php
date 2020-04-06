<?php
namespace SimpleApp\Configs;

class Base {
    /**
     * Return the path of the blade theme
     *
     * @return string
     */
    public function getTemplatePath() {
        return '/views/themes/bootstrap';
    }

    /**
     * Return the basic configuration of the website
     *
     * @return array
     */
    public function getBaseInfo() {
        return [
            'appName' => 'php-base-info-site',
            'appVersion' => '1.0.0',
            // the uri where you publish your web site
            'publicUrl' => 'http://magicianred.altervista.org/gigs/php-base-info-site/',
            'extFile' => '.php', // Remove for url rewrite
        ];
    }


    public function getEmailConfig() {
        $from   = 'webmaster@example.com';
        $to     = 'magicianred@gmail.com';     // your address
        return [
            'to'        =>  $to,
            'headers'   =>  'From: ' . $from . "\r\n" .
                            'Reply-To: ' . $to . "\r\n" .
                            'X-Mailer: PHP/' . phpversion(),
        ];
    }
}