<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface RoleRepository.
 *
 * @package namespace App\Repositories;
 */
interface RoleRepository extends RepositoryInterface
{
    /**
     * retrieve Roles for User
     *
     * return array
     */
    public  function retrieveRolesForUser();
}
