<?php
/**
 * Copyright © Magmodules.eu. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magmodules\HyvaReviewReminder\ViewModel\Review;

use Magmodules\ReviewReminder\ViewModel\Review\Form as ReviewForm;


class Form extends ReviewForm
{
    public function getSteps()
    {
        return $this->isAddShopreview()
            ? [__('Review'), __('Shopreview'), __('Submitted')]
            : [__('Review'), __('Submitted')];
    }
}
