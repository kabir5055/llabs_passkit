<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Repositories;

use Luminouslabs\PassesKit\Google\Passes\FlightObject;
use Luminouslabs\PassesKit\Google\Responses\FlightObjectsResponse;

/**
 * @method FlightObjectsResponse index(string $classId, array $parameters = [])
 * @method FlightObject get(string $id)
 * @method FlightObject create(FlightObject $instance)
 * @method FlightObject update(FlightObject $instance)
 */
class FlightObjectRepository extends ObjectRepository
{
    /**
     * {@inheritDoc}
     */
    protected function getIdentifier(): string
    {
        return FlightObject::IDENTIFIER;
    }

    /**
     * {@inheritDoc}
     */
    protected function getResponseClass(): string
    {
        return FlightObjectsResponse::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function getInstanceClass(): string
    {
        return FlightObject::class;
    }
}
