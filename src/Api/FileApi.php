<?php

namespace EmploybrandApply\Api;


use EmploybrandApply\Entity\FileEntity;


class FileApi extends AbstractApi
{

    /**
     * Get files with pagination
     *
     * @return ApiPaginator
     */
    public function list(): ApiPaginator
    {
        return new ApiPaginator($this->client, 'files', FileEntity::class);
    }


    /**
     * Upload a file
     *
     * @param array|object $data
     * @return FileEntity
     */
    public function upload($data): FileEntity
    {
        return new FileEntity($this->postRequest('files', $data));
    }


}
