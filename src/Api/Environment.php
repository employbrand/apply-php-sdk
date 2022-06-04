<?php

namespace EmploybrandApply\Api;


use EmploybrandApply\Entity\Environment as EnvironmentEntity;


class Environment extends AbstractApi
{

    /**
     * Get respondents with pagination
     *
     * @return ApiPaginator
     */
    public function list(): ApiPaginator
    {
        return new ApiPaginator($this->client, 'environments', EnvironmentEntity::class);
    }


    /**
     * Get a respondent by id
     *
     * @param $id
     * @return EnvironmentEntity
     */
    public function getById($id): EnvironmentEntity
    {
        return new EnvironmentEntity($this->getRequest('environments/' . $id));
    }


}
