<?php

namespace spec\Kola\Api\Emoji\DbTable;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmojiSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Kola\Api\Emoji\DbTable\Emoji');
    }
}
