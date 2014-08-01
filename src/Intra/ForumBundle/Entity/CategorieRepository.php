<?php

namespace Intra\ForumBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CategorieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategorieRepository extends EntityRepository
{
	public function getCategories()
	{
	    $query = $this->createQueryBuilder('a')
	                  ->orderBy('a.name', 'ASC')
	                  ->getQuery();

	 	return $query->getResult();
	}
}