<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Repositories;

use Luminouslabs\PassesKit\Google\Passes\LoyaltyObject;
use Luminouslabs\PassesKit\Google\Responses\LoyaltyObjectsResponse;

/**
 * @method LoyaltyObjectsResponse index(string $classId, array $parameters = [])
 * @method LoyaltyObject get(string $id)
 * @method LoyaltyObject create(LoyaltyObject $instance)
 * @method LoyaltyObject update(LoyaltyObject $instance)
 */
class LoyaltyObjectRepository extends ObjectRepository
{
    /**
     * {@inheritDoc}
     */
    protected function getIdentifier(): string
    {
        return LoyaltyObject::IDENTIFIER;
    }

    /**
     * {@inheritDoc}
     */
    protected function getResponseClass(): string
    {
        return LoyaltyObjectsResponse::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function getInstanceClass(): string
    {
        return LoyaltyObject::class;
    }
}
