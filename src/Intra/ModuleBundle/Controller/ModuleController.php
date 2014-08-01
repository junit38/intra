<?php

namespace Intra\ModuleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Intra\ModuleBundle\Entity\Module;
use Intra\ModuleBundle\Entity\Activite;
use Intra\ForumBundle\Entity\Categorie;

class ModuleController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('IntraModuleBundle:Module');
        $modules = $repository->findAll();

        return $this->render('IntraModuleBundle:Module:index.html.twig', array('modules' => $modules));
    }

    public function voirModuleAction()
    {
        $request = $this->get('request');
        if ($request->getMethod() == 'GET' && isset($_GET['id'])) {
          $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('IntraModuleBundle:Module');
          $module = $repository->find(array('id' => $_GET['id']));

          if ($module)
          {
            if (isset($_GET['error']))
              return $this->render('IntraModuleBundle:Module:voir.html.twig', array(
                'module' => $module,
                'error' => "Le délait d'inscription est dépassé"
                ));
            return $this->render('IntraModuleBundle:Module:voir.html.twig', array('module' => $module));
          }
        }
        return $this->redirect( $this->generateUrl('intra_module') );
    }

    public function inscriptionModuleAction()
    {
        $request = $this->get('request');
        if ($request->getMethod() == 'GET' && isset($_GET['id'])) {
          $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('IntraModuleBundle:Module');
          $module = $repository->find(array('id' => $_GET['id']));

          if ($module)
          {
            if ($module->getDateFinInscription() > new \Datetime())
            {
              $module->addInscrit($this->get('security.context')->getToken()->getUser());
              $em = $this->getDoctrine()->getManager();
              $em->persist($module);
              $em->flush();
              return $this->redirect( $this->generateUrl('intra_module_voir_module', array('id' => $module->getId())) );
            }
            else
            {
              return $this->redirect( $this->generateUrl('intra_module_voir_module', array(
                'id' => $module->getId(),
                'error' => "0"
                )) );
            }
          }      
        }
        return $this->redirect( $this->generateUrl('intra_module') );
    }

    public function desinscriptionModuleAction()
    {
        $request = $this->get('request');
        if ($request->getMethod() == 'GET' && isset($_GET['id'])) {
          $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('IntraModuleBundle:Module');
          $module = $repository->find(array('id' => $_GET['id']));

          if ($module)
          {
            $module->removeInscrit($this->get('security.context')->getToken()->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($module);
            $em->flush();
            return $this->redirect( $this->generateUrl('intra_module_voir_module', array('id' => $module->getId())) );
          }      
        }
        return $this->redirect( $this->generateUrl('intra_module') );
    }

    public function inscritModuleAction()
    {
      $request = $this->get('request');
        if ($request->getMethod() == 'GET' && isset($_GET['id'])) {
          $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('IntraModuleBundle:Module');
          $module = $repository->find(array('id' => $_GET['id']));

          if ($module)
            return $this->render('IntraModuleBundle:Module:inscrit_module.html.twig', array('module' => $module));  
        }
        return $this->redirect( $this->generateUrl('intra_module') );
    }

    public function formulaireModuleAction()
    {
    	if ($this->get('security.context')->isGranted('ROLE_ADMIN'))
    	{
    		return $this->render('IntraModuleBundle:Formulaire:module.html.twig');
    	}
    	return $this->render('IntraModuleBundle:Formulaire:index.html.twig');
    }

    public function ajouterModuleAction()
    {
    	$request = $this->get('request');
        if ($request->getMethod() == 'POST') {
          $module = new Module();
          $categorie = new Categorie();

          $categorie->setName($_POST['_name']);

          $module->setName($_POST['_name']);
          $module->setCategorie($categorie);
          $module->setDescription($_POST['_description']);
          $module->setDateDebutInscription(new \Datetime($_POST['_date_debut_inscription']));
          $module->setDateFinInscription(new \Datetime($_POST['_date_fin_inscription']));
          $module->setDateDebutModule(new \Datetime($_POST['_date_debut_module']));
          $module->setDateFinModule(new \Datetime($_POST['_date_fin_module']));
          $module->setValeure($_POST['_valeure']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($module);
          $em->flush();
        }
        return $this->redirect( $this->generateUrl('intra_admin_interface', array('page' => 'modules')) );
    }

    public function removeModuleAction()
    {
        $request = $this->get('request');
        if ($request->getMethod() == 'POST' && $this->get('security.context')->isGranted('ROLE_ADMIN')) {
            $repository = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('IntraModuleBundle:Module');
            $module = $repository->find($_POST['_id']);

            if ($module)
            {
                $em = $this->getDoctrine()->getManager();
                $em->remove($module);
                $em->flush();
            }
            return $this->redirect( $this->generateUrl('intra_admin_interface', array('page' => 'modules')) );
        }
        return $this->redirect( $this->generateUrl('intra_admin_interface', array('page' => 'modules')) );
    }

    public function formulaireActiviteAction()
    {
        if ($this->get('security.context')->isGranted('ROLE_ADMIN'))
        {
            $request = $this->get('request');
            if ($request->getMethod() == 'GET' && isset($_GET['id'])) {
                $repository = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('IntraModuleBundle:Module');
                $module = $repository->find($_GET['id']);

                if ($module)
                    return $this->render('IntraModuleBundle:Formulaire:activite.html.twig', array('module' => $module));
            }
        }
        return $this->render('IntraModuleBundle:Module:index.html.twig');
    }

    public function voirActiviteAction()
    {
        $request = $this->get('request');
        if ($request->getMethod() == 'GET' && isset($_GET['id'])) {
          $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('IntraModuleBundle:Activite');
          $activite = $repository->find(array('id' => $_GET['id']));

          $module = $activite->getModule();

          if ($activite)
          {
            if (isset($_GET['error']))
              return $this->render('IntraModuleBundle:Activite:voir.html.twig', array(
                'activite' => $activite,
                'module' => $module,
                'error' => "Le délait d'inscription est dépassé"
                ));
            return $this->render('IntraModuleBundle:Activite:voir.html.twig', array(
              'module' => $module,
              'activite' => $activite
              ));
          }
        }
        return $this->redirect( $this->generateUrl('intra_module') );
    }

    public function ajouterActiviteAction()
    {
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
          $repository = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('IntraModuleBundle:Module');
          $module = $repository->find($_POST['_id_module']);

          $activite = new Activite();
          $categorie = new Categorie();

          $categorie->setName($_POST['_name']);
          $categorie->setSurCategorie($module->getCategorie());

          $activite->setModule($module);
          $activite->setCategorie($categorie);
          $activite->setName($_POST['_name']);
          $activite->setDescription($_POST['_description']);
          $activite->setDateDebutInscription(new \Datetime($_POST['_date_debut_inscription']));
          $activite->setDateFinInscription(new \Datetime($_POST['_date_fin_inscription']));
          $activite->setDateDebutActivite(new \Datetime($_POST['_date_debut_activite']));
          $activite->setDateFinActivite(new \Datetime($_POST['_date_fin_activite']));
          $activite->setTailleGroupe($_POST['_taille_groupe']);
          $activite->setNbPeers($_POST['_nb_peers']);
          $activite->setType($_POST['_type']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($activite);
          $em->flush();         
        }
        return $this->redirect( $this->generateUrl('intra_admin_interface', array('page' => 'modules')) );
    }

    public function inscriptionActiviteAction()
    {
        $request = $this->get('request');
        if ($request->getMethod() == 'GET' && isset($_GET['id'])) {
          $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('IntraModuleBundle:Activite');
          $activite = $repository->find(array('id' => $_GET['id']));

          if ($activite)
          {
            if ($activite->getDateFinInscription() > new \Datetime())
            {
              $activite->addInscrit($this->get('security.context')->getToken()->getUser());
              $em = $this->getDoctrine()->getManager();
              $em->persist($activite);
              $em->flush();
              return $this->redirect($this->generateUrl('intra_module_voir_activite', array('id' => $activite->getId())) );
            }
            else
            {
              return $this->redirect( $this->generateUrl('intra_module_voir_activite', array(
                'id' => $activite->getId(),
                'error' => "0"
                )) );
            }
          }      
        }
        return $this->redirect( $this->generateUrl('intra_module') );
    }

    public function desinscriptionActiviteAction()
    {
        $request = $this->get('request');
        if ($request->getMethod() == 'GET' && isset($_GET['id'])) {
          $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('IntraModuleBundle:Activite');
          $activite = $repository->find(array('id' => $_GET['id']));

          if ($activite)
          {
            $activite->removeInscrit($this->get('security.context')->getToken()->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($activite);
            $em->flush();
            return $this->redirect( $this->generateUrl('intra_module_voir_activite', array('id' => $activite->getId())) );
          }      
        }
        return $this->redirect( $this->generateUrl('intra_module') );
    }

    public function inscritActiviteAction()
    {
      $request = $this->get('request');
        if ($request->getMethod() == 'GET' && isset($_GET['id'])) {
          $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('IntraModuleBundle:Activite');
          $activite = $repository->find(array('id' => $_GET['id']));

          if ($activite)
            return $this->render('IntraModuleBundle:Module:inscrit_module.html.twig', array('activite' => $activite));  
        }
        return $this->redirect( $this->generateUrl('intra_module') );
    }

    public function removeActiviteAction()
    {
        $request = $this->get('request');
        if ($request->getMethod() == 'POST' && $this->get('security.context')->isGranted('ROLE_ADMIN')) {
            $repository = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('IntraModuleBundle:Activite');
            $activite = $repository->find($_POST['_id']);

            if ($activite)
            {
                $em = $this->getDoctrine()->getManager();
                $em->remove($activite);
                $em->flush();
            }
            return $this->redirect( $this->generateUrl('intra_admin_interface', array('page' => 'modules')) );
        }
        return $this->redirect( $this->generateUrl('intra_admin_interface', array('page' => 'modules')) );
    }
}
