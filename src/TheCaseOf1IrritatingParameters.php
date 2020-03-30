<?php

namespace APP;


class CreditValidator
{
    public function __construct(IRGHConnection $connection,
                                CreditMaster $master,
                                string $validatorID)
    {
    }
}

class RGHConnection
{
    public function __construct(int $port, string $name, string $passwd){}
    public function connect(): void{}
    public function disconnect(): void{}
    public function RFDIReportFor(int $id){}
    public function ACTIOReportFor(int $customerId){}
}

class CreditMaster
{
    public function __construct(string $filename, bool $isLocal)
    {
    }
}








interface IRGHConnection
{
    public function connect(): void;
    public function disconnect(): void;
    public function RFDIReportFor(int $id);
    public function ACTIOReportFor(int $customerId);
}