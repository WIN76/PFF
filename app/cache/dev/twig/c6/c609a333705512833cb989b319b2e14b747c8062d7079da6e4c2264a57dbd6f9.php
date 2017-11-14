<?php

/* PFFBourseBundle:Beneficiaire:editBenef.html.twig */
class __TwigTemplate_86a9c14fbf3e668cdc830bc8c7200cf0b19cd065a69e8dba30e83c0233e62fd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Beneficiaire:editBenef.html.twig", 1);
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
        $__internal_7b06197f2237705bc71f5edd227a627a8a1488153ce2a48fd6a261326047cfb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b06197f2237705bc71f5edd227a627a8a1488153ce2a48fd6a261326047cfb9->enter($__internal_7b06197f2237705bc71f5edd227a627a8a1488153ce2a48fd6a261326047cfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Beneficiaire:editBenef.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b06197f2237705bc71f5edd227a627a8a1488153ce2a48fd6a261326047cfb9->leave($__internal_7b06197f2237705bc71f5edd227a627a8a1488153ce2a48fd6a261326047cfb9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8949f619aa8313ee6a581d3b4b302cf23b717dcf755329a13d3ada6cc80b160b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8949f619aa8313ee6a581d3b4b302cf23b717dcf755329a13d3ada6cc80b160b->enter($__internal_8949f619aa8313ee6a581d3b4b302cf23b717dcf755329a13d3ada6cc80b160b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 6
        echo "    <!-- start: Content -->
    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Accueil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li>
                <i class=\"icon-edit\"></i>
                <a href=\"#\">Modification</a>
            </li>
        </ul>


        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon edit\"></i><span class=\"break\"></span>Modification des Bénéficiaires</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <form class=\"form-horizontal\" method=\"POST\">
                        <fieldset>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Numèro
                                        Matricule</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numMlle", array()), 'errors');
        echo "
                                    ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numMlle", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Nom</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                                    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Prenom</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                                    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Sexe</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
                                    ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Date de
                                        naissance</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNais", array()), 'errors');
        echo "
                                    ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNais", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Adresse</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
                                    ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>N° téléphone</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTel", array()), 'errors');
        echo "
                                    ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTel", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Email</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                    ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Niveau</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'errors');
        echo "
                                    ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Statut</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statut", array()), 'errors');
        echo "
                                    ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statut", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Faculté</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "faculte", array()), 'errors');
        echo "
                                    ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "faculte", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"form-actions\">
                                <input class=\"btn btn-primary\" type=\"submit\" name=\"Modifier\" value=\"Modifier\">
                                <input class=\"btn btn-warning\" type=\"reset\" value=\"Annuler\">
                            </div>
                        </fieldset>
                        ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    </form>

                </div>
            </div><!--/span-->

        </div><!--/row-->


    <!-- end: Content -->
    </div><!--/#content.span10-->
";
        
        $__internal_8949f619aa8313ee6a581d3b4b302cf23b717dcf755329a13d3ada6cc80b160b->leave($__internal_8949f619aa8313ee6a581d3b4b302cf23b717dcf755329a13d3ada6cc80b160b_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Beneficiaire:editBenef.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 120,  217 => 112,  213 => 111,  204 => 105,  200 => 104,  191 => 98,  187 => 97,  178 => 91,  174 => 90,  165 => 84,  161 => 83,  152 => 77,  148 => 76,  139 => 70,  135 => 69,  125 => 62,  121 => 61,  112 => 55,  108 => 54,  99 => 48,  95 => 47,  86 => 41,  82 => 40,  52 => 13,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
                <a href=\"#\">Modification</a>
            </li>
        </ul>


        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon edit\"></i><span class=\"break\"></span>Modification des Bénéficiaires</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <form class=\"form-horizontal\" method=\"POST\">
                        <fieldset>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Numèro
                                        Matricule</strong></label>
                                <div class=\"controls\">
                                    {{ form_errors(form.numMlle) }}
                                    {{ form_widget(form.numMlle) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Nom</strong></label>
                                <div class=\"controls\">
                                    {{ form_errors(form.nom) }}
                                    {{ form_widget(form.nom) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Prenom</strong></label>
                                <div class=\"controls\">
                                    {{ form_errors(form.prenom) }}
                                    {{ form_widget(form.prenom) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Sexe</strong></label>
                                <div class=\"controls\">
                                    {{ form_errors(form.sexe) }}
                                    {{ form_widget(form.sexe) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Date de
                                        naissance</strong></label>
                                <div class=\"controls\">
                                    {{ form_errors(form.dateNais) }}
                                    {{ form_widget(form.dateNais) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Adresse</strong></label>
                                <div class=\"controls\">
                                    {{ form_errors(form.adresse) }}
                                    {{ form_widget(form.adresse) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>N° téléphone</strong></label>
                                <div class=\"controls\">
                                    {{ form_errors(form.numTel) }}
                                    {{ form_widget(form.numTel) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Email</strong></label>
                                <div class=\"controls\">
                                    {{ form_errors(form.email) }}
                                    {{ form_widget(form.email) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Niveau</strong></label>
                                <div class=\"controls\">
                                    {{ form_errors(form.niveau) }}
                                    {{ form_widget(form.niveau) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Statut</strong></label>
                                <div class=\"controls\">
                                    {{ form_errors(form.statut) }}
                                    {{ form_widget(form.statut) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Faculté</strong></label>
                                <div class=\"controls\">
                                    {{ form_errors(form.faculte) }}
                                    {{ form_widget(form.faculte) }}
                                </div>
                            </div>
                            <div class=\"form-actions\">
                                <input class=\"btn btn-primary\" type=\"submit\" name=\"Modifier\" value=\"Modifier\">
                                <input class=\"btn btn-warning\" type=\"reset\" value=\"Annuler\">
                            </div>
                        </fieldset>
                        {{ form_rest(form) }}
                    </form>

                </div>
            </div><!--/span-->

        </div><!--/row-->


    <!-- end: Content -->
    </div><!--/#content.span10-->
{% endblock %}", "PFFBourseBundle:Beneficiaire:editBenef.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Beneficiaire/editBenef.html.twig");
    }
}
