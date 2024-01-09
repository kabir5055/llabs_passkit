<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;

class TranslatedString extends Component
{
    /**
     * Required.
     * Represents the BCP 47 language tag. Example values are "en-US", "en-GB", "de", or "de-AT".
     */
    #[Required]
    public ?string $language;

    /**
     * Required.
     * The UTF-8 encoded translated string.
     */
    #[Required]
    public ?string $value;
}
