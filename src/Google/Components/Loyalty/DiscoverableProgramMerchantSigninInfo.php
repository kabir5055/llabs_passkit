<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Loyalty;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Luminouslabs\PassesKit\Google\Components\Common\Uri;

class DiscoverableProgramMerchantSigninInfo extends Component
{
    /**
     * Required.
     * The URL to direct the user to for the merchant's signin site.
     */
    #[Required]
    public ?Uri $signinWebsite;
}
