<?php

/* PFFBourseBundle:Statistique:sta.html.twig */
class __TwigTemplate_a1d410f8b004a8ae2f485d2f8e4706d2c1d73d7e8ab8a0202ffa295981d261dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Statistique:sta.html.twig", 1);
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
        $__internal_60e98aeda88d54f7f0e1bb690a4f8466859638740402b7e07b6b59714429a00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e98aeda88d54f7f0e1bb690a4f8466859638740402b7e07b6b59714429a00e->enter($__internal_60e98aeda88d54f7f0e1bb690a4f8466859638740402b7e07b6b59714429a00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Statistique:sta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60e98aeda88d54f7f0e1bb690a4f8466859638740402b7e07b6b59714429a00e->leave($__internal_60e98aeda88d54f7f0e1bb690a4f8466859638740402b7e07b6b59714429a00e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_df85fd4113d9ba591dd8ea47c5e4812a5b7065067168e467fcb141737d59218d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df85fd4113d9ba591dd8ea47c5e4812a5b7065067168e467fcb141737d59218d->enter($__internal_df85fd4113d9ba591dd8ea47c5e4812a5b7065067168e467fcb141737d59218d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div id=\"content\" class=\"span10\">

        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/lib/morris/morris.css"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/lib/jquery/jquery-1.12.4.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/lib/raphael/raphael.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pffbourse/templates/lib/morris/morris.min.js"), "html", null, true);
        echo "\"></script>

        <style>
            #tutoriel,#tutoriel2{
                float: left;
                width: 785px;
                height: 200px;
                border: 1px solid #000;

            }
        </style>
        <style>
            #tutoriel2{
                margin-top: 5%;
                float: left;
                width: 785px;
                height: 200px;
                border: 1px solid #000;

            }
            .titre{
                text-align: center;
                font-size: 20px;
            }
        </style>
        <div class=\"titre\"><b><u>Nombre de beneficiaire par faculte et institut</u></b></div>
        <br>
        <div id=\"tutoriel\"></div>
        <script >

            Morris.Bar({
                element: 'tutoriel',
                data:[
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["iug"]);
        foreach ($context['_seq'] as $context["_key"] => $context["iug"]) {
            // line 43
            echo "                    {'tuto':'IUG', value: ";
            echo twig_escape_filter($this->env, $context["iug"], "html", null, true);
            echo "},
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iug'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["fst"]);
        foreach ($context['_seq'] as $context["_key"] => $context["fst"]) {
            // line 46
            echo "                    {'tuto':'FST', value: ";
            echo twig_escape_filter($this->env, $context["fst"], "html", null, true);
            echo "},
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fst'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["fseg"]);
        foreach ($context['_seq'] as $context["_key"] => $context["fseg"]) {
            // line 49
            echo "                    {'tuto':'FSEG', value: ";
            echo twig_escape_filter($this->env, $context["fseg"], "html", null, true);
            echo "},
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fseg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["fdpri"]);
        foreach ($context['_seq'] as $context["_key"] => $context["fdpri"]) {
            // line 52
            echo "                    {'tuto':'FDPRI', value: ";
            echo twig_escape_filter($this->env, $context["fdpri"], "html", null, true);
            echo "},
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fdpri'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["fdpu"]);
        foreach ($context['_seq'] as $context["_key"] => $context["fdpu"]) {
            // line 55
            echo "                    {'tuto':'FDPU', value: ";
            echo twig_escape_filter($this->env, $context["fdpu"], "html", null, true);
            echo "},
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fdpu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["fmp"]);
        foreach ($context['_seq'] as $context["_key"] => $context["fmp"]) {
            // line 58
            echo "                    {'tuto':'FMP', value: ";
            echo twig_escape_filter($this->env, $context["fmp"], "html", null, true);
            echo "},
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fmp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["fmpos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["fmpos"]) {
            // line 61
            echo "                    {'tuto':'FMPOS', value: ";
            echo twig_escape_filter($this->env, $context["fmpos"], "html", null, true);
            echo "},
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fmpos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["fhg"]);
        foreach ($context['_seq'] as $context["_key"] => $context["fhg"]) {
            // line 64
            echo "                    {'tuto':'FHG', value: ";
            echo twig_escape_filter($this->env, $context["fhg"], "html", null, true);
            echo "},
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fhg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                ],
                xkey:'tuto',
                ykeys: ['value'],
                labels: ['Beneficiaire']
            });

        </script>
        <div id=\"tutoriel2\"></div>
        <script >
            Morris.Line({
                element: 'tutoriel2',
                data:[
                    {'tuto':'2010', value: 100},
                    {'tuto':'2012', value: 148},
                    {'tuto':'2014', value: 150},
                    {'tuto':'2016', value: 198},
                    {'tuto':'2018', value: 30},
                    {'tuto':'2020', value: 10},

                ],
                xkey:'tuto',
                ykeys: ['value'],
                labels: ['Beneficiaire']
            });

        </script>

        <style>
            #tutoriel3{
                margin-top: 5%;
                float: left;
                width: 785px;
                height: 200px;
                border: 1px solid #000;

            }
        </style>
        <div id=\"tutoriel3\"></div>
        <script >
            Morris.Donut({
                element: 'tutoriel3',
                data:[

                    {'label':'IUG', value: 10},
                    {'label':'FST', value: 148},
                    {'label':'FSEG', value: 150},
                    {'label':'FMP', value: 198},
                    {'label':'FMPOS', value: 30},
                    {'label':'FLASH', value: 10},

                ],
            });

        </script>
        <!-- end: Content -->
    </div><!--/fluid-row-->
";
        
        $__internal_df85fd4113d9ba591dd8ea47c5e4812a5b7065067168e467fcb141737d59218d->leave($__internal_df85fd4113d9ba591dd8ea47c5e4812a5b7065067168e467fcb141737d59218d_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Statistique:sta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 66,  195 => 64,  190 => 63,  181 => 61,  176 => 60,  167 => 58,  162 => 57,  153 => 55,  148 => 54,  139 => 52,  134 => 51,  125 => 49,  120 => 48,  111 => 46,  106 => 45,  97 => 43,  93 => 42,  57 => 9,  53 => 8,  49 => 7,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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

        <link rel=\"stylesheet\" href=\"{{ asset('bundles/pffbourse/templates/lib/morris/morris.css') }}\">

        <script src=\"{{ asset('bundles/pffbourse/templates/lib/jquery/jquery-1.12.4.js') }}\"></script>
        <script src=\"{{ asset('bundles/pffbourse/templates/lib/raphael/raphael.js') }}\"></script>
        <script src=\"{{ asset('bundles/pffbourse/templates/lib/morris/morris.min.js') }}\"></script>

        <style>
            #tutoriel,#tutoriel2{
                float: left;
                width: 785px;
                height: 200px;
                border: 1px solid #000;

            }
        </style>
        <style>
            #tutoriel2{
                margin-top: 5%;
                float: left;
                width: 785px;
                height: 200px;
                border: 1px solid #000;

            }
            .titre{
                text-align: center;
                font-size: 20px;
            }
        </style>
        <div class=\"titre\"><b><u>Nombre de beneficiaire par faculte et institut</u></b></div>
        <br>
        <div id=\"tutoriel\"></div>
        <script >

            Morris.Bar({
                element: 'tutoriel',
                data:[
                    {% for iug in iug %}
                    {'tuto':'IUG', value: {{ iug }}},
                    {% endfor %}
                    {% for fst in fst %}
                    {'tuto':'FST', value: {{ fst }}},
                    {% endfor %}
                    {% for fseg in fseg %}
                    {'tuto':'FSEG', value: {{ fseg }}},
                    {% endfor %}
                    {% for fdpri in fdpri %}
                    {'tuto':'FDPRI', value: {{ fdpri }}},
                    {% endfor %}
                    {% for fdpu in fdpu %}
                    {'tuto':'FDPU', value: {{ fdpu }}},
                    {% endfor %}
                    {% for fmp in fmp %}
                    {'tuto':'FMP', value: {{ fmp }}},
                    {% endfor %}
                    {% for fmpos in fmpos %}
                    {'tuto':'FMPOS', value: {{ fmpos }}},
                    {% endfor %}
                    {% for fhg in fhg %}
                    {'tuto':'FHG', value: {{ fhg }}},
                    {% endfor %}

                ],
                xkey:'tuto',
                ykeys: ['value'],
                labels: ['Beneficiaire']
            });

        </script>
        <div id=\"tutoriel2\"></div>
        <script >
            Morris.Line({
                element: 'tutoriel2',
                data:[
                    {'tuto':'2010', value: 100},
                    {'tuto':'2012', value: 148},
                    {'tuto':'2014', value: 150},
                    {'tuto':'2016', value: 198},
                    {'tuto':'2018', value: 30},
                    {'tuto':'2020', value: 10},

                ],
                xkey:'tuto',
                ykeys: ['value'],
                labels: ['Beneficiaire']
            });

        </script>

        <style>
            #tutoriel3{
                margin-top: 5%;
                float: left;
                width: 785px;
                height: 200px;
                border: 1px solid #000;

            }
        </style>
        <div id=\"tutoriel3\"></div>
        <script >
            Morris.Donut({
                element: 'tutoriel3',
                data:[

                    {'label':'IUG', value: 10},
                    {'label':'FST', value: 148},
                    {'label':'FSEG', value: 150},
                    {'label':'FMP', value: 198},
                    {'label':'FMPOS', value: 30},
                    {'label':'FLASH', value: 10},

                ],
            });

        </script>
        <!-- end: Content -->
    </div><!--/fluid-row-->
{% endblock %}", "PFFBourseBundle:Statistique:sta.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Statistique/sta.html.twig");
    }
}
