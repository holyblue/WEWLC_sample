<?php
namespace APP;

class IndustrialFacility extends Facility
{
    private $basePermit;

    public function __construct(int $facilityCode, string $owner, OriginationPermit $permit)
    {
        $PermitRepository = getPermitRepository();
        $associatedPermit = $PermitRepository->findAssociatedPermit($permit);

        if ($associatedPermit->isValid() && !$permit->isValid()) {
            $this->basePermit = $associatedPermit;
        } elseif (!$permit->isValid()) {
            $permit->validate();
            $this->basePermit = $permit;
        } else {
            // ...
        }

    }

    public function hasPermits()
    {
    }
}

class OriginationPermit extends FacilityPermit
{
    public function isValid()
    {
        return true;
    }

    public function validate()
    {
        // from connection to database
        // query for validation information
        // set the validation flag
        // close database
    }
}

class FacilityPermit extends Permit
{

}
