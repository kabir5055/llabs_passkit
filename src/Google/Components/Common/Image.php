<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;

class Image extends Component
{
    /**
     * Required.
     * The location of the image. URIs must have a scheme.
     */
    #[Required]
    public ?ImageUri $sourceUri;

    /**
     * Helper method for creating new localized string:
     * Image::make('https://example.org/image.png').
     */
    public static function make(string $uri): static
    {
        return new static(sourceUri: new ImageUri(uri: $uri));
    }
}
