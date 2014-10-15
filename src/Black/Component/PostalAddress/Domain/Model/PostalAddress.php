<?php

namespace Black\Component\PostalAddress\Domain\Model;

use Black\DDD\DDDinPHP\Domain\Model\Entity;
use Address\PostalAddress as Address;

class PostalAddress implements Entity
{
    /**
     * @var
     */
    protected $name;

    /**
     * @var
     */
    protected $contactType;

    /**
     * @var Address
     */
    protected $address;

    /**
     * @param $name
     * @param $contactType
     * @param Address $address
     */
    public function __construct($name, $contactType, Address $address)
    {
        $this->name        = $name;
        $this->contactType = $contactType;
        $this->address     = $address;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }
}
