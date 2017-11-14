<?php

/* ::base.html.twig */
class __TwigTemplate_0c6099373e4274ff3603e6de6a19ee2630b6c638b3e44affdfbbe6c6059b82b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b51273746fa5979562c15e90d9ec4d740f57e8581c2a5851dd4de2a7d368a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b51273746fa5979562c15e90d9ec4d740f57e8581c2a5851dd4de2a7d368a2a->enter($__internal_9b51273746fa5979562c15e90d9ec4d740f57e8581c2a5851dd4de2a7d368a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>

    <!-- start: Meta -->
    <meta charset=\"utf8\">
    <title>Gestion des Boursiers</title>
    <meta name=\"description\" content=\"Bootstrap Metro Dashboard\">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id=\"bootstrap-style\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link id=\"base-style\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link id=\"base-style-responsive\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/style-responsive.css"), "html", null, true);
        echo "\"
          rel=\"stylesheet\">
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/http://html5shim.googlecode.com/svn/trunk/html5.js"), "html", null, true);
        echo "\"></script>
    <link id=\"ie-style\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/ie.css"), "html", null, true);
        echo "\" rel=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/stylesheet"), "html", null, true);
        echo "\">
    <![endif]-->

    <!--[if IE 9]>
    <link id=\"ie9style\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/ie9.css"), "html", null, true);
        echo "\" rel=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/stylesheet"), "html", null, true);
        echo "\">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/img/favicon.ico"), "html", null, true);
        echo "\">
    <!-- end: Favicon -->


</head>

<body>
<!-- start: Header -->
<div class=\"navbar\">
    <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\"
               data-target=\".top-nav.nav-collapse,.sidebar-nav.nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\"><span>Programme de Formation des Formateurs PFF</span></a>

            <!-- start: Header Menu -->
            <div class=\"nav-no-collapse header-nav\">
                <ul class=\"nav pull-right\">

                    <!-- start: Message Dropdown -->
                    <li>
                        <a class=\"btn\" href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">
                            <i class=\"halflings-icon white wrench\"></i>
                        </a>
                    </li>
                    <!-- start: User Dropdown -->
                    <li class=\"dropdown\">
                        <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"halflings-icon white user\"></i> ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"> <i class=\"dropdown-menu-title\"></i><span>Paramétre du Compte
                                    </span></a>
                            </li>
                            <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\"><i class=\"halflings-icon user\"></i>
                                    Profile</a></li>
                            <li><a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"halflings-icon off\"></i>
                                    Déconnexion</a></li>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>
<!-- start: Header -->

<div class=\"container-fluid-full\">
    <div class=\"row-fluid\">

        <!-- start: Main Menu -->
        <div id=\"sidebar-left\" class=\"span2\">
            <div class=\"nav-collapse sidebar-nav\">
                <ul class=\"nav nav-tabs nav-stacked main-menu\">
                    <li><a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\"><i class=\"icon-home\"></i><span
                                    class=\"hidden-tablet\"> Accueil</span></a></li>
                    <li>
                        <a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Bénéficiaires </span></a>
                        <ul>
                            <li><a class=\"submenu\" href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("beneficiaire_ajout");
        echo "\"><i class=\"icon-file-alt\"></i><span
                                            class=\"hidden-tablet\"> Ajout </span></a></li>
                            <li><a class=\"submenu\" href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("beneficiaire_liste");
        echo "\"><i class=\"icon-file-alt\"></i><span
                                            class=\"hidden-tablet\"> Liste </span></a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formation_liste");
        echo "\"><i class=\"icon-align-justify\"></i><span
                                    class=\"hidden-tablet\"> Formations</span></a></li>
                    <li><a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fonds_liste");
        echo "\"><i class=\"icon-align-justify\"></i><span
                                    class=\"hidden-tablet\"> Fonds</span></a></li>
                    <li><a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("universite_liste");
        echo "\"><i class=\"icon-align-justify\"></i><span
                                    class=\"hidden-tablet\"> Universités</span></a></li>
                    <li><a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faculte_liste");
        echo "\"><i class=\"icon-align-justify\"></i><span
                                    class=\"hidden-tablet\"> Facultés</span></a></li>
                    <li><a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pff_statistique");
        echo "\"><i class=\"icon-dashboard\"></i><span
                                    class=\"hidden-tablet\"> Statistiques</span></a></li>
                    ";
        // line 118
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 119
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pff_listeUtilisateur");
            echo "\"><i class=\"icon-align-justify\"></i><span
                                        class=\"hidden-tablet\"> Utilisateurs</span></a></li>
                    ";
        }
        // line 122
        echo "                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 123
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pff_user");
            echo "\"><i class=\"icon-lock\"></i><span class=\"hidden-tablet\"> Page d'inscription</span></a>
                        </li>
                    ";
        }
        // line 126
        echo "                </ul>
            </div>
        </div>

    <!-- end: Main Menu -->
        <!-- start: Content -->
        ";
        // line 132
        $this->displayBlock('body', $context, $blocks);
        // line 133
        echo "    </div><!--/fluid-row-->
</div><!--/.fluid-container new-->

        <footer class=\"pied\">

            <p>
                <span style=\"text-align:left;float:left\">&copy; 2017 <a
                            href=# >Universite des Sciences Juridique et Politique de Bamako USJPB</a></span>
            </p>

        </footer>

        <!-- start: JavaScript-->

        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery-migrate-1.0.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/modernizr.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/excanvas.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.masonry.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.knob.modified.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/counter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/retina.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/js/custom.js"), "html", null, true);
        echo "\"></script>
        <!-- end: JavaScript-->

";
        // line 179
        $this->displayBlock('js', $context, $blocks);
        // line 180
        echo "</body>
</html>

";
        
        $__internal_9b51273746fa5979562c15e90d9ec4d740f57e8581c2a5851dd4de2a7d368a2a->leave($__internal_9b51273746fa5979562c15e90d9ec4d740f57e8581c2a5851dd4de2a7d368a2a_prof);

    }

    // line 132
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c32c296d00f837d12051d55dcbe80b339ecb49adfb0dc19cde612aaaa602498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c32c296d00f837d12051d55dcbe80b339ecb49adfb0dc19cde612aaaa602498->enter($__internal_3c32c296d00f837d12051d55dcbe80b339ecb49adfb0dc19cde612aaaa602498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3c32c296d00f837d12051d55dcbe80b339ecb49adfb0dc19cde612aaaa602498->leave($__internal_3c32c296d00f837d12051d55dcbe80b339ecb49adfb0dc19cde612aaaa602498_prof);

    }

    // line 179
    public function block_js($context, array $blocks = array())
    {
        $__internal_b3d124e9ee4c326b550cce55c838638f5be62eeabae8e8ba19b681ee14c6ceb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d124e9ee4c326b550cce55c838638f5be62eeabae8e8ba19b681ee14c6ceb0->enter($__internal_b3d124e9ee4c326b550cce55c838638f5be62eeabae8e8ba19b681ee14c6ceb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_b3d124e9ee4c326b550cce55c838638f5be62eeabae8e8ba19b681ee14c6ceb0->leave($__internal_b3d124e9ee4c326b550cce55c838638f5be62eeabae8e8ba19b681ee14c6ceb0_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 179,  392 => 132,  382 => 180,  380 => 179,  374 => 176,  370 => 175,  366 => 174,  362 => 173,  358 => 172,  354 => 171,  350 => 170,  346 => 169,  342 => 168,  338 => 167,  334 => 166,  330 => 165,  326 => 164,  322 => 163,  318 => 162,  314 => 161,  310 => 160,  306 => 159,  302 => 158,  298 => 157,  294 => 156,  290 => 155,  286 => 154,  282 => 153,  278 => 152,  274 => 151,  270 => 150,  266 => 149,  262 => 148,  258 => 147,  242 => 133,  240 => 132,  232 => 126,  225 => 123,  222 => 122,  215 => 119,  213 => 118,  208 => 116,  203 => 114,  198 => 112,  193 => 110,  188 => 108,  181 => 104,  176 => 102,  168 => 97,  144 => 76,  139 => 74,  133 => 71,  126 => 67,  116 => 60,  105 => 52,  85 => 35,  76 => 31,  67 => 27,  63 => 26,  53 => 19,  49 => 18,  45 => 17,  41 => 16,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>

    <!-- start: Meta -->
    <meta charset=\"utf8\">
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
    <link id=\"base-style-responsive\" href=\"{{ asset('bundles/pffbourse/templates/css/style-responsive.css') }}\"
          rel=\"stylesheet\">
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
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


</head>

<body>
<!-- start: Header -->
<div class=\"navbar\">
    <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\"
               data-target=\".top-nav.nav-collapse,.sidebar-nav.nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"{{ path('index') }}\"><span>Programme de Formation des Formateurs PFF</span></a>

            <!-- start: Header Menu -->
            <div class=\"nav-no-collapse header-nav\">
                <ul class=\"nav pull-right\">

                    <!-- start: Message Dropdown -->
                    <li>
                        <a class=\"btn\" href=\"{{ path('fos_user_change_password') }}\">
                            <i class=\"halflings-icon white wrench\"></i>
                        </a>
                    </li>
                    <!-- start: User Dropdown -->
                    <li class=\"dropdown\">
                        <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"halflings-icon white user\"></i> {{ app.user.username }}
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ path('fos_user_profile_edit') }}\"> <i class=\"dropdown-menu-title\"></i><span>Paramétre du Compte
                                    </span></a>
                            </li>
                            <li><a href=\"{{ path('fos_user_profile_show') }}\"><i class=\"halflings-icon user\"></i>
                                    Profile</a></li>
                            <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"halflings-icon off\"></i>
                                    Déconnexion</a></li>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>
<!-- start: Header -->

<div class=\"container-fluid-full\">
    <div class=\"row-fluid\">

        <!-- start: Main Menu -->
        <div id=\"sidebar-left\" class=\"span2\">
            <div class=\"nav-collapse sidebar-nav\">
                <ul class=\"nav nav-tabs nav-stacked main-menu\">
                    <li><a href=\"{{ path('index') }}\"><i class=\"icon-home\"></i><span
                                    class=\"hidden-tablet\"> Accueil</span></a></li>
                    <li>
                        <a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Bénéficiaires </span></a>
                        <ul>
                            <li><a class=\"submenu\" href=\"{{ path('beneficiaire_ajout') }}\"><i class=\"icon-file-alt\"></i><span
                                            class=\"hidden-tablet\"> Ajout </span></a></li>
                            <li><a class=\"submenu\" href=\"{{ path('beneficiaire_liste') }}\"><i class=\"icon-file-alt\"></i><span
                                            class=\"hidden-tablet\"> Liste </span></a></li>
                        </ul>
                    </li>
                    <li><a href=\"{{ path('formation_liste') }}\"><i class=\"icon-align-justify\"></i><span
                                    class=\"hidden-tablet\"> Formations</span></a></li>
                    <li><a href=\"{{ path('fonds_liste') }}\"><i class=\"icon-align-justify\"></i><span
                                    class=\"hidden-tablet\"> Fonds</span></a></li>
                    <li><a href=\"{{ path('universite_liste') }}\"><i class=\"icon-align-justify\"></i><span
                                    class=\"hidden-tablet\"> Universités</span></a></li>
                    <li><a href=\"{{ path('faculte_liste') }}\"><i class=\"icon-align-justify\"></i><span
                                    class=\"hidden-tablet\"> Facultés</span></a></li>
                    <li><a href=\"{{ path('pff_statistique') }}\"><i class=\"icon-dashboard\"></i><span
                                    class=\"hidden-tablet\"> Statistiques</span></a></li>
                    {% if is_granted('ROLE_ADMIN') %}
                        <li><a href=\"{{ path('pff_listeUtilisateur') }}\"><i class=\"icon-align-justify\"></i><span
                                        class=\"hidden-tablet\"> Utilisateurs</span></a></li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li><a href=\"{{ path('pff_user') }}\"><i class=\"icon-lock\"></i><span class=\"hidden-tablet\"> Page d'inscription</span></a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>

    <!-- end: Main Menu -->
        <!-- start: Content -->
        {% block body %}{% endblock %}
    </div><!--/fluid-row-->
</div><!--/.fluid-container new-->

        <footer class=\"pied\">

            <p>
                <span style=\"text-align:left;float:left\">&copy; 2017 <a
                            href=# >Universite des Sciences Juridique et Politique de Bamako USJPB</a></span>
            </p>

        </footer>

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

{% block js %}{% endblock %}
</body>
</html>

", "::base.html.twig", "C:\\wamp\\www\\PFF\\app/Resources\\views/base.html.twig");
    }
}
