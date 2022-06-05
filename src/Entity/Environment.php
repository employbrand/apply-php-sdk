<?php

namespace EmploybrandApply\Entity;


class Environment extends AbstractEntity
{

    public ?int $id = null;

    public ?string $name = null;

    public ?string $email = null;

    public ?bool $isMain = false;

    public ?string $version = null;

    public ?int $usersCount = null;

    public ?int $invitesCount = null;

    public ?EnvironmentType $environmentType = null;

    public ?string $updatedAt = null;

    public ?string $createdAt = null;


    public function build(array $parameters): void
    {
        parent::build($parameters);

        $this->environmentType = new EnvironmentType($parameters[ 'environment_types' ]);
    }

}
