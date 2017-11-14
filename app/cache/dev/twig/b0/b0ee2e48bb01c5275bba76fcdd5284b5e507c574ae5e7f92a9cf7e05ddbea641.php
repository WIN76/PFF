<?php

/* PFFBourseBundle:Historique:bfondshist.html.twig */
class __TwigTemplate_72e833c8f39d2f1bb06b1fbb004579ac47b5f565a9358e4405ee47da2cb248df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PFFBourseBundle:Historique:bfondshist.html.twig", 1);
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
        $__internal_14a84d2bb78e09133bd56103fbbbf0f360a482c423ad29ec3837fd946f552596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a84d2bb78e09133bd56103fbbbf0f360a482c423ad29ec3837fd946f552596->enter($__internal_14a84d2bb78e09133bd56103fbbbf0f360a482c423ad29ec3837fd946f552596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFFBourseBundle:Historique:bfondshist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14a84d2bb78e09133bd56103fbbbf0f360a482c423ad29ec3837fd946f552596->leave($__internal_14a84d2bb78e09133bd56103fbbbf0f360a482c423ad29ec3837fd946f552596_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e585a6f0f340be4cbeeb608019580b14b3cbdf8d755ad2460a602ad8eac01f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e585a6f0f340be4cbeeb608019580b14b3cbdf8d755ad2460a602ad8eac01f18->enter($__internal_e585a6f0f340be4cbeeb608019580b14b3cbdf8d755ad2460a602ad8eac01f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <style>
        .ta{
            display:block;
        }
        .ta1{
            display:inline-block;
            width:32%;
        }
        .ta2{
            display:inline-block;
            width:35%;
        }
        .ta3{
            display:inline-block;
            width:20%;
        }
        .imprimer
        {
            background-color:#1470c0;
            color:white;
            text-decoration:none;
            margin-left:100%;
            font-size:1.3em;
            /*padding:3px;*/
            border-radius:5px;
            border:2px inset white;
        }
    </style>
    <div id=\"content\" class=\"span10\" xmlns=\"http://www.w3.org/1999/html\">
        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Home</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li><a href=\"#\">Table Formation</a></li>
               <!--li><a href=\"#\" onclick=\"javascript:window.print()\" class=\"imprimer\" >Imprimer</a></li-->
        </ul>

        <div class=\"row-fluid sortable\">
            <table>
                <tr>
                    <td><b>Matricule</b>:</td>
                    <td><div class=\"col-md-2\"><input  disabled id=\"disabledInput\" value='";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bene"]) ? $context["bene"] : $this->getContext($context, "bene")), "NumMlle", array()), "html", null, true);
        echo "' disabled=\"\"></div></td>
                </tr>
            </table>
            <br>
            <div class=\"ta\">
                <table class=\"ta1\">
                    <tr>
                        <td><b>Nom</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bene"]) ? $context["bene"] : $this->getContext($context, "bene")), "Nom", array()), "html", null, true);
        echo "' disabled=\"\"></td>
                    </tr>

                    <tr>
                        <td><b>Niveau</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bene"]) ? $context["bene"] : $this->getContext($context, "bene")), "Niveau", array()), "html", null, true);
        echo "' disabled=\"\"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td><b>Statut</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bene"]) ? $context["bene"] : $this->getContext($context, "bene")), "Statut", array()), "html", null, true);
        echo "' disabled=\"\"></td>

                </table>
                <table class=\"ta2\">
                    <tr>
                        <td><b>Prènom</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bene"]) ? $context["bene"] : $this->getContext($context, "bene")), "Prenom", array()), "html", null, true);
        echo "' disabled=\"\"></td>
                    </tr>
                    <tr>
                        <td><b>Naissance</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='";
        // line 74
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["bene"]) ? $context["bene"] : $this->getContext($context, "bene")), "DateNais", array()), "d/m/Y"), "html", null, true);
        echo "' disabled=\"\"></td>
                    </tr>

                    <tr>
                        <td><b>Faculté</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bene"]) ? $context["bene"] : $this->getContext($context, "bene")), "faculte", array()), "html", null, true);
        echo "' disabled=\"\"></td>
                    </tr>

                </table>
                <table class=\"ta3\">
                    <tr>
                        <td><b>Téléphone</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bene"]) ? $context["bene"] : $this->getContext($context, "bene")), "NumTel", array()), "html", null, true);
        echo "'  disabled=\"\"></td>
                    </tr>
                    <tr>
                        <td><b>Email</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bene"]) ? $context["bene"] : $this->getContext($context, "bene")), "Email", array()), "html", null, true);
        echo "'  disabled=\"\"></td>
                    </tr>
                    </tr>
                    <td><b>Adresse</b>:</td>
                    <td><input  disabled id=\"disabledInput\" value='";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bene"]) ? $context["bene"] : $this->getContext($context, "bene")), "Adresse", array()), "html", null, true);
        echo "' disabled=\"\"></td>
                    </tr>
                </table>
            </div>
            <div class=\"box span6\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"icon-align-justify\"></i><span class=\"break\"></span>Formations</h2>

                </div>

                <div class=\"box-content\">

                    <h2 style=\"text-align: center;\"><u>Formations</u> </h2>
                    <table class=\"table \">

                        ";
        // line 109
        $context["sommeFormation"] = 0;
        // line 110
        echo "                        <thead>
                        <tr>

                            <th>Diplome</th>
                            <th>Date Début</th>
                            <th>Date Fin</th>
                            <th>Montant</th>
                            <th>Lieu</th>
                            <th>Spécialité</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 124
            echo "                            <tr>
                                <td class=\"center\">";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "Diplome", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "DateDebut", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "DateFin", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "MontF", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "LieuF", array()), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "Specialite", array()), "html", null, true);
            echo "</td>
                            </tr>
                            ";
            // line 132
            $context["sommeFormation"] = ((isset($context["sommeFormation"]) ? $context["sommeFormation"] : $this->getContext($context, "sommeFormation")) + $this->getAttribute($context["f"], "MontF", array()));
            // line 133
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "
                        </tbody>
                    </table>

                    <p style=\"text-align: center;\">Le coût des formations s'éléve à: ";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["sommeFormation"]) ? $context["sommeFormation"] : $this->getContext($context, "sommeFormation")), "html", null, true);
        echo "F CFA</p>
                </div>

            </div><!--/span-->


            <div class=\"box span5\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"icon-align-justify\"></i><span class=\"break\"></span>Fonds</h2>
                    <div class=\"box-icon\">
                        <!--a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a-->
                    </div>
                </div>
                <h2 style=\"text-align: center;\"><u>Les fonds associés aux formations</u> </h2>
                <table class=\"table table-striped table-bordered \">
                    ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 154
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 155
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 159
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 160
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alerte"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 164
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 165
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "
                    ";
        // line 169
        $context["sommfonds"] = 0;
        // line 170
        echo "                    <thead>
                    <tr>

                        <th>Année</th>
                        <th>Type</th>
                        <th>Montant</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bform"]) ? $context["bform"] : $this->getContext($context, "bform")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 181
            echo "                        <tr>
                            <td class=\"center\">";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["b"], "Fonds", array()), "Annee", array()), "html", null, true);
            echo "</td>
                            <td class=\"center\">";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["b"], "Fonds", array()), "Type", array()), "html", null, true);
            echo "</td>
                            <td class=\"center\">";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["b"], "Fonds", array()), "Montant", array()), "html", null, true);
            echo "</td>
                            <td class=\"center\">";
            // line 185
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["b"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        </tr>
                        ";
            // line 187
            $context["sommfonds"] = ((isset($context["sommfonds"]) ? $context["sommfonds"] : $this->getContext($context, "sommfonds")) + $this->getAttribute($this->getAttribute($context["b"], "Fonds", array()), "Montant", array()));
            // line 188
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                    </tbody>
                </table>
                <p style=\"text-align: center;\">La somme des fonds est: ";
        // line 191
        echo twig_escape_filter($this->env, (isset($context["sommfonds"]) ? $context["sommfonds"] : $this->getContext($context, "sommfonds")), "html", null, true);
        echo " F CFA</p>
            </div>

        </div><!--/span-->

        <h3 style=\"text-align: center;\">";
        // line 196
        $context["totale"] = ((isset($context["sommeFormation"]) ? $context["sommeFormation"] : $this->getContext($context, "sommeFormation")) + (isset($context["sommfonds"]) ? $context["sommfonds"] : $this->getContext($context, "sommfonds")));
        // line 197
        echo "            Le coût total est: ";
        echo twig_escape_filter($this->env, (isset($context["totale"]) ? $context["totale"] : $this->getContext($context, "totale")), "html", null, true);
        echo " F CFA</h3>
    </div><!--/row-->
    </div><!--/.fluid-container-->

    <!-- end: Content -->
    </div><!--/#content.span10-->
    </div><!--/fluid-row-->
";
        
        $__internal_e585a6f0f340be4cbeeb608019580b14b3cbdf8d755ad2460a602ad8eac01f18->leave($__internal_e585a6f0f340be4cbeeb608019580b14b3cbdf8d755ad2460a602ad8eac01f18_prof);

    }

    public function getTemplateName()
    {
        return "PFFBourseBundle:Historique:bfondshist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 197,  373 => 196,  365 => 191,  361 => 189,  355 => 188,  353 => 187,  348 => 185,  344 => 184,  340 => 183,  336 => 182,  333 => 181,  329 => 180,  317 => 170,  315 => 169,  312 => 168,  303 => 165,  300 => 164,  295 => 163,  286 => 160,  283 => 159,  278 => 158,  269 => 155,  266 => 154,  262 => 153,  244 => 138,  238 => 134,  232 => 133,  230 => 132,  225 => 130,  221 => 129,  217 => 128,  213 => 127,  209 => 126,  205 => 125,  202 => 124,  198 => 123,  183 => 110,  181 => 109,  163 => 94,  156 => 90,  149 => 86,  139 => 79,  131 => 74,  124 => 70,  115 => 64,  107 => 59,  99 => 54,  88 => 46,  74 => 35,  40 => 3,  34 => 2,  11 => 1,);
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
    <style>
        .ta{
            display:block;
        }
        .ta1{
            display:inline-block;
            width:32%;
        }
        .ta2{
            display:inline-block;
            width:35%;
        }
        .ta3{
            display:inline-block;
            width:20%;
        }
        .imprimer
        {
            background-color:#1470c0;
            color:white;
            text-decoration:none;
            margin-left:100%;
            font-size:1.3em;
            /*padding:3px;*/
            border-radius:5px;
            border:2px inset white;
        }
    </style>
    <div id=\"content\" class=\"span10\" xmlns=\"http://www.w3.org/1999/html\">
        <ul class=\"breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"{{ path('index') }}\">Home</a>
                <i class=\"icon-angle-right\"></i>
            </li>
            <li><a href=\"#\">Table Formation</a></li>
               <!--li><a href=\"#\" onclick=\"javascript:window.print()\" class=\"imprimer\" >Imprimer</a></li-->
        </ul>

        <div class=\"row-fluid sortable\">
            <table>
                <tr>
                    <td><b>Matricule</b>:</td>
                    <td><div class=\"col-md-2\"><input  disabled id=\"disabledInput\" value='{{ bene.NumMlle }}' disabled=\"\"></div></td>
                </tr>
            </table>
            <br>
            <div class=\"ta\">
                <table class=\"ta1\">
                    <tr>
                        <td><b>Nom</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='{{ bene.Nom }}' disabled=\"\"></td>
                    </tr>

                    <tr>
                        <td><b>Niveau</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='{{ bene.Niveau }}' disabled=\"\"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td><b>Statut</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='{{ bene.Statut  }}' disabled=\"\"></td>

                </table>
                <table class=\"ta2\">
                    <tr>
                        <td><b>Prènom</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='{{ bene.Prenom  }}' disabled=\"\"></td>
                    </tr>
                    <tr>
                        <td><b>Naissance</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='{{ bene.DateNais |date('d/m/Y') }}' disabled=\"\"></td>
                    </tr>

                    <tr>
                        <td><b>Faculté</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='{{ bene.faculte  }}' disabled=\"\"></td>
                    </tr>

                </table>
                <table class=\"ta3\">
                    <tr>
                        <td><b>Téléphone</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='{{ bene.NumTel  }}'  disabled=\"\"></td>
                    </tr>
                    <tr>
                        <td><b>Email</b>:</td>
                        <td><input  disabled id=\"disabledInput\" value='{{ bene.Email  }}'  disabled=\"\"></td>
                    </tr>
                    </tr>
                    <td><b>Adresse</b>:</td>
                    <td><input  disabled id=\"disabledInput\" value='{{ bene.Adresse }}' disabled=\"\"></td>
                    </tr>
                </table>
            </div>
            <div class=\"box span6\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"icon-align-justify\"></i><span class=\"break\"></span>Formations</h2>

                </div>

                <div class=\"box-content\">

                    <h2 style=\"text-align: center;\"><u>Formations</u> </h2>
                    <table class=\"table \">

                        {% set sommeFormation=0 %}
                        <thead>
                        <tr>

                            <th>Diplome</th>
                            <th>Date Début</th>
                            <th>Date Fin</th>
                            <th>Montant</th>
                            <th>Lieu</th>
                            <th>Spécialité</th>
                        </tr>
                        </thead>

                        <tbody>
                        {% for f in formation %}
                            <tr>
                                <td class=\"center\">{{ f.Diplome }}</td>
                                <td class=\"center\">{{ f.DateDebut }}</td>
                                <td class=\"center\">{{ f.DateFin }}</td>
                                <td class=\"center\">{{ f.MontF }}</td>
                                <td class=\"center\">{{ f.LieuF }}</td>
                                <td class=\"center\">{{ f.Specialite }}</td>
                            </tr>
                            {% set sommeFormation = sommeFormation+f.MontF %}
                        {% endfor %}

                        </tbody>
                    </table>

                    <p style=\"text-align: center;\">Le coût des formations s'éléve à: {{ sommeFormation }}F CFA</p>
                </div>

            </div><!--/span-->


            <div class=\"box span5\">
                <div class=\"box-header\" data-original-title>
                    <h2><i class=\"icon-align-justify\"></i><span class=\"break\"></span>Fonds</h2>
                    <div class=\"box-icon\">
                        <!--a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon chevron-up\"></i></a-->
                    </div>
                </div>
                <h2 style=\"text-align: center;\"><u>Les fonds associés aux formations</u> </h2>
                <table class=\"table table-striped table-bordered \">
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

                    {% set sommfonds=0 %}
                    <thead>
                    <tr>

                        <th>Année</th>
                        <th>Type</th>
                        <th>Montant</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for b in bform %}
                        <tr>
                            <td class=\"center\">{{ b.Fonds.Annee }}</td>
                            <td class=\"center\">{{ b.Fonds.Type }}</td>
                            <td class=\"center\">{{ b.Fonds.Montant }}</td>
                            <td class=\"center\">{{ b.date  | date('d/m/Y')}}</td>
                        </tr>
                        {% set sommfonds=sommfonds+b.Fonds.Montant %}
                    {% endfor %}
                    </tbody>
                </table>
                <p style=\"text-align: center;\">La somme des fonds est: {{ sommfonds }} F CFA</p>
            </div>

        </div><!--/span-->

        <h3 style=\"text-align: center;\">{% set totale=sommeFormation+sommfonds %}
            Le coût total est: {{ totale }} F CFA</h3>
    </div><!--/row-->
    </div><!--/.fluid-container-->

    <!-- end: Content -->
    </div><!--/#content.span10-->
    </div><!--/fluid-row-->
{% endblock %}", "PFFBourseBundle:Historique:bfondshist.html.twig", "C:\\wamp\\www\\PFF\\src\\PFF\\BourseBundle/Resources/views/Historique/bfondshist.html.twig");
    }
}
