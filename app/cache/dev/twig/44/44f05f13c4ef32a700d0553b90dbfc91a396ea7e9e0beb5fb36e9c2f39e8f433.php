<?php

/* PFFBourseBundle:Faculte:ListeFaculte.html.twig */
class __TwigTemplate_9fd3084e7dc3745e8c696c3056c348987aba8b983db1d4362fb92616ba25c776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Faculte:ListeFaculte.html.twig", 1);
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
        $__internal_42b2fceb6bf7ea7e5191b24fa4299fd23c391c312d2e00b30d1e223d2fe9bb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b2fceb6bf7ea7e5191b24fa4299fd23c391c312d2e00b30d1e223d2fe9bb94->enter($__internal_42b2fceb6bf7ea7e5191b24fa4299fd23c391c312d2e00b30d1e223d2fe9bb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Faculte:ListeFaculte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42b2fceb6bf7ea7e5191b24fa4299fd23c391c312d2e00b30d1e223d2fe9bb94->leave($__internal_42b2fceb6bf7ea7e5191b24fa4299fd23c391c312d2e00b30d1e223d2fe9bb94_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9762e886f660fc0a0c0ab5b77ae4b1d4f6d711b2b274ab0102c07bd9c6540c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9762e886f660fc0a0c0ab5b77ae4b1d4f6d711b2b274ab0102c07bd9c6540c27->enter($__internal_9762e886f660fc0a0c0ab5b77ae4b1d4f6d711b2b274ab0102c07bd9c6540c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Acueil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li><a href=\"#\">Les Facultés</a></li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon align-justify\"></i><span class=\"break\"></span>Liste des Facultés</h2>
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
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faculte_ajout");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Ajout Faculté </span></a>
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 30
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 31
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 35
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 36
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alerte"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 40
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 41
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        <thead>
                        <tr>
                            <th>Code</th>
                            <th>Nom</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["faculte"]);
        foreach ($context['_seq'] as $context["_key"] => $context["faculte"]) {
            // line 53
            echo "                            <tr>
                                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["faculte"], "CodeFac", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["faculte"], "NomFac", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">
                                    <!--a class=\"btn btn-success\" href=\"#\">
                                        <i class=\"halflings-icon white zoom-in\"></i>
                                    </a-->
                                    <a class=\"btn btn-info\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faculte_modifier", array("id" => $this->getAttribute($context["faculte"], "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"halflings-icon white edit\"></i>
                                    </a>
                                    <a class=\"btn btn-danger\"
                                       href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faculte_supprime", array("id" => $this->getAttribute($context["faculte"], "id", array()))), "html", null, true);
            echo "\"
                                       onclick=\"return(confirm('Voulez vous Supprimer ?'));\">
                                        <i class=\"halflings-icon white trash\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faculte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </tbody>

                    </table>
                </div>
            </div><!--/span-->

        </div><!--/row-->

    <!-- end: Content -->
    </div><!--/#content.span10-->
";
        
        $__internal_9762e886f660fc0a0c0ab5b77ae4b1d4f6d711b2b274ab0102c07bd9c6540c27->leave($__internal_9762e886f660fc0a0c0ab5b77ae4b1d4f6d711b2b274ab0102c07bd9c6540c27_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Faculte:ListeFaculte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 71,  160 => 64,  153 => 60,  145 => 55,  141 => 54,  138 => 53,  134 => 52,  124 => 44,  115 => 41,  112 => 40,  107 => 39,  98 => 36,  95 => 35,  90 => 34,  81 => 31,  78 => 30,  74 => 29,  70 => 28,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"{{ path('index') }}\">Acueil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li><a href=\"#\">Les Facultés</a></li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon align-justify\"></i><span class=\"break\"></span>Liste des Facultés</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
                        <a style=\"margin-left: 80%; margin-top: 2%;\" class=\"btn btn-primary\"
                           href=\"{{ path(\"faculte_ajout\") }}\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Ajout Faculté </span></a>
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
                            <th>Code</th>
                            <th>Nom</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for faculte in faculte %}
                            <tr>
                                <td>{{ faculte.CodeFac }}</td>
                                <td class=\"center\">{{ faculte.NomFac }}</td>
                                <td class=\"center\">
                                    <!--a class=\"btn btn-success\" href=\"#\">
                                        <i class=\"halflings-icon white zoom-in\"></i>
                                    </a-->
                                    <a class=\"btn btn-info\" href=\"{{ path('faculte_modifier', { 'id': faculte.id }) }}\">
                                        <i class=\"halflings-icon white edit\"></i>
                                    </a>
                                    <a class=\"btn btn-danger\"
                                       href=\"{{ path('faculte_supprime', { 'id': faculte.id }) }}\"
                                       onclick=\"return(confirm('Voulez vous Supprimer ?'));\">
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
{% endblock %}", "PFFBourseBundle:Faculte:ListeFaculte.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Faculte/ListeFaculte.html.twig");
    }
}
