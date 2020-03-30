<?php

use APP\CreditMaster;
use APP\CreditValidator;
use APP\RGHConnection;
use APP\IRGHConnection;
use PHPUnit\Framework\TestCase;

class CreditValidatorTest extends TestCase
{
    public function testCreate()
    {
        $connection = new FakeConnection();
        $master = new CreditMaster("filename", true);
        $validatorID = "myID";
        $validator = new CreditValidator($connection, $master, $validatorID);
        ///
    }
}

class FakeConnection implements IRGHConnection
{
    public $report;

    public function connect(): void
    {
        // TODO: Implement connect() method.
    }

    public function disconnect(): void
    {
        // TODO: Implement disconnect() method.
    }

    public function RFDIReportFor(int $id)
    {
        return $this->report;
    }

    public function ACTIOReportFor(int $customerId)
    {
        return null;
    }
}