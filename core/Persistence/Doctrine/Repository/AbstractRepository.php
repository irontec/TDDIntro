<?php

namespace TDDIntro\Persistence\Doctrine\Repository;

use Doctrine\ORM\EntityRepository;
use TDDIntro\Domain\Repository\RepositoryInterface;

abstract class AbstractRepository implements RepositoryInterface
{
    /**
     * @var EntityRepository
     */
    protected $repository;

    /**
     * AbstractRepository constructor.
     */
    public function __construct(EntityRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Find all entities from repository.
     *
     * @return array
     */
    public function findAll()
    {
        return $this->repository->findAll();
    }

    public function findBy(array $criteria = array(), array $orderBy = null, $limit = null, $offset = null)
    {
        // TODO: Implement findBy() method.
    }
}
