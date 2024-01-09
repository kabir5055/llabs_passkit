<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Loyalty;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\ValueIn;
use Luminouslabs\PassesKit\Google\Components\Common\Uri;
use Luminouslabs\PassesKit\Google\Enumerators\Loyalty\SharedDataType;

class DiscoverableProgramMerchantSignupInfo extends Component
{
    /**
     * Optional.
     * The URL to direct the user to for the merchant's signup site.
     */
    public ?Uri $signupWebsite;

    /**
     * Optional.
     * User data that is sent in a POST request to the signup website URL. This information is encoded and
     * then shared so that the merchant's website can prefill fields used to enroll the user for the
     * discoverable program.
     */
    #[ValueIn([
        SharedDataType::SHARED_DATA_TYPE_UNSPECIFIED,
        SharedDataType::FIRST_NAME,
        SharedDataType::LAST_NAME,
        SharedDataType::STREET_ADDRESS,
        SharedDataType::ADDRESS_LINE_1,
        SharedDataType::ADDRESS_LINE_2,
        SharedDataType::ADDRESS_LINE_3,
        SharedDataType::CITY,
        SharedDataType::STATE,
        SharedDataType::ZIPCODE,
        SharedDataType::COUNTRY,
        SharedDataType::EMAIL,
        SharedDataType::PHONE,
    ])]
    public array $signupSharedDatas = [];
}
