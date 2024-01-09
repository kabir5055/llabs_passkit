<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Repositories;

use Luminouslabs\PassesKit\Google\Passes\EventTicketObject;
use Luminouslabs\PassesKit\Google\Responses\EventTicketObjectsResponse;

/**
 * @method EventTicketObjectsResponse index(string $classId, array $parameters = [])
 * @method EventTicketObject get(string $id)
 * @method EventTicketObject create(EventTicketObject $instance)
 * @method EventTicketObject update(EventTicketObject $instance)
 */
class EventTicketObjectRepository extends ObjectRepository
{
    /**
     * {@inheritDoc}
     */
    protected function getIdentifier(): string
    {
        return EventTicketObject::IDENTIFIER;
    }

    /**
     * {@inheritDoc}
     */
    protected function getResponseClass(): string
    {
        return EventTicketObjectsResponse::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function getInstanceClass(): string
    {
        return EventTicketObject::class;
    }
}
