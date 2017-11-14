<?php

/* PFFBourseBundle:Formation:listeForm.html.twig */
class __TwigTemplate_1f5a707aa054c1f2b925ee7ba5a2b647a29744df9115fdab115931006ec26608 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Formation:listeForm.html.twig", 1);
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
        $__internal_b9e7254fd67a3c215049d09dd88aa717539da1639aeea7ad4a9a058c6a713285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e7254fd67a3c215049d09dd88aa717539da1639aeea7ad4a9a058c6a713285->enter($__internal_b9e7254fd67a3c215049d09dd88aa717539da1639aeea7ad4a9a058c6a713285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Formation:listeForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9e7254fd67a3c215049d09dd88aa717539da1639aeea7ad4a9a058c6a713285->leave($__internal_b9e7254fd67a3c215049d09dd88aa717539da1639aeea7ad4a9a058c6a713285_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e7418d242f0bddebca4fcdcec5c1b212b8f5d35b9d132573e30d35146473d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7418d242f0bddebca4fcdcec5c1b212b8f5d35b9d132573e30d35146473d62->enter($__internal_0e7418d242f0bddebca4fcdcec5c1b212b8f5d35b9d132573e30d35146473d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div id=\"content\" class=\"span10\">


        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Acceuil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li><a href=\"#\">Table Formation</a></li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon align-justify\"></i><span class=\"break\"></span>Listes des formationss</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
                       ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 28
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 29
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 33
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 34
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alerte"), "method"));
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
        echo "                        <thead>
                        <tr>
                            <th>Bénéficiaire</th>
                            <th>Diplome</th>
                            <th>Montant Formation</th>
                            <th>Lieu Formation</th>
                            <th>Date Début</th>
                            <th>Date Fin</th>
                            <th>Spécialité</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["formation"]);
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 56
            echo "                            <tr>
                                <td class=\"center\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "Beneficiaire", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "Diplome", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "MontF", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "LieuF", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "DateDebut", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "DateFin", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "Specialite", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">
                                    <a class=\"btn btn-success\"
                                       href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formation_detail", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"halflings-icon white zoom-in\"></i>
                                    </a>
                                    <a class=\"btn btn-info\"
                                       href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formation_modifier", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"halflings-icon white edit\"></i>
                                    </a>
                                    <a class=\"btn btn-danger\"
                                       href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formation_supprime", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            echo "\"
                                       onclick=\"return(confirm('Voulez vous Supprimer ?'));\">
                                        <i class=\"halflings-icon white trash\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                        </tbody>
                    </table>
                </div>
            </div><!--/span-->

        </div><!--/row-->

    <!-- end: Content -->
    </div><!--/#content.span10-->

";
        
        $__internal_0e7418d242f0bddebca4fcdcec5c1b212b8f5d35b9d132573e30d35146473d62->leave($__internal_0e7418d242f0bddebca4fcdcec5c1b212b8f5d35b9d132573e30d35146473d62_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Formation:listeForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 81,  185 => 74,  178 => 70,  171 => 66,  165 => 63,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  141 => 57,  138 => 56,  134 => 55,  119 => 42,  110 => 39,  107 => 38,  102 => 37,  93 => 34,  90 => 33,  85 => 32,  76 => 29,  73 => 28,  69 => 27,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
                <a href=\"{{ path('index') }}\">Acceuil</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li><a href=\"#\">Table Formation</a></li>
        </ul>

        <div class=\"row-fluid sortable\">
            <div class=\"box span12\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"halflings-icon align-justify\"></i><span class=\"break\"></span>Listes des formationss</h2>
                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
                        <a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
                       {% for flash_message in app.session.flashBag.get('info') %}
                            <div class=\"alert alert-success\">
                                {{ flash_message }}
                            </div>
                        {% endfor %}
                        {% for flash_message in app.session.flashBag.get('notice') %}
                            <div class=\"alert alert-success\">
                                {{ flash_message }}
                            </div>
                        {% endfor %}
                        {% for flash_message in app.session.flashBag.get('alerte') %}
                            <div class=\"alert alert-success\">
                                {{ flash_message }}
                            </div>
                        {% endfor %}
                        <thead>
                        <tr>
                            <th>Bénéficiaire</th>
                            <th>Diplome</th>
                            <th>Montant Formation</th>
                            <th>Lieu Formation</th>
                            <th>Date Début</th>
                            <th>Date Fin</th>
                            <th>Spécialité</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for formation in formation %}
                            <tr>
                                <td class=\"center\">{{ formation.Beneficiaire }}</td>
                                <td class=\"center\">{{ formation.Diplome }}</td>
                                <td class=\"center\">{{ formation.MontF }}</td>
                                <td class=\"center\">{{ formation.LieuF }}</td>
                                <td class=\"center\">{{ formation.DateDebut }}</td>
                                <td class=\"center\">{{ formation.DateFin }}</td>
                                <td class=\"center\">{{ formation.Specialite }}</td>
                                <td class=\"center\">
                                    <a class=\"btn btn-success\"
                                       href=\"{{ path('formation_detail', { 'id': formation.id }) }}\">
                                        <i class=\"halflings-icon white zoom-in\"></i>
                                    </a>
                                    <a class=\"btn btn-info\"
                                       href=\"{{ path('formation_modifier', { 'id': formation.id }) }}\">
                                        <i class=\"halflings-icon white edit\"></i>
                                    </a>
                                    <a class=\"btn btn-danger\"
                                       href=\"{{ path('formation_supprime', { 'id': formation.id }) }}\"
                                       onclick=\"return(confirm('Voulez vous Supprimer ?'));\">
                                        <i class=\"halflings-icon white trash\"></i>
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div><!--/span-->

        </div><!--/row-->

    <!-- end: Content -->
    </div><!--/#content.span10-->

{% endblock %}", "PFFBourseBundle:Formation:listeForm.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Formation/listeForm.html.twig");
    }
}
