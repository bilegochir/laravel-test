<?php

namespace App\JsonApi\Tasks;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{
    protected $resourceType = 'tasks';

    public function getId($resource)
    {
        return (string) $resource->getRouteKey();
    }

    public function getAttributes($resource)
    {
        return [
            'title' => $resource->title,
            'description' => $resource->description,
            'created-at' => $resource->created_at->toAtomString(),
            'updated-at' => $resource->updated_at->toAtomString(),
        ];
    }
}
