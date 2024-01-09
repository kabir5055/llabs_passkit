<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Repositories;

use Luminouslabs\PassesKit\Google\Passes\TransitClass;
use Luminouslabs\PassesKit\Google\Responses\TransitClassesResponse;

/**
 * @method TransitClassesResponse index(string $issuerId, array $parameters = [])
 * @method TransitClass get(string $id)
 * @method TransitClass create(TransitClass $instance)
 * @method TransitClass update(TransitClass $instance)
 */
class TransitClassRepository extends ClassRepository
{
    /**
     * {@inheritDoc}
     */
    protected function getIdentifier(): string
    {
        return TransitClass::IDENTIFIER;
    }

    /**
     * {@inheritDoc}
     */
    protected function getResponseClass(): string
    {
        return TransitClassesResponse::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function getInstanceClass(): string
    {
        return TransitClass::class;
    }
}
