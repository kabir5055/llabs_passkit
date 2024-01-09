<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Responses;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Passes\FlightClass;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class FlightClassesResponse extends Component
{
    use HasPagination;

    #[CastWith(ArrayCaster::class, FlightClass::class)]
    public array $resources = [];
}
