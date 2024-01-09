<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common\ClassTemplate;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class DetailsTemplateOverride extends Component
{
    /**
     * Required.
     * Information for the "nth" item displayed in the details list.
     *
     * @var FieldReference[]
     */
    #[CastWith(ArrayCaster::class, DetailsItemInfo::class)]
    #[Required]
    public array $detailsItemInfos = [];
}
