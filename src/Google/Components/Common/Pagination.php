<?php declare(strict_types=1);

namespace Luminouslabs\PassesKit\Google\Components\Common;

use Luminouslabs\PassesKit\Common\Component;
use Luminouslabs\PassesKit\Common\Validation\Required;

class Pagination extends Component
{
    /**
     * Required.
     * Number of results returned in this page.
     */
    #[Required]
    public ?int $resultsPerPage;

    /**
     * Optional.
     * Page token to send to fetch the next page.
     */
    public ?string $nextPageToken;
}
