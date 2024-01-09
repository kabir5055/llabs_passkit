<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\EventTicket;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;

class EventReservationInfo extends Component
{
    /**
     * Required.
     * The confirmation code of the event reservation. This may also take the form of an "order number",
     * "confirmation number", "reservation number", or other equivalent.
     */
    #[Required]
    public ?string $confirmationCode;
}
