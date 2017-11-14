<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // pff_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pff_user_homepage')), array (  '_controller' => 'PFF\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        // pff_listeUtilisateur
        if ($pathinfo === '/listeUtil') {
            return array (  '_controller' => 'PFF\\UserBundle\\Controller\\DefaultController::listeUtilAction',  '_route' => 'pff_listeUtilisateur',);
        }

        // pff_user_supprime
        if (0 === strpos($pathinfo, '/suppUtil') && preg_match('#^/suppUtil/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pff_user_supprime')), array (  '_controller' => 'PFF\\UserBundle\\Controller\\DefaultController::suppUtilAction',));
        }

        // pff_bourse_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pff_bourse_homepage')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\DefaultController::indextestAction',));
        }

        // layout
        if ($pathinfo === '/layout') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\DefaultController::layoutAction',  '_route' => 'layout',);
        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\DefaultController::listeBeneAction',  '_route' => 'index',);
        }

        // widgets
        if ($pathinfo === '/widgets') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\DefaultController::widgetsAction',  '_route' => 'widgets',);
        }

        // gallery
        if ($pathinfo === '/gallery') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\DefaultController::galleryAction',  '_route' => 'gallery',);
        }

        // beneficiaire_ajout
        if ($pathinfo === '/ajout') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\BeneficiaireController::ajoutAction',  '_route' => 'beneficiaire_ajout',);
        }

        // beneficiaire_liste
        if ($pathinfo === '/listeBenef') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\BeneficiaireController::listeBenefAction',  '_route' => 'beneficiaire_liste',);
        }

        // beneficiaire_modifier
        if (0 === strpos($pathinfo, '/editBenef') && preg_match('#^/editBenef/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'beneficiaire_modifier')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\BeneficiaireController::editBenefAction',));
        }

        // beneficiaire_supprime
        if (0 === strpos($pathinfo, '/suppBenef') && preg_match('#^/suppBenef/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'beneficiaire_supprime')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\BeneficiaireController::suppBenefAction',));
        }

        // beneficiaire_detail
        if (0 === strpos($pathinfo, '/detailBenef') && preg_match('#^/detailBenef/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'beneficiaire_detail')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\BeneficiaireController::detailBenefAction',));
        }

        // universite_ajout
        if ($pathinfo === '/adduniv') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\UnivController::addunivAction',  '_route' => 'universite_ajout',);
        }

        // universite_liste
        if ($pathinfo === '/listeUniv') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\UnivController::listeUnivAction',  '_route' => 'universite_liste',);
        }

        // universite_modifier
        if (0 === strpos($pathinfo, '/editUniv') && preg_match('#^/editUniv/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'universite_modifier')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\UnivController::editUnivAction',));
        }

        // universite_supprime
        if (0 === strpos($pathinfo, '/suppUniv') && preg_match('#^/suppUniv/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'universite_supprime')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\UnivController::suppUnivAction',));
        }

        // faculte_ajout
        if ($pathinfo === '/formFact') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\FaculteController::formFactAction',  '_route' => 'faculte_ajout',);
        }

        // faculte_liste
        if ($pathinfo === '/listeFact') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\FaculteController::listeFactAction',  '_route' => 'faculte_liste',);
        }

        // faculte_modifier
        if (0 === strpos($pathinfo, '/editer') && preg_match('#^/editer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'faculte_modifier')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\FaculteController::editerAction',));
        }

        // faculte_supprime
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'faculte_supprime')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\FaculteController::supprimerAction',));
        }

        // fonds_ajout
        if ($pathinfo === '/addFonds') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\FondsController::addFondsAction',  '_route' => 'fonds_ajout',);
        }

        // fonds_liste
        if ($pathinfo === '/listeFonds') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\FondsController::listeFondsAction',  '_route' => 'fonds_liste',);
        }

        // fonds_modifier
        if (0 === strpos($pathinfo, '/editFonds') && preg_match('#^/editFonds/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fonds_modifier')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\FondsController::editFondsAction',));
        }

        // fonds_supprime
        if (0 === strpos($pathinfo, '/suppFonds') && preg_match('#^/suppFonds/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fonds_supprime')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\FondsController::suppFondsAction',));
        }

        // fonds_detail
        if (0 === strpos($pathinfo, '/detailFonds') && preg_match('#^/detailFonds/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fonds_detail')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\FondsController::detailFondsAction',));
        }

        // formation_ajout
        if (0 === strpos($pathinfo, '/addForm') && preg_match('#^/addForm/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_ajout')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\FormationController::addFormAction',));
        }

        // formation_liste
        if ($pathinfo === '/listeForm') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\FormationController::listeFormAction',  '_route' => 'formation_liste',);
        }

        // formation_modifier
        if (0 === strpos($pathinfo, '/editForm') && preg_match('#^/editForm/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_modifier')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\FormationController::editFormAction',));
        }

        // formation_supprime
        if (0 === strpos($pathinfo, '/suppForm') && preg_match('#^/suppForm/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_supprime')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\FormationController::suppFormAction',));
        }

        // formation_detail
        if (0 === strpos($pathinfo, '/detailForm') && preg_match('#^/detailForm/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_detail')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\FormationController::detailFormAction',));
        }

        // benef_form_hist
        if ($pathinfo === '/bformhist') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\FormationController::bformationAction',  '_route' => 'benef_form_hist',);
        }

        // historique_ajout
        if (0 === strpos($pathinfo, '/addHist') && preg_match('#^/addHist/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'historique_ajout')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\HistoriqueController::addHistAction',));
        }

        // benef_fonds_hist
        if (0 === strpos($pathinfo, '/bfondshist') && preg_match('#^/bfondshist/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'benef_fonds_hist')), array (  '_controller' => 'PFF\\BourseBundle\\Controller\\HistoriqueController::bFondsHistAction',));
        }

        // historique_liste
        if ($pathinfo === '/listeHist') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\HistoriqueController::listBeneFondAction',  '_route' => 'historique_liste',);
        }

        // pff_statistique
        if ($pathinfo === '/statistique') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\BeneficiaireController::statAction',  '_route' => 'pff_statistique',);
        }

        // pff_user
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\TestController::testAction',  '_route' => 'pff_user',);
        }

        // pff_utilisateurIns
        if ($pathinfo === '/detailIns') {
            return array (  '_controller' => 'PFF\\BourseBundle\\Controller\\TestController::detailAction',  '_route' => 'pff_utilisateurIns',);
        }

        // homepage
        if ($pathinfo === '/gjg') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

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

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\securityController::loginAction',  '_route' => 'login',);
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\registrationController::registerAction',  '_route' => 'register',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
