<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Responses;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Passes\OfferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class OfferObjectsResponse extends Component
{
    use HasPagination;

    #[CastWith(ArrayCaster::class, OfferObject::class)]
    public array $resources = [];
}
