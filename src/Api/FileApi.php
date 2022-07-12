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
    public function upload($fileName, $fileMime, $fileContent, $data): FileEntity
    {
        $response = $this->client->makeAPICall($this->baseUri . 'files', 'POST', [
            'multipart' => [
                [
                    'name' => 'file',
                    'filename' => $fileName,
                    'Mime-Type' => $fileMime,
                    'contents' => $fileContent,
                ],
                [
                    'name' => 'form-data',
                    'contents' => json_encode(
                        $data
                    )
                ]
            ]
        ]);

        return new FileEntity($response);
    }


}
