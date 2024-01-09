<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Generic;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;

abstract class AbstractNotificationValue extends Component
{
    /**
     * Required.
     * Indicates that the issuer would like GooglePay to send notifications.
     */
    #[Required]
    public ?bool $enableNotification;
}
