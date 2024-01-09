<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common\ClassTemplate;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\MaxItems;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class CardTemplateOverride extends Component
{
    /**
     * Required.
     *
     * @var FieldReference[]
     */
    #[CastWith(ArrayCaster::class, CardRowTemplateInfo::class)]
    #[Required]
    #[MaxItems(20)]
    public array $cardRowTemplateInfos = [];
}
