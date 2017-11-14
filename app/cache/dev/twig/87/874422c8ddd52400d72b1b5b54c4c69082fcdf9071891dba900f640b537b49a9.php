<?php

/* PFFBourseBundle:Historique:addHist.html.twig */
class __TwigTemplate_5811b1c4ee29dcb7062aae9c3118aedd4f423b169e0b77d9a231cd5eaf690085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Historique:addHist.html.twig", 1);
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
        $__internal_0c36a79b5f12f207ddf94c2dcdfbcae189aacdd63b2f7331a998dccb6f6b16aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c36a79b5f12f207ddf94c2dcdfbcae189aacdd63b2f7331a998dccb6f6b16aa->enter($__internal_0c36a79b5f12f207ddf94c2dcdfbcae189aacdd63b2f7331a998dccb6f6b16aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Historique:addHist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c36a79b5f12f207ddf94c2dcdfbcae189aacdd63b2f7331a998dccb6f6b16aa->leave($__internal_0c36a79b5f12f207ddf94c2dcdfbcae189aacdd63b2f7331a998dccb6f6b16aa_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_89353f9e32498289c0da96fe84aa5da71d8364050acc54430ad6fcf18ae89e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89353f9e32498289c0da96fe84aa5da71d8364050acc54430ad6fcf18ae89e1b->enter($__internal_89353f9e32498289c0da96fe84aa5da71d8364050acc54430ad6fcf18ae89e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <a href=\"#\">Formations</a>
            </li>
        </ul>


        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon edit\"></i><span class=\"break\"></span>Saisie des Formations</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <form method=\"post\" action=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_ajout");
        echo "\" class=\"form-horizontal\">
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 39
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 40
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                        <fieldset>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Date</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
                                    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Beneficiaire</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "beneficiaire", array()), 'widget');
        echo "
                                    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "beneficiaire", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Fonds
                                        Formation</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonds", array()), 'widget');
        echo "
                                    ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonds", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <!--<div class=\"control-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"selectError\">Fonds</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t  <select id=\"selectError\" data-rel=\"chosen\">
\t\t\t\t\t\t\t\t  <option>
\t\t\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonds", array()), 'widget');
        echo "
                                    </option>
                                    ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonds", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>-->
                            ";
        // line 77
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
        
        $__internal_89353f9e32498289c0da96fe84aa5da71d8364050acc54430ad6fcf18ae89e1b->leave($__internal_89353f9e32498289c0da96fe84aa5da71d8364050acc54430ad6fcf18ae89e1b_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Historique:addHist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 77,  151 => 73,  146 => 71,  135 => 63,  131 => 62,  121 => 55,  117 => 54,  108 => 48,  104 => 47,  98 => 43,  89 => 40,  86 => 39,  82 => 38,  78 => 37,  55 => 17,  44 => 8,  40 => 5,  34 => 4,  11 => 1,);
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
                <a href=\"#\">Formations</a>
            </li>
        </ul>


        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon edit\"></i><span class=\"break\"></span>Saisie des Formations</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <form method=\"post\" action=\"{{ path('historique_ajout') }}\" class=\"form-horizontal\">
                        {% for flash_message in app.session.flashBag.get('info') %}
                            <div class=\"alert alert-success\">
                                {{ flash_message }}
                            </div>
                        {% endfor %}
                        <fieldset>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Date</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.date) }}
                                    {{ form_errors(form.date) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Beneficiaire</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.beneficiaire) }}
                                    {{ form_errors(form.beneficiaire) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Fonds
                                        Formation</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.fonds) }}
                                    {{ form_errors(form.fonds) }}
                                </div>
                            </div>
                            <!--<div class=\"control-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"selectError\">Fonds</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t  <select id=\"selectError\" data-rel=\"chosen\">
\t\t\t\t\t\t\t\t  <option>
\t\t\t\t\t\t\t\t\t{{ form_widget(form.fonds) }}
                                    </option>
                                    {{ form_errors(form.fonds) }}
\t\t\t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>-->
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



{% endblock %}", "PFFBourseBundle:Historique:addHist.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Historique/addHist.html.twig");
    }
}
