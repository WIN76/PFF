<?php

/* PFFBourseBundle:Beneficiaire:ajout.html.twig */
class __TwigTemplate_9a16155838a84d22ce855fa017bc217c95e771657370132fe476256bb32d8221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Beneficiaire:ajout.html.twig", 1);
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
        $__internal_db13f24dc18fc9545b60d8e96d2a62a212f10cfbadef07960977ed0c0bd88eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db13f24dc18fc9545b60d8e96d2a62a212f10cfbadef07960977ed0c0bd88eaf->enter($__internal_db13f24dc18fc9545b60d8e96d2a62a212f10cfbadef07960977ed0c0bd88eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Beneficiaire:ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db13f24dc18fc9545b60d8e96d2a62a212f10cfbadef07960977ed0c0bd88eaf->leave($__internal_db13f24dc18fc9545b60d8e96d2a62a212f10cfbadef07960977ed0c0bd88eaf_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_028c2435659d844696e77495d0cde4f2e55f5f91c17e5c892cd7d426575f2fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028c2435659d844696e77495d0cde4f2e55f5f91c17e5c892cd7d426575f2fad->enter($__internal_028c2435659d844696e77495d0cde4f2e55f5f91c17e5c892cd7d426575f2fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <a href=\"#\">Bénéficiaires</a>
            </li>
        </ul>


        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon edit\"></i><span class=\"break\"></span>Saisie des Bénéficiaires</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <form method=\"post\" action=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("beneficiaire_ajout");
        echo "\" class=\"form-horizontal\">
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 38
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 39
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        <fieldset>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Numèro
                                        Matricule</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numMlle", array()), 'widget');
        echo "
                                    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numMlle", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Nom</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
                                    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Prénom</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
                                    ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Genre</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget');
        echo "
                                    ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Date de
                                        naissance</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNais", array()), 'widget');
        echo "
                                    ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNais", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Adresse</strong></label>
                                <div class=\"controls input-xlarge\">
                                    ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "
                                    ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>téléphone</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTel", array()), 'widget');
        echo "
                                    ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTel", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Email</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                                    ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Niveau</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'widget');
        echo "
                                    ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Statut</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statut", array()), 'widget');
        echo "
                                    ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statut", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <!--<div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Faculte</strong></label>
                                <div class=\"controls\">
                                    ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "faculte", array()), 'widget');
        echo "
                                    ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "faculte", array()), 'errors');
        echo "
                                </div>
                            </div>-->

                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"selectError\">Faculté</label>
                                <div class=\"controls\">
                                    <select id=\"pff_boursebundle_beneficiaire_faculte\" name=\"pff_boursebundle_beneficiaire[faculte]\" data-rel=\"chosen\">
                                        ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fac"]) ? $context["fac"] : $this->getContext($context, "fac")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 129
            echo "                                            <option id=\"pff_boursebundle_beneficiaire_faculte\" name=\"pff_boursebundle_beneficiaire[faculte]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "codeFac", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                                    </select>
                                </div>
                            </div>-->


                            ";
        // line 136
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
        
        $__internal_028c2435659d844696e77495d0cde4f2e55f5f91c17e5c892cd7d426575f2fad->leave($__internal_028c2435659d844696e77495d0cde4f2e55f5f91c17e5c892cd7d426575f2fad_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Beneficiaire:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 136,  266 => 131,  255 => 129,  251 => 128,  240 => 120,  236 => 119,  227 => 113,  223 => 112,  214 => 106,  210 => 105,  201 => 99,  197 => 98,  188 => 92,  184 => 91,  175 => 85,  171 => 84,  162 => 78,  158 => 77,  147 => 69,  143 => 68,  134 => 62,  130 => 61,  121 => 55,  117 => 54,  108 => 48,  104 => 47,  97 => 42,  88 => 39,  85 => 38,  81 => 37,  77 => 36,  53 => 15,  44 => 8,  40 => 5,  34 => 4,  11 => 1,);
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
                <a href=\"#\">Bénéficiaires</a>
            </li>
        </ul>


        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon edit\"></i><span class=\"break\"></span>Saisie des Bénéficiaires</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <form method=\"post\" action=\"{{ path('beneficiaire_ajout') }}\" class=\"form-horizontal\">
                        {% for flash_message in app.session.flashBag.get('info') %}
                            <div class=\"alert alert-success\">
                                {{ flash_message }}
                            </div>
                        {% endfor %}
                        <fieldset>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Numèro
                                        Matricule</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.numMlle) }}
                                    {{ form_errors(form.numMlle) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Nom</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.nom) }}
                                    {{ form_errors(form.nom) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Prénom</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.prenom) }}
                                    {{ form_errors(form.prenom) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Genre</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.sexe) }}
                                    {{ form_errors(form.sexe) }}
                                </div>
                            </div>

                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Date de
                                        naissance</strong></label>
                                <div class=\"controls\">
                                    {{  form_widget(form.dateNais) }}
                                    {{ form_errors(form.dateNais) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Adresse</strong></label>
                                <div class=\"controls input-xlarge\">
                                    {{ form_widget(form.adresse) }}
                                    {{ form_errors(form.adresse) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>téléphone</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.numTel) }}
                                    {{ form_errors(form.numTel) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Email</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.email) }}
                                    {{ form_errors(form.email) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Niveau</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.niveau) }}
                                    {{ form_errors(form.niveau) }}
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Statut</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.statut) }}
                                    {{ form_errors(form.statut) }}
                                </div>
                            </div>
                            <!--<div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputSuccess\"><strong>Faculte</strong></label>
                                <div class=\"controls\">
                                    {{ form_widget(form.faculte) }}
                                    {{ form_errors(form.faculte) }}
                                </div>
                            </div>-->

                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"selectError\">Faculté</label>
                                <div class=\"controls\">
                                    <select id=\"pff_boursebundle_beneficiaire_faculte\" name=\"pff_boursebundle_beneficiaire[faculte]\" data-rel=\"chosen\">
                                        {% for f in fac %}
                                            <option id=\"pff_boursebundle_beneficiaire_faculte\" name=\"pff_boursebundle_beneficiaire[faculte]\" value=\"{{ f.id }}\">{{ f.codeFac }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>-->


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

{% endblock %}", "PFFBourseBundle:Beneficiaire:ajout.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Beneficiaire/ajout.html.twig");
    }
}
