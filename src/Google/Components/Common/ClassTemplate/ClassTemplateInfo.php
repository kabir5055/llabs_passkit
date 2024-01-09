<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common\ClassTemplate;

use Luminouslabs\PassesKit\Common\Component;

class ClassTemplateInfo extends Component
{
    /**
     * Optional.
     * Specifies extra information to be displayed above and below the barcode.
     */
    public ?CardBarcodeSectionDetails $cardBarcodeSectionDetails;

    /**
     * Optional.
     * Override for the card view.
     */
    public ?CardTemplateOverride $cardTemplateOverride;

    /**
     * Optional.
     * Override for the details view (beneath the card view).
     */
    public ?DetailsTemplateOverride $detailsTemplateOverride;

    /**
     * Optional.
     * Override for the passes list view.
     */
    public ?ListTemplateOverride $listTemplateOverride;
}
