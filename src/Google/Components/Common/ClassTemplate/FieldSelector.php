<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common\ClassTemplate;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\MinItems;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class FieldSelector extends Component
{
    /**
     * Required.
     * If more than one reference is supplied, then the first one that references a non-empty field will be displayed.
     *
     * @var FieldReference[]
     */
    #[CastWith(ArrayCaster::class, FieldReference::class)]
    #[Required]
    #[MinItems(1)]
    public array $fields = [];
}
