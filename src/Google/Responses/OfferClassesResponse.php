<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Responses;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Passes\OfferClass;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class OfferClassesResponse extends Component
{
    use HasPagination;

    #[CastWith(ArrayCaster::class, OfferClass::class)]
    public array $resources = [];
}
