<?php

use APP\MailingListDispatcher;
use APP\MailService;
use PHPUnit\Framework\TestCase;

class MailingListDispatcherTest extends TestCase
{
    public function testCreate()
    {
        $mailService = new MailService();
        $dispatcher = new MailingListDispatcher(MAIL_OKAY, $mailService);
        // now we can test
    }
}