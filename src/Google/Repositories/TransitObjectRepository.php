<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Repositories;

use Luminouslabs\PassesKit\Google\Passes\TransitObject;
use Luminouslabs\PassesKit\Google\Responses\TransitObjectsResponse;

/**
 * @method TransitObjectsResponse index(string $classId, array $parameters = [])
 * @method TransitObject get(string $id)
 * @method TransitObject create(TransitObject $instance)
 * @method TransitObject update(TransitObject $instance)
 */
class TransitObjectRepository extends ObjectRepository
{
    /**
     * {@inheritDoc}
     */
    protected function getIdentifier(): string
    {
        return TransitObject::IDENTIFIER;
    }

    /**
     * {@inheritDoc}
     */
    protected function getResponseClass(): string
    {
        return TransitObjectsResponse::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function getInstanceClass(): string
    {
        return TransitObject::class;
    }
}
