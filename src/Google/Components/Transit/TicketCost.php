<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Transit;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Google\Components\Common\LocalizedString;
use Luminouslabs\PassesKit\Google\Components\Common\Money;

class TicketCost extends Component
{
    /**
     * Optional.
     * The face value of the ticket.
     */
    public ?Money $faceValue;

    /**
     * Optional.
     * The actual purchase price of the ticket, after tax and/or discounts.
     */
    public ?Money $purchasePrice;

    /**
     * Optional.
     * A message describing any kind of discount that was applied.
     */
    public ?LocalizedString $discountMessage;
}
