<?php

/* PFFBourseBundle:template:index.html.twig */
class __TwigTemplate_545080fb5ac961d31c7600073689ab205ce4ff02ec180d40c993e1b8f127c6c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:template:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ab5dc9018e5a1ea3eb77a9a4d5e17ecb40ad1fa96bb5ada4108a9b611d4051e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab5dc9018e5a1ea3eb77a9a4d5e17ecb40ad1fa96bb5ada4108a9b611d4051e->enter($__internal_6ab5dc9018e5a1ea3eb77a9a4d5e17ecb40ad1fa96bb5ada4108a9b611d4051e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:template:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ab5dc9018e5a1ea3eb77a9a4d5e17ecb40ad1fa96bb5ada4108a9b611d4051e->leave($__internal_6ab5dc9018e5a1ea3eb77a9a4d5e17ecb40ad1fa96bb5ada4108a9b611d4051e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_43747aee4ba22fe5ed2af97fcee6ceb7f7b140fb1ac9399f1a01729ad96484b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43747aee4ba22fe5ed2af97fcee6ceb7f7b140fb1ac9399f1a01729ad96484b0->enter($__internal_43747aee4ba22fe5ed2af97fcee6ceb7f7b140fb1ac9399f1a01729ad96484b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <!-- start: Content -->
    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Accueil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon user\"></i><span class=\"break\"></span>Liste des bénéficiaires</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
                        <a style=\"margin-left: 80%; margin-top: 2%;\" class=\"btn btn-primary\"
                           href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("beneficiaire_ajout");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Ajout Bénéficiaire </span></a>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "infosup"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 32
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 33
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 37
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 38
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 42
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 43
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alerte"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 47
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 48
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                        <thead>
                        <tr>
                            <th>Numèro Matricule</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Numèro Tel</th>
                            <th>Email</th>
                            <th>Faculté</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["beneficiaire"]);
        foreach ($context['_seq'] as $context["_key"] => $context["beneficiaire"]) {
            // line 64
            echo "                            <tr>
                                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["beneficiaire"], "numMlle", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["beneficiaire"], "Nom", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["beneficiaire"], "Prenom", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["beneficiaire"], "NumTel", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["beneficiaire"], "Email", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["beneficiaire"], "faculte", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">


                                <!--li>
                                        <a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Bénéficiaires </span></a>
                                        <ul>
                                            <li><a class=\"submenu\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("benef_fonds_hist", array("id" => $this->getAttribute($context["beneficiaire"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-file-alt\"></i><span
                                                            class=\"hidden-tablet\"> Détail </span></a></li>
                                            <li><a class=\"submenu\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("beneficiaire_modifier", array("id" => $this->getAttribute($context["beneficiaire"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-file-alt\"></i><span
                                                            class=\"hidden-tablet\"> Modifier bénéficiaire </span></a></li>
                                            <li><a class=\"submenu\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formation_ajout", array("id" => $this->getAttribute($context["beneficiaire"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-file-alt\"></i><span
                                                            class=\"hidden-tablet\"> Attribuer une formation </span></a></li>
                                            <li><a class=\"submenu\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_ajout", array("id" => $this->getAttribute($context["beneficiaire"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-file-alt\"></i><span
                                                            class=\"hidden-tablet\"> Attribuer un fonds </span></a></li>
                                            <li><a class=\"submenu\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("beneficiaire_supprime", array("id" => $this->getAttribute($context["beneficiaire"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return(confirm('Voulez vous Supprimer ?'));\"><i class=\"icon-file-alt\"></i><span
                                                            class=\"hidden-tablet\"> Supprimer </span></a></li>
                                        </ul>
                                    </li-->

                                    <a class=\"btn btn-info\"
                                       href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("benef_fonds_hist", array("id" => $this->getAttribute($context["beneficiaire"], "id", array()))), "html", null, true);
            echo "\" title=\"detail\">
                                        <i class=\"halflings-icon white zoom-in\"></i>
                                    </a>
                                    <a class=\"btn btn-warning\"
                                       href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("beneficiaire_modifier", array("id" => $this->getAttribute($context["beneficiaire"], "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"halflings-icon white edit\" title=\"Modifier un bénéficiaire\"></i>
                                    </a>
                                    <a class=\"btn btn-primary\"
                                       href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formation_ajout", array("id" => $this->getAttribute($context["beneficiaire"], "id", array()))), "html", null, true);
            echo "\" title=\"Attribuer une formation\">
                                        <i class=\"halflings-icon white edit\"></i>
                                    </a>
                                    <a class=\"btn btn-primary\"
                                       href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_ajout", array("id" => $this->getAttribute($context["beneficiaire"], "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"halflings-icon white edit\" title=\"Attribuer un fonds\"></i>
                                    </a>

                                    <a class=\"btn btn-danger\"
                                       href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("beneficiaire_supprime", array("id" => $this->getAttribute($context["beneficiaire"], "id", array()))), "html", null, true);
            echo "\"
                                       onclick=\"return(confirm('Voulez vous Supprimer ?'));\" title=\"suprimer\">
                                        <i class=\"halflings-icon white trash\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beneficiaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                        </tbody>
                    </table>
                </div>
            </div><!--/span-->

        </div><!--/row-->

        <!-- end: Content -->
    </div><!--/#content.span10-->


    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/modal/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/modal/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_43747aee4ba22fe5ed2af97fcee6ceb7f7b140fb1ac9399f1a01729ad96484b0->leave($__internal_43747aee4ba22fe5ed2af97fcee6ceb7f7b140fb1ac9399f1a01729ad96484b0_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:template:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 127,  276 => 126,  263 => 115,  250 => 108,  242 => 103,  235 => 99,  228 => 95,  221 => 91,  212 => 85,  207 => 83,  202 => 81,  197 => 79,  192 => 77,  182 => 70,  178 => 69,  174 => 68,  170 => 67,  166 => 66,  162 => 65,  159 => 64,  155 => 63,  141 => 51,  132 => 48,  129 => 47,  124 => 46,  115 => 43,  112 => 42,  107 => 41,  98 => 38,  95 => 37,  90 => 36,  81 => 33,  78 => 32,  74 => 31,  70 => 30,  49 => 12,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}


{% block body %}
    <!-- start: Content -->
    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"{{ path('index') }}\">Accueil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon user\"></i><span class=\"break\"></span>Liste des bénéficiaires</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
                        <a style=\"margin-left: 80%; margin-top: 2%;\" class=\"btn btn-primary\"
                           href=\"{{ path('beneficiaire_ajout') }}\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Ajout Bénéficiaire </span></a>
                        {% for flash_message in app.session.flashBag.get('infosup') %}
                            <div class=\"alert alert-danger\">
                                {{ flash_message }}
                            </div>
                        {% endfor %}
                        {% for flash_message in app.session.flashBag.get('info') %}
                            <div class=\"alert alert-success\">
                                {{ flash_message }}
                            </div>
                        {% endfor %}
                        {% for flash_message in app.session.flashBag.get('notice') %}
                            <div class=\"alert alert-success\">
                                {{ flash_message }}
                            </div>
                        {% endfor %}
                        {% for flash_message in app.session.flashBag.get('alerte') %}
                            <div class=\"alert alert-success\">
                                {{ flash_message }}
                            </div>
                        {% endfor %}
                        <thead>
                        <tr>
                            <th>Numèro Matricule</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Numèro Tel</th>
                            <th>Email</th>
                            <th>Faculté</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for beneficiaire in beneficiaire %}
                            <tr>
                                <td>{{ beneficiaire.numMlle }}</td>
                                <td class=\"center\">{{ beneficiaire.Nom }}</td>
                                <td class=\"center\">{{ beneficiaire.Prenom }}</td>
                                <td class=\"center\">{{ beneficiaire.NumTel }}</td>
                                <td class=\"center\">{{ beneficiaire.Email }}</td>
                                <td class=\"center\">{{ beneficiaire.faculte }}</td>
                                <td class=\"center\">


                                <!--li>
                                        <a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Bénéficiaires </span></a>
                                        <ul>
                                            <li><a class=\"submenu\" href=\"{{ path('benef_fonds_hist', { 'id': beneficiaire.id }) }}\"><i class=\"icon-file-alt\"></i><span
                                                            class=\"hidden-tablet\"> Détail </span></a></li>
                                            <li><a class=\"submenu\" href=\"{{ path('beneficiaire_modifier', { 'id': beneficiaire.id }) }}\"><i class=\"icon-file-alt\"></i><span
                                                            class=\"hidden-tablet\"> Modifier bénéficiaire </span></a></li>
                                            <li><a class=\"submenu\" href=\"{{ path('formation_ajout', { 'id': beneficiaire.id }) }}\"><i class=\"icon-file-alt\"></i><span
                                                            class=\"hidden-tablet\"> Attribuer une formation </span></a></li>
                                            <li><a class=\"submenu\" href=\"{{ path('historique_ajout', { 'id': beneficiaire.id }) }}\"><i class=\"icon-file-alt\"></i><span
                                                            class=\"hidden-tablet\"> Attribuer un fonds </span></a></li>
                                            <li><a class=\"submenu\" href=\"{{ path('beneficiaire_supprime', { 'id': beneficiaire.id }) }}\" onclick=\"return(confirm('Voulez vous Supprimer ?'));\"><i class=\"icon-file-alt\"></i><span
                                                            class=\"hidden-tablet\"> Supprimer </span></a></li>
                                        </ul>
                                    </li-->

                                    <a class=\"btn btn-info\"
                                       href=\"{{ path('benef_fonds_hist', { 'id': beneficiaire.id }) }}\" title=\"detail\">
                                        <i class=\"halflings-icon white zoom-in\"></i>
                                    </a>
                                    <a class=\"btn btn-warning\"
                                       href=\"{{ path('beneficiaire_modifier', { 'id': beneficiaire.id }) }}\">
                                        <i class=\"halflings-icon white edit\" title=\"Modifier un bénéficiaire\"></i>
                                    </a>
                                    <a class=\"btn btn-primary\"
                                       href=\"{{ path('formation_ajout', { 'id': beneficiaire.id }) }}\" title=\"Attribuer une formation\">
                                        <i class=\"halflings-icon white edit\"></i>
                                    </a>
                                    <a class=\"btn btn-primary\"
                                       href=\"{{ path('historique_ajout', { 'id': beneficiaire.id }) }}\">
                                        <i class=\"halflings-icon white edit\" title=\"Attribuer un fonds\"></i>
                                    </a>

                                    <a class=\"btn btn-danger\"
                                       href=\"{{ path('beneficiaire_supprime', { 'id': beneficiaire.id }) }}\"
                                       onclick=\"return(confirm('Voulez vous Supprimer ?'));\" title=\"suprimer\">
                                        <i class=\"halflings-icon white trash\"></i>
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div><!--/span-->

        </div><!--/row-->

        <!-- end: Content -->
    </div><!--/#content.span10-->


    <script src=\"{{ asset('bundles/pffbourse/templates/css/modal/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/pffbourse/templates/css/modal/bootstrap.min.js') }}\"></script>
{% endblock %}", "PFFBourseBundle:template:index.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/template/index.html.twig");
    }
}
