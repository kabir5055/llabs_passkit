<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;

class ImageUri extends Component
{
    #[Required]
    public ?string $uri;
}
