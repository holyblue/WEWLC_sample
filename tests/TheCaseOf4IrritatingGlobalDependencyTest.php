<?php

use APP\Facility;
use APP\PermitNotice;
use APP\PermitRepository;
use PHPUnit\Framework\TestCase;

class FacilityTest extends TestCase
{
    /**
     * Before a test method is run, this method is invoked
     */
    protected function setUp(): void
    {
        $testingRepository = new PermitRepository();
        PermitRepository::setTestingInstance($testingRepository);
    }

    public function testCreate()
    {
        $facilityCode = 1;
        $owner = 'owner';
        $permitNotice = new PermitNotice();
        $facility = new Facility($facilityCode, $owner, $permitNotice);

    }
}