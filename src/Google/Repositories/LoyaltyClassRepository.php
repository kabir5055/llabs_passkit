<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Repositories;

use Luminouslabs\PassesKit\Google\Passes\LoyaltyClass;
use Luminouslabs\PassesKit\Google\Responses\LoyaltyClassesResponse;

/**
 * @method LoyaltyClassesResponse index(string $issuerId, array $parameters = [])
 * @method LoyaltyClass get(string $id)
 * @method LoyaltyClass create(LoyaltyClass $instance)
 * @method LoyaltyClass update(LoyaltyClass $instance)
 */
class LoyaltyClassRepository extends ClassRepository
{
    /**
     * {@inheritDoc}
     */
    protected function getIdentifier(): string
    {
        return LoyaltyClass::IDENTIFIER;
    }

    /**
     * {@inheritDoc}
     */
    protected function getResponseClass(): string
    {
        return LoyaltyClassesResponse::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function getInstanceClass(): string
    {
        return LoyaltyClass::class;
    }
}
