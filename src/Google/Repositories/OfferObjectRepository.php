<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Repositories;

use Luminouslabs\PassesKit\Google\Passes\OfferObject;
use Luminouslabs\PassesKit\Google\Responses\OfferObjectsResponse;

/**
 * @method OfferObjectsResponse index(string $classId, array $parameters = [])
 * @method OfferObject get(string $id)
 * @method OfferObject create(OfferObject $instance)
 * @method OfferObject update(OfferObject $instance)
 */
class OfferObjectRepository extends ObjectRepository
{
    /**
     * {@inheritDoc}
     */
    protected function getIdentifier(): string
    {
        return OfferObject::IDENTIFIER;
    }

    /**
     * {@inheritDoc}
     */
    protected function getResponseClass(): string
    {
        return OfferObjectsResponse::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function getInstanceClass(): string
    {
        return OfferObject::class;
    }
}
