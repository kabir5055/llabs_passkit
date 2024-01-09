<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Responses;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Passes\TransitObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class TransitObjectsResponse extends Component
{
    use HasPagination;

    #[CastWith(ArrayCaster::class, TransitObject::class)]
    public array $resources = [];
}
