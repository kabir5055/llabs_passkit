<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Responses;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Passes\GiftCardClass;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class GiftCardClassesResponse extends Component
{
    use HasPagination;

    #[CastWith(ArrayCaster::class, GiftCardClass::class)]
    public array $resources = [];
}
