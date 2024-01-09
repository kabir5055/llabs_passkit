<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Loyalty;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\MaxLength;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Luminouslabs\PassesKit\Google\Components\Common\LocalizedString;

class LoyaltyPoints extends Component
{
    /**
     * Optional.
     * The loyalty points label, such as "Points". Recommended maximum length is 9 characters.
     */
    #[MaxLength(9)]
    public ?string $label;

    /**
     * Required.
     * The account holder's loyalty point balance. This is a required field of loyaltyPoints and
     * secondaryLoyaltyPoints.
     */
    #[Required]
    public ?LoyaltyPointsBalance $balance;

    /**
     * Optional.
     * Translated strings for the label. Recommended maximum length is 9 characters.
     */
    public ?LocalizedString $localizedLabel;
}
