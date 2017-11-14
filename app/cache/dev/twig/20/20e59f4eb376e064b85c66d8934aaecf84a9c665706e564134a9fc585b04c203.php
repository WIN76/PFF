<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3ac45a8a5f8b2940d4fb0044fcb88d42a557818cd7daf78a79b2814ab55bc8a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0f9de8c0a70821bc42aaa5823ab2ec1864ecd197e0a3c158c9ea3506201a758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f9de8c0a70821bc42aaa5823ab2ec1864ecd197e0a3c158c9ea3506201a758->enter($__internal_b0f9de8c0a70821bc42aaa5823ab2ec1864ecd197e0a3c158c9ea3506201a758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0f9de8c0a70821bc42aaa5823ab2ec1864ecd197e0a3c158c9ea3506201a758->leave($__internal_b0f9de8c0a70821bc42aaa5823ab2ec1864ecd197e0a3c158c9ea3506201a758_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9c802ca16d7ba3c072206920a41f68726e1cfa2b5272e3d4eaeabcfad337820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c802ca16d7ba3c072206920a41f68726e1cfa2b5272e3d4eaeabcfad337820->enter($__internal_d9c802ca16d7ba3c072206920a41f68726e1cfa2b5272e3d4eaeabcfad337820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d9c802ca16d7ba3c072206920a41f68726e1cfa2b5272e3d4eaeabcfad337820->leave($__internal_d9c802ca16d7ba3c072206920a41f68726e1cfa2b5272e3d4eaeabcfad337820_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_52a616962245a388db436879618c0dabf46e6c64d841dd59ae9b763934494a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a616962245a388db436879618c0dabf46e6c64d841dd59ae9b763934494a51->enter($__internal_52a616962245a388db436879618c0dabf46e6c64d841dd59ae9b763934494a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_52a616962245a388db436879618c0dabf46e6c64d841dd59ae9b763934494a51->leave($__internal_52a616962245a388db436879618c0dabf46e6c64d841dd59ae9b763934494a51_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfda5a80ff7a8f21948cbe3b6200391b37b6e7a9449cd242acd5c77f910a460b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfda5a80ff7a8f21948cbe3b6200391b37b6e7a9449cd242acd5c77f910a460b->enter($__internal_bfda5a80ff7a8f21948cbe3b6200391b37b6e7a9449cd242acd5c77f910a460b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bfda5a80ff7a8f21948cbe3b6200391b37b6e7a9449cd242acd5c77f910a460b->leave($__internal_bfda5a80ff7a8f21948cbe3b6200391b37b6e7a9449cd242acd5c77f910a460b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\PFF\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
