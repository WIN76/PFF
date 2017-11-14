<?php

/* PFFBourseBundle:Accueil:detailInscription.html.twig */
class __TwigTemplate_3cb04fc0d8607736b8ad02d7198318c66f070c743a3dfbd56f2e043e29aa129e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Accueil:detailInscription.html.twig", 1);
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
        $__internal_3fc78609882f3775373c776edd51cd44ccee1c571069a5483291be01cd550b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc78609882f3775373c776edd51cd44ccee1c571069a5483291be01cd550b4a->enter($__internal_3fc78609882f3775373c776edd51cd44ccee1c571069a5483291be01cd550b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Accueil:detailInscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fc78609882f3775373c776edd51cd44ccee1c571069a5483291be01cd550b4a->leave($__internal_3fc78609882f3775373c776edd51cd44ccee1c571069a5483291be01cd550b4a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_31d901b471f622e1fc50bbc50c2b885bf7f243cca00205b873e05155fd28ba1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d901b471f622e1fc50bbc50c2b885bf7f243cca00205b873e05155fd28ba1a->enter($__internal_31d901b471f622e1fc50bbc50c2b885bf7f243cca00205b873e05155fd28ba1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <link rel=\"stylesheet\" media=\"print\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/css/utilImprimer.css"), "html", null, true);
        echo "\" >
    ";
        // line 8
        echo "    <!-- start: Content -->
    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a class=\"accueil\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Accueil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li>
                <i class=\"icon-edit\"></i>
                <a class=\"inscription\" href=\"#\">Inscription</a>
            </li>
        </ul>


        <div class=\"row-fluid sortable\">
            <div class=\"box span6\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon edit\"></i><span class=\"break\"></span>Details de l'inscription</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" onclick=\"javascript:window.print()\" class=\"refImprimer\" >Imprimer</a>
                       <!-- <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>-->
                    </div>
                </div>
                <div class=\"box-content\">
                    <p>Votre inscription a ete effectuee avec succes !!!<br>
                    Pour vous connecter veuillez saisir les identifiants ci-dessous:<br>
                        Login:<b>";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo "</b><br>
                        Mot de passe:<b>";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["pass"]) ? $context["pass"] : $this->getContext($context, "pass")), "html", null, true);
        echo "</b>
                    </p>

                </div>
            </div><!--/span-->

        </div><!--/row-->


    </div><!--/.fluid-container-->

    <!-- end: Content -->

";
        
        $__internal_31d901b471f622e1fc50bbc50c2b885bf7f243cca00205b873e05155fd28ba1a->leave($__internal_31d901b471f622e1fc50bbc50c2b885bf7f243cca00205b873e05155fd28ba1a_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Accueil:detailInscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 40,  83 => 39,  56 => 15,  47 => 8,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
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

    <link rel=\"stylesheet\" media=\"print\" href=\"{{ asset('bundles/pffbourse/templates/css/utilImprimer.css') }}\" >
    {#{ form(form) }#}
    <!-- start: Content -->
    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a class=\"accueil\" href=\"{{ path('index') }}\">Accueil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li>
                <i class=\"icon-edit\"></i>
                <a class=\"inscription\" href=\"#\">Inscription</a>
            </li>
        </ul>


        <div class=\"row-fluid sortable\">
            <div class=\"box span6\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon edit\"></i><span class=\"break\"></span>Details de l'inscription</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" onclick=\"javascript:window.print()\" class=\"refImprimer\" >Imprimer</a>
                       <!-- <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>-->
                    </div>
                </div>
                <div class=\"box-content\">
                    <p>Votre inscription a ete effectuee avec succes !!!<br>
                    Pour vous connecter veuillez saisir les identifiants ci-dessous:<br>
                        Login:<b>{{ user }}</b><br>
                        Mot de passe:<b>{{ pass }}</b>
                    </p>

                </div>
            </div><!--/span-->

        </div><!--/row-->


    </div><!--/.fluid-container-->

    <!-- end: Content -->

{% endblock %}", "PFFBourseBundle:Accueil:detailInscription.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Accueil/detailInscription.html.twig");
    }
}
