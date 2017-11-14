<?php

/* PFFBourseBundle:Formation:detailForm.html.twig */
class __TwigTemplate_8b9eea508eaba7ca2a64279b11e19944e7ab5291f5b16e1d89e6859ae4296d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Formation:detailForm.html.twig", 1);
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
        $__internal_f6341618cfc504d6860f9febdfe18f50c9064158c0735d0599fd996f5f6b1c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6341618cfc504d6860f9febdfe18f50c9064158c0735d0599fd996f5f6b1c8c->enter($__internal_f6341618cfc504d6860f9febdfe18f50c9064158c0735d0599fd996f5f6b1c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Formation:detailForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6341618cfc504d6860f9febdfe18f50c9064158c0735d0599fd996f5f6b1c8c->leave($__internal_f6341618cfc504d6860f9febdfe18f50c9064158c0735d0599fd996f5f6b1c8c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e421f78d974455bc53db95c778dc8893150ebfe98457662a64f5c7579377f21b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e421f78d974455bc53db95c778dc8893150ebfe98457662a64f5c7579377f21b->enter($__internal_e421f78d974455bc53db95c778dc8893150ebfe98457662a64f5c7579377f21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <li><a href=\"#\">Les Formations</a></li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon user\"></i><span class=\"break\"></span>Liste des Formations</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <table>
                        <tr>
                            <td>Boursier:</td>
                            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "Beneficiaire", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Diplome:</td>
                            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "Diplome", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Montant Formation:</td>
                            <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "MontF", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Lieu Formation:</td>
                            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "LieuF", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Date Debut:</td>
                            <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "DateDebut", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Date Fin:</td>
                            <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "DateFin", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Specialitee:</td>
                            <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "Specialite", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </table>
                </div>
            </div><!--/span-->

        </div><!--/row-->

    <!-- end: Content -->
    </div><!--/#content.span10-->
";
        
        $__internal_e421f78d974455bc53db95c778dc8893150ebfe98457662a64f5c7579377f21b->leave($__internal_e421f78d974455bc53db95c778dc8893150ebfe98457662a64f5c7579377f21b_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Formation:detailForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 53,  106 => 49,  99 => 45,  92 => 41,  85 => 37,  78 => 33,  71 => 29,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
            <li><a href=\"#\">Les Formations</a></li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon user\"></i><span class=\"break\"></span>Liste des Formations</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <table>
                        <tr>
                            <td>Boursier:</td>
                            <td>{{ formation.Beneficiaire }}</td>
                        </tr>
                        <tr>
                            <td>Diplome:</td>
                            <td>{{ formation.Diplome }}</td>
                        </tr>
                        <tr>
                            <td>Montant Formation:</td>
                            <td>{{ formation.MontF }}</td>
                        </tr>
                        <tr>
                            <td>Lieu Formation:</td>
                            <td>{{ formation.LieuF }}</td>
                        </tr>
                        <tr>
                            <td>Date Debut:</td>
                            <td>{{ formation.DateDebut }}</td>
                        </tr>
                        <tr>
                            <td>Date Fin:</td>
                            <td>{{ formation.DateFin }}</td>
                        </tr>
                        <tr>
                            <td>Specialitee:</td>
                            <td>{{ formation.Specialite }}</td>
                        </tr>
                    </table>
                </div>
            </div><!--/span-->

        </div><!--/row-->

    <!-- end: Content -->
    </div><!--/#content.span10-->
{% endblock %}", "PFFBourseBundle:Formation:detailForm.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Formation/detailForm.html.twig");
    }
}
