<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Luminouslabs\PassesKit\Common\Validation\ValueIn;
use Luminouslabs\PassesKit\Google\Enumerators\TotpAlgorithm;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class TotpDetails extends Component
{
    /**
     * Required.
     * The time interval used for the TOTP value generation, in milliseconds.
     */
    #[Required]
    public ?string $periodMillis;

    /**
     * Required.
     * The TOTP algorithm used to generate the OTP.
     */
    #[Required]
    #[ValueIn([TotpAlgorithm::TOTP_ALGORITHM_UNSPECIFIED, TotpAlgorithm::TOTP_SHA1])]
    public ?string $algorithm;

    /**
     * Required.
     * The TOTP parameters for each of the {totp_value_*} substitutions.
     * The TotpParameters at index n is used for the {totp_value_n} substitution.
     */
    #[Required]
    #[CastWith(ArrayCaster::class, TotpParameters::class)]
    public ?array $parameters;
}
