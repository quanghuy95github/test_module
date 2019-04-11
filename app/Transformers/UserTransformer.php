<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\User;

/**
 * Class UserTransformer.
 *
 * @package namespace App\Transformers;
 */
class UserTransformer extends TransformerAbstract
{
    /**
     * Transform the User entity.
     *
     * @param \App\Entities\User $model
     *
     * @return array
     */
    public function transform(User $model)
    {
        $data_format = $model->toArray();
        $data_format['full_name'] = $data_format['last_name'] . " " . $data_format['first_name'];
        return $data_format;
    }
}
