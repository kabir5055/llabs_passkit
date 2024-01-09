<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Responses;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Passes\FlightObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class FlightObjectsResponse extends Component
{
    use HasPagination;

    #[CastWith(ArrayCaster::class, FlightObject::class)]
    public array $resources = [];
}
