<?php

/* FreelancerMainBundle:Default:index.html.twig */
class __TwigTemplate_c8e0a34b0fbf2bf786a073bf53094e9d08c9809ece5039e88ded45ec7af07f53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base_1.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'projets' => array($this, 'block_projets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_projets($context, array $blocks = array())
    {
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- Slideshow
    ================================================== -->

    <div id=\"main-slider\" class=\"no-margin\">
        <div class=\"carousel slide wet-asphalt\">

            <div class=\"carousel-inner\">
                <div class=\"item active\" style=\"background-image: url(";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/images/slider/slide1.jpg"), "html", null, true);
        echo ")\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">Bienvenue <span> à Freelancer</span></h2>

                                    <h2 class=\"animation animated-item-2\">Site Web</h2>
                                    <br />
                                    <span class=\"content-nav\">
                                        <a href=\"#services-wrapper\" class=\"animation animated-item-3\">Go</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->
                <div class=\"item\" style=\"background-image: url(";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/images/slider/slide2.jpg"), "html", null, true);
        echo ")\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content center centered\">
                                    <h2 class=\"animation animated-item-1\">Easy and <span>Customizable</span></h2>

                                    <h2 class=\"animation animated-item-2\">Responsive Theme</h2>
                                    <br />
                                    <span class=\"content-nav\">
                                        <a href=\"#services-wrapper\" class=\"animation animated-item-3\">Go</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->
                <div class=\"item\" style=\"background-image: url(";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/images/slider/slide3.jpg"), "html", null, true);
        echo ")\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">The Best <span>HTML5 Theme</span></h2>

                                    <h2 class=\"animation animated-item-2\">You Have Ever Seen</h2>
                                    <br />
                                    <span class=\"content-nav\">
                                        <a href=\"#services-wrapper\" class=\"animation animated-item-3\">Go</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->
                <div class=\"item\">
                    <video id=\"video_background\" preload=\"auto\" autoplay=\"\" loop=\"loop\" muted=\"muted\" controls=\"\">
                        <source src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/videos/splash.webm"), "html", null, true);
        echo "\" type=\"video/webm\">
                        <source src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/videos/splash.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
                        <source src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/videos/splash.ogv"), "html", null, true);
        echo "\" type=\"video/ogg\">
                        Video not supported
                        </source></source></source></video>

                    <div id=\"video_pattern\"></div>
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content centered\">

                                    <h2 class=\"animation animated-item-1\">The Best <span>HTML5 Theme</span></h2>

                                    <h2 class=\"animation animated-item-2\">You Have Ever Seen</h2>

                                    <br />
                                    <span class=\"content-nav\">
                                        <a href=\"#services-wrapper\" class=\"animation animated-item-3\">Go</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->
            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class=\"prev hidden-xs rounded\" href=\"#main-slider\" data-slide=\"prev\">
            <i class=\"fa fa-angle-left\"></i>
        </a>
        <a class=\"next hidden-xs rounded\" href=\"#main-slider\" data-slide=\"next\">
            <i class=\"fa fa-angle-right\"></i>
        </a>
    </div>
    <!-- Contact
    ================================================== -->
    <div id=\"contact-wrapper\">
        <div id=\"contact\">
            <div class=\"inner-wrapper\">
                <div class=\"row\">
                    <div class=\"container\">
                        <h2><span>Nous Contacter</span> Maintenant</h2>

                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div id=\"map-canvas\"></div>
                                <div class=\"contact-info\">
                                    <ul>
                                        <li class=\"first\">
                                            <p><i class=\"fa fa-map-marker fa-2\"></i> Dev - Point inc.</p>

                                            <p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45.</p>
                                        </li>
                                        <li class=\"second\">
                                            <p><i class=\"fa fa-phone fa-2\"></i> +0088776 69 900</p>

                                            <p><i class=\"fa fa-envelope fa-2\"></i> main@example.com </p>
                                        </li>
                                        <li class=\"third\">
                                            <p><i class=\"fa fa-clock-o fa-2\"></i> Monday - Friday</p>

                                            <p> 9:00 AM - 6:00 AM</p>
                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"message-box\">
                                    <h3>Envoyer Message</h3>

                                    <form method=\"post\" action=\"#\" />
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Nom\" />
                                        </div>
                                        <div class=\"col-md-6\">
                                            <input type=\"email\" class=\"form-control\" placeholder=\"Email\" />
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <textarea class=\"form-control\" placeholder=\"Message\"></textarea>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <input type=\"submit\" class=\"readmore send-button\" value=\"Envoyer Message\" />
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/><br/>
    <!--/#contact-wrapper-->
    <!-- Bottom
    ================================================== -->
    <div id=\"bottom\">
        <div class=\"row\">
            <a id=\"to-top\" href=\"#main-slider\"><i class=\"fa fa-long-arrow-up\"></i></a>

            <div class=\"container\">
                <div class=\"col-xs-6\">
                    <div class=\"social-shares\">
                        <ul>
                            <i class=\"fa fa-twitter\"></i>";
        // line 183
        echo $this->env->getExtension('nomaya_social_links')->getSocialLink("facebook");
        echo "</li>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-tumblr\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-xs-6\">
                    <div class=\"copyright\">
                        <p />Copyright &copy; 2015 Freelancer / Design by <a href=\"#\">Dev-Point</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/#bottom-->

";
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 183,  127 => 69,  123 => 68,  119 => 67,  96 => 47,  75 => 29,  54 => 11,  45 => 4,  42 => 3,  37 => 2,  11 => 1,);
    }
}
