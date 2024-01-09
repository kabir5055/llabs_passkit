<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Luminouslabs\PassesKit\Common\Validation\ValueIn;
use Luminouslabs\PassesKit\Google\Enumerators\AnimationType;

class SecurityAnimation extends Component
{
    /**
     * Required.
     * Type of animation.
     */
    #[Required]
    #[ValueIn([AnimationType::ANIMATION_UNSPECIFIED, AnimationType::FOIL_SHIMMER])]
    public ?string $animationType;
}
