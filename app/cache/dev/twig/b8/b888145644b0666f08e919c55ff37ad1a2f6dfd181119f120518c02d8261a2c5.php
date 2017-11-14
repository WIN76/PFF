<?php

/* PFFBourseBundle:Historique:listBeneFond.html.twig */
class __TwigTemplate_2b067d97708183f9a25e963de4baa23600e5359c7954fbf1a801f689d9666795 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Historique:listBeneFond.html.twig", 1);
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
        $__internal_709fefc377e508760b64252939ad23895f7b2a89aeb4baaa70763ca0164c936e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709fefc377e508760b64252939ad23895f7b2a89aeb4baaa70763ca0164c936e->enter($__internal_709fefc377e508760b64252939ad23895f7b2a89aeb4baaa70763ca0164c936e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Historique:listBeneFond.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_709fefc377e508760b64252939ad23895f7b2a89aeb4baaa70763ca0164c936e->leave($__internal_709fefc377e508760b64252939ad23895f7b2a89aeb4baaa70763ca0164c936e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d05c64ce4f1c7b98cc69208934f1b8c59e0fa714ce40fd7e13feb911c202d563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05c64ce4f1c7b98cc69208934f1b8c59e0fa714ce40fd7e13feb911c202d563->enter($__internal_d05c64ce4f1c7b98cc69208934f1b8c59e0fa714ce40fd7e13feb911c202d563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Home</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li><a href=\"#\">Liste des beneficiaires avec fonds </a></li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon user\"></i><span class=\"break\"></span>Liste des beneficiares avec fonds</h2>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_ajout");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Attribuer un Fonds </span></a>
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
                            <th>Boursier</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["hist"]);
        foreach ($context['_seq'] as $context["_key"] => $context["hist"]) {
            // line 54
            echo "                            <tr>
                                <td class=\"center\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["hist"], "beneficiaire", array()), "numMlle", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["hist"], "beneficiaire", array()), "nom", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["hist"], "beneficiaire", array()), "prenom", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">
                                    <a class=\"btn btn-success\"
                                       href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("benef_fonds_hist", array("id" => $this->getAttribute($this->getAttribute($context["hist"], "beneficiaire", array()), "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"halflings-icon white zoom-in\"></i>
                                    </a>
                                    <a class=\"btn btn-info\"
                                       href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formation_modifier", array("id" => $this->getAttribute($this->getAttribute($context["hist"], "beneficiaire", array()), "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"halflings-icon white edit\"></i>
                                    </a>
                                    <a class=\"btn btn-danger\"
                                       href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formation_supprime", array("id" => $this->getAttribute($this->getAttribute($context["hist"], "beneficiaire", array()), "id", array()))), "html", null, true);
            echo "\"
                                       onclick=\"return(confirm('Voulez vous Supprimer ?'));\">
                                        <i class=\"halflings-icon white trash\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                        </tbody>
                    </table>
                </div>
            </div><!--/span-->

        </div><!--/row-->


        <!-- end: Content -->
    </div><!--/#content.span10-->

";
        
        $__internal_d05c64ce4f1c7b98cc69208934f1b8c59e0fa714ce40fd7e13feb911c202d563->leave($__internal_d05c64ce4f1c7b98cc69208934f1b8c59e0fa714ce40fd7e13feb911c202d563_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Historique:listBeneFond.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 75,  170 => 68,  163 => 64,  156 => 60,  150 => 57,  146 => 56,  142 => 55,  139 => 54,  135 => 53,  124 => 44,  115 => 41,  112 => 40,  107 => 39,  98 => 36,  95 => 35,  90 => 34,  81 => 31,  78 => 30,  74 => 29,  70 => 28,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
                <a href=\"{{ path('index') }}\">Home</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li><a href=\"#\">Liste des beneficiaires avec fonds </a></li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon user\"></i><span class=\"break\"></span>Liste des beneficiares avec fonds</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
                        <a style=\"margin-left: 80%; margin-top: 2%;\" class=\"btn btn-primary\"
                           href=\"{{ path('historique_ajout') }}\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Attribuer un Fonds </span></a>
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
                            <th>Boursier</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for hist in hist %}
                            <tr>
                                <td class=\"center\">{{ hist.beneficiaire.numMlle }}</td>
                                <td class=\"center\">{{ hist.beneficiaire.nom }}</td>
                                <td class=\"center\">{{ hist.beneficiaire.prenom }}</td>
                                <td class=\"center\">
                                    <a class=\"btn btn-success\"
                                       href=\"{{ path('benef_fonds_hist', { 'id': hist.beneficiaire.id }) }}\">
                                        <i class=\"halflings-icon white zoom-in\"></i>
                                    </a>
                                    <a class=\"btn btn-info\"
                                       href=\"{{ path('formation_modifier', { 'id': hist.beneficiaire.id }) }}\">
                                        <i class=\"halflings-icon white edit\"></i>
                                    </a>
                                    <a class=\"btn btn-danger\"
                                       href=\"{{ path('formation_supprime', { 'id':hist.beneficiaire.id }) }}\"
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

{% endblock %}", "PFFBourseBundle:Historique:listBeneFond.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Historique/listBeneFond.html.twig");
    }
}
