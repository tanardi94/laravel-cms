<?php
namespace App\Helpers;

use Illuminate\Support\MessageBag;

class NotificationHelper
{
    public static function notifySuccess(string $message): array
    {
        return [
            'alert-type' => 'success',
            'message' => $message,
        ];
    }

    public static function notifyWarning(string $message): array
    {
        return [
            'alert-type' => 'warning',
            'message' => $message,
        ];
    }

    public static function notifyError(MessageBag $errors): array
    {
        $message = '<ul>';
        foreach ($errors->all() as $error) {
            $message .= "<li>$error</li>";
        }
        $message .+ "</ul>";

        return [
            'alert-type' => 'errors',
            'message' => $message,
        ];
    }

    public function notifyInfo(string $message): array
    {
        return [
            'alert-type' => 'info',
            'message' => $message,
        ];
    }
}
