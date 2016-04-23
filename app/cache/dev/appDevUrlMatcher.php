<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/projet')) {
            // projet
            if (rtrim($pathinfo, '/') === '/projet') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'projet');
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::indexAction',  '_route' => 'projet',);
            }

            // projet_show
            if (preg_match('#^/projet/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_show')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::showAction',));
            }

            // projet_new
            if ($pathinfo === '/projet/new') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::newAction',  '_route' => 'projet_new',);
            }

            // projet_create
            if ($pathinfo === '/projet/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_projet_create;
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::createAction',  '_route' => 'projet_create',);
            }
            not_projet_create:

            // projet_edit
            if (preg_match('#^/projet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_edit')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::editAction',));
            }

            // projet_update
            if (preg_match('#^/projet/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_projet_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_update')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::updateAction',));
            }
            not_projet_update:

            // projet_delete
            if (preg_match('#^/projet/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_projet_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_delete')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::deleteAction',));
            }
            not_projet_delete:

        }

        if (0 === strpos($pathinfo, '/cv')) {
            // cv
            if (rtrim($pathinfo, '/') === '/cv') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cv');
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\CvController::indexAction',  '_route' => 'cv',);
            }

            // cv_show
            if (preg_match('#^/cv/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cv_show')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\CvController::showAction',));
            }

            // cv_new
            if ($pathinfo === '/cv/new') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\CvController::newAction',  '_route' => 'cv_new',);
            }

            // cv_create
            if ($pathinfo === '/cv/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cv_create;
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\CvController::createAction',  '_route' => 'cv_create',);
            }
            not_cv_create:

            // cv_edit
            if (preg_match('#^/cv/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cv_edit')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\CvController::editAction',));
            }

            // cv_update
            if (preg_match('#^/cv/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cv_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cv_update')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\CvController::updateAction',));
            }
            not_cv_update:

            // cv_delete
            if (preg_match('#^/cv/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_cv_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cv_delete')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\CvController::deleteAction',));
            }
            not_cv_delete:

        }

        if (0 === strpos($pathinfo, '/reclamation')) {
            // reclamation
            if (rtrim($pathinfo, '/') === '/reclamation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reclamation');
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ReclamationController::indexAction',  '_route' => 'reclamation',);
            }

            // reclamation_show
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_show')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ReclamationController::showAction',));
            }

            // reclamation_new
            if ($pathinfo === '/reclamation/new') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ReclamationController::newAction',  '_route' => 'reclamation_new',);
            }

            // reclamation_create
            if ($pathinfo === '/reclamation/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reclamation_create;
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ReclamationController::createAction',  '_route' => 'reclamation_create',);
            }
            not_reclamation_create:

            // reclamation_edit
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_edit')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ReclamationController::editAction',));
            }

            // reclamation_update
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_reclamation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_update')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ReclamationController::updateAction',));
            }
            not_reclamation_update:

            // reclamation_delete
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_reclamation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_delete')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ReclamationController::deleteAction',));
            }
            not_reclamation_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

            // admin_show
            if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\AdminController::showAction',));
            }

            // admin_new
            if ($pathinfo === '/admin/new') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\AdminController::newAction',  '_route' => 'admin_new',);
            }

            // admin_create
            if ($pathinfo === '/admin/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_create;
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\AdminController::createAction',  '_route' => 'admin_create',);
            }
            not_admin_create:

            // admin_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\AdminController::editAction',));
            }

            // admin_update
            if (preg_match('#^/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_update')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\AdminController::updateAction',));
            }
            not_admin_update:

            // admin_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\AdminController::deleteAction',));
            }
            not_admin_delete:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/entreprise')) {
            // entreprise
            if (rtrim($pathinfo, '/') === '/entreprise') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'entreprise');
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\EntrepriseController::indexAction',  '_route' => 'entreprise',);
            }

            // entreprise_show
            if (preg_match('#^/entreprise/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entreprise_show')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\EntrepriseController::showAction',));
            }

            // entreprise_new
            if ($pathinfo === '/entreprise/new') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\EntrepriseController::newAction',  '_route' => 'entreprise_new',);
            }

            // entreprise_create
            if ($pathinfo === '/entreprise/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_entreprise_create;
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\EntrepriseController::createAction',  '_route' => 'entreprise_create',);
            }
            not_entreprise_create:

            // entreprise_edit
            if (preg_match('#^/entreprise/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entreprise_edit')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\EntrepriseController::editAction',));
            }

            // entreprise_update
            if (preg_match('#^/entreprise/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_entreprise_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entreprise_update')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\EntrepriseController::updateAction',));
            }
            not_entreprise_update:

            // entreprise_delete
            if (preg_match('#^/entreprise/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_entreprise_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entreprise_delete')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\EntrepriseController::deleteAction',));
            }
            not_entreprise_delete:

        }

        if (0 === strpos($pathinfo, '/jobowner')) {
            // jobowner
            if (rtrim($pathinfo, '/') === '/jobowner') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'jobowner');
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\JobownerController::indexAction',  '_route' => 'jobowner',);
            }

            // jobowner_show
            if (preg_match('#^/jobowner/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jobowner_show')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\JobownerController::showAction',));
            }

            // jobowner_new
            if ($pathinfo === '/jobowner/new') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\JobownerController::newAction',  '_route' => 'jobowner_new',);
            }

            // jobowner_create
            if ($pathinfo === '/jobowner/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_jobowner_create;
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\JobownerController::createAction',  '_route' => 'jobowner_create',);
            }
            not_jobowner_create:

            // jobowner_edit
            if (preg_match('#^/jobowner/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jobowner_edit')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\JobownerController::editAction',));
            }

            // jobowner_update
            if (preg_match('#^/jobowner/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_jobowner_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jobowner_update')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\JobownerController::updateAction',));
            }
            not_jobowner_update:

            // jobowner_delete
            if (preg_match('#^/jobowner/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_jobowner_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jobowner_delete')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\JobownerController::deleteAction',));
            }
            not_jobowner_delete:

        }

        if (0 === strpos($pathinfo, '/freelancer')) {
            // freelancer
            if (rtrim($pathinfo, '/') === '/freelancer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'freelancer');
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\FreelancerController::indexAction',  '_route' => 'freelancer',);
            }

            // freelancer_show
            if (preg_match('#^/freelancer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'freelancer_show')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\FreelancerController::showAction',));
            }

            // freelancer_new
            if ($pathinfo === '/freelancer/new') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\FreelancerController::newAction',  '_route' => 'freelancer_new',);
            }

            // freelancer_create
            if ($pathinfo === '/freelancer/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_freelancer_create;
                }

                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\FreelancerController::createAction',  '_route' => 'freelancer_create',);
            }
            not_freelancer_create:

            // freelancer_edit
            if (preg_match('#^/freelancer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'freelancer_edit')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\FreelancerController::editAction',));
            }

            // freelancer_update
            if (preg_match('#^/freelancer/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_freelancer_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'freelancer_update')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\FreelancerController::updateAction',));
            }
            not_freelancer_update:

            // freelancer_delete
            if (preg_match('#^/freelancer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_freelancer_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'freelancer_delete')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\FreelancerController::deleteAction',));
            }
            not_freelancer_delete:

        }

        // freelancer_main_profile
        if ($pathinfo === '/profi') {
            return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\DefaultController::profAction',  '_route' => 'freelancer_main_profile',);
        }

        // freelancer_main_choiceRegistration
        if ($pathinfo === '/choiceRegistration') {
            return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\DefaultController::choicesAction',  '_route' => 'freelancer_main_choiceRegistration',);
        }

        // freelancer_main_acceuil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'freelancer_main_acceuil');
            }

            return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\DefaultController::acceuilAction',  '_route' => 'freelancer_main_acceuil',);
        }

        if (0 === strpos($pathinfo, '/jobowner')) {
            // freelancer_main_addprojet
            if ($pathinfo === '/jobowner/addprojet') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::addAction',  '_route' => 'freelancer_main_addprojet',);
            }

            // freelancer_main_listencours_projet
            if ($pathinfo === '/jobowner/listprojetencours') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::listencoursAction',  '_route' => 'freelancer_main_listencours_projet',);
            }

        }

        // freelancer_main_listencoursf_projet
        if ($pathinfo === '/freelancer/listprojetencoursf') {
            return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::listencoursfAction',  '_route' => 'freelancer_main_listencoursf_projet',);
        }

        if (0 === strpos($pathinfo, '/jobowner/listprojet')) {
            // freelancer_main_list_projet
            if ($pathinfo === '/jobowner/listprojet') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::listAction',  '_route' => 'freelancer_main_list_projet',);
            }

            // freelancer_main_listtraite_projet
            if ($pathinfo === '/jobowner/listprojettraite') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::listtraiteAction',  '_route' => 'freelancer_main_listtraite_projet',);
            }

        }

        if (0 === strpos($pathinfo, '/freelancer/listprojet')) {
            // freelancer_main_listtraitef_projet
            if ($pathinfo === '/freelancer/listprojettraitef') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::listtraitefAction',  '_route' => 'freelancer_main_listtraitef_projet',);
            }

            // freelancer_main_listdispo_projet
            if ($pathinfo === '/freelancer/listprojetdispo') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::listdispoAction',  '_route' => 'freelancer_main_listdispo_projet',);
            }

        }

        if (0 === strpos($pathinfo, '/jobowner')) {
            // freelancer_main_recherche_projet
            if ($pathinfo === '/jobowner/rechercheprojet') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::searchAction',  '_route' => 'freelancer_main_recherche_projet',);
            }

            // freelancer_main_update_projet
            if (0 === strpos($pathinfo, '/jobowner/updateprojet') && preg_match('#^/jobowner/updateprojet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'freelancer_main_update_projet')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::updateAction',));
            }

            // freelancer_main_delete_projet
            if (0 === strpos($pathinfo, '/jobowner/deleteprojet') && preg_match('#^/jobowner/deleteprojet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'freelancer_main_delete_projet')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::deleteAction',));
            }

        }

        // freelancer_main_deposer_projet
        if (0 === strpos($pathinfo, '/freelancer/deposerprojet') && preg_match('#^/freelancer/deposerprojet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'freelancer_main_deposer_projet')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::deposerAction',));
        }

        if (0 === strpos($pathinfo, '/jobowner')) {
            // freelancer_main_listconfirmer_projet
            if ($pathinfo === '/jobowner/listcandidature') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::listconfirmerAction',  '_route' => 'freelancer_main_listconfirmer_projet',);
            }

            // freelancer_main_confirmer_projet
            if (0 === strpos($pathinfo, '/jobowner/confirmerprojet') && preg_match('#^/jobowner/confirmerprojet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'freelancer_main_confirmer_projet')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::confirmerAction',));
            }

            // freelancer_main_telecharger_projet
            if (0 === strpos($pathinfo, '/jobowner/telechargerprojet') && preg_match('#^/jobowner/telechargerprojet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'freelancer_main_telecharger_projet')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::telechargerAction',));
            }

        }

        if (0 === strpos($pathinfo, '/freelancer/retirercandidature')) {
            // freelancer_main_listdepose_projet
            if ($pathinfo === '/freelancer/retirercandidature') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::listprojetdeposerAction',  '_route' => 'freelancer_main_listdepose_projet',);
            }

            // freelancer_main_retirercandidature_projet
            if (preg_match('#^/freelancer/retirercandidature/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'freelancer_main_retirercandidature_projet')), array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\ProjetController::retirercandidatureAction',));
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // freelancer_registration
            if ($pathinfo === '/register/freelancer') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\RegistrationFreelancerController::registerAction',  '_route' => 'freelancer_registration',);
            }

            // jobowner_registration
            if ($pathinfo === '/register/jobowner') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\RegistrationJobownerController::registerAction',  '_route' => 'jobowner_registration',);
            }

            // admin_registration
            if ($pathinfo === '/register/admin') {
                return array (  '_controller' => 'Freelancer\\MainBundle\\Controller\\RegistrationAdminController::registerAction',  '_route' => 'admin_registration',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
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
            if ($pathinfo === '/profile/jobowner') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_show2
            if ($pathinfo === '/profile/freelancer') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show2;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::show2Action',  '_route' => 'fos_user_profile_show2',);
            }
            not_fos_user_profile_show2:

            if (0 === strpos($pathinfo, '/profile/edit')) {
                // fos_user_profile_edit
                if ($pathinfo === '/profile/editFreelancer') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }

                // fos_user_profile_edit2
                if ($pathinfo === '/profile/editJobowner') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::edit2Action',  '_route' => 'fos_user_profile_edit2',);
                }

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

        if (0 === strpos($pathinfo, '/adminS')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/adminS') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/adminS/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/adminS/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/adminS/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/adminS/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/adminS/core/get-short-object-description') && preg_match('#^/adminS/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/adminS/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/adminS/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/adminS/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/adminS/freelancer/main')) {
                if (0 === strpos($pathinfo, '/adminS/freelancer/main/entreprise')) {
                    // admin_freelancer_main_entreprise_list
                    if ($pathinfo === '/adminS/freelancer/main/entreprise/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.entreprise',  '_sonata_name' => 'admin_freelancer_main_entreprise_list',  '_route' => 'admin_freelancer_main_entreprise_list',);
                    }

                    // admin_freelancer_main_entreprise_create
                    if ($pathinfo === '/adminS/freelancer/main/entreprise/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.entreprise',  '_sonata_name' => 'admin_freelancer_main_entreprise_create',  '_route' => 'admin_freelancer_main_entreprise_create',);
                    }

                    // admin_freelancer_main_entreprise_batch
                    if ($pathinfo === '/adminS/freelancer/main/entreprise/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.entreprise',  '_sonata_name' => 'admin_freelancer_main_entreprise_batch',  '_route' => 'admin_freelancer_main_entreprise_batch',);
                    }

                    // admin_freelancer_main_entreprise_edit
                    if (preg_match('#^/adminS/freelancer/main/entreprise/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_freelancer_main_entreprise_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.entreprise',  '_sonata_name' => 'admin_freelancer_main_entreprise_edit',));
                    }

                    // admin_freelancer_main_entreprise_delete
                    if (preg_match('#^/adminS/freelancer/main/entreprise/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_freelancer_main_entreprise_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.entreprise',  '_sonata_name' => 'admin_freelancer_main_entreprise_delete',));
                    }

                    // admin_freelancer_main_entreprise_show
                    if (preg_match('#^/adminS/freelancer/main/entreprise/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_freelancer_main_entreprise_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.entreprise',  '_sonata_name' => 'admin_freelancer_main_entreprise_show',));
                    }

                    // admin_freelancer_main_entreprise_export
                    if ($pathinfo === '/adminS/freelancer/main/entreprise/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.entreprise',  '_sonata_name' => 'admin_freelancer_main_entreprise_export',  '_route' => 'admin_freelancer_main_entreprise_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/adminS/freelancer/main/freelancer')) {
                    // admin_freelancer_main_freelancer_list
                    if ($pathinfo === '/adminS/freelancer/main/freelancer/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.freelancer',  '_sonata_name' => 'admin_freelancer_main_freelancer_list',  '_route' => 'admin_freelancer_main_freelancer_list',);
                    }

                    // admin_freelancer_main_freelancer_create
                    if ($pathinfo === '/adminS/freelancer/main/freelancer/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.freelancer',  '_sonata_name' => 'admin_freelancer_main_freelancer_create',  '_route' => 'admin_freelancer_main_freelancer_create',);
                    }

                    // admin_freelancer_main_freelancer_batch
                    if ($pathinfo === '/adminS/freelancer/main/freelancer/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.freelancer',  '_sonata_name' => 'admin_freelancer_main_freelancer_batch',  '_route' => 'admin_freelancer_main_freelancer_batch',);
                    }

                    // admin_freelancer_main_freelancer_edit
                    if (preg_match('#^/adminS/freelancer/main/freelancer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_freelancer_main_freelancer_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.freelancer',  '_sonata_name' => 'admin_freelancer_main_freelancer_edit',));
                    }

                    // admin_freelancer_main_freelancer_delete
                    if (preg_match('#^/adminS/freelancer/main/freelancer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_freelancer_main_freelancer_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.freelancer',  '_sonata_name' => 'admin_freelancer_main_freelancer_delete',));
                    }

                    // admin_freelancer_main_freelancer_show
                    if (preg_match('#^/adminS/freelancer/main/freelancer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_freelancer_main_freelancer_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.freelancer',  '_sonata_name' => 'admin_freelancer_main_freelancer_show',));
                    }

                    // admin_freelancer_main_freelancer_export
                    if ($pathinfo === '/adminS/freelancer/main/freelancer/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.freelancer',  '_sonata_name' => 'admin_freelancer_main_freelancer_export',  '_route' => 'admin_freelancer_main_freelancer_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/adminS/freelancer/main/jobowner')) {
                    // admin_freelancer_main_jobowner_list
                    if ($pathinfo === '/adminS/freelancer/main/jobowner/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.jobowner',  '_sonata_name' => 'admin_freelancer_main_jobowner_list',  '_route' => 'admin_freelancer_main_jobowner_list',);
                    }

                    // admin_freelancer_main_jobowner_create
                    if ($pathinfo === '/adminS/freelancer/main/jobowner/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.jobowner',  '_sonata_name' => 'admin_freelancer_main_jobowner_create',  '_route' => 'admin_freelancer_main_jobowner_create',);
                    }

                    // admin_freelancer_main_jobowner_batch
                    if ($pathinfo === '/adminS/freelancer/main/jobowner/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.jobowner',  '_sonata_name' => 'admin_freelancer_main_jobowner_batch',  '_route' => 'admin_freelancer_main_jobowner_batch',);
                    }

                    // admin_freelancer_main_jobowner_edit
                    if (preg_match('#^/adminS/freelancer/main/jobowner/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_freelancer_main_jobowner_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.jobowner',  '_sonata_name' => 'admin_freelancer_main_jobowner_edit',));
                    }

                    // admin_freelancer_main_jobowner_delete
                    if (preg_match('#^/adminS/freelancer/main/jobowner/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_freelancer_main_jobowner_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.jobowner',  '_sonata_name' => 'admin_freelancer_main_jobowner_delete',));
                    }

                    // admin_freelancer_main_jobowner_show
                    if (preg_match('#^/adminS/freelancer/main/jobowner/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_freelancer_main_jobowner_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.jobowner',  '_sonata_name' => 'admin_freelancer_main_jobowner_show',));
                    }

                    // admin_freelancer_main_jobowner_export
                    if ($pathinfo === '/adminS/freelancer/main/jobowner/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.jobowner',  '_sonata_name' => 'admin_freelancer_main_jobowner_export',  '_route' => 'admin_freelancer_main_jobowner_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/adminS/freelancer/main/projet')) {
                    // admin_freelancer_main_projet_list
                    if ($pathinfo === '/adminS/freelancer/main/projet/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.projet',  '_sonata_name' => 'admin_freelancer_main_projet_list',  '_route' => 'admin_freelancer_main_projet_list',);
                    }

                    // admin_freelancer_main_projet_create
                    if ($pathinfo === '/adminS/freelancer/main/projet/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.projet',  '_sonata_name' => 'admin_freelancer_main_projet_create',  '_route' => 'admin_freelancer_main_projet_create',);
                    }

                    // admin_freelancer_main_projet_batch
                    if ($pathinfo === '/adminS/freelancer/main/projet/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.projet',  '_sonata_name' => 'admin_freelancer_main_projet_batch',  '_route' => 'admin_freelancer_main_projet_batch',);
                    }

                    // admin_freelancer_main_projet_edit
                    if (preg_match('#^/adminS/freelancer/main/projet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_freelancer_main_projet_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.projet',  '_sonata_name' => 'admin_freelancer_main_projet_edit',));
                    }

                    // admin_freelancer_main_projet_delete
                    if (preg_match('#^/adminS/freelancer/main/projet/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_freelancer_main_projet_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.projet',  '_sonata_name' => 'admin_freelancer_main_projet_delete',));
                    }

                    // admin_freelancer_main_projet_show
                    if (preg_match('#^/adminS/freelancer/main/projet/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_freelancer_main_projet_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.projet',  '_sonata_name' => 'admin_freelancer_main_projet_show',));
                    }

                    // admin_freelancer_main_projet_export
                    if ($pathinfo === '/adminS/freelancer/main/projet/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.projet',  '_sonata_name' => 'admin_freelancer_main_projet_export',  '_route' => 'admin_freelancer_main_projet_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/adminS/freelancer/main/cv')) {
                    // admin_freelancer_main_cv_list
                    if ($pathinfo === '/adminS/freelancer/main/cv/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.cv',  '_sonata_name' => 'admin_freelancer_main_cv_list',  '_route' => 'admin_freelancer_main_cv_list',);
                    }

                    // admin_freelancer_main_cv_create
                    if ($pathinfo === '/adminS/freelancer/main/cv/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.cv',  '_sonata_name' => 'admin_freelancer_main_cv_create',  '_route' => 'admin_freelancer_main_cv_create',);
                    }

                    // admin_freelancer_main_cv_batch
                    if ($pathinfo === '/adminS/freelancer/main/cv/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.cv',  '_sonata_name' => 'admin_freelancer_main_cv_batch',  '_route' => 'admin_freelancer_main_cv_batch',);
                    }

                    // admin_freelancer_main_cv_edit
                    if (preg_match('#^/adminS/freelancer/main/cv/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_freelancer_main_cv_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.cv',  '_sonata_name' => 'admin_freelancer_main_cv_edit',));
                    }

                    // admin_freelancer_main_cv_delete
                    if (preg_match('#^/adminS/freelancer/main/cv/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_freelancer_main_cv_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.cv',  '_sonata_name' => 'admin_freelancer_main_cv_delete',));
                    }

                    // admin_freelancer_main_cv_show
                    if (preg_match('#^/adminS/freelancer/main/cv/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_freelancer_main_cv_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.cv',  '_sonata_name' => 'admin_freelancer_main_cv_show',));
                    }

                    // admin_freelancer_main_cv_export
                    if ($pathinfo === '/adminS/freelancer/main/cv/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.cv',  '_sonata_name' => 'admin_freelancer_main_cv_export',  '_route' => 'admin_freelancer_main_cv_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
