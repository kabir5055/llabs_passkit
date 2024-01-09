<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Responses;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Passes\EventTicketClass;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class EventTicketClassesResponse extends Component
{
    use HasPagination;

    #[CastWith(ArrayCaster::class, EventTicketClass::class)]
    public array $resources = [];
}
