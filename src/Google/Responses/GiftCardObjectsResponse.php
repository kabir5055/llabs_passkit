<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Responses;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Passes\GiftCardObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class GiftCardObjectsResponse extends Component
{
    use HasPagination;

    #[CastWith(ArrayCaster::class, GiftCardObject::class)]
    public array $resources = [];
}
