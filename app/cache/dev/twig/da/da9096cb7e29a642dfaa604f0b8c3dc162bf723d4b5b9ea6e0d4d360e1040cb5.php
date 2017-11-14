<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d81750b01bc2ad76158b97e6f0eaf788c8d245dbee247fb4b52fb0eb9adec037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c353475102c76ee747a29cd75569d7f332bae86fc95e682999baf4e8d8c7a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c353475102c76ee747a29cd75569d7f332bae86fc95e682999baf4e8d8c7a84->enter($__internal_1c353475102c76ee747a29cd75569d7f332bae86fc95e682999baf4e8d8c7a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c353475102c76ee747a29cd75569d7f332bae86fc95e682999baf4e8d8c7a84->leave($__internal_1c353475102c76ee747a29cd75569d7f332bae86fc95e682999baf4e8d8c7a84_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47f5b2d70c35d5ad5f4daaf0a8c1840d924a64c02a616c78b598e6130d89cb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f5b2d70c35d5ad5f4daaf0a8c1840d924a64c02a616c78b598e6130d89cb23->enter($__internal_47f5b2d70c35d5ad5f4daaf0a8c1840d924a64c02a616c78b598e6130d89cb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_47f5b2d70c35d5ad5f4daaf0a8c1840d924a64c02a616c78b598e6130d89cb23->leave($__internal_47f5b2d70c35d5ad5f4daaf0a8c1840d924a64c02a616c78b598e6130d89cb23_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp\\www\\PFF\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
