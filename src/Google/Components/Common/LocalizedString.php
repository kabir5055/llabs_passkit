<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class LocalizedString extends Component
{
    /**
     * Optional.
     * Contains the translations for the string.
     *
     * @var TranslatedString[]
     */
    #[CastWith(ArrayCaster::class, TranslatedString::class)]
    public array $translatedValues = [];

    /**
     * Required.
     * Contains the string to be displayed if no appropriate translation is available.
     */
    #[Required]
    public ?TranslatedString $defaultValue;

    /**
     * Helper method for creating new localized string:
     * LocalizedString::make('en', 'Some value').
     */
    public static function make(string $language, string $value): static
    {
        return new static(defaultValue: new TranslatedString(language: $language, value: $value));
    }
}
