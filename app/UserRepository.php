<?php

declare(strict_types=1);

namespace App;

use Distantmagic\Resonance\Attribute\Singleton;
use Distantmagic\Resonance\DatabaseConnectionPoolRepository;
use Distantmagic\Resonance\UserInterface;
use Distantmagic\Resonance\UserRepositoryInterface;
use LogicException;

#[Singleton(provides: UserRepositoryInterface::class)]
readonly class UserRepository implements UserRepositoryInterface
{
    public function __construct(
        private DatabaseConnectionPoolRepository $databaseConnectionPoolRepository,
    ) {}

    public function findUserById(int|string $userId): ?UserInterface
    {
        return null;
    }
}
