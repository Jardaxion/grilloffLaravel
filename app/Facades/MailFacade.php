<?php


namespace App\Facades;

use App\Services\ContactService;
use App\Services\MailService;
use App\Services\PHPMailService;
use Illuminate\Support\Facades\Facade;

class MailFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return PHPMailService::class;
    }
}
