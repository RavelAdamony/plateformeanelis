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

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/yearbook')) {
            // application_yearbook_listmessages
            if ($pathinfo === '/yearbook/list') {
                return array (  '_controller' => 'Application\\YearbookBundle\\Controller\\DefaultController::listAction',  '_route' => 'application_yearbook_listmessages',);
            }

            // application_yearbook_newmessage
            if (0 === strpos($pathinfo, '/yearbook/new') && preg_match('#^/yearbook/new/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'application_yearbook_newmessage')), array (  '_controller' => 'Application\\YearbookBundle\\Controller\\DefaultController::addAction',));
            }

            // application_yearbook_delete
            if (preg_match('#^/yearbook/(?P<id>\\d*)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'application_yearbook_delete')), array (  '_controller' => 'Application\\YearbookBundle\\Controller\\DefaultController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/career')) {
                // application_career_homepage
                if ($pathinfo === '/career') {
                    return array (  '_controller' => 'Application\\CareerBundle\\Controller\\DefaultController::indexAction',  '_route' => 'application_career_homepage',);
                }

                // application_career_new
                if ($pathinfo === '/career/new') {
                    return array (  '_controller' => 'Application\\CareerBundle\\Controller\\DefaultController::addAction',  '_route' => 'application_career_new',);
                }

                // application_career_edit
                if (preg_match('#^/career/(?P<id>\\d*)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'application_career_edit')), array (  '_controller' => 'Application\\CareerBundle\\Controller\\DefaultController::editAction',));
                }

                // application_career_delete
                if (preg_match('#^/career/(?P<id>\\d*)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'application_career_delete')), array (  '_controller' => 'Application\\CareerBundle\\Controller\\DefaultController::deleteAction',));
                }

            }

            // application_chat_homepage
            if ($pathinfo === '/chat') {
                return array (  '_controller' => 'Application\\ChatBundle\\Controller\\DefaultController::indexAction',  '_route' => 'application_chat_homepage',);
            }

            if (0 === strpos($pathinfo, '/cotisation')) {
                // application_cotisation_homepage
                if ($pathinfo === '/cotisation') {
                    return array (  '_controller' => 'Application\\CotisationBundle\\Controller\\CotisationController::indexAction',  '_route' => 'application_cotisation_homepage',);
                }

                // application_cotisation_new
                if ($pathinfo === '/cotisation') {
                    return array (  '_controller' => 'Application\\CotisationBundle\\Controller\\CotisationController::indexAction',  '_route' => 'application_cotisation_new',);
                }

                // application_cotisation_invoice_get
                if (0 === strpos($pathinfo, '/cotisation/invoice') && preg_match('#^/cotisation/invoice/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'application_cotisation_invoice_get')), array (  '_controller' => 'ApplicationCotisationBundle:Invoice:get',));
                }

                // application_cotisation_delete
                if (preg_match('#^/cotisation/(?P<id>\\d*)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'application_cotisation_delete')), array (  '_controller' => 'Application\\CotisationBundle\\Controller\\CotisationController::deleteAction',));
                }

                // application_cotisation_payer_paypal
                if (preg_match('#^/cotisation/(?P<year>[^/]++)/pay$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'application_cotisation_payer_paypal')), array (  '_controller' => 'Application\\CotisationBundle\\Controller\\CotisationController::createPaymentAction',));
                }

                // application_cotisation_success_paypal
                if (preg_match('#^/cotisation/(?P<year>[^/]++)/paypalOK$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'application_cotisation_success_paypal')), array (  '_controller' => 'Application\\CotisationBundle\\Controller\\CotisationController::paypalPaymentSuccessAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // admin_cotisation_relancer
            if (0 === strpos($pathinfo, '/admin/cotisation/relancer') && preg_match('#^/admin/cotisation/relancer/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cotisation_relancer')), array (  '_controller' => 'Application\\CotisationBundle\\Controller\\CotisationController::relancerAction',));
            }

            // application_annuaire_homepage
            if ($pathinfo === '/annuaire') {
                return array (  '_controller' => 'Application\\AnnuaireBundle\\Controller\\UserController::statsAction',  '_route' => 'application_annuaire_homepage',);
            }

        }

        // application_main_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'application_main_homepage');
            }

            return array (  '_controller' => 'Application\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'application_main_homepage',);
        }

        // application_main_help
        if ($pathinfo === '/aide') {
            return array (  '_controller' => 'Application\\MainBundle\\Controller\\DefaultController::aideAction',  '_route' => 'application_main_help',);
        }

        if (0 === strpos($pathinfo, '/profil')) {
            // user_show_profile
            if (preg_match('#^/profil/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show_profile')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\ProfilController::showAction',));
            }

            // user_edit_profile
            if (preg_match('#^/profil/(?P<id>\\d*)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit_profile')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\ProfilController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'Admin\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Admin\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'Admin\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
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

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/a')) {
                if (0 === strpos($pathinfo, '/admin/admin/user')) {
                    if (0 === strpos($pathinfo, '/admin/admin/user/user')) {
                        // admin_admin_user_user_list
                        if ($pathinfo === '/admin/admin/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_admin_user_user_list',  '_route' => 'admin_admin_user_user_list',);
                        }

                        // admin_admin_user_user_create
                        if ($pathinfo === '/admin/admin/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_admin_user_user_create',  '_route' => 'admin_admin_user_user_create',);
                        }

                        // admin_admin_user_user_batch
                        if ($pathinfo === '/admin/admin/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_admin_user_user_batch',  '_route' => 'admin_admin_user_user_batch',);
                        }

                        // admin_admin_user_user_edit
                        if (preg_match('#^/admin/admin/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_admin_user_user_edit',));
                        }

                        // admin_admin_user_user_delete
                        if (preg_match('#^/admin/admin/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_admin_user_user_delete',));
                        }

                        // admin_admin_user_user_show
                        if (preg_match('#^/admin/admin/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_admin_user_user_show',));
                        }

                        // admin_admin_user_user_export
                        if ($pathinfo === '/admin/admin/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_admin_user_user_export',  '_route' => 'admin_admin_user_user_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/admin/user/parameters')) {
                        // admin_admin_user_parameters_list
                        if ($pathinfo === '/admin/admin/user/parameters/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin_user.admin.parameters',  '_sonata_name' => 'admin_admin_user_parameters_list',  '_route' => 'admin_admin_user_parameters_list',);
                        }

                        // admin_admin_user_parameters_create
                        if ($pathinfo === '/admin/admin/user/parameters/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin_user.admin.parameters',  '_sonata_name' => 'admin_admin_user_parameters_create',  '_route' => 'admin_admin_user_parameters_create',);
                        }

                        // admin_admin_user_parameters_batch
                        if ($pathinfo === '/admin/admin/user/parameters/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin_user.admin.parameters',  '_sonata_name' => 'admin_admin_user_parameters_batch',  '_route' => 'admin_admin_user_parameters_batch',);
                        }

                        // admin_admin_user_parameters_edit
                        if (preg_match('#^/admin/admin/user/parameters/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_parameters_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin_user.admin.parameters',  '_sonata_name' => 'admin_admin_user_parameters_edit',));
                        }

                        // admin_admin_user_parameters_delete
                        if (preg_match('#^/admin/admin/user/parameters/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_parameters_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin_user.admin.parameters',  '_sonata_name' => 'admin_admin_user_parameters_delete',));
                        }

                        // admin_admin_user_parameters_show
                        if (preg_match('#^/admin/admin/user/parameters/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_parameters_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin_user.admin.parameters',  '_sonata_name' => 'admin_admin_user_parameters_show',));
                        }

                        // admin_admin_user_parameters_export
                        if ($pathinfo === '/admin/admin/user/parameters/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin_user.admin.parameters',  '_sonata_name' => 'admin_admin_user_parameters_export',  '_route' => 'admin_admin_user_parameters_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/admin/user/events')) {
                        // admin_admin_user_events_list
                        if ($pathinfo === '/admin/admin/user/events/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin_user.admin.events',  '_sonata_name' => 'admin_admin_user_events_list',  '_route' => 'admin_admin_user_events_list',);
                        }

                        // admin_admin_user_events_create
                        if ($pathinfo === '/admin/admin/user/events/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin_user.admin.events',  '_sonata_name' => 'admin_admin_user_events_create',  '_route' => 'admin_admin_user_events_create',);
                        }

                        // admin_admin_user_events_batch
                        if ($pathinfo === '/admin/admin/user/events/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin_user.admin.events',  '_sonata_name' => 'admin_admin_user_events_batch',  '_route' => 'admin_admin_user_events_batch',);
                        }

                        // admin_admin_user_events_edit
                        if (preg_match('#^/admin/admin/user/events/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_events_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin_user.admin.events',  '_sonata_name' => 'admin_admin_user_events_edit',));
                        }

                        // admin_admin_user_events_delete
                        if (preg_match('#^/admin/admin/user/events/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_events_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin_user.admin.events',  '_sonata_name' => 'admin_admin_user_events_delete',));
                        }

                        // admin_admin_user_events_show
                        if (preg_match('#^/admin/admin/user/events/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_events_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin_user.admin.events',  '_sonata_name' => 'admin_admin_user_events_show',));
                        }

                        // admin_admin_user_events_export
                        if ($pathinfo === '/admin/admin/user/events/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin_user.admin.events',  '_sonata_name' => 'admin_admin_user_events_export',  '_route' => 'admin_admin_user_events_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/admin/user/newsletter')) {
                        // admin_admin_user_newsletter_list
                        if ($pathinfo === '/admin/admin/user/newsletter/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin_user.admin.newsletter',  '_sonata_name' => 'admin_admin_user_newsletter_list',  '_route' => 'admin_admin_user_newsletter_list',);
                        }

                        // admin_admin_user_newsletter_create
                        if ($pathinfo === '/admin/admin/user/newsletter/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin_user.admin.newsletter',  '_sonata_name' => 'admin_admin_user_newsletter_create',  '_route' => 'admin_admin_user_newsletter_create',);
                        }

                        // admin_admin_user_newsletter_batch
                        if ($pathinfo === '/admin/admin/user/newsletter/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin_user.admin.newsletter',  '_sonata_name' => 'admin_admin_user_newsletter_batch',  '_route' => 'admin_admin_user_newsletter_batch',);
                        }

                        // admin_admin_user_newsletter_edit
                        if (preg_match('#^/admin/admin/user/newsletter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_newsletter_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin_user.admin.newsletter',  '_sonata_name' => 'admin_admin_user_newsletter_edit',));
                        }

                        // admin_admin_user_newsletter_delete
                        if (preg_match('#^/admin/admin/user/newsletter/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_newsletter_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin_user.admin.newsletter',  '_sonata_name' => 'admin_admin_user_newsletter_delete',));
                        }

                        // admin_admin_user_newsletter_show
                        if (preg_match('#^/admin/admin/user/newsletter/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_newsletter_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin_user.admin.newsletter',  '_sonata_name' => 'admin_admin_user_newsletter_show',));
                        }

                        // admin_admin_user_newsletter_export
                        if ($pathinfo === '/admin/admin/user/newsletter/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin_user.admin.newsletter',  '_sonata_name' => 'admin_admin_user_newsletter_export',  '_route' => 'admin_admin_user_newsletter_export',);
                        }

                        // admin_admin_user_newsletter_mailjetexport
                        if (preg_match('#^/admin/admin/user/newsletter/(?P<id>[^/]++)/mailjetexport$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_newsletter_mailjetexport')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::mailjetexportAction',  '_sonata_admin' => 'admin_user.admin.newsletter',  '_sonata_name' => 'admin_admin_user_newsletter_mailjetexport',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/application')) {
                    if (0 === strpos($pathinfo, '/admin/application/c')) {
                        if (0 === strpos($pathinfo, '/admin/application/cotisation')) {
                            if (0 === strpos($pathinfo, '/admin/application/cotisation/yearcotisation')) {
                                // admin_application_cotisation_yearcotisation_list
                                if ($pathinfo === '/admin/application/cotisation/yearcotisation/list') {
                                    return array (  '_controller' => 'Application\\CotisationBundle\\Controller\\YearCotisationAdminController::listAction',  '_sonata_admin' => 'application_cotisation.admin.year_cotisation',  '_sonata_name' => 'admin_application_cotisation_yearcotisation_list',  '_route' => 'admin_application_cotisation_yearcotisation_list',);
                                }

                                // admin_application_cotisation_yearcotisation_create
                                if ($pathinfo === '/admin/application/cotisation/yearcotisation/create') {
                                    return array (  '_controller' => 'Application\\CotisationBundle\\Controller\\YearCotisationAdminController::createAction',  '_sonata_admin' => 'application_cotisation.admin.year_cotisation',  '_sonata_name' => 'admin_application_cotisation_yearcotisation_create',  '_route' => 'admin_application_cotisation_yearcotisation_create',);
                                }

                                // admin_application_cotisation_yearcotisation_batch
                                if ($pathinfo === '/admin/application/cotisation/yearcotisation/batch') {
                                    return array (  '_controller' => 'Application\\CotisationBundle\\Controller\\YearCotisationAdminController::batchAction',  '_sonata_admin' => 'application_cotisation.admin.year_cotisation',  '_sonata_name' => 'admin_application_cotisation_yearcotisation_batch',  '_route' => 'admin_application_cotisation_yearcotisation_batch',);
                                }

                                // admin_application_cotisation_yearcotisation_edit
                                if (preg_match('#^/admin/application/cotisation/yearcotisation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_cotisation_yearcotisation_edit')), array (  '_controller' => 'Application\\CotisationBundle\\Controller\\YearCotisationAdminController::editAction',  '_sonata_admin' => 'application_cotisation.admin.year_cotisation',  '_sonata_name' => 'admin_application_cotisation_yearcotisation_edit',));
                                }

                                // admin_application_cotisation_yearcotisation_delete
                                if (preg_match('#^/admin/application/cotisation/yearcotisation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_cotisation_yearcotisation_delete')), array (  '_controller' => 'Application\\CotisationBundle\\Controller\\YearCotisationAdminController::deleteAction',  '_sonata_admin' => 'application_cotisation.admin.year_cotisation',  '_sonata_name' => 'admin_application_cotisation_yearcotisation_delete',));
                                }

                                // admin_application_cotisation_yearcotisation_show
                                if (preg_match('#^/admin/application/cotisation/yearcotisation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_cotisation_yearcotisation_show')), array (  '_controller' => 'Application\\CotisationBundle\\Controller\\YearCotisationAdminController::showAction',  '_sonata_admin' => 'application_cotisation.admin.year_cotisation',  '_sonata_name' => 'admin_application_cotisation_yearcotisation_show',));
                                }

                                // admin_application_cotisation_yearcotisation_export
                                if ($pathinfo === '/admin/application/cotisation/yearcotisation/export') {
                                    return array (  '_controller' => 'Application\\CotisationBundle\\Controller\\YearCotisationAdminController::exportAction',  '_sonata_admin' => 'application_cotisation.admin.year_cotisation',  '_sonata_name' => 'admin_application_cotisation_yearcotisation_export',  '_route' => 'admin_application_cotisation_yearcotisation_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/application/cotisation/cotisation')) {
                                // admin_application_cotisation_cotisation_list
                                if ($pathinfo === '/admin/application/cotisation/cotisation/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.cotisation',  '_sonata_name' => 'admin_application_cotisation_cotisation_list',  '_route' => 'admin_application_cotisation_cotisation_list',);
                                }

                                // admin_application_cotisation_cotisation_create
                                if ($pathinfo === '/admin/application/cotisation/cotisation/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.cotisation',  '_sonata_name' => 'admin_application_cotisation_cotisation_create',  '_route' => 'admin_application_cotisation_cotisation_create',);
                                }

                                // admin_application_cotisation_cotisation_batch
                                if ($pathinfo === '/admin/application/cotisation/cotisation/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.cotisation',  '_sonata_name' => 'admin_application_cotisation_cotisation_batch',  '_route' => 'admin_application_cotisation_cotisation_batch',);
                                }

                                // admin_application_cotisation_cotisation_edit
                                if (preg_match('#^/admin/application/cotisation/cotisation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_cotisation_cotisation_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.cotisation',  '_sonata_name' => 'admin_application_cotisation_cotisation_edit',));
                                }

                                // admin_application_cotisation_cotisation_delete
                                if (preg_match('#^/admin/application/cotisation/cotisation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_cotisation_cotisation_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.cotisation',  '_sonata_name' => 'admin_application_cotisation_cotisation_delete',));
                                }

                                // admin_application_cotisation_cotisation_show
                                if (preg_match('#^/admin/application/cotisation/cotisation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_cotisation_cotisation_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.cotisation',  '_sonata_name' => 'admin_application_cotisation_cotisation_show',));
                                }

                                // admin_application_cotisation_cotisation_export
                                if ($pathinfo === '/admin/application/cotisation/cotisation/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.cotisation',  '_sonata_name' => 'admin_application_cotisation_cotisation_export',  '_route' => 'admin_application_cotisation_cotisation_export',);
                                }

                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/application/chat/message')) {
                            // admin_application_chat_message_list
                            if ($pathinfo === '/admin/application/chat/message/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_application_chat_message_list',  '_route' => 'admin_application_chat_message_list',);
                            }

                            // admin_application_chat_message_create
                            if ($pathinfo === '/admin/application/chat/message/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_application_chat_message_create',  '_route' => 'admin_application_chat_message_create',);
                            }

                            // admin_application_chat_message_batch
                            if ($pathinfo === '/admin/application/chat/message/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_application_chat_message_batch',  '_route' => 'admin_application_chat_message_batch',);
                            }

                            // admin_application_chat_message_edit
                            if (preg_match('#^/admin/application/chat/message/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_chat_message_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_application_chat_message_edit',));
                            }

                            // admin_application_chat_message_delete
                            if (preg_match('#^/admin/application/chat/message/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_chat_message_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_application_chat_message_delete',));
                            }

                            // admin_application_chat_message_show
                            if (preg_match('#^/admin/application/chat/message/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_chat_message_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_application_chat_message_show',));
                            }

                            // admin_application_chat_message_export
                            if ($pathinfo === '/admin/application/chat/message/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_application_chat_message_export',  '_route' => 'admin_application_chat_message_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/application/career')) {
                            if (0 === strpos($pathinfo, '/admin/application/career/typecareer')) {
                                // admin_application_career_typecareer_list
                                if ($pathinfo === '/admin/application/career/typecareer/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.typecareer',  '_sonata_name' => 'admin_application_career_typecareer_list',  '_route' => 'admin_application_career_typecareer_list',);
                                }

                                // admin_application_career_typecareer_create
                                if ($pathinfo === '/admin/application/career/typecareer/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.typecareer',  '_sonata_name' => 'admin_application_career_typecareer_create',  '_route' => 'admin_application_career_typecareer_create',);
                                }

                                // admin_application_career_typecareer_batch
                                if ($pathinfo === '/admin/application/career/typecareer/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.typecareer',  '_sonata_name' => 'admin_application_career_typecareer_batch',  '_route' => 'admin_application_career_typecareer_batch',);
                                }

                                // admin_application_career_typecareer_edit
                                if (preg_match('#^/admin/application/career/typecareer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_career_typecareer_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.typecareer',  '_sonata_name' => 'admin_application_career_typecareer_edit',));
                                }

                                // admin_application_career_typecareer_delete
                                if (preg_match('#^/admin/application/career/typecareer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_career_typecareer_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.typecareer',  '_sonata_name' => 'admin_application_career_typecareer_delete',));
                                }

                                // admin_application_career_typecareer_show
                                if (preg_match('#^/admin/application/career/typecareer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_career_typecareer_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.typecareer',  '_sonata_name' => 'admin_application_career_typecareer_show',));
                                }

                                // admin_application_career_typecareer_export
                                if ($pathinfo === '/admin/application/career/typecareer/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.typecareer',  '_sonata_name' => 'admin_application_career_typecareer_export',  '_route' => 'admin_application_career_typecareer_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/application/career/career')) {
                                // admin_application_career_career_list
                                if ($pathinfo === '/admin/application/career/career/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'application_career.admin.career',  '_sonata_name' => 'admin_application_career_career_list',  '_route' => 'admin_application_career_career_list',);
                                }

                                // admin_application_career_career_create
                                if ($pathinfo === '/admin/application/career/career/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'application_career.admin.career',  '_sonata_name' => 'admin_application_career_career_create',  '_route' => 'admin_application_career_career_create',);
                                }

                                // admin_application_career_career_batch
                                if ($pathinfo === '/admin/application/career/career/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'application_career.admin.career',  '_sonata_name' => 'admin_application_career_career_batch',  '_route' => 'admin_application_career_career_batch',);
                                }

                                // admin_application_career_career_edit
                                if (preg_match('#^/admin/application/career/career/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_career_career_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'application_career.admin.career',  '_sonata_name' => 'admin_application_career_career_edit',));
                                }

                                // admin_application_career_career_delete
                                if (preg_match('#^/admin/application/career/career/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_career_career_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'application_career.admin.career',  '_sonata_name' => 'admin_application_career_career_delete',));
                                }

                                // admin_application_career_career_show
                                if (preg_match('#^/admin/application/career/career/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_career_career_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'application_career.admin.career',  '_sonata_name' => 'admin_application_career_career_show',));
                                }

                                // admin_application_career_career_export
                                if ($pathinfo === '/admin/application/career/career/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'application_career.admin.career',  '_sonata_name' => 'admin_application_career_career_export',  '_route' => 'admin_application_career_career_export',);
                                }

                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/application/yearbook/yearbook')) {
                        // admin_application_yearbook_yearbook_list
                        if ($pathinfo === '/admin/application/yearbook/yearbook/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.yearbook',  '_sonata_name' => 'admin_application_yearbook_yearbook_list',  '_route' => 'admin_application_yearbook_yearbook_list',);
                        }

                        // admin_application_yearbook_yearbook_create
                        if ($pathinfo === '/admin/application/yearbook/yearbook/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.yearbook',  '_sonata_name' => 'admin_application_yearbook_yearbook_create',  '_route' => 'admin_application_yearbook_yearbook_create',);
                        }

                        // admin_application_yearbook_yearbook_batch
                        if ($pathinfo === '/admin/application/yearbook/yearbook/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.yearbook',  '_sonata_name' => 'admin_application_yearbook_yearbook_batch',  '_route' => 'admin_application_yearbook_yearbook_batch',);
                        }

                        // admin_application_yearbook_yearbook_edit
                        if (preg_match('#^/admin/application/yearbook/yearbook/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_yearbook_yearbook_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.yearbook',  '_sonata_name' => 'admin_application_yearbook_yearbook_edit',));
                        }

                        // admin_application_yearbook_yearbook_delete
                        if (preg_match('#^/admin/application/yearbook/yearbook/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_yearbook_yearbook_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.yearbook',  '_sonata_name' => 'admin_application_yearbook_yearbook_delete',));
                        }

                        // admin_application_yearbook_yearbook_show
                        if (preg_match('#^/admin/application/yearbook/yearbook/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_yearbook_yearbook_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.yearbook',  '_sonata_name' => 'admin_application_yearbook_yearbook_show',));
                        }

                        // admin_application_yearbook_yearbook_export
                        if ($pathinfo === '/admin/application/yearbook/yearbook/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.yearbook',  '_sonata_name' => 'admin_application_yearbook_yearbook_export',  '_route' => 'admin_application_yearbook_yearbook_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/application/yearbook/yearbookmessages')) {
                            // admin_application_yearbook_yearbookmessages_list
                            if ($pathinfo === '/admin/application/yearbook/yearbookmessages/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.yearbookmessages',  '_sonata_name' => 'admin_application_yearbook_yearbookmessages_list',  '_route' => 'admin_application_yearbook_yearbookmessages_list',);
                            }

                            // admin_application_yearbook_yearbookmessages_create
                            if ($pathinfo === '/admin/application/yearbook/yearbookmessages/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.yearbookmessages',  '_sonata_name' => 'admin_application_yearbook_yearbookmessages_create',  '_route' => 'admin_application_yearbook_yearbookmessages_create',);
                            }

                            // admin_application_yearbook_yearbookmessages_batch
                            if ($pathinfo === '/admin/application/yearbook/yearbookmessages/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.yearbookmessages',  '_sonata_name' => 'admin_application_yearbook_yearbookmessages_batch',  '_route' => 'admin_application_yearbook_yearbookmessages_batch',);
                            }

                            // admin_application_yearbook_yearbookmessages_edit
                            if (preg_match('#^/admin/application/yearbook/yearbookmessages/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_yearbook_yearbookmessages_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.yearbookmessages',  '_sonata_name' => 'admin_application_yearbook_yearbookmessages_edit',));
                            }

                            // admin_application_yearbook_yearbookmessages_delete
                            if (preg_match('#^/admin/application/yearbook/yearbookmessages/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_yearbook_yearbookmessages_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.yearbookmessages',  '_sonata_name' => 'admin_application_yearbook_yearbookmessages_delete',));
                            }

                            // admin_application_yearbook_yearbookmessages_show
                            if (preg_match('#^/admin/application/yearbook/yearbookmessages/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_application_yearbook_yearbookmessages_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.yearbookmessages',  '_sonata_name' => 'admin_application_yearbook_yearbookmessages_show',));
                            }

                            // admin_application_yearbook_yearbookmessages_export
                            if ($pathinfo === '/admin/application/yearbook/yearbookmessages/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.yearbookmessages',  '_sonata_name' => 'admin_application_yearbook_yearbookmessages_export',  '_route' => 'admin_application_yearbook_yearbookmessages_export',);
                            }

                        }

                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
