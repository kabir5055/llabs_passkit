<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Passes;

use Luminouslabs\PassesKit\Common\Casters\LegacyValueCaster;
use Luminouslabs\PassesKit\Common\Validation\HexColor;
use Luminouslabs\PassesKit\Common\Validation\MaxItems;
use Luminouslabs\PassesKit\Common\Validation\MaxLength;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Luminouslabs\PassesKit\Common\Validation\ValueIn;
use Luminouslabs\PassesKit\Google\Components\Common\Image;
use Luminouslabs\PassesKit\Google\Components\Common\LatLongPoint;
use Luminouslabs\PassesKit\Google\Components\Common\LocalizedString;
use Luminouslabs\PassesKit\Google\Components\Common\Message;
use Luminouslabs\PassesKit\Google\Components\Common\Review;
use Luminouslabs\PassesKit\Google\Components\Common\Uri;
use Luminouslabs\PassesKit\Google\Enumerators\ReviewStatus;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

abstract class BaseClass extends AbstractClass
{
    /**
     * Required.
     * The issuer name. Recommended maximum length is 20 characters to ensure full string is displayed on
     * smaller screens.
     */
    #[Required]
    #[MaxLength(20)]
    public ?string $issuerName;

    /**
     * Optional.
     * An array of messages displayed in the app. All users of this object will receive its associated messages.
     * The maximum number of these fields is 10.
     *
     * @var Message[]
     */
    #[CastWith(ArrayCaster::class, Message::class)]
    #[MaxItems(10)]
    public array $messages = [];

    /**
     * Optional.
     * The URI of your application's home page.
     */
    public ?Uri $homepageUri;

    /**
     * Optional.
     * List of locations.
     *
     * @var LatLongPoint[]
     */
    #[CastWith(ArrayCaster::class, LatLongPoint::class)]
    #[MaxItems(20)]
    public array $locations = [];

    /**
     * Required.
     * The status of the class.
     */
    #[Required]
    #[ValueIn([
        ReviewStatus::REVIEW_STATUS_UNSPECIFIED,
        ReviewStatus::UNDER_REVIEW,
        ReviewStatus::APPROVED,
        ReviewStatus::REJECTED,
        ReviewStatus::DRAFT,
    ])]
    #[CastWith(LegacyValueCaster::class, ReviewStatus::class)]
    public ?string $reviewStatus;

    /**
     * Optional.
     * The review comments set by the platform when a class is marked approved or rejected.
     */
    public ?Review $review;

    /**
     * Optional.
     * Country code used to display the card's country (when the user is not in that country), as well
     * as to display localized content when content is not available in the user's locale.
     */
    public ?string $countryCode;

    /**
     * Optional.
     * Optional banner image displayed on the front of the card. If none is present, nothing will be displayed.
     * The image will display at 100% width.
     */
    public ?Image $heroImage;

    /**
     * Optional.
     * The background color for the card. If not set the dominant color of the hero image is used, and if no hero
     * image is set, the dominant color of the logo is used. The format is #rrggbb where rrggbb is a hex RGB triplet,
     * such as #ffcc00. You can also use the shorthand version of the RGB triplet which is #rgb, such as #fc0.
     */
    #[HexColor]
    public ?string $hexBackgroundColor;

    /**
     * Optional.
     * Translated strings for the issuerName. Recommended maximum length is 20 characters to ensure full string
     * is displayed on smaller screens.
     */
    public ?LocalizedString $localizedIssuerName;
}
