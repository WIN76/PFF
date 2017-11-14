<?php

/* PFFBourseBundle:Fonds:addFonds.html.twig */
class __TwigTemplate_b6c86c00397919a8bf4cc67184e3c8d80332e8455f8c36358714643ffd39e9c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Fonds:addFonds.html.twig", 1);
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
        $__internal_bf23f006e0d9820563b6dbf7b59c4f3201b66af14bc235f5a77eda701b516f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf23f006e0d9820563b6dbf7b59c4f3201b66af14bc235f5a77eda701b516f51->enter($__internal_bf23f006e0d9820563b6dbf7b59c4f3201b66af14bc235f5a77eda701b516f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Fonds:addFonds.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf23f006e0d9820563b6dbf7b59c4f3201b66af14bc235f5a77eda701b516f51->leave($__internal_bf23f006e0d9820563b6dbf7b59c4f3201b66af14bc235f5a77eda701b516f51_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_eddc5a7a07cf96d014ea1fcd733a141b5e795ff054ae44b1873e31dde4d31ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eddc5a7a07cf96d014ea1fcd733a141b5e795ff054ae44b1873e31dde4d31ef6->enter($__internal_eddc5a7a07cf96d014ea1fcd733a141b5e795ff054ae44b1873e31dde4d31ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

    ";
        // line 8
        echo "

    <!-- start: Content -->
    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Accueil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li>
                <i class=\"icon-edit\"></i>
                <a href=\"#\">Fonds</a>
            </li>
        </ul>


        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon edit\"></i><span class=\"break\"></span>Saisie des Fonds</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <form method=\"post\" action=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fonds_ajout");
        echo "\" class=\"form-horizontal\">
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "info"), "method"));
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
        echo "                        <fieldset>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Montant</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montant", array()), 'widget');
        echo "
                                    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montant", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Année</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'widget');
        echo "
                                    ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Type</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
                                    ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            <div class=\"form-actions\">
                                <input class=\"btn btn-primary\" type=\"submit\" value=\"Ajouter\">
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
        
        $__internal_eddc5a7a07cf96d014ea1fcd733a141b5e795ff054ae44b1873e31dde4d31ef6->leave($__internal_eddc5a7a07cf96d014ea1fcd733a141b5e795ff054ae44b1873e31dde4d31ef6_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Fonds:addFonds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 66,  135 => 63,  131 => 62,  122 => 56,  118 => 55,  109 => 49,  105 => 48,  99 => 44,  90 => 41,  87 => 40,  83 => 39,  79 => 38,  55 => 17,  44 => 8,  40 => 5,  34 => 4,  11 => 1,);
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
                <a href=\"#\">Fonds</a>
            </li>
        </ul>


        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon edit\"></i><span class=\"break\"></span>Saisie des Fonds</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <form method=\"post\" action=\"{{ path('fonds_ajout') }}\" class=\"form-horizontal\">
                        {% for flash_message in app.session.flashBag.get('info') %}
                            <div class=\"alert alert-success\">
                                {{ flash_message }}
                            </div>
                        {% endfor %}
                        <fieldset>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Montant</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.montant) }}
                                    {{ form_errors(form.montant) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Année</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.annee) }}
                                    {{ form_errors(form.annee) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Type</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.type) }}
                                    {{ form_errors(form.type) }}
                                </div>
                            </div>
                            {{ form_rest(form) }}
                            <div class=\"form-actions\">
                                <input class=\"btn btn-primary\" type=\"submit\" value=\"Ajouter\">
                                <input class=\"btn btn-warning\" type=\"reset\" value=\"Annuler\">
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div><!--/span-->

        </div><!--/row-->

    <!-- end: Content -->
    </div><!--/#content.span10-->


{% endblock %}", "PFFBourseBundle:Fonds:addFonds.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Fonds/addFonds.html.twig");
    }
}
