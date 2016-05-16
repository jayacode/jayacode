<?php
namespace App\Model;

use JayaCode\Framework\Core\Database\Model\Model as BaseModel;

/**
 * Class Model
 * @package App\Model
 */
class Model extends BaseModel
{

    /**
     * @param array $data
     * @param bool $isNewRow
     */
    public function __construct($data = array(), $isNewRow = true)
    {
        parent::__construct($data, $isNewRow);
    }
}
