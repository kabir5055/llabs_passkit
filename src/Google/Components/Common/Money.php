<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;

class Money extends Component
{
    /**
     * Required.
     * The unit of money amount in micros. For example, $1 USD would be represented as 1000000 micros.
     */
    #[Required]
    public ?string $micros;

    /**
     * Required.
     * The currency code, such as "USD" or "EUR.".
     */
    #[Required]
    public ?string $currencyCode;
}
