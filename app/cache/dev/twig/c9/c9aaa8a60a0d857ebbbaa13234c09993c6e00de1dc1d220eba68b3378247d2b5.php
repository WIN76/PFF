<?php

/* PFFBourseBundle:Fonds:detailFonds.html.twig */
class __TwigTemplate_52eb8754ada818dba3e6284fc5dc9d201cfba1a146347333fa0fc94795d380fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Fonds:detailFonds.html.twig", 1);
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
        $__internal_bfafb17934ba25aed775f2b2d4f58637e3c45ab7ba5e1143bbcb33e68c70f6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfafb17934ba25aed775f2b2d4f58637e3c45ab7ba5e1143bbcb33e68c70f6e6->enter($__internal_bfafb17934ba25aed775f2b2d4f58637e3c45ab7ba5e1143bbcb33e68c70f6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Fonds:detailFonds.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfafb17934ba25aed775f2b2d4f58637e3c45ab7ba5e1143bbcb33e68c70f6e6->leave($__internal_bfafb17934ba25aed775f2b2d4f58637e3c45ab7ba5e1143bbcb33e68c70f6e6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0a328288ac5a909a24632efede256667d361f0e2a3349f1a850d1ab7cba1f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a328288ac5a909a24632efede256667d361f0e2a3349f1a850d1ab7cba1f0a->enter($__internal_a0a328288ac5a909a24632efede256667d361f0e2a3349f1a850d1ab7cba1f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <li><a href=\"#\">Les Fonds</a></li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon user\"></i><span class=\"break\"></span>Liste des Fondss</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <table>
                        <tr>
                            <td>Montant:</td>
                            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fonds"]) ? $context["fonds"] : $this->getContext($context, "fonds")), "Montant", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Annee:</td>
                            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fonds"]) ? $context["fonds"] : $this->getContext($context, "fonds")), "Annee", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Type:</td>
                            <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fonds"]) ? $context["fonds"] : $this->getContext($context, "fonds")), "Type", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </table>
                </div>
            </div><!--/span-->

        </div><!--/row-->
    <!-- end: Content -->
    </div><!--/#content.span10-->
";
        
        $__internal_a0a328288ac5a909a24632efede256667d361f0e2a3349f1a850d1ab7cba1f0a->leave($__internal_a0a328288ac5a909a24632efede256667d361f0e2a3349f1a850d1ab7cba1f0a_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Fonds:detailFonds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 37,  78 => 33,  71 => 29,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
            <li><a href=\"#\">Les Fonds</a></li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon user\"></i><span class=\"break\"></span>Liste des Fondss</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <table>
                        <tr>
                            <td>Montant:</td>
                            <td>{{ fonds.Montant }}</td>
                        </tr>
                        <tr>
                            <td>Annee:</td>
                            <td>{{ fonds.Annee }}</td>
                        </tr>
                        <tr>
                            <td>Type:</td>
                            <td>{{ fonds.Type }}</td>
                        </tr>
                    </table>
                </div>
            </div><!--/span-->

        </div><!--/row-->
    <!-- end: Content -->
    </div><!--/#content.span10-->
{% endblock %}", "PFFBourseBundle:Fonds:detailFonds.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Fonds/detailFonds.html.twig");
    }
}
