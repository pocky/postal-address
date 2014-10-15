<?php

namespace spec\Black\Component\PostalAddress\Domain\Model;

use Address\Country;
use Address\Street;
use Black\Component\PostalAddress\Domain\Model\PostalAddress;
use Address\PostalAddress as Address;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PostalAddressSpec extends ObjectBehavior
{
    function let()
    {
        $country = Country::buildFromISOCode("US");
        $street  = new Street(1600, "Amphitheatre Pkwy");
        $address = new Address(
            $street,
            "94043",
            "Mountain View",
            "CA",
            "",
            $country
        );

        $postalAddress = new PostalAddress(
            "test",
            "pro",
            $address
        );

        $this->beConstructedWith(
            $postalAddress->getName(),
            $postalAddress->getContactType(),
            $address
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\PostalAddress\Domain\Model\PostalAddress');
        $this->shouldImplement('Black\DDD\DDDinPHP\Domain\Model\Entity');
    }

    function it_should_have_a_name()
    {
        $this->getName()->shouldReturn("test");
        $this->getName()->shouldBeString();
    }

    function it_should_have_a_contact_type()
    {
        $this->getContactType()->shouldReturn("pro");
        $this->getContactType()->shouldBeString();
    }

    function it_should_have_an_address()
    {
        $this->getAddress()->getValue()->shouldBeArray();
    }
}
