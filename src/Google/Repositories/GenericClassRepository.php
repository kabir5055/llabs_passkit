<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Repositories;

use Luminouslabs\PassesKit\Google\Passes\GenericClass;
use Luminouslabs\PassesKit\Google\Responses\GenericClassesResponse;

/**
 * @method GenericClassesResponse index(string $issuerId, array $parameters = [])
 * @method GenericClass get(string $id)
 * @method GenericClass create(GenericClass $instance)
 * @method GenericClass update(GenericClass $instance)
 */
class GenericClassRepository extends ClassRepository
{
    /**
     * {@inheritDoc}
     */
    protected function getIdentifier(): string
    {
        return GenericClass::IDENTIFIER;
    }

    /**
     * {@inheritDoc}
     */
    protected function getResponseClass(): string
    {
        return GenericClassesResponse::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function getInstanceClass(): string
    {
        return GenericClass::class;
    }
}
