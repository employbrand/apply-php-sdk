<?php

namespace EmploybrandApply\Entity;


class Webhook extends AbstractEntity
{

    public ?int $id = null;

    public ?string $name = null;

    public string $type = 'all';

    public ?string $url = null;

}
