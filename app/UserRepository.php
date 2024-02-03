<?php

declare(strict_types=1);

namespace App;

use Distantmagic\Resonance\Attribute\Singleton;
use Distantmagic\Resonance\UserInterface;
use Distantmagic\Resonance\UserRepositoryInterface;
use Swoole\Http\Request;

#[Singleton(provides: UserRepositoryInterface::class)]
readonly class UserRepository implements UserRepositoryInterface
{
    public function findUserById(int|string $userId): ?UserInterface
    {
        return null;
    }
}
