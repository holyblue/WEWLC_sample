<?php
namespace APP;

define('MAIL_OKAY', "MAIL_OKAY");
define('MAIL_OFFLINE', "MAIL_OFFLINE");
define('ML_NOBOUNCE', true);
define('ML_REPEATOFF', true);
define('MS_AVAILABLE', true);
define('MARK_MESSAGE_OFF', true);

class MailingListDispatcher
{
    /**
     * ***Parameterize Constructor ***
     * MailingListDispatcher constructor.
     * @param string $status
     * @param MailService|null $service
     */
    public function __construct($status = MAIL_OKAY, MailService $service = null)
    {
        /// Parameterize Constructor
        if ($service == null) {
            $service = new MailService();
        }

        $client_type = 12;
        $service->connect();

        if ($service->get_status() === MS_AVAILABLE) {
            $service->register($this, $client_type, MARK_MESSAGE_OFF);
            $service->set_param($client_type, ML_NOBOUNCE || ML_REPEATOFF);
        } else {
            $status = MAIL_OFFLINE;
        }
    }
}

class MailService
{
    public function connect()
    {

    }

    public function get_status()
    {

    }

    public function register(MailingListDispatcher $param, int $client_type, string $string)
    {
    }

    public function set_param(int $client_type, bool $param)
    {
    }
}