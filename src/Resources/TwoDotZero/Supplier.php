<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Carbon\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Supplier
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class Supplier extends DataTransferObject
{
    /**
     * Deletion timestamp in UTC.
     *
     * @var Carbon|null
     */
    public $deleted_at;

    /**
     * Supplier's description. **deprecated**
     *
     * @var string|null
     */
    public $description;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * The Supplier name.
     *
     * @var string
     */
    public $name;

    /**
     * **internal** **deprecated**
     *
     * @var string|null
     */
    public $source;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;
}