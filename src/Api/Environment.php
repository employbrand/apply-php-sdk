<?php

namespace EmploybrandApply\Api;


use EmploybrandApply\Entity\Vacancy as RespondentEntity;


class Environment extends AbstractApi
{

    /**
     * Get respondents with pagination
     *
     * @return ApiPaginator
     */
    public function list(): ApiPaginator
    {
        return new ApiPaginator($this->client, 'environments', RespondentEntity::class);
    }


    /**
     * Get a respondent by id
     *
     * @param $id
     * @return RespondentEntity
     */
    public function getById($id): RespondentEntity
    {
        return new RespondentEntity($this->getRequest('environments/' . $id));
    }


}
