<?php
namespace App\Helpers;

class NotificationHelper
{
    public static function notifySuccess(string $message): array
    {
        return [
            'alert-type' => 'success',
            'message' => $message,
        ];
    }
}
