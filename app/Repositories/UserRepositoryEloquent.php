<?php

namespace App\Repositories;

use App\Presenters\UserPresenter;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UserRepository;
use App\Entities\User;
use App\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
        $this->setPresenter(app(UserPresenter::class));
    }


    /**
     * get full info user
     *
     * @return array users
     */
    public function retrieveInforUsers()
    {
        return $this->with('role')->paginate(1);
    }


    /**
     * get infor user by id
     *
     * @return array user
     */
    public function retrieveUserById($id)
    {
        return $this->with('role')->find($id);
    }


    /**
     * create user
     *
     */
    public function createUser($request)
    {

    }

}
