<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Responses;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Passes\EventTicketObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class EventTicketObjectsResponse extends Component
{
    use HasPagination;

    #[CastWith(ArrayCaster::class, EventTicketObject::class)]
    public array $resources = [];
}
