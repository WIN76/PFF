<?php

/* PFFBourseBundle:Beneficiaire:listeBenef.html.twig */
class __TwigTemplate_a2fdbd299f1e175fe8e7f8adea6d5e8095c9f043c855312919355843d3a7b027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Beneficiaire:listeBenef.html.twig", 1);
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
        $__internal_408221f4e28060fd9c20175c598ceba4a5d45bd0403b014adb7d9a54b5249440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408221f4e28060fd9c20175c598ceba4a5d45bd0403b014adb7d9a54b5249440->enter($__internal_408221f4e28060fd9c20175c598ceba4a5d45bd0403b014adb7d9a54b5249440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Beneficiaire:listeBenef.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_408221f4e28060fd9c20175c598ceba4a5d45bd0403b014adb7d9a54b5249440->leave($__internal_408221f4e28060fd9c20175c598ceba4a5d45bd0403b014adb7d9a54b5249440_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e26f08f2400b259b91fa75ed5dcfb68bf25a639d4a2a73fe545d02a004c43e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e26f08f2400b259b91fa75ed5dcfb68bf25a639d4a2a73fe545d02a004c43e1->enter($__internal_5e26f08f2400b259b91fa75ed5dcfb68bf25a639d4a2a73fe545d02a004c43e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/modal/bootstrap.min.css"), "html", null, true);
        echo "\">
    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Acceuil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li><a href=\"#\">Table Bénéficiaire</a></li>
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
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("benef_fonds_hist", array("id" => $this->getAttribute($context["beneficiaire"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-file-alt\"></i><span
                                                            class=\"hidden-tablet\"> Détail </span></a></li>
                                            <li><a class=\"submenu\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("beneficiaire_modifier", array("id" => $this->getAttribute($context["beneficiaire"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-file-alt\"></i><span
                                                            class=\"hidden-tablet\"> Modifier le bénéficiaire </span></a></li>
                                            <li><a class=\"submenu\" href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formation_ajout", array("id" => $this->getAttribute($context["beneficiaire"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-file-alt\"></i><span
                                                            class=\"hidden-tablet\"> Attribuer une formation </span></a></li>
                                            <li><a class=\"submenu\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_ajout", array("id" => $this->getAttribute($context["beneficiaire"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-file-alt\"></i><span
                                                            class=\"hidden-tablet\"> Attribuer un fonds </span></a></li>
                                            <li><a class=\"submenu\" href=\"";
            // line 84
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
        
        $__internal_5e26f08f2400b259b91fa75ed5dcfb68bf25a639d4a2a73fe545d02a004c43e1->leave($__internal_5e26f08f2400b259b91fa75ed5dcfb68bf25a639d4a2a73fe545d02a004c43e1_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Beneficiaire:listeBenef.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 127,  281 => 126,  268 => 115,  255 => 108,  247 => 103,  240 => 99,  233 => 95,  226 => 91,  216 => 84,  211 => 82,  206 => 80,  201 => 78,  196 => 76,  187 => 70,  183 => 69,  179 => 68,  175 => 67,  171 => 66,  167 => 65,  164 => 64,  160 => 63,  146 => 51,  137 => 48,  134 => 47,  129 => 46,  120 => 43,  117 => 42,  112 => 41,  103 => 38,  100 => 37,  95 => 36,  86 => 33,  83 => 32,  79 => 31,  75 => 30,  53 => 11,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/pffbourse/templates/css/modal/bootstrap.min.css') }}\">
    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"{{ path('index') }}\">Acceuil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li><a href=\"#\">Table Bénéficiaire</a></li>
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
                                                            class=\"hidden-tablet\"> Modifier le bénéficiaire </span></a></li>
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
{% endblock %}", "PFFBourseBundle:Beneficiaire:listeBenef.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Beneficiaire/listeBenef.html.twig");
    }
}
