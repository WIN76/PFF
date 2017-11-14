<?php

/* PFFBourseBundle:Universite:listeUniv.html.twig */
class __TwigTemplate_c90ffa9f1fcdfc964e1b862c6e5bf8eaa7c7604862c6758a3e058cf951adc8f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Universite:listeUniv.html.twig", 1);
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
        $__internal_322f492f4271a8379e8f33f726960fd8c8a95814f522db303e9e77f0593dc358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322f492f4271a8379e8f33f726960fd8c8a95814f522db303e9e77f0593dc358->enter($__internal_322f492f4271a8379e8f33f726960fd8c8a95814f522db303e9e77f0593dc358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Universite:listeUniv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_322f492f4271a8379e8f33f726960fd8c8a95814f522db303e9e77f0593dc358->leave($__internal_322f492f4271a8379e8f33f726960fd8c8a95814f522db303e9e77f0593dc358_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_40c93effde8856731f54bdafaac9eab2503c087b20bde4fe48cbdb4a842a3809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c93effde8856731f54bdafaac9eab2503c087b20bde4fe48cbdb4a842a3809->enter($__internal_40c93effde8856731f54bdafaac9eab2503c087b20bde4fe48cbdb4a842a3809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <li><a href=\"#\">Table Université</a></li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=halflings-icon align-justify></i><span class=\"break\"></span>Listes des universités</h2>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("universite_ajout");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Ajout Université </span></a>
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
                            <th>id</th>
                            <th>Nom Université</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["universite"]);
        foreach ($context['_seq'] as $context["_key"] => $context["universite"]) {
            // line 53
            echo "                            <tr>
                                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["universite"], "codeUniv", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["universite"], "nomUniv", array()), "html", null, true);
            echo "</td>
                                <!--span class=\"label label-success\">Active</span-->
                                <td class=\"center\">
                                    <!--a class=\"btn btn-success\" href=\"#\">
                                        <i class=\"halflings-icon white zoom-in\"></i>
                                    </a-->
                                    <a class=\"btn btn-info\"
                                       href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("universite_modifier", array("id" => $this->getAttribute($context["universite"], "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"halflings-icon white edit\"></i>
                                    </a>
                                    <a class=\"btn btn-danger\"
                                       href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("universite_supprime", array("id" => $this->getAttribute($context["universite"], "id", array()))), "html", null, true);
            echo "\"
                                       onclick=\"return(confirm('Voulez vous Supprimer ?'));\">
                                        <i class=\"halflings-icon white trash\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['universite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                        </tbody>
                    </table>
                </div>
            </div><!--/span-->

        </div><!--/row-->

    <!-- end: Content -->
    </div><!--/#content.span10-->
";
        
        $__internal_40c93effde8856731f54bdafaac9eab2503c087b20bde4fe48cbdb4a842a3809->leave($__internal_40c93effde8856731f54bdafaac9eab2503c087b20bde4fe48cbdb4a842a3809_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Universite:listeUniv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 73,  162 => 66,  155 => 62,  145 => 55,  141 => 54,  138 => 53,  134 => 52,  124 => 44,  115 => 41,  112 => 40,  107 => 39,  98 => 36,  95 => 35,  90 => 34,  81 => 31,  78 => 30,  74 => 29,  70 => 28,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
            <li><a href=\"#\">Table Université</a></li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=halflings-icon align-justify></i><span class=\"break\"></span>Listes des universités</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
                        <a style=\"margin-left: 80%; margin-top: 2%;\" class=\"btn btn-primary\"
                           href=\"{{ path('universite_ajout') }}\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Ajout Université </span></a>
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
                            <th>id</th>
                            <th>Nom Université</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for universite in universite %}
                            <tr>
                                <td>{{ universite.codeUniv }}</td>
                                <td class=\"center\">{{ universite.nomUniv }}</td>
                                <!--span class=\"label label-success\">Active</span-->
                                <td class=\"center\">
                                    <!--a class=\"btn btn-success\" href=\"#\">
                                        <i class=\"halflings-icon white zoom-in\"></i>
                                    </a-->
                                    <a class=\"btn btn-info\"
                                       href=\"{{ path('universite_modifier', { 'id': universite.id }) }}\">
                                        <i class=\"halflings-icon white edit\"></i>
                                    </a>
                                    <a class=\"btn btn-danger\"
                                       href=\"{{ path('universite_supprime', { 'id': universite.id }) }}\"
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
{% endblock %}", "PFFBourseBundle:Universite:listeUniv.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Universite/listeUniv.html.twig");
    }
}
