<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Repositories;

use Luminouslabs\PassesKit\Google\Passes\EventTicketClass;
use Luminouslabs\PassesKit\Google\Responses\EventTicketClassesResponse;

/**
 * @method EventTicketClassesResponse index(string $issuerId, array $parameters = [])
 * @method EventTicketClass get(string $id)
 * @method EventTicketClass create(EventTicketClass $instance)
 * @method EventTicketClass update(EventTicketClass $instance)
 */
class EventTicketClassRepository extends ClassRepository
{
    /**
     * {@inheritDoc}
     */
    protected function getIdentifier(): string
    {
        return EventTicketClass::IDENTIFIER;
    }

    /**
     * {@inheritDoc}
     */
    protected function getResponseClass(): string
    {
        return EventTicketClassesResponse::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function getInstanceClass(): string
    {
        return EventTicketClass::class;
    }
}
