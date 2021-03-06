<?php

declare(strict_types=1);

namespace Boomtown\Contracts;

// @@@SNIPSTART php-hello-two-activity-interface
use Temporal\Activity\ActivityInterface;
use Temporal\Activity\ActivityMethod;

#[ActivityInterface(prefix:"HelloTwo.")]
interface HelloTwoActivityInterface
{
    public function composeGreeting(): string;
}
// @@@SNIPEND
