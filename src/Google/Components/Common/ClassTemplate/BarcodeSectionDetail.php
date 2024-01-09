<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common\ClassTemplate;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;

class BarcodeSectionDetail extends Component
{
    /**
     * Required.
     * A reference to an existing text-based or image field to display.
     */
    #[Required]
    public ?FieldSelector $fieldSelector;
}
