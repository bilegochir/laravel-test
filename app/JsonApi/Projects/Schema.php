<?php

namespace App\JsonApi\Projects;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{
    protected $resourceType = 'projects';

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

    public function getRelationships($project, $isPrimary, array $includeRelationships)
    {
        return [
            'tasks' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
            ],
        ];
    }
}
