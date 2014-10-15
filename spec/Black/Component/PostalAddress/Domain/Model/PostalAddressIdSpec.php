<?php

namespace spec\Black\Component\PostalAddress\Domain\Model;

use Black\Component\PostalAddress\Domain\Model\PostalAddressId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PostalAddressIdSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\PostalAddress\Domain\Model\PostalAddressId');
        $this->shouldImplement('Black\DDD\DDDinPHP\Domain\Model\ValueObject');
    }

    function let()
    {
        $this->beConstructedWith(1234);
    }

    function it_should_have_a_to_string()
    {
        $this->__toString()->shouldReturn("1234");
    }

    function it_should_have_a_value()
    {
        $this->getValue()->shouldReturn("1234");
    }

    function it_should_be_equal()
    {
        $id = new PostalAddressId('1234');

        $this->isEqualTo($id)->shouldReturn(true);
    }
}
