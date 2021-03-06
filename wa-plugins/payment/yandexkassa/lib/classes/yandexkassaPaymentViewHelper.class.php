<?php

class yandexkassaPaymentViewHelper
{
    public static function getCreditInfo($amount, $app_id = null, $id = '*', $selector = null)
    {
        if (!class_exists('yandexkassaPayment')) {
            waPayment::factory('yandexkassa');
        }
        try {
            $html = yandexkassaPayment::getCreditInfo($amount, $app_id, $id, $selector);
        } catch (waException $ex) {
            '<!-- YandexkassaPayment: Oops -->';
        }
        return $html;
    }
}
