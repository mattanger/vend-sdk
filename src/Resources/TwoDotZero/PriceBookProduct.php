<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Carbon\Carbon;
use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Price Book Product
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class PriceBookProduct extends DataTransferObject
{
    use CastsDates;

    /**
     * Creation timestamp in UTC.
     *
     * @var Carbon|null
     */
    public $created_at;

    /**
     * Deletion timestamp in UTC.
     *
     * @var Carbon|null
     */
    public $deleted_at;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * Price book defined loyalty value.
     *
     * @var int|double|null
     */
    public $loyalty_value;

    /**
     * The maximum number of items for which this price will be used.
     *
     * @var int|double|null
     */
    public $max_units;

    /**
     * The minimum number of items for which this price will be used.
     *
     * @var int|double|null
     */
    public $min_units;

    /**
     * Retail price.
     *
     * @var int|double|null
     */
    public $price;

    /**
     * The ID of the price book this product belongs to.
     *
     * @var string
     */
    public $price_book_id;

    /**
     * The ID of the associated product.
     *
     * @var string
     */
    public $product_id;

    /**
     * Last update timestamp in UTC.
     *
     * @var Carbon|null
     */
    public $updated_at;

}