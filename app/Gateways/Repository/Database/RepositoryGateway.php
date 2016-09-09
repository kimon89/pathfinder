<?php
namespace App\Gateways\Repository\Database;

use App\Models\User;
use App\Models\Repository;
use App\Gateways\Repository\RepositoryGatewayInterface;

/**
 * Responsible for accesing repository data from the database
 */
class RepositoryGateway implements RepositoryGatewayInterface {

	/**
	 * User model
	 * @var User
	 */
	protected $user;
	/**
	 * Repository model
	 * @var Repository
	 */
	protected $repository;

	/**
	 * Constructor
	 * @param User       $user       The user model
	 * @param Repository $repository The repository model
	 */
	public function __construct(User $user, Repository $repository)
	{
		$this->user = $user;
		$this->repository = $repository;
	}

	/**
	 * Sets the user model
	 * @param User $user The user model
	 */
	public function setUser(User $user)
	{
		$this->user = $user;
		return $this;
	}

	/**
	 * Returns the user model
	 * @return User The user model
	 */
	public function getUser()
	{
		return $this->user;
	}

	/**
	 * Sets the repository model
	 * @param Repository $repository [description]
	 */
	public function setRepository(Repository $repository)
	{
		$this->repository = $repository;
		return $this;
	}

	public function getRepository()
	{
		return $this->repository;
	}
	/**
	 * Get repositories by user id from the database
	 * @param  int $userId The user id
	 * @return array         An array of repositories
	 */
	public function getRepositoriesContributedByUserId($userId)
	{
		$user = $this->user->findOrFail($userId);
		return $user->repositories()->get()->toArray();
	}

	/**
	 * Get all the users with their repos from the database
	 * @return array An array that contains all the users and their repos
	 */
	public function getAllRepositories()
	{
		$users = $this->user->all();
		return $users->load('repositories')->get()->toArray();
	}
}