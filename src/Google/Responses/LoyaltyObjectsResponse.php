<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Responses;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Passes\LoyaltyObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class LoyaltyObjectsResponse extends Component
{
    use HasPagination;

    #[CastWith(ArrayCaster::class, LoyaltyObject::class)]
    public array $resources = [];
}
