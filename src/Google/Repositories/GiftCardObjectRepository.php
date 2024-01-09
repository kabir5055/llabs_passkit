<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Repositories;

use Luminouslabs\PassesKit\Google\Passes\GiftCardObject;
use Luminouslabs\PassesKit\Google\Responses\GiftCardObjectsResponse;

/**
 * @method GiftCardObjectsResponse index(string $classId, array $parameters = [])
 * @method GiftCardObject get(string $id)
 * @method GiftCardObject create(GiftCardObject $instance)
 * @method GiftCardObject update(GiftCardObject $instance)
 */
class GiftCardObjectRepository extends ObjectRepository
{
    /**
     * {@inheritDoc}
     */
    protected function getIdentifier(): string
    {
        return GiftCardObject::IDENTIFIER;
    }

    /**
     * {@inheritDoc}
     */
    protected function getResponseClass(): string
    {
        return GiftCardObjectsResponse::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function getInstanceClass(): string
    {
        return GiftCardObject::class;
    }
}
