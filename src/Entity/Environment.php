<?php

namespace EmploybrandApply\Entity;


class Environment extends AbstractEntity
{

    public ?int $id = null;

    public ?string $name = null;

    public ?string $email = null;

    public ?bool $isMain = false;

    public ?string $updatedAt = null;

    public ?string $createdAt = null;

}
