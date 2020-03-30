<?php

use APP\IndustrialFacility;
use APP\OriginationPermit;
use APP\PermitNotice;
use PHPUnit\Framework\TestCase;

class IndustrialFacilityTest extends TestCase
{
    public function testHasPermits() {
        $facility = new IndustrialFacility(1, "b", new AlwaysValidPermit());
        $this->assertTrue($facility->hasPermits());
    }
}

class AlwaysValidPermit extends FakeOriginationPermit
{
    public function validate()
    {
        // set the validation flag
    }
}

class FakeOriginationPermit extends OriginationPermit
{
    public function __construct(PermitNotice $notice)
    {
        parent::__construct($notice);
    }
}