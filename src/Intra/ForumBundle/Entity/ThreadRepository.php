<?php

namespace Intra\ForumBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ThreadRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ThreadRepository extends EntityRepository
{
	public function getThreadsBy($categorie_id)
	{
	    $query = $this->createQueryBuilder('a')
	    			  ->where("a.categorie = '" . $categorie_id . "'")
	                  ->orderBy('a.dateCreation', 'DESC')
	                  ->getQuery();

	 	return $query->getResult();
	}
}
