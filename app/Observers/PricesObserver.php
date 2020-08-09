<?php

namespace App\Observers;

use App\Models\Pages;
use App\Models\Prices;
use App\Models\Services;

/**
 * Class PricesObserver
 *
 * @package App\Observers
 *
 * Method Observer:
 * retrieved : after a record has been retrieved.
 * creating : before a record has been created.
 * created : after a record has been created.
 * updating : before a record is updated.
 * updated : after a record has been updated.
 * saving : before a record is saved (either created or updated).
 * saved : after a record has been saved (either created or updated).
 * deleting : before a record is deleted or soft-deleted.
 * deleted : after a record has been deleted or soft-deleted.
 * restoring : before a soft-deleted record is going to be restored.
 * restored : after a soft-deleted record has been restored.
 */
class PricesObserver
{
    public function created(Prices $prices)
    {
        // Attach page service
        $prices->page_id = Pages::getPage(Pages::PAGE_TARIFS)->id;
        $prices->save();
    }
}
