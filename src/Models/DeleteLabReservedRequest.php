<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models;

use AlibabaCloud\Tea\Model;

class DeleteLabReservedRequest extends Model
{
    /**
     * @var string
     */
    public $reservedId;
    protected $_name = [
        'reservedId' => 'ReservedId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservedId) {
            $res['ReservedId'] = $this->reservedId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLabReservedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReservedId'])) {
            $model->reservedId = $map['ReservedId'];
        }

        return $model;
    }
}
