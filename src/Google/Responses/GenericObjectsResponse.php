<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Responses;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Passes\GenericObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class GenericObjectsResponse extends Component
{
    use HasPagination;

    #[CastWith(ArrayCaster::class, GenericObject::class)]
    public array $resources = [];
}
