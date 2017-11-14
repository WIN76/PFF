<?php

/* PFFBourseBundle:Formation:addForm.html.twig */
class __TwigTemplate_a219b67dd4e023900183af403a733f5468aad6fa3a746603bbe8aa2c2a4ceb05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Formation:addForm.html.twig", 1);
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
        $__internal_6e217426ba7431e7289803fa5e5282a3c0366b74aa40155b281d31e5f7cadeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e217426ba7431e7289803fa5e5282a3c0366b74aa40155b281d31e5f7cadeb3->enter($__internal_6e217426ba7431e7289803fa5e5282a3c0366b74aa40155b281d31e5f7cadeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Formation:addForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e217426ba7431e7289803fa5e5282a3c0366b74aa40155b281d31e5f7cadeb3->leave($__internal_6e217426ba7431e7289803fa5e5282a3c0366b74aa40155b281d31e5f7cadeb3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8128931fcd94557f3dbce58ed6be2f1543969c88f3839c028dec1813da03ff10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8128931fcd94557f3dbce58ed6be2f1543969c88f3839c028dec1813da03ff10->enter($__internal_8128931fcd94557f3dbce58ed6be2f1543969c88f3839c028dec1813da03ff10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formation_ajout");
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
                                <label class=\"control-label\" for=\"selectError\">Beneficiaire</label>
                                <div class=\"controls\">
                                    <select id=\"pff_boursebundle_formation_Beneficiaire\" name=\"pff_boursebundle_formation[Beneficiaire]\" data-rel=\"chosen\">

                                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["beneficiaire"]) ? $context["beneficiaire"] : $this->getContext($context, "beneficiaire")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 50
            echo "                                            <option id=\"pff_boursebundle_formation_Beneficiaire\" name=\"pff_boursebundle_formation[Beneficiaire]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "numMlle", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                    </select>
                                </div>
                            </div>
                            <!--<div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Beneficiaire</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Beneficiaire", array()), 'widget');
        echo "
                                    ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Beneficiaire", array()), 'errors');
        echo "
                                </div>
                            </div>-->
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Diplome</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplome", array()), 'widget');
        echo "
                                    ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplome", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Montant
                                        Formation</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montF", array()), 'widget');
        echo "
                                    ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montF", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Lieu Formation</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuF", array()), 'widget');
        echo "
                                    ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuF", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Date Debut</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'widget');
        echo "
                                    ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Date Fin</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'widget');
        echo "
                                    ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Specialite</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialite", array()), 'widget');
        echo "
                                    ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialite", array()), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 105
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


    </div><!--/.fluid-container-->

    <!-- end: Content -->


";
        
        $__internal_8128931fcd94557f3dbce58ed6be2f1543969c88f3839c028dec1813da03ff10->leave($__internal_8128931fcd94557f3dbce58ed6be2f1543969c88f3839c028dec1813da03ff10_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Formation:addForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 105,  212 => 102,  208 => 101,  199 => 95,  195 => 94,  186 => 88,  182 => 87,  173 => 81,  169 => 80,  160 => 74,  156 => 73,  146 => 66,  142 => 65,  133 => 59,  129 => 58,  121 => 52,  110 => 50,  106 => 49,  98 => 43,  89 => 40,  86 => 39,  82 => 38,  78 => 37,  55 => 17,  44 => 8,  40 => 5,  34 => 4,  11 => 1,);
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
                    <form method=\"post\" action=\"{{ path('formation_ajout') }}\" class=\"form-horizontal\">
                        {% for flash_message in app.session.flashBag.get('info') %}
                            <div class=\"alert alert-success\">
                                {{ flash_message }}
                            </div>
                        {% endfor %}
                        <fieldset>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"selectError\">Beneficiaire</label>
                                <div class=\"controls\">
                                    <select id=\"pff_boursebundle_formation_Beneficiaire\" name=\"pff_boursebundle_formation[Beneficiaire]\" data-rel=\"chosen\">

                                        {% for b in beneficiaire %}
                                            <option id=\"pff_boursebundle_formation_Beneficiaire\" name=\"pff_boursebundle_formation[Beneficiaire]\" value=\"{{ b.id }}\">{{ b.numMlle }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <!--<div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Beneficiaire</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.Beneficiaire) }}
                                    {{ form_errors(form.Beneficiaire) }}
                                </div>
                            </div>-->
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Diplome</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.diplome) }}
                                    {{ form_errors(form.diplome) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Montant
                                        Formation</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.montF) }}
                                    {{ form_errors(form.montF) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Lieu Formation</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.lieuF) }}
                                    {{ form_errors(form.lieuF) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Date Debut</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.dateDebut) }}
                                    {{ form_errors(form.dateDebut) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Date Fin</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.dateFin) }}
                                    {{ form_errors(form.dateFin) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Specialite</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.specialite) }}
                                    {{ form_errors(form.specialite) }}
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


    </div><!--/.fluid-container-->

    <!-- end: Content -->


{% endblock %}", "PFFBourseBundle:Formation:addForm.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Formation/addForm.html.twig");
    }
}
