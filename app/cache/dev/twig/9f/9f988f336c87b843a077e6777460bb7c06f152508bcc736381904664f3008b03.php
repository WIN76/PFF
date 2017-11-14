<?php

/* PFFBourseBundle:Fonds:listeFonds.html.twig */
class __TwigTemplate_32d6180dae6458f94803720a42861af9f7d410e78e999554b97e43cfa35680fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Fonds:listeFonds.html.twig", 1);
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
        $__internal_c6a471c6de986a3a973fc765694c3b5add4b5290f397a28257fb337c383472ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a471c6de986a3a973fc765694c3b5add4b5290f397a28257fb337c383472ce->enter($__internal_c6a471c6de986a3a973fc765694c3b5add4b5290f397a28257fb337c383472ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Fonds:listeFonds.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6a471c6de986a3a973fc765694c3b5add4b5290f397a28257fb337c383472ce->leave($__internal_c6a471c6de986a3a973fc765694c3b5add4b5290f397a28257fb337c383472ce_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_50b148555260c6cec29e35ea8b18547b254563f0603f9b3bc021acbd47055643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b148555260c6cec29e35ea8b18547b254563f0603f9b3bc021acbd47055643->enter($__internal_50b148555260c6cec29e35ea8b18547b254563f0603f9b3bc021acbd47055643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Acceuil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li><a href=\"#\">Table Fonds</a></li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon align-justify\"></i><span class=\"break\"></span>Listes des Fonds</h2>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fonds_ajout");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Ajout Fonds </span></a>
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
                            <th>Montant</th>
                            <th>Annee</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["fonds"]);
        foreach ($context['_seq'] as $context["_key"] => $context["fonds"]) {
            // line 54
            echo "                            <tr>
                                <td class=\"center\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["fonds"], "Montant", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["fonds"], "Annee", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["fonds"], "Type", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">
                                    <a class=\"btn btn-success\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fonds_detail", array("id" => $this->getAttribute($context["fonds"], "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"halflings-icon white zoom-in\"></i>
                                    </a>
                                    <a class=\"btn btn-info\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fonds_modifier", array("id" => $this->getAttribute($context["fonds"], "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"halflings-icon white edit\"></i>
                                    </a>
                                    <a class=\"btn btn-danger\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fonds_supprime", array("id" => $this->getAttribute($context["fonds"], "id", array()))), "html", null, true);
            echo "\"
                                       onclick=\"return(confirm('Voulez vous Supprimer ?'));\">
                                        <i class=\"halflings-icon white trash\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fonds'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                        </tbody>
                    </table>
                </div>
            </div><!--/span-->

        </div><!--/row-->

    <!-- end: Content -->
    </div><!--/#content.span10-->
";
        
        $__internal_50b148555260c6cec29e35ea8b18547b254563f0603f9b3bc021acbd47055643->leave($__internal_50b148555260c6cec29e35ea8b18547b254563f0603f9b3bc021acbd47055643_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Fonds:listeFonds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 72,  167 => 65,  161 => 62,  155 => 59,  150 => 57,  146 => 56,  142 => 55,  139 => 54,  135 => 53,  124 => 44,  115 => 41,  112 => 40,  107 => 39,  98 => 36,  95 => 35,  90 => 34,  81 => 31,  78 => 30,  74 => 29,  70 => 28,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
                <a href=\"{{ path('index') }}\">Acceuil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li><a href=\"#\">Table Fonds</a></li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon align-justify\"></i><span class=\"break\"></span>Listes des Fonds</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
                        <a style=\"margin-left: 80%; margin-top: 2%;\" class=\"btn btn-primary\"
                           href=\"{{ path('fonds_ajout') }}\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Ajout Fonds </span></a>
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
                            <th>Montant</th>
                            <th>Annee</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for fonds in fonds %}
                            <tr>
                                <td class=\"center\">{{ fonds.Montant }}</td>
                                <td class=\"center\">{{ fonds.Annee }}</td>
                                <td class=\"center\">{{ fonds.Type }}</td>
                                <td class=\"center\">
                                    <a class=\"btn btn-success\" href=\"{{ path('fonds_detail', { 'id': fonds.id }) }}\">
                                        <i class=\"halflings-icon white zoom-in\"></i>
                                    </a>
                                    <a class=\"btn btn-info\" href=\"{{ path('fonds_modifier', { 'id': fonds.id }) }}\">
                                        <i class=\"halflings-icon white edit\"></i>
                                    </a>
                                    <a class=\"btn btn-danger\" href=\"{{ path('fonds_supprime', { 'id': fonds.id }) }}\"
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
{% endblock %}", "PFFBourseBundle:Fonds:listeFonds.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Fonds/listeFonds.html.twig");
    }
}
