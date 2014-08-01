<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/module')) {
            // intra_module
            if (rtrim($pathinfo, '/') === '/module') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'intra_module');
                }

                return array (  '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::indexAction',  '_route' => 'intra_module',);
            }

            if (0 === strpos($pathinfo, '/module/form_')) {
                // intra_module_formulaire_module
                if ($pathinfo === '/module/form_module') {
                    return array (  '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::formulaireModuleAction',  '_route' => 'intra_module_formulaire_module',);
                }

                // intra_module_formulaire_activite
                if ($pathinfo === '/module/form_activite') {
                    return array (  '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::formulaireActiviteAction',  '_route' => 'intra_module_formulaire_activite',);
                }

            }

            if (0 === strpos($pathinfo, '/module/ajouter_')) {
                // intra_module_ajouter_module
                if ($pathinfo === '/module/ajouter_module') {
                    return array (  '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::ajouterModuleAction',  '_route' => 'intra_module_ajouter_module',);
                }

                // intra_module_ajouter_activite
                if ($pathinfo === '/module/ajouter_activite') {
                    return array (  '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::ajouterActiviteAction',  '_route' => 'intra_module_ajouter_activite',);
                }

            }

            if (0 === strpos($pathinfo, '/module/remove_')) {
                // intra_module_remove_module
                if ($pathinfo === '/module/remove_module') {
                    return array (  '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::removeModuleAction',  '_route' => 'intra_module_remove_module',);
                }

                // intra_module_remove_activite
                if ($pathinfo === '/module/remove_activite') {
                    return array (  '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::removeActiviteAction',  '_route' => 'intra_module_remove_activite',);
                }

            }

            // intra_module_voir_module
            if ($pathinfo === '/module/module') {
                return array (  '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::voirModuleAction',  '_route' => 'intra_module_voir_module',);
            }

            // intra_module_inscription_module
            if ($pathinfo === '/module/inscription_module') {
                return array (  '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::inscriptionModuleAction',  '_route' => 'intra_module_inscription_module',);
            }

            // intra_module_desinscription_module
            if ($pathinfo === '/module/desinscription_module') {
                return array (  '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::desinscriptionModuleAction',  '_route' => 'intra_module_desinscription_module',);
            }

            // intra_module_inscrit_module
            if ($pathinfo === '/module/inscrit_module') {
                return array (  '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::inscritModuleAction',  '_route' => 'intra_module_inscrit_module',);
            }

            // intra_module_voir_activite
            if ($pathinfo === '/module/activite') {
                return array (  '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::voirActiviteAction',  '_route' => 'intra_module_voir_activite',);
            }

            // intra_module_inscription_activite
            if ($pathinfo === '/module/inscription_activite') {
                return array (  '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::inscriptionActiviteAction',  '_route' => 'intra_module_inscription_activite',);
            }

            // intra_module_desinscription_activite
            if ($pathinfo === '/module/desinscription_activite') {
                return array (  '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::desinscriptionActiviteAction',  '_route' => 'intra_module_desinscription_activite',);
            }

            // intra_module_inscrit_activite
            if ($pathinfo === '/module/inscrit_activite') {
                return array (  '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::inscritActiviteAction',  '_route' => 'intra_module_inscrit_activite',);
            }

        }

        if (0 === strpos($pathinfo, '/forum')) {
            // intra_forum
            if (rtrim($pathinfo, '/') === '/forum') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'intra_forum');
                }

                return array (  '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::indexAction',  '_route' => 'intra_forum',);
            }

            // intra_forum_ajouter_categorie
            if ($pathinfo === '/forum/ajouter_categorie') {
                return array (  '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::ajouterCategorieAction',  '_route' => 'intra_forum_ajouter_categorie',);
            }

            // intra_forum_voir_categorie
            if ($pathinfo === '/forum/categorie') {
                return array (  '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::voirAction',  '_route' => 'intra_forum_voir_categorie',);
            }

            // intra_forum_remove_categorie
            if ($pathinfo === '/forum/remove_categorie') {
                return array (  '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::removeCategorieAction',  '_route' => 'intra_forum_remove_categorie',);
            }

            if (0 === strpos($pathinfo, '/forum/ajouter')) {
                // intra_forum_formulaire_thread
                if ($pathinfo === '/forum/ajouter') {
                    return array (  '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::formulaireThreadAction',  '_route' => 'intra_forum_formulaire_thread',);
                }

                // intra_forum_ajouter_thread
                if ($pathinfo === '/forum/ajouter_thread') {
                    return array (  '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::ajouterThreadAction',  '_route' => 'intra_forum_ajouter_thread',);
                }

            }

            // intra_forum_voir_thread
            if ($pathinfo === '/forum/thread') {
                return array (  '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::voirThreadAction',  '_route' => 'intra_forum_voir_thread',);
            }

            // intra_forum_remove_thread
            if ($pathinfo === '/forum/remove_thread') {
                return array (  '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::removeThreadAction',  '_route' => 'intra_forum_remove_thread',);
            }

            if (0 === strpos($pathinfo, '/forum/ajouter_commentaire')) {
                // intra_forum_ajouter_commentaire
                if ($pathinfo === '/forum/ajouter_commentaire') {
                    return array (  '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::ajouterCommentaireAction',  '_route' => 'intra_forum_ajouter_commentaire',);
                }

                // intra_forum_ajouter_commentaire_commentaire
                if ($pathinfo === '/forum/ajouter_commentaire_commentaire') {
                    return array (  '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::ajouterCommentaireCommentaireAction',  '_route' => 'intra_forum_ajouter_commentaire_commentaire',);
                }

            }

            // intra_forum_remove_commentaire
            if ($pathinfo === '/forum/remove_commentaire') {
                return array (  '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::removeCommentaireAction',  '_route' => 'intra_forum_remove_commentaire',);
            }

            // intra_forum_modify_categorie
            if ($pathinfo === '/forum/modify_categorie') {
                return array (  '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::modifyCategorieAction',  '_route' => 'intra_forum_modify_categorie',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // intra_admin_interface
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'intra_admin_interface');
                }

                return array (  '_controller' => 'Intra\\AdminBundle\\Controller\\AdminController::interfaceAction',  '_route' => 'intra_admin_interface',);
            }

            // intra_admin_tickets
            if ($pathinfo === '/admin/tickets') {
                return array (  '_controller' => 'Intra\\AdminBundle\\Controller\\AdminController::ticketsAction',  '_route' => 'intra_admin_tickets',);
            }

            // intra_admin_ticket_remove
            if ($pathinfo === '/admin/remove') {
                return array (  '_controller' => 'Intra\\AdminBundle\\Controller\\AdminController::removeAction',  '_route' => 'intra_admin_ticket_remove',);
            }

        }

        if (0 === strpos($pathinfo, '/ticket')) {
            // intra_ticket_view
            if (rtrim($pathinfo, '/') === '/ticket') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'intra_ticket_view');
                }

                return array (  '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::viewAction',  '_route' => 'intra_ticket_view',);
            }

            // intra_ticket_create
            if ($pathinfo === '/ticket/creer') {
                return array (  '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::createAction',  '_route' => 'intra_ticket_create',);
            }

            // intra_ticket_add
            if ($pathinfo === '/ticket/ajouter') {
                return array (  '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::ajouterAction',  '_route' => 'intra_ticket_add',);
            }

            if (0 === strpos($pathinfo, '/ticket/re')) {
                // intra_ticket_read
                if ($pathinfo === '/ticket/read') {
                    return array (  '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::readAction',  '_route' => 'intra_ticket_read',);
                }

                // intra_ticket_reply
                if ($pathinfo === '/ticket/reply') {
                    return array (  '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::replyAction',  '_route' => 'intra_ticket_reply',);
                }

            }

            // intra_ticket_changestate
            if ($pathinfo === '/ticket/changestate') {
                return array (  '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::changeStateAction',  '_route' => 'intra_ticket_changestate',);
            }

            // intra_ticket_remove
            if ($pathinfo === '/ticket/remove') {
                return array (  '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::removeAction',  '_route' => 'intra_ticket_remove',);
            }

            // intra_ticket_changeadmin
            if ($pathinfo === '/ticket/changeadmin') {
                return array (  '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::changeAdminAction',  '_route' => 'intra_ticket_changeadmin',);
            }

        }

        if (0 === strpos($pathinfo, '/annuaire')) {
            // intra_annuaire
            if (rtrim($pathinfo, '/') === '/annuaire') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'intra_annuaire');
                }

                return array (  '_controller' => 'Intra\\AnnuaireBundle\\Controller\\AnnuaireController::indexAction',  '_route' => 'intra_annuaire',);
            }

            // intra_annuaire_search
            if (preg_match('#^/annuaire/(?P<letter>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'intra_annuaire_search')), array (  '_controller' => 'Intra\\AnnuaireBundle\\Controller\\AnnuaireController::searchAction',));
            }

        }

        // user_profile
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_profile')), array (  '_controller' => 'Intra\\UserBundle\\Controller\\UserController::userAction',));
        }

        // user_search
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'Intra\\UserBundle\\Controller\\UserController::searchAction',  '_route' => 'user_search',);
        }

        // user_update
        if ($pathinfo === '/update') {
            return array (  '_controller' => 'Intra\\UserBundle\\Controller\\UserController::updateAction',  '_route' => 'user_update',);
        }

        // intra_main_homepage
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'Intra\\MainBundle\\Controller\\MainController::indexAction',  '_route' => 'intra_main_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
