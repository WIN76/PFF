<?php

/* PFFBourseBundle:Accueil:new.html.twig */
class __TwigTemplate_5926d4a1d34229ce611d603b8ba997a8d485441894336f29d3c5a10386ddd808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Accueil:new.html.twig", 1);
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
        $__internal_f296d6a5ebca776154955e04e8b22b3cfc0e60174e72968bc2251da60180cc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f296d6a5ebca776154955e04e8b22b3cfc0e60174e72968bc2251da60180cc36->enter($__internal_f296d6a5ebca776154955e04e8b22b3cfc0e60174e72968bc2251da60180cc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Accueil:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f296d6a5ebca776154955e04e8b22b3cfc0e60174e72968bc2251da60180cc36->leave($__internal_f296d6a5ebca776154955e04e8b22b3cfc0e60174e72968bc2251da60180cc36_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fea49ff3db9625a1de6bb993d00e7f8c34ad207dd328dc0a60b5275eb6ef127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fea49ff3db9625a1de6bb993d00e7f8c34ad207dd328dc0a60b5275eb6ef127->enter($__internal_7fea49ff3db9625a1de6bb993d00e7f8c34ad207dd328dc0a60b5275eb6ef127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Accueil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li>
                <i class=\"icon-lock\"></i>
                <a href=\"#\">Inscription</a>
            </li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon edit\"></i><span class=\"break\"></span>Formulaire d'inscription</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <div class=\"col-sm-3\">
                        <form method=\"post\">
                            ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <input type=\"submit\" class=\"btn btn-primary\" />
                        </form>
                    </div>

                </div>

            </div>
            ";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>

    <!-- end: Content -->
    </div><!--/#content.span10-->

";
        
        $__internal_7fea49ff3db9625a1de6bb993d00e7f8c34ad207dd328dc0a60b5275eb6ef127->leave($__internal_7fea49ff3db9625a1de6bb993d00e7f8c34ad207dd328dc0a60b5275eb6ef127_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Accueil:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 38,  72 => 30,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
                <a href=\"{{ path('index') }}\">Accueil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li>
                <i class=\"icon-lock\"></i>
                <a href=\"#\">Inscription</a>
            </li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon edit\"></i><span class=\"break\"></span>Formulaire d'inscription</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <div class=\"col-sm-3\">
                        <form method=\"post\">
                            {{ form_widget(form) }}
                            <input type=\"submit\" class=\"btn btn-primary\" />
                        </form>
                    </div>

                </div>

            </div>
            {{ form_end(form) }}
        </div>

    <!-- end: Content -->
    </div><!--/#content.span10-->

{% endblock %}
", "PFFBourseBundle:Accueil:new.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Accueil/new.html.twig");
    }
}
