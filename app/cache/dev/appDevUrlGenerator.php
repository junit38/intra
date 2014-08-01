<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_module' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_module_formulaire_module' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::formulaireModuleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/form_module',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_module_formulaire_activite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::formulaireActiviteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/form_activite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_module_ajouter_module' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::ajouterModuleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/ajouter_module',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_module_ajouter_activite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::ajouterActiviteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/ajouter_activite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_module_remove_module' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::removeModuleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/remove_module',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_module_remove_activite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::removeActiviteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/remove_activite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_module_voir_module' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::voirModuleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/module',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_module_inscription_module' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::inscriptionModuleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/inscription_module',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_module_desinscription_module' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::desinscriptionModuleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/desinscription_module',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_module_inscrit_module' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::inscritModuleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/inscrit_module',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_module_voir_activite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::voirActiviteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/activite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_module_inscription_activite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::inscriptionActiviteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/inscription_activite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_module_desinscription_activite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::desinscriptionActiviteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/desinscription_activite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_module_inscrit_activite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ModuleBundle\\Controller\\ModuleController::inscritActiviteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/inscrit_activite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_forum' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forum/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_forum_ajouter_categorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::ajouterCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forum/ajouter_categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_forum_voir_categorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forum/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_forum_remove_categorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::removeCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forum/remove_categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_forum_formulaire_thread' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::formulaireThreadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forum/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_forum_ajouter_thread' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::ajouterThreadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forum/ajouter_thread',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_forum_voir_thread' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::voirThreadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forum/thread',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_forum_remove_thread' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::removeThreadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forum/remove_thread',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_forum_ajouter_commentaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::ajouterCommentaireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forum/ajouter_commentaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_forum_ajouter_commentaire_commentaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::ajouterCommentaireCommentaireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forum/ajouter_commentaire_commentaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_forum_remove_commentaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::removeCommentaireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forum/remove_commentaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_forum_modify_categorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\ForumBundle\\Controller\\ForumController::modifyCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forum/modify_categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_admin_interface' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\AdminBundle\\Controller\\AdminController::interfaceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_admin_tickets' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\AdminBundle\\Controller\\AdminController::ticketsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tickets',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_admin_ticket_remove' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\AdminBundle\\Controller\\AdminController::removeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/remove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_ticket_view' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_ticket_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket/creer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_ticket_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_ticket_read' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::readAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket/read',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_ticket_reply' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::replyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket/reply',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_ticket_changestate' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::changeStateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket/changestate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_ticket_remove' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::removeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket/remove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_ticket_changeadmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\TicketBundle\\Controller\\TicketController::changeAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket/changeadmin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_annuaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\AnnuaireBundle\\Controller\\AnnuaireController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/annuaire/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_annuaire_search' => array (  0 =>   array (    0 => 'letter',  ),  1 =>   array (    '_controller' => 'Intra\\AnnuaireBundle\\Controller\\AnnuaireController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'letter',    ),    1 =>     array (      0 => 'text',      1 => '/annuaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_profile' => array (  0 =>   array (    0 => 'login',  ),  1 =>   array (    '_controller' => 'Intra\\UserBundle\\Controller\\UserController::userAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'login',    ),    1 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\UserBundle\\Controller\\UserController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\UserBundle\\Controller\\UserController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intra_main_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Intra\\MainBundle\\Controller\\MainController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
