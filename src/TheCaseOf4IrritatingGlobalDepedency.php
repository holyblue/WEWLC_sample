<?php

namespace APP;

class Facility
{
    private Permit $basePermit;
    
    public function __construct(int $facilityCode, string $owner, PermitNotice $notice)
    {
        $PermitRepository = getPermitRepository();
        $associatedPermit = $PermitRepository->findAssociatedPermit($notice);
        
        if ($associatedPermit->isValid() && !$notice->isValid()) {
            $basePermit = $associatedPermit;
        } elseif (!$notice->isValid()) {
            $permit = new Permit($notice);
            $permit->validate();
            $basePermit = $permit;
        }
    }
}

class Permit
{
    public function __construct(PermitNotice $notice)
    {
    }

    public function isValid()
    {
        return true;
    }

    public function validate()
    {
    }
}

class PermitNotice
{

    public function isValid()
    {
        return true;
    }
}

class PermitRepository
{
    public function findAssociatedPermit(PermitNotice $notice)
    {
        return new Permit();
    }
}

function getPermitRepository()
{
    return new PermitRepository();
}