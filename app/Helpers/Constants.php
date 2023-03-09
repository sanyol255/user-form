<?php
namespace App\Helpers;

class Constants
{
    // Flash повідомлення
    const SUCCESS_MESSAGE = 'Користувач успішно збереженний. ';
    const FAILED_MESSAGE = 'Користувач з такою email адресою уже існує! ';

    //Повідомлення для логів
    const SUCCESS_REGISTRATION = self::SUCCESS_MESSAGE . 'Дані користувача: ';
    const FAILED_REGISTRATION = self::FAILED_MESSAGE . 'Дані користувача: ';
}

