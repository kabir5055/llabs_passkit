<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Transit;

use Luminouslabs\PassesKit\Common\Component;

class PurchaseDetails extends Component
{
    /**
     * Optional.
     * Receipt number/identifier for tracking the ticket purchase via the body that sold the ticket.
     */
    public ?string $purchaseReceiptNumber;

    /**
     * Optional.
     * The purchase date/time of the ticket.
     */
    public ?string $purchaseDateTime;

    /**
     * Optional.
     * ID of the account used to purchase the ticket.
     */
    public ?string $accountId;

    /**
     * Optional.
     * The confirmation code for the purchase. This may be the same for multiple different tickets and is
     * used to group tickets together.
     */
    public ?string $confirmationCode;

    /**
     * Optional.
     * The cost of the ticket.
     */
    public ?TicketCost $ticketCost;
}
