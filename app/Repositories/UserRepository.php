<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface UserRepository.
 *
 * @package namespace App\Repositories;
 */
interface UserRepository extends RepositoryInterface
{
    /**
     * get full info user
     *
     * @return string fullname
     */
    public  function retrieveInforUsers();

    /**
     * get infor user by id
     *
     * @return array user
     */
    public  function retrieveUserById($id);

}
