<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Responses;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Passes\TransitClass;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class TransitClassesResponse extends Component
{
    use HasPagination;

    #[CastWith(ArrayCaster::class, TransitClass::class)]
    public array $resources = [];
}
