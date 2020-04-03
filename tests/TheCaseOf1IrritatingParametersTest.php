<?php

use APP\Certificate;
use APP\CreditMaster;
use APP\CreditValidator;
use APP\RFDIReport;
use APP\IRGHConnection;
use PHPUnit\Framework\TestCase;

class CreditValidatorTest extends TestCase
{
    public function testCreate()
    {
        $master = new CreditMaster("filename", true);
        $connection = new FakeConnection();
        $validatorID = "myID";
        $validator = new CreditValidator($connection, $master, $validatorID);
        $connection->report = new RFDIReport(...);
        $result = $validator->validateCustomer(new Customer());
        $this->assertEquals(Certificate::VALID, $result->getStatus);
        ///
    }
}

class FakeConnection implements IRGHConnection
{
    public RFDIReport $report;

    public function connect(): void
    {

    }

    public function disconnect(): void
    {

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