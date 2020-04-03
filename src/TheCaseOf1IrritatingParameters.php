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

class RGHConnection implements IRGHConnection
{
    public function __construct(int $port, string $name, string $password)
    {
    }

    public function connect(): void
    {
    }

    public function disconnect(): void
    {
    }

    public function RFDIReportFor(int $id): RFDIReport
    {
    }

    public function ACTIOReportFor(int $customerId) : ACTIOReport
    {
    }

    private function retry()
    {

    }

    private function formPackect(): RFPacket
    {

    }
}

class CreditMaster
{
    public function __construct(string $filename, bool $isLocal)
    {
    }
}

class RFDIReport
{

}

class ACTIOReport
{

}

class RFPacket
{

}

class Certificate
{
    public const VALID = '100';
}
// Extract Interface
interface IRGHConnection
{
    public function connect(): void;

    public function disconnect(): void;

    public function RFDIReportFor(int $id);

    public function ACTIOReportFor(int $customerId);
}