<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Responses;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Passes\GenericClass;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class GenericClassesResponse extends Component
{
    use HasPagination;

    #[CastWith(ArrayCaster::class, GenericClass::class)]
    public array $resources = [];
}
