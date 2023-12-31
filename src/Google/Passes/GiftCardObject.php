<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Passes;

use Luminouslabs\PassesKit\Common\Validation\Required;
use Luminouslabs\PassesKit\Google\Components\Common\DateTime;
use Luminouslabs\PassesKit\Google\Components\Common\Money;

class GiftCardObject extends BaseObject
{
    /** @var string */
    final public const IDENTIFIER = 'giftCardObject';

    /**
     * Optional.
     * A copy of the inherited fields of the parent class. These fields are retrieved during a GET.
     */
    public ?GiftCardClass $classReference;

    /**
     * Required.
     * The card's number.
     */
    #[Required]
    public ?string $cardNumber;

    /**
     * Optional.
     * The card's PIN.
     */
    public ?string $pin;

    /**
     * Optional.
     * The card's monetary balance.
     */
    public ?Money $balance;

    /**
     * Optional.
     * The date and time when the balance was last updated.
     */
    public ?DateTime $balanceUpdateTime;

    /**
     * Optional.
     * The card's event number, an optional field used by some gift cards.
     */
    public ?string $eventNumber;
}
