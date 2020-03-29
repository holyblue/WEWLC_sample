<?php

namespace APP;


class CreditValidator
{
    public function __construct(RGHConnection $connection,
                                CreditMaster $master,
                                string $validatorID)
    {
    }
}

class RGHConnection
{
    public function __construct(int $port, string $name, string $passwd)
    {
    }
}

class CreditMaster
{
    public function __construct(string $filename, bool $isLocal)
    {
    }
}

class TestCase
{
    public function testCreate()
    {
        $connection = new RGHConnection(5000, "name", "passwd");
        $master = new CreditMaster("filename", true);
        $validatorID = "myID";
        $validator = new CreditMaster($connection, $master, $validatorID);
    }
}