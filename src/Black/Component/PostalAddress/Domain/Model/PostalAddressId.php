<?php

namespace Black\Component\PostalAddress\Domain\Model;

use Black\DDD\DDDinPHP\Domain\Model\ValueObject;

/**
 * Class PostalAddressId
 *
 * @author Alexandre Balmes <${COPYRIGHT_NAME}>
 * @license ${COPYRIGHT_LICENCE}
 */
class PostalAddressId implements ValueObject
{
    /**
     * @var string
     */
    private $value;

    /**
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = (string) $value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf("%s", $this->getValue());
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param PostalAddressId $postalAddressId
     * @return bool
     */
    public function isEqualTo(PostalAddressId $postalAddressId)
    {
        return $this->getValue() === $postalAddressId->getValue();
    }
}
