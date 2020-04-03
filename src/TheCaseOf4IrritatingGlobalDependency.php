<?php

namespace APP;

class Facility
{
    private Permit $basePermit;
    
    public function __construct(int $facilityCode, string $owner, PermitNotice $notice)
    {
        $associatedPermit = PermitRepository::getInstance()->findAssociatedPermit($notice);
        
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
    private static PermitRepository $instance;

    /**
     * never call this function on production code
     * @param PermitRepository $newInstance
     */
    public static function setTestingInstance(PermitRepository $newInstance)
    {
        self::$instance = $newInstance;
    }

    /**
     * alternative solution
     */
    public function resetRepository()
    {
        reset(self::$instance);
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new PermitRepository();
        }

        return self::$instance;
    }

    public function findAssociatedPermit(PermitNotice $notice)
    {
        return new Permit();
    }
}