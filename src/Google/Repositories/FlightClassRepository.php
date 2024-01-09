<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Repositories;

use Luminouslabs\PassesKit\Google\Passes\FlightClass;
use Luminouslabs\PassesKit\Google\Responses\FlightClassesResponse;

/**
 * @method FlightClassesResponse index(string $issuerId, array $parameters = [])
 * @method FlightClass get(string $id)
 * @method FlightClass create(FlightClass $instance)
 * @method FlightClass update(FlightClass $instance)
 */
class FlightClassRepository extends ClassRepository
{
    /**
     * {@inheritDoc}
     */
    protected function getIdentifier(): string
    {
        return FlightClass::IDENTIFIER;
    }

    /**
     * {@inheritDoc}
     */
    protected function getResponseClass(): string
    {
        return FlightClassesResponse::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function getInstanceClass(): string
    {
        return FlightClass::class;
    }
}
