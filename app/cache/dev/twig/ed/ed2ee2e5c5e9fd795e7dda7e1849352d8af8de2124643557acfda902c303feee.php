<?php

/* PFFUserBundle:Default:listeUtil.html.twig */
class __TwigTemplate_e539ac97e271b4c55d7a98e24e0116f12cb49e2cced98d4b5b65a3b05f4f4a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFUserBundle:Default:listeUtil.html.twig", 1);
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
        $__internal_fa966c12ee2b23fdc35a8344072f8e1d7c36e2d76d6d7a48d5d81856b5d59a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa966c12ee2b23fdc35a8344072f8e1d7c36e2d76d6d7a48d5d81856b5d59a76->enter($__internal_fa966c12ee2b23fdc35a8344072f8e1d7c36e2d76d6d7a48d5d81856b5d59a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFUserBundle:Default:listeUtil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa966c12ee2b23fdc35a8344072f8e1d7c36e2d76d6d7a48d5d81856b5d59a76->leave($__internal_fa966c12ee2b23fdc35a8344072f8e1d7c36e2d76d6d7a48d5d81856b5d59a76_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bbdb39d61683605e26274c7da1b4552e963cbbeb00efdf8a3f183912e26ad56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbdb39d61683605e26274c7da1b4552e963cbbeb00efdf8a3f183912e26ad56->enter($__internal_2bbdb39d61683605e26274c7da1b4552e963cbbeb00efdf8a3f183912e26ad56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div id=\"content\" class=\"span10\">
\t\t\t
\t\t\t
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t<li>
\t\t\t\t\t<i class=\"icon-home\"></i>
\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Acceuil</a>
\t\t\t\t\t<i class=\"icon-angle-right\"></i>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"#\">Table Utilisateurs</a></li>
\t\t\t</ul>

\t\t\t<div class=\"row-fluid sortable\">\t\t
\t\t\t\t<div class=\"box span12\">
\t\t\t\t\t<div class=\"box-header\" data-original-title>
\t\t\t\t\t\t<h2><i class=\"halflings-icon user\"></i><span class=\"break\"></span>Listes des utilisateurs</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
\t\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alerte"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 27
            echo "\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t\t\t  <thead>
\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t  <th>Nom d'Utilisateur</th>
\t\t\t\t\t\t\t\t  <th>Email</th>
\t\t\t\t\t\t\t\t  <th>Role</th>
\t\t\t\t\t\t\t\t  <th>Status</th>
\t\t\t\t\t\t\t\t  <th>Actions</th>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t  </thead>   
\t\t\t\t\t\t  <tbody>
\t\t\t\t\t\t  ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["user"]);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 42
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"center\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"center\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "enabled", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">Active</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"halflings-icon white zoom-in\"></i>  
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\"  href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pff_user_supprime", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return(confirm('Voulez vous Supprimer ?'));\">
\t\t\t\t\t\t\t\t\t\t<i class=\"halflings-icon white trash\"></i> 
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t\t\t  </tbody>
\t\t\t\t\t  </table>            
\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->
\t\t\t
\t\t\t</div><!--/row-->
\t\t\t<!-- end: Content -->
\t\t</div><!--/#content.span10-->
";
        
        $__internal_2bbdb39d61683605e26274c7da1b4552e963cbbeb00efdf8a3f183912e26ad56->leave($__internal_2bbdb39d61683605e26274c7da1b4552e963cbbeb00efdf8a3f183912e26ad56_prof);

    }

    public function getTemplateName()
    {
        return "PFFUserBundle:Default:listeUtil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 59,  122 => 53,  111 => 45,  107 => 44,  103 => 43,  100 => 42,  96 => 41,  84 => 31,  75 => 28,  72 => 27,  68 => 26,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
\t\t\t
\t\t\t
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t<li>
\t\t\t\t\t<i class=\"icon-home\"></i>
\t\t\t\t\t<a href=\"{{ path('index') }}\">Acceuil</a>
\t\t\t\t\t<i class=\"icon-angle-right\"></i>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"#\">Table Utilisateurs</a></li>
\t\t\t</ul>

\t\t\t<div class=\"row-fluid sortable\">\t\t
\t\t\t\t<div class=\"box span12\">
\t\t\t\t\t<div class=\"box-header\" data-original-title>
\t\t\t\t\t\t<h2><i class=\"halflings-icon user\"></i><span class=\"break\"></span>Listes des utilisateurs</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-setting\"><i class=\"halflings-icon wrench\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
\t\t\t\t\t\t{% for flash_message in app.session.flashBag.get('alerte') %}
\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t{{ flash_message }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t  <thead>
\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t  <th>Nom d'Utilisateur</th>
\t\t\t\t\t\t\t\t  <th>Email</th>
\t\t\t\t\t\t\t\t  <th>Role</th>
\t\t\t\t\t\t\t\t  <th>Status</th>
\t\t\t\t\t\t\t\t  <th>Actions</th>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t  </thead>   
\t\t\t\t\t\t  <tbody>
\t\t\t\t\t\t  {% for user in user %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ user.username }}</td>
\t\t\t\t\t\t\t\t<td class=\"center\">{{ user.email }}</td>
\t\t\t\t\t\t\t\t<td class=\"center\">{{ user.enabled }}</td>
\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">Active</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"halflings-icon white zoom-in\"></i>  
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\"  href=\"{{ path('pff_user_supprime', { 'id': user.id }) }}\" onclick=\"return(confirm('Voulez vous Supprimer ?'));\">
\t\t\t\t\t\t\t\t\t\t<i class=\"halflings-icon white trash\"></i> 
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t  </tbody>
\t\t\t\t\t  </table>            
\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->
\t\t\t
\t\t\t</div><!--/row-->
\t\t\t<!-- end: Content -->
\t\t</div><!--/#content.span10-->
{% endblock %}", "PFFUserBundle:Default:listeUtil.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\UserBundle/Resources/views/Default/listeUtil.html.twig");
    }
}
