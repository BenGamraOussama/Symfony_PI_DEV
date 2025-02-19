<?php

namespace ContainerOlnL8E6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NJTKSq8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NJTKSq8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NJTKSq8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\ActiviteController::delete' => ['privates', '.service_locator.DgVI9c3', 'get_ServiceLocator_DgVI9c3Service', true],
            'App\\Controller\\ActiviteController::edit' => ['privates', '.service_locator.DgVI9c3', 'get_ServiceLocator_DgVI9c3Service', true],
            'App\\Controller\\ActiviteController::index' => ['privates', '.service_locator.QtPyWR6', 'get_ServiceLocator_QtPyWR6Service', true],
            'App\\Controller\\ActiviteController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ActiviteController::show' => ['privates', '.service_locator.DvuZ952', 'get_ServiceLocator_DvuZ952Service', true],
            'App\\Controller\\AdminController::index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\CommandeController::ajout2' => ['privates', '.service_locator.iR5i4O4', 'get_ServiceLocator_IR5i4O4Service', true],
            'App\\Controller\\CommandeController::delete' => ['privates', '.service_locator.iR5i4O4', 'get_ServiceLocator_IR5i4O4Service', true],
            'App\\Controller\\CommandeController::edit' => ['privates', '.service_locator.iR5i4O4', 'get_ServiceLocator_IR5i4O4Service', true],
            'App\\Controller\\CommandeController::index' => ['privates', '.service_locator.RXaRRrV', 'get_ServiceLocator_RXaRRrVService', true],
            'App\\Controller\\CommandeController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CommandeController::show' => ['privates', '.service_locator.TqIg1ou', 'get_ServiceLocator_TqIg1ouService', true],
            'App\\Controller\\ExerciceController::delete' => ['privates', '.service_locator.0NP03bD', 'get_ServiceLocator_0NP03bDService', true],
            'App\\Controller\\ExerciceController::edit' => ['privates', '.service_locator.0NP03bD', 'get_ServiceLocator_0NP03bDService', true],
            'App\\Controller\\ExerciceController::index' => ['privates', '.service_locator.kmw5w4s', 'get_ServiceLocator_Kmw5w4sService', true],
            'App\\Controller\\ExerciceController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ExerciceController::show' => ['privates', '.service_locator.dFXnpKl', 'get_ServiceLocator_DFXnpKlService', true],
            'App\\Controller\\LigneCommandeController::delete' => ['privates', '.service_locator.acTpigy', 'get_ServiceLocator_AcTpigyService', true],
            'App\\Controller\\LigneCommandeController::edit' => ['privates', '.service_locator.acTpigy', 'get_ServiceLocator_AcTpigyService', true],
            'App\\Controller\\LigneCommandeController::index' => ['privates', '.service_locator.YFCVwWF', 'get_ServiceLocator_YFCVwWFService', true],
            'App\\Controller\\LigneCommandeController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LigneCommandeController::show' => ['privates', '.service_locator.lT33.ht', 'get_ServiceLocator_LT33_HtService', true],
            'App\\Controller\\PatientActivityController::index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\PatientActivityController::updateStatus' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\PatientController::updateActivityStatus' => ['privates', '.service_locator.NsszSph', 'get_ServiceLocator_NsszSphService', true],
            'App\\Controller\\PatientController::viewActivities' => ['privates', '.service_locator.G_6iG_b', 'get_ServiceLocator_G6iGBService', true],
            'App\\Controller\\QuestionController::delete' => ['privates', '.service_locator.Fk8aPoM', 'get_ServiceLocator_Fk8aPoMService', true],
            'App\\Controller\\QuestionController::edit' => ['privates', '.service_locator.Fk8aPoM', 'get_ServiceLocator_Fk8aPoMService', true],
            'App\\Controller\\QuestionController::index' => ['privates', '.service_locator.vYWALu7', 'get_ServiceLocator_VYWALu7Service', true],
            'App\\Controller\\QuestionController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\QuestionController::show' => ['privates', '.service_locator.4xIyKvd', 'get_ServiceLocator_4xIyKvdService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.jpvOrpT', 'get_ServiceLocator_JpvOrpTService', true],
            'App\\Controller\\ReponseController::delete' => ['privates', '.service_locator.0488DqB', 'get_ServiceLocator_0488DqBService', true],
            'App\\Controller\\ReponseController::edit' => ['privates', '.service_locator.0488DqB', 'get_ServiceLocator_0488DqBService', true],
            'App\\Controller\\ReponseController::index' => ['privates', '.service_locator.9seJ.96', 'get_ServiceLocator_9seJ_96Service', true],
            'App\\Controller\\ReponseController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ReponseController::show' => ['privates', '.service_locator.Nf.XpWv', 'get_ServiceLocator_Nf_XpWvService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.EE0.cm9', 'get_ServiceLocator_EE0_Cm9Service', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.Z9ydiC1', 'get_ServiceLocator_Z9ydiC1Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\ActiviteController:delete' => ['privates', '.service_locator.DgVI9c3', 'get_ServiceLocator_DgVI9c3Service', true],
            'App\\Controller\\ActiviteController:edit' => ['privates', '.service_locator.DgVI9c3', 'get_ServiceLocator_DgVI9c3Service', true],
            'App\\Controller\\ActiviteController:index' => ['privates', '.service_locator.QtPyWR6', 'get_ServiceLocator_QtPyWR6Service', true],
            'App\\Controller\\ActiviteController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ActiviteController:show' => ['privates', '.service_locator.DvuZ952', 'get_ServiceLocator_DvuZ952Service', true],
            'App\\Controller\\AdminController:index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\CommandeController:ajout2' => ['privates', '.service_locator.iR5i4O4', 'get_ServiceLocator_IR5i4O4Service', true],
            'App\\Controller\\CommandeController:delete' => ['privates', '.service_locator.iR5i4O4', 'get_ServiceLocator_IR5i4O4Service', true],
            'App\\Controller\\CommandeController:edit' => ['privates', '.service_locator.iR5i4O4', 'get_ServiceLocator_IR5i4O4Service', true],
            'App\\Controller\\CommandeController:index' => ['privates', '.service_locator.RXaRRrV', 'get_ServiceLocator_RXaRRrVService', true],
            'App\\Controller\\CommandeController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CommandeController:show' => ['privates', '.service_locator.TqIg1ou', 'get_ServiceLocator_TqIg1ouService', true],
            'App\\Controller\\ExerciceController:delete' => ['privates', '.service_locator.0NP03bD', 'get_ServiceLocator_0NP03bDService', true],
            'App\\Controller\\ExerciceController:edit' => ['privates', '.service_locator.0NP03bD', 'get_ServiceLocator_0NP03bDService', true],
            'App\\Controller\\ExerciceController:index' => ['privates', '.service_locator.kmw5w4s', 'get_ServiceLocator_Kmw5w4sService', true],
            'App\\Controller\\ExerciceController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ExerciceController:show' => ['privates', '.service_locator.dFXnpKl', 'get_ServiceLocator_DFXnpKlService', true],
            'App\\Controller\\LigneCommandeController:delete' => ['privates', '.service_locator.acTpigy', 'get_ServiceLocator_AcTpigyService', true],
            'App\\Controller\\LigneCommandeController:edit' => ['privates', '.service_locator.acTpigy', 'get_ServiceLocator_AcTpigyService', true],
            'App\\Controller\\LigneCommandeController:index' => ['privates', '.service_locator.YFCVwWF', 'get_ServiceLocator_YFCVwWFService', true],
            'App\\Controller\\LigneCommandeController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LigneCommandeController:show' => ['privates', '.service_locator.lT33.ht', 'get_ServiceLocator_LT33_HtService', true],
            'App\\Controller\\PatientActivityController:index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\PatientActivityController:updateStatus' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\PatientController:updateActivityStatus' => ['privates', '.service_locator.NsszSph', 'get_ServiceLocator_NsszSphService', true],
            'App\\Controller\\PatientController:viewActivities' => ['privates', '.service_locator.G_6iG_b', 'get_ServiceLocator_G6iGBService', true],
            'App\\Controller\\QuestionController:delete' => ['privates', '.service_locator.Fk8aPoM', 'get_ServiceLocator_Fk8aPoMService', true],
            'App\\Controller\\QuestionController:edit' => ['privates', '.service_locator.Fk8aPoM', 'get_ServiceLocator_Fk8aPoMService', true],
            'App\\Controller\\QuestionController:index' => ['privates', '.service_locator.vYWALu7', 'get_ServiceLocator_VYWALu7Service', true],
            'App\\Controller\\QuestionController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\QuestionController:show' => ['privates', '.service_locator.4xIyKvd', 'get_ServiceLocator_4xIyKvdService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.jpvOrpT', 'get_ServiceLocator_JpvOrpTService', true],
            'App\\Controller\\ReponseController:delete' => ['privates', '.service_locator.0488DqB', 'get_ServiceLocator_0488DqBService', true],
            'App\\Controller\\ReponseController:edit' => ['privates', '.service_locator.0488DqB', 'get_ServiceLocator_0488DqBService', true],
            'App\\Controller\\ReponseController:index' => ['privates', '.service_locator.9seJ.96', 'get_ServiceLocator_9seJ_96Service', true],
            'App\\Controller\\ReponseController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ReponseController:show' => ['privates', '.service_locator.Nf.XpWv', 'get_ServiceLocator_Nf_XpWvService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.EE0.cm9', 'get_ServiceLocator_EE0_Cm9Service', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.Z9ydiC1', 'get_ServiceLocator_Z9ydiC1Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\ActiviteController::delete' => '?',
            'App\\Controller\\ActiviteController::edit' => '?',
            'App\\Controller\\ActiviteController::index' => '?',
            'App\\Controller\\ActiviteController::new' => '?',
            'App\\Controller\\ActiviteController::show' => '?',
            'App\\Controller\\AdminController::index' => '?',
            'App\\Controller\\CommandeController::ajout2' => '?',
            'App\\Controller\\CommandeController::delete' => '?',
            'App\\Controller\\CommandeController::edit' => '?',
            'App\\Controller\\CommandeController::index' => '?',
            'App\\Controller\\CommandeController::new' => '?',
            'App\\Controller\\CommandeController::show' => '?',
            'App\\Controller\\ExerciceController::delete' => '?',
            'App\\Controller\\ExerciceController::edit' => '?',
            'App\\Controller\\ExerciceController::index' => '?',
            'App\\Controller\\ExerciceController::new' => '?',
            'App\\Controller\\ExerciceController::show' => '?',
            'App\\Controller\\LigneCommandeController::delete' => '?',
            'App\\Controller\\LigneCommandeController::edit' => '?',
            'App\\Controller\\LigneCommandeController::index' => '?',
            'App\\Controller\\LigneCommandeController::new' => '?',
            'App\\Controller\\LigneCommandeController::show' => '?',
            'App\\Controller\\PatientActivityController::index' => '?',
            'App\\Controller\\PatientActivityController::updateStatus' => '?',
            'App\\Controller\\PatientController::updateActivityStatus' => '?',
            'App\\Controller\\PatientController::viewActivities' => '?',
            'App\\Controller\\QuestionController::delete' => '?',
            'App\\Controller\\QuestionController::edit' => '?',
            'App\\Controller\\QuestionController::index' => '?',
            'App\\Controller\\QuestionController::new' => '?',
            'App\\Controller\\QuestionController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ReponseController::delete' => '?',
            'App\\Controller\\ReponseController::edit' => '?',
            'App\\Controller\\ReponseController::index' => '?',
            'App\\Controller\\ReponseController::new' => '?',
            'App\\Controller\\ReponseController::show' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ActiviteController:delete' => '?',
            'App\\Controller\\ActiviteController:edit' => '?',
            'App\\Controller\\ActiviteController:index' => '?',
            'App\\Controller\\ActiviteController:new' => '?',
            'App\\Controller\\ActiviteController:show' => '?',
            'App\\Controller\\AdminController:index' => '?',
            'App\\Controller\\CommandeController:ajout2' => '?',
            'App\\Controller\\CommandeController:delete' => '?',
            'App\\Controller\\CommandeController:edit' => '?',
            'App\\Controller\\CommandeController:index' => '?',
            'App\\Controller\\CommandeController:new' => '?',
            'App\\Controller\\CommandeController:show' => '?',
            'App\\Controller\\ExerciceController:delete' => '?',
            'App\\Controller\\ExerciceController:edit' => '?',
            'App\\Controller\\ExerciceController:index' => '?',
            'App\\Controller\\ExerciceController:new' => '?',
            'App\\Controller\\ExerciceController:show' => '?',
            'App\\Controller\\LigneCommandeController:delete' => '?',
            'App\\Controller\\LigneCommandeController:edit' => '?',
            'App\\Controller\\LigneCommandeController:index' => '?',
            'App\\Controller\\LigneCommandeController:new' => '?',
            'App\\Controller\\LigneCommandeController:show' => '?',
            'App\\Controller\\PatientActivityController:index' => '?',
            'App\\Controller\\PatientActivityController:updateStatus' => '?',
            'App\\Controller\\PatientController:updateActivityStatus' => '?',
            'App\\Controller\\PatientController:viewActivities' => '?',
            'App\\Controller\\QuestionController:delete' => '?',
            'App\\Controller\\QuestionController:edit' => '?',
            'App\\Controller\\QuestionController:index' => '?',
            'App\\Controller\\QuestionController:new' => '?',
            'App\\Controller\\QuestionController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ReponseController:delete' => '?',
            'App\\Controller\\ReponseController:edit' => '?',
            'App\\Controller\\ReponseController:index' => '?',
            'App\\Controller\\ReponseController:new' => '?',
            'App\\Controller\\ReponseController:show' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
