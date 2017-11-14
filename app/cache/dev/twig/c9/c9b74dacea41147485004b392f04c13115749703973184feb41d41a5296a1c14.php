<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_df7751d625dbf63ee089accd77a021b7c6732a01bc57d36913eaeb352fba68fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1300cefe97d2555aea1c2e0ad1b4adbdcfd6ccd7b63150c3d2523c7a4e1a9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1300cefe97d2555aea1c2e0ad1b4adbdcfd6ccd7b63150c3d2523c7a4e1a9a8->enter($__internal_d1300cefe97d2555aea1c2e0ad1b4adbdcfd6ccd7b63150c3d2523c7a4e1a9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF8\" />
    
    <!-- start: Meta -->
    <meta charset=\"utf-8\">
    <title>Gestion des Boursiers</title>
    <meta name=\"description\" content=\"Bootstrap Metro Dashboard\">

    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- end: Mobile Specific -->
    
    <!-- start: CSS -->
    <link id=\"bootstrap-style\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link id=\"base-style\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link id=\"base-style-responsive\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/http://html5shim.googlecode.com/svn/trunk/html5.js"), "html", null, true);
        echo "\"></script>
        <link id=\"ie-style\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/ie.css"), "html", null, true);
        echo "\" rel=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/stylesheet"), "html", null, true);
        echo "\">
    <![endif]-->

    <!--[if IE 9]>
        <link id=\"ie9style\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/ie9.css"), "html", null, true);
        echo "\" rel=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/stylesheet"), "html", null, true);
        echo "\">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/img/favicon.ico"), "html", null, true);
        echo "\">
    <!-- end: Favicon -->
    
            <style type=\"text/css\">
            body { background: url(\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/img/formateur.jpg"), "html", null, true);
        echo "\" ) !important ; }
        </style>
        
        
    </head>
    <body>
<div class=\"container-fluid-full\">
        <div class=\"row-fluid\">
                    
            <div class=\"row-fluid\">
                <div class=\"login-box\">
                    <div class=\"icons\">
                        <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\"><i class=\"halflings-icon home\"></i></a>
                        <!--a href=\"#\"><i class=\"halflings-icon cog\"></i></a-->
                    </div>
                    <h2>Connexion a votre compte</h2>
                    <form class=\"form-horizontal\" action=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                     ";
        // line 58
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 59
            echo "                     <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                    ";
        }
        // line 61
        echo "                        <fieldset>
                            
                            <div class=\"input-prepend\" title=\"username\">
                                <span class=\"add-on\"><i class=\"halflings-icon user\"></i></span>
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"type Nom Utilisateur\" class=\"input-large span10\"/>
                            
                            </div>
                            <div class=\"clearfix\"></div>

                            <div class=\"input-prepend\" title=\"password\">
                                <span class=\"add-on\"><i class=\"halflings-icon lock\"></i></span>
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"input-large span10\" placeholder=\"type Mot de passe\"/>
                            </div>
                            <div class=\"clearfix\"></div>
                            
                            <label class=\"remember\" for=\"remember\"> <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />Se souvenir de moi</label>

                            <div class=\"button-login\">  
                                <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\">Connexion</button>
                            </div>
                            <div class=\"clearfix\"></div>
                            </fieldset>
                    </form>
                    <hr>
                    <h3>Mot de passe oublié?</h3>
                    <p>
                        Pas de problème, <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" > cliquez ici</a> pour obtenir un nouveau mot de passe.
                    </p>    
                </div><!--/span-->
            </div><!--/row-->
            

    </div><!--/.fluid-container-->
    
        </div><!--/fluid-row-->
 <!-- start: JavaScript-->

        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery-migrate-1.0.0.min.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/modernizr.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/excanvas.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.masonry.min.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.knob.modified.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/counter.js"), "html", null, true);
        echo "\"></script>
    
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/retina.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/custom.js"), "html", null, true);
        echo "\"></script>
    <!-- end: JavaScript-->
    </body>
</html>";
        
        $__internal_d1300cefe97d2555aea1c2e0ad1b4adbdcfd6ccd7b63150c3d2523c7a4e1a9a8->leave($__internal_d1300cefe97d2555aea1c2e0ad1b4adbdcfd6ccd7b63150c3d2523c7a4e1a9a8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 151,  312 => 149,  307 => 147,  302 => 145,  297 => 143,  292 => 141,  287 => 139,  282 => 137,  277 => 135,  272 => 133,  267 => 131,  262 => 129,  257 => 127,  252 => 125,  247 => 123,  242 => 121,  237 => 119,  233 => 118,  229 => 117,  225 => 116,  221 => 115,  216 => 113,  211 => 111,  206 => 109,  201 => 107,  196 => 105,  191 => 103,  186 => 101,  181 => 99,  177 => 98,  163 => 87,  138 => 65,  132 => 61,  126 => 59,  124 => 58,  120 => 57,  113 => 53,  98 => 41,  91 => 37,  82 => 33,  73 => 29,  69 => 28,  64 => 26,  60 => 25,  56 => 24,  52 => 23,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF8\" />
    
    <!-- start: Meta -->
    <meta charset=\"utf-8\">
    <title>Gestion des Boursiers</title>
    <meta name=\"description\" content=\"Bootstrap Metro Dashboard\">

    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- end: Mobile Specific -->
    
    <!-- start: CSS -->
    <link id=\"bootstrap-style\" href=\"{{ asset('bundles/pffbourse/templates/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/pffbourse/templates/css/bootstrap-responsive.min.css') }}\" rel=\"stylesheet\">
    <link id=\"base-style\" href=\"{{ asset('bundles/pffbourse/templates/css/style.css') }}\" rel=\"stylesheet\">
    <link id=\"base-style-responsive\" href=\"{{ asset('bundles/pffbourse/templates/css/style-responsive.css') }}\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
        <script src=\"{{ asset('bundles/pffbourse/templates/http://html5shim.googlecode.com/svn/trunk/html5.js') }}\"></script>
        <link id=\"ie-style\" href=\"{{ asset('bundles/pffbourse/templates/css/ie.css') }}\" rel=\"{{ asset('bundles/pffbourse/templates/stylesheet') }}\">
    <![endif]-->

    <!--[if IE 9]>
        <link id=\"ie9style\" href=\"{{ asset('bundles/pffbourse/templates/css/ie9.css') }}\" rel=\"{{ asset('bundles/pffbourse/templates/stylesheet') }}\">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel=\"shortcut icon\" href=\"{{ asset('bundles/pffbourse/templates/img/favicon.ico') }}\">
    <!-- end: Favicon -->
    
            <style type=\"text/css\">
            body { background: url(\"{{ asset('bundles/pffbourse/templates/img/formateur.jpg') }}\" ) !important ; }
        </style>
        
        
    </head>
    <body>
<div class=\"container-fluid-full\">
        <div class=\"row-fluid\">
                    
            <div class=\"row-fluid\">
                <div class=\"login-box\">
                    <div class=\"icons\">
                        <a href=\"{{ path('index') }}\"><i class=\"halflings-icon home\"></i></a>
                        <!--a href=\"#\"><i class=\"halflings-icon cog\"></i></a-->
                    </div>
                    <h2>Connexion a votre compte</h2>
                    <form class=\"form-horizontal\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                     {% if csrf_token %}
                     <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                    {% endif %}
                        <fieldset>
                            
                            <div class=\"input-prepend\" title=\"username\">
                                <span class=\"add-on\"><i class=\"halflings-icon user\"></i></span>
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"type Nom Utilisateur\" class=\"input-large span10\"/>
                            
                            </div>
                            <div class=\"clearfix\"></div>

                            <div class=\"input-prepend\" title=\"password\">
                                <span class=\"add-on\"><i class=\"halflings-icon lock\"></i></span>
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"input-large span10\" placeholder=\"type Mot de passe\"/>
                            </div>
                            <div class=\"clearfix\"></div>
                            
                            <label class=\"remember\" for=\"remember\"> <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />Se souvenir de moi</label>

                            <div class=\"button-login\">  
                                <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\">Connexion</button>
                            </div>
                            <div class=\"clearfix\"></div>
                            </fieldset>
                    </form>
                    <hr>
                    <h3>Mot de passe oublié?</h3>
                    <p>
                        Pas de problème, <a href=\"{{ path('fos_user_resetting_request') }}\" > cliquez ici</a> pour obtenir un nouveau mot de passe.
                    </p>    
                </div><!--/span-->
            </div><!--/row-->
            

    </div><!--/.fluid-container-->
    
        </div><!--/fluid-row-->
 <!-- start: JavaScript-->

        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery-1.9.1.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery-migrate-1.0.0.min.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery-ui-1.10.0.custom.min.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.ui.touch-punch.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/modernizr.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/bootstrap.min.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.cookie.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/fullcalendar.min.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.dataTables.min.js') }}\"></script>

        <script src=\"{{ asset('bundles/pffbourse/templates/js/excanvas.js') }}\"></script>
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.flot.js') }}\"></script>
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.flot.pie.js') }}\"></script>
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.flot.stack.js') }}\"></script>
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.flot.resize.min.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.chosen.min.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.uniform.min.js') }}\"></script>
        
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.cleditor.min.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.noty.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.elfinder.min.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.raty.min.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.iphone.toggle.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.uploadify-3.1.min.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.gritter.min.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.imagesloaded.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.masonry.min.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.knob.modified.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/jquery.sparkline.min.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/counter.js') }}\"></script>
    
        <script src=\"{{ asset('bundles/pffbourse/templates/js/retina.js') }}\"></script>

        <script src=\"{{ asset('bundles/pffbourse/templates/js/custom.js') }}\"></script>
    <!-- end: JavaScript-->
    </body>
</html>", "@FOSUser/Security/login_content.html.twig", "C:\\wamp\\www\\PFF\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
