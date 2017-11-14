<?php

/* PFFBourseBundle:Universite:editUniv.html.twig */
class __TwigTemplate_692d311b65e4655e075e99a09cde1fceeb07d76ad98f91b0e8c42938e3ff3463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Universite:editUniv.html.twig", 1);
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
        $__internal_1534cc5d47e9a07d9f27dc9d9e1b56bc3b3d8762313f563ded2d84e68eaa9381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1534cc5d47e9a07d9f27dc9d9e1b56bc3b3d8762313f563ded2d84e68eaa9381->enter($__internal_1534cc5d47e9a07d9f27dc9d9e1b56bc3b3d8762313f563ded2d84e68eaa9381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Universite:editUniv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1534cc5d47e9a07d9f27dc9d9e1b56bc3b3d8762313f563ded2d84e68eaa9381->leave($__internal_1534cc5d47e9a07d9f27dc9d9e1b56bc3b3d8762313f563ded2d84e68eaa9381_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_705d76559047fdf376b5ccc8685c95194e9606e7925f31d35dc16368dd3c8e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705d76559047fdf376b5ccc8685c95194e9606e7925f31d35dc16368dd3c8e4e->enter($__internal_705d76559047fdf376b5ccc8685c95194e9606e7925f31d35dc16368dd3c8e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

    ";
        // line 8
        echo "    <!-- start: Content -->
    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Accueil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li>
                <i class=\"icon-edit\"></i>
                <a href=\"#\">Universite</a>
            </li>
        </ul>


        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon edit\"></i><span class=\"break\"></span>Modification des Universites</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <form method=\"post\" class=\"form-horizontal\">
                        <fieldset>

                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"focus\">Code Universite </label>
                                <div class=\"controls\">
                                    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codeUniv", array()), 'widget');
        echo "
                                    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codeUniv", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\">Nom Universite </label>
                                <div class=\"controls\">
                                    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomUniv", array()), 'widget');
        echo "
                                    ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomUniv", array()), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            <div class=\"form-actions\">
                                <input class=\"btn btn-primary\" type=\"submit\" value=\"Modifier\">
                                <input class=\"btn btn-warning\" type=\"reset\" value=\"Annuler\">
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div><!--/span-->

        </div><!--/row-->


    <!-- end: Content -->
    </div><!--/#content.span10-->


";
        
        $__internal_705d76559047fdf376b5ccc8685c95194e9606e7925f31d35dc16368dd3c8e4e->leave($__internal_705d76559047fdf376b5ccc8685c95194e9606e7925f31d35dc16368dd3c8e4e_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Universite:editUniv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 53,  100 => 50,  96 => 49,  87 => 43,  83 => 42,  53 => 15,  44 => 8,  40 => 5,  34 => 4,  11 => 1,);
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


    {#{ form(form) }#}
    <!-- start: Content -->
    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"{{ path('index') }}\">Accueil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li>
                <i class=\"icon-edit\"></i>
                <a href=\"#\">Universite</a>
            </li>
        </ul>


        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon edit\"></i><span class=\"break\"></span>Modification des Universites</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <form method=\"post\" class=\"form-horizontal\">
                        <fieldset>

                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"focus\">Code Universite </label>
                                <div class=\"controls\">
                                    {{ form_widget(form.codeUniv) }}
                                    {{ form_errors(form.codeUniv) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\">Nom Universite </label>
                                <div class=\"controls\">
                                    {{ form_widget(form.nomUniv) }}
                                    {{ form_errors(form.nomUniv) }}
                                </div>
                            </div>
                            {{ form_rest(form) }}
                            <div class=\"form-actions\">
                                <input class=\"btn btn-primary\" type=\"submit\" value=\"Modifier\">
                                <input class=\"btn btn-warning\" type=\"reset\" value=\"Annuler\">
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div><!--/span-->

        </div><!--/row-->


    <!-- end: Content -->
    </div><!--/#content.span10-->


{% endblock %}", "PFFBourseBundle:Universite:editUniv.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Universite/editUniv.html.twig");
    }
}
