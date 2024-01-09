<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Transit;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Components\Common\LocalizedString;

class TicketRestrictions extends Component
{
    /**
     * Optional.
     * Restrictions about routes that may be taken. For example, this may be the string
     * "Reserved CrossCountry trains only".
     */
    public ?LocalizedString $routeRestrictions;

    /**
     * Optional.
     * More details about the above routeRestrictions.
     */
    public ?LocalizedString $routeRestrictionsDetails;

    /**
     * Optional.
     * Restrictions about times this ticket may be used.
     */
    public ?LocalizedString $timeRestrictions;

    /**
     * Optional.
     * Extra restrictions that don't fall under the "route" or "time" categories.
     */
    public LocalizedString $otherRestrictions;
}
