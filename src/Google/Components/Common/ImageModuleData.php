<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;

class ImageModuleData extends Component
{
    /**
     * Required.
     * A 100% width image.
     */
    #[Required]
    public ?Image $mainImage;

    /**
     * Optional.
     * The ID associated with an image module. This field is here to enable ease of management of image modules.
     */
    public ?string $id;
}
