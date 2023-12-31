<?php

namespace ContainerPaupVtG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SsivK1fService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ssivK1f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ssivK1f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AvisController::new' => ['privates', '.service_locator.BwLcYXx', 'get_ServiceLocator_BwLcYXxService', true],
            'App\\Controller\\CategoriesController::activer' => ['privates', '.service_locator.ZE81RhG', 'get_ServiceLocator_ZE81RhGService', true],
            'App\\Controller\\CategoriesController::activerCat' => ['privates', '.service_locator.IzzSjso', 'get_ServiceLocator_IzzSjsoService', true],
            'App\\Controller\\CategoriesController::categorie' => ['privates', '.service_locator.khS96hw', 'get_ServiceLocator_KhS96hwService', true],
            'App\\Controller\\CategoriesController::deleteImage' => ['privates', '.service_locator.xlRbV4.', 'get_ServiceLocator_XlRbV4_Service', true],
            'App\\Controller\\CategoriesController::modifierCategorie' => ['privates', '.service_locator.4fBkBbl', 'get_ServiceLocator_4fBkBblService', true],
            'App\\Controller\\CategoriesController::modifierProduit' => ['privates', '.service_locator.1ZfDXOM', 'get_ServiceLocator_1ZfDXOMService', true],
            'App\\Controller\\CategoriesController::produit' => ['privates', '.service_locator.xfMbnwT', 'get_ServiceLocator_XfMbnwTService', true],
            'App\\Controller\\CategoriesController::showPro' => ['privates', '.service_locator.khS96hw', 'get_ServiceLocator_KhS96hwService', true],
            'App\\Controller\\CategoriesController::supprimer' => ['privates', '.service_locator.ZE81RhG', 'get_ServiceLocator_ZE81RhGService', true],
            'App\\Controller\\CategoriesController::supprimerCat' => ['privates', '.service_locator.IzzSjso', 'get_ServiceLocator_IzzSjsoService', true],
            'App\\Controller\\ClandarController::delete' => ['privates', '.service_locator.nnJ950I', 'get_ServiceLocator_NnJ950IService', true],
            'App\\Controller\\ClandarController::edit' => ['privates', '.service_locator.nnJ950I', 'get_ServiceLocator_NnJ950IService', true],
            'App\\Controller\\ClandarController::index' => ['privates', '.service_locator.5kYtmnV', 'get_ServiceLocator_5kYtmnVService', true],
            'App\\Controller\\ClandarController::show' => ['privates', '.service_locator.nnJ950I', 'get_ServiceLocator_NnJ950IService', true],
            'App\\Controller\\CommandeController::aa' => ['privates', '.service_locator.fCnhh3s', 'get_ServiceLocator_FCnhh3sService', true],
            'App\\Controller\\CommandeController::index' => ['privates', '.service_locator.f9C7VtY', 'get_ServiceLocator_F9C7VtYService', true],
            'App\\Controller\\CommandeController::prepare' => ['privates', '.service_locator.fCnhh3s', 'get_ServiceLocator_FCnhh3sService', true],
            'App\\Controller\\ContactController::show' => ['privates', '.service_locator.CRG1Jjd', 'get_ServiceLocator_CRG1JjdService', true],
            'App\\Controller\\HomeController::Client' => ['privates', '.service_locator.Vv4yqUS', 'get_ServiceLocator_Vv4yqUSService', true],
            'App\\Controller\\HomeController::Info' => ['privates', '.service_locator.atAoGjL', 'get_ServiceLocator_AtAoGjLService', true],
            'App\\Controller\\HomeController::Valider' => ['privates', '.service_locator.qT7xaaJ', 'get_ServiceLocator_QT7xaaJService', true],
            'App\\Controller\\HomeController::add' => ['privates', '.service_locator.8dfMDFw', 'get_ServiceLocator_8dfMDFwService', true],
            'App\\Controller\\HomeController::cal' => ['privates', '.service_locator.FQThRl3', 'get_ServiceLocator_FQThRl3Service', true],
            'App\\Controller\\HomeController::categories' => ['privates', '.service_locator.8Tb60JK', 'get_ServiceLocator_8Tb60JKService', true],
            'App\\Controller\\HomeController::commands' => ['privates', '.service_locator.f9C7VtY', 'get_ServiceLocator_F9C7VtYService', true],
            'App\\Controller\\HomeController::panier' => ['privates', '.service_locator.8dfMDFw', 'get_ServiceLocator_8dfMDFwService', true],
            'App\\Controller\\HomeController::remove' => ['privates', '.service_locator.h9bDyFt', 'get_ServiceLocator_H9bDyFtService', true],
            'App\\Controller\\HomeController::stat' => ['privates', '.service_locator.DsF.r_R', 'get_ServiceLocator_DsF_RRService', true],
            'App\\Controller\\HomeController::temp' => ['privates', '.service_locator.f6fSlzK', 'get_ServiceLocator_F6fSlzKService', true],
            'App\\Controller\\HomeController::utilisateurs' => ['privates', '.service_locator.f6fSlzK', 'get_ServiceLocator_F6fSlzKService', true],
            'App\\Controller\\InsclientController::index' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\InsclientController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\InsclientController::produit' => ['privates', '.service_locator.v590YDg', 'get_ServiceLocator_V590YDgService', true],
            'App\\Controller\\InsclientController::show' => ['privates', '.service_locator.jbOj_kh', 'get_ServiceLocator_JbOjKhService', true],
            'App\\Controller\\InsclientController::showPro' => ['privates', '.service_locator.v590YDg', 'get_ServiceLocator_V590YDgService', true],
            'App\\Controller\\InsclientController::showetat' => ['privates', '.service_locator.f9C7VtY', 'get_ServiceLocator_F9C7VtYService', true],
            'App\\Controller\\InsclientController::showsup' => ['privates', '.service_locator.jbOj_kh', 'get_ServiceLocator_JbOjKhService', true],
            'App\\Controller\\PromotionController::index' => ['privates', '.service_locator..nH0zP7', 'get_ServiceLocator__NH0zP7Service', true],
            'App\\Controller\\PromotionController::modifier' => ['privates', '.service_locator.7_6BgFX', 'get_ServiceLocator_76BgFXService', true],
            'App\\Controller\\PromotionController::supprimer' => ['privates', '.service_locator.7_6BgFX', 'get_ServiceLocator_76BgFXService', true],
            'App\\Controller\\RegistrationController::editPass' => ['privates', '.service_locator.hjqTVeC', 'get_ServiceLocator_HjqTVeCService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.iTWUpOY', 'get_ServiceLocator_ITWUpOYService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\RespoController::index' => ['privates', '.service_locator.khS96hw', 'get_ServiceLocator_KhS96hwService', true],
            'App\\Controller\\RespoController::produit' => ['privates', '.service_locator.khS96hw', 'get_ServiceLocator_KhS96hwService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SupplementsController::activer' => ['privates', '.service_locator.gepxwuR', 'get_ServiceLocator_GepxwuRService', true],
            'App\\Controller\\SupplementsController::index' => ['privates', '.service_locator.CLTJDJs', 'get_ServiceLocator_CLTJDJsService', true],
            'App\\Controller\\SupplementsController::supprimer' => ['privates', '.service_locator.gepxwuR', 'get_ServiceLocator_GepxwuRService', true],
            'App\\Controller\\TabClientsController::index' => ['privates', '.service_locator.4zfzgYm', 'get_ServiceLocator_4zfzgYmService', true],
            'App\\Controller\\VacanceFermetureController::delete' => ['privates', '.service_locator.qyorV7d', 'get_ServiceLocator_QyorV7dService', true],
            'App\\Controller\\VacanceFermetureController::edit' => ['privates', '.service_locator.qyorV7d', 'get_ServiceLocator_QyorV7dService', true],
            'App\\Controller\\VacanceFermetureController::show' => ['privates', '.service_locator.qyorV7d', 'get_ServiceLocator_QyorV7dService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AvisController:new' => ['privates', '.service_locator.BwLcYXx', 'get_ServiceLocator_BwLcYXxService', true],
            'App\\Controller\\CategoriesController:activer' => ['privates', '.service_locator.ZE81RhG', 'get_ServiceLocator_ZE81RhGService', true],
            'App\\Controller\\CategoriesController:activerCat' => ['privates', '.service_locator.IzzSjso', 'get_ServiceLocator_IzzSjsoService', true],
            'App\\Controller\\CategoriesController:categorie' => ['privates', '.service_locator.khS96hw', 'get_ServiceLocator_KhS96hwService', true],
            'App\\Controller\\CategoriesController:deleteImage' => ['privates', '.service_locator.xlRbV4.', 'get_ServiceLocator_XlRbV4_Service', true],
            'App\\Controller\\CategoriesController:modifierCategorie' => ['privates', '.service_locator.4fBkBbl', 'get_ServiceLocator_4fBkBblService', true],
            'App\\Controller\\CategoriesController:modifierProduit' => ['privates', '.service_locator.1ZfDXOM', 'get_ServiceLocator_1ZfDXOMService', true],
            'App\\Controller\\CategoriesController:produit' => ['privates', '.service_locator.xfMbnwT', 'get_ServiceLocator_XfMbnwTService', true],
            'App\\Controller\\CategoriesController:showPro' => ['privates', '.service_locator.khS96hw', 'get_ServiceLocator_KhS96hwService', true],
            'App\\Controller\\CategoriesController:supprimer' => ['privates', '.service_locator.ZE81RhG', 'get_ServiceLocator_ZE81RhGService', true],
            'App\\Controller\\CategoriesController:supprimerCat' => ['privates', '.service_locator.IzzSjso', 'get_ServiceLocator_IzzSjsoService', true],
            'App\\Controller\\ClandarController:delete' => ['privates', '.service_locator.nnJ950I', 'get_ServiceLocator_NnJ950IService', true],
            'App\\Controller\\ClandarController:edit' => ['privates', '.service_locator.nnJ950I', 'get_ServiceLocator_NnJ950IService', true],
            'App\\Controller\\ClandarController:index' => ['privates', '.service_locator.5kYtmnV', 'get_ServiceLocator_5kYtmnVService', true],
            'App\\Controller\\ClandarController:show' => ['privates', '.service_locator.nnJ950I', 'get_ServiceLocator_NnJ950IService', true],
            'App\\Controller\\CommandeController:aa' => ['privates', '.service_locator.fCnhh3s', 'get_ServiceLocator_FCnhh3sService', true],
            'App\\Controller\\CommandeController:index' => ['privates', '.service_locator.f9C7VtY', 'get_ServiceLocator_F9C7VtYService', true],
            'App\\Controller\\CommandeController:prepare' => ['privates', '.service_locator.fCnhh3s', 'get_ServiceLocator_FCnhh3sService', true],
            'App\\Controller\\ContactController:show' => ['privates', '.service_locator.CRG1Jjd', 'get_ServiceLocator_CRG1JjdService', true],
            'App\\Controller\\HomeController:Client' => ['privates', '.service_locator.Vv4yqUS', 'get_ServiceLocator_Vv4yqUSService', true],
            'App\\Controller\\HomeController:Info' => ['privates', '.service_locator.atAoGjL', 'get_ServiceLocator_AtAoGjLService', true],
            'App\\Controller\\HomeController:Valider' => ['privates', '.service_locator.qT7xaaJ', 'get_ServiceLocator_QT7xaaJService', true],
            'App\\Controller\\HomeController:add' => ['privates', '.service_locator.8dfMDFw', 'get_ServiceLocator_8dfMDFwService', true],
            'App\\Controller\\HomeController:cal' => ['privates', '.service_locator.FQThRl3', 'get_ServiceLocator_FQThRl3Service', true],
            'App\\Controller\\HomeController:categories' => ['privates', '.service_locator.8Tb60JK', 'get_ServiceLocator_8Tb60JKService', true],
            'App\\Controller\\HomeController:commands' => ['privates', '.service_locator.f9C7VtY', 'get_ServiceLocator_F9C7VtYService', true],
            'App\\Controller\\HomeController:panier' => ['privates', '.service_locator.8dfMDFw', 'get_ServiceLocator_8dfMDFwService', true],
            'App\\Controller\\HomeController:remove' => ['privates', '.service_locator.h9bDyFt', 'get_ServiceLocator_H9bDyFtService', true],
            'App\\Controller\\HomeController:stat' => ['privates', '.service_locator.DsF.r_R', 'get_ServiceLocator_DsF_RRService', true],
            'App\\Controller\\HomeController:temp' => ['privates', '.service_locator.f6fSlzK', 'get_ServiceLocator_F6fSlzKService', true],
            'App\\Controller\\HomeController:utilisateurs' => ['privates', '.service_locator.f6fSlzK', 'get_ServiceLocator_F6fSlzKService', true],
            'App\\Controller\\InsclientController:index' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\InsclientController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\InsclientController:produit' => ['privates', '.service_locator.v590YDg', 'get_ServiceLocator_V590YDgService', true],
            'App\\Controller\\InsclientController:show' => ['privates', '.service_locator.jbOj_kh', 'get_ServiceLocator_JbOjKhService', true],
            'App\\Controller\\InsclientController:showPro' => ['privates', '.service_locator.v590YDg', 'get_ServiceLocator_V590YDgService', true],
            'App\\Controller\\InsclientController:showetat' => ['privates', '.service_locator.f9C7VtY', 'get_ServiceLocator_F9C7VtYService', true],
            'App\\Controller\\InsclientController:showsup' => ['privates', '.service_locator.jbOj_kh', 'get_ServiceLocator_JbOjKhService', true],
            'App\\Controller\\PromotionController:index' => ['privates', '.service_locator..nH0zP7', 'get_ServiceLocator__NH0zP7Service', true],
            'App\\Controller\\PromotionController:modifier' => ['privates', '.service_locator.7_6BgFX', 'get_ServiceLocator_76BgFXService', true],
            'App\\Controller\\PromotionController:supprimer' => ['privates', '.service_locator.7_6BgFX', 'get_ServiceLocator_76BgFXService', true],
            'App\\Controller\\RegistrationController:editPass' => ['privates', '.service_locator.hjqTVeC', 'get_ServiceLocator_HjqTVeCService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.iTWUpOY', 'get_ServiceLocator_ITWUpOYService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\RespoController:index' => ['privates', '.service_locator.khS96hw', 'get_ServiceLocator_KhS96hwService', true],
            'App\\Controller\\RespoController:produit' => ['privates', '.service_locator.khS96hw', 'get_ServiceLocator_KhS96hwService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SupplementsController:activer' => ['privates', '.service_locator.gepxwuR', 'get_ServiceLocator_GepxwuRService', true],
            'App\\Controller\\SupplementsController:index' => ['privates', '.service_locator.CLTJDJs', 'get_ServiceLocator_CLTJDJsService', true],
            'App\\Controller\\SupplementsController:supprimer' => ['privates', '.service_locator.gepxwuR', 'get_ServiceLocator_GepxwuRService', true],
            'App\\Controller\\TabClientsController:index' => ['privates', '.service_locator.4zfzgYm', 'get_ServiceLocator_4zfzgYmService', true],
            'App\\Controller\\VacanceFermetureController:delete' => ['privates', '.service_locator.qyorV7d', 'get_ServiceLocator_QyorV7dService', true],
            'App\\Controller\\VacanceFermetureController:edit' => ['privates', '.service_locator.qyorV7d', 'get_ServiceLocator_QyorV7dService', true],
            'App\\Controller\\VacanceFermetureController:show' => ['privates', '.service_locator.qyorV7d', 'get_ServiceLocator_QyorV7dService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AvisController::new' => '?',
            'App\\Controller\\CategoriesController::activer' => '?',
            'App\\Controller\\CategoriesController::activerCat' => '?',
            'App\\Controller\\CategoriesController::categorie' => '?',
            'App\\Controller\\CategoriesController::deleteImage' => '?',
            'App\\Controller\\CategoriesController::modifierCategorie' => '?',
            'App\\Controller\\CategoriesController::modifierProduit' => '?',
            'App\\Controller\\CategoriesController::produit' => '?',
            'App\\Controller\\CategoriesController::showPro' => '?',
            'App\\Controller\\CategoriesController::supprimer' => '?',
            'App\\Controller\\CategoriesController::supprimerCat' => '?',
            'App\\Controller\\ClandarController::delete' => '?',
            'App\\Controller\\ClandarController::edit' => '?',
            'App\\Controller\\ClandarController::index' => '?',
            'App\\Controller\\ClandarController::show' => '?',
            'App\\Controller\\CommandeController::aa' => '?',
            'App\\Controller\\CommandeController::index' => '?',
            'App\\Controller\\CommandeController::prepare' => '?',
            'App\\Controller\\ContactController::show' => '?',
            'App\\Controller\\HomeController::Client' => '?',
            'App\\Controller\\HomeController::Info' => '?',
            'App\\Controller\\HomeController::Valider' => '?',
            'App\\Controller\\HomeController::add' => '?',
            'App\\Controller\\HomeController::cal' => '?',
            'App\\Controller\\HomeController::categories' => '?',
            'App\\Controller\\HomeController::commands' => '?',
            'App\\Controller\\HomeController::panier' => '?',
            'App\\Controller\\HomeController::remove' => '?',
            'App\\Controller\\HomeController::stat' => '?',
            'App\\Controller\\HomeController::temp' => '?',
            'App\\Controller\\HomeController::utilisateurs' => '?',
            'App\\Controller\\InsclientController::index' => '?',
            'App\\Controller\\InsclientController::login' => '?',
            'App\\Controller\\InsclientController::produit' => '?',
            'App\\Controller\\InsclientController::show' => '?',
            'App\\Controller\\InsclientController::showPro' => '?',
            'App\\Controller\\InsclientController::showetat' => '?',
            'App\\Controller\\InsclientController::showsup' => '?',
            'App\\Controller\\PromotionController::index' => '?',
            'App\\Controller\\PromotionController::modifier' => '?',
            'App\\Controller\\PromotionController::supprimer' => '?',
            'App\\Controller\\RegistrationController::editPass' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\RespoController::index' => '?',
            'App\\Controller\\RespoController::produit' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SupplementsController::activer' => '?',
            'App\\Controller\\SupplementsController::index' => '?',
            'App\\Controller\\SupplementsController::supprimer' => '?',
            'App\\Controller\\TabClientsController::index' => '?',
            'App\\Controller\\VacanceFermetureController::delete' => '?',
            'App\\Controller\\VacanceFermetureController::edit' => '?',
            'App\\Controller\\VacanceFermetureController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AvisController:new' => '?',
            'App\\Controller\\CategoriesController:activer' => '?',
            'App\\Controller\\CategoriesController:activerCat' => '?',
            'App\\Controller\\CategoriesController:categorie' => '?',
            'App\\Controller\\CategoriesController:deleteImage' => '?',
            'App\\Controller\\CategoriesController:modifierCategorie' => '?',
            'App\\Controller\\CategoriesController:modifierProduit' => '?',
            'App\\Controller\\CategoriesController:produit' => '?',
            'App\\Controller\\CategoriesController:showPro' => '?',
            'App\\Controller\\CategoriesController:supprimer' => '?',
            'App\\Controller\\CategoriesController:supprimerCat' => '?',
            'App\\Controller\\ClandarController:delete' => '?',
            'App\\Controller\\ClandarController:edit' => '?',
            'App\\Controller\\ClandarController:index' => '?',
            'App\\Controller\\ClandarController:show' => '?',
            'App\\Controller\\CommandeController:aa' => '?',
            'App\\Controller\\CommandeController:index' => '?',
            'App\\Controller\\CommandeController:prepare' => '?',
            'App\\Controller\\ContactController:show' => '?',
            'App\\Controller\\HomeController:Client' => '?',
            'App\\Controller\\HomeController:Info' => '?',
            'App\\Controller\\HomeController:Valider' => '?',
            'App\\Controller\\HomeController:add' => '?',
            'App\\Controller\\HomeController:cal' => '?',
            'App\\Controller\\HomeController:categories' => '?',
            'App\\Controller\\HomeController:commands' => '?',
            'App\\Controller\\HomeController:panier' => '?',
            'App\\Controller\\HomeController:remove' => '?',
            'App\\Controller\\HomeController:stat' => '?',
            'App\\Controller\\HomeController:temp' => '?',
            'App\\Controller\\HomeController:utilisateurs' => '?',
            'App\\Controller\\InsclientController:index' => '?',
            'App\\Controller\\InsclientController:login' => '?',
            'App\\Controller\\InsclientController:produit' => '?',
            'App\\Controller\\InsclientController:show' => '?',
            'App\\Controller\\InsclientController:showPro' => '?',
            'App\\Controller\\InsclientController:showetat' => '?',
            'App\\Controller\\InsclientController:showsup' => '?',
            'App\\Controller\\PromotionController:index' => '?',
            'App\\Controller\\PromotionController:modifier' => '?',
            'App\\Controller\\PromotionController:supprimer' => '?',
            'App\\Controller\\RegistrationController:editPass' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\RespoController:index' => '?',
            'App\\Controller\\RespoController:produit' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SupplementsController:activer' => '?',
            'App\\Controller\\SupplementsController:index' => '?',
            'App\\Controller\\SupplementsController:supprimer' => '?',
            'App\\Controller\\TabClientsController:index' => '?',
            'App\\Controller\\VacanceFermetureController:delete' => '?',
            'App\\Controller\\VacanceFermetureController:edit' => '?',
            'App\\Controller\\VacanceFermetureController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
