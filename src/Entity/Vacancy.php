<?php

namespace EmploybrandApply\Entity;


class Vacancy extends AbstractEntity
{

    public ?int $id = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?string $phone = null;

    public ?string $email = null;

    public bool $signedOff = false;

    public bool $personalDataAllowed = false;

    public ?string $type = null;

    public ?int $environmentId = null;

    public ?string $candidateSince = null;

    public ?string $candidateRejectedAt = null;

    public ?string $candidateInterviewedAt = null;

    public ?string $candidateAcceptedAt = null;

    public ?string $employeeSince = null;

    public ?string $employeeFunctionSince = null;

    public ?string $formerEmployeeSince = null;

    public ?string $personalDataAllowedAt = null;

    public ?string $signedOffAt = null;

    public bool $inactive = false;

    public ?string $inactiveSince = null;

    public ?string $expectedDeletionDate = null;

    public ?string $updatedAt = null;

    public ?string $createdAt = null;

    public array $data = [];

}
