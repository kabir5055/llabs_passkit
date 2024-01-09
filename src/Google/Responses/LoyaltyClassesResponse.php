<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Responses;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Passes\LoyaltyClass;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class LoyaltyClassesResponse extends Component
{
    use HasPagination;

    #[CastWith(ArrayCaster::class, LoyaltyClass::class)]
    public array $resources = [];
}
