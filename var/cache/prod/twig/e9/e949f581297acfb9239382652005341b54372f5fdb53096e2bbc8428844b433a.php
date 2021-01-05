<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* twig/exercice.html.twig */
class __TwigTemplate_75df3d450e6a31ad05a987c546a32c563820ec66e5ae9c77818939c70d2104a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "twig/exercice.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Exercice Twig ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"mb-4\">

    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("twig");
        echo "\">Retour</a>
    <!-- Bouton retour renvoi à la page twig - PrixExtension.php.twig -->
    <!-- path : permet de créer des liens vers des assets (autres pages, images, vidéos, ...) -->

</div>

<div class=\"border p-3\">
<!-- p-3 : réglage du padding (bootstrap) -->
<!-- border : permet de mettre des bordures (bootstrap) -->
    <h4 class=\"text-center\"> Exercice 1 : Liste complète </h4>

    <br/>

    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["personnes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 23
            echo "    <!-- pour chaque personne dans \$personnes -->

        <!-- j'affiche --> 
        <p>
            <b>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "prenom", [], "any", false, false, false, 27), "html", null, true);
            echo " </b>
                <!-- la balise b : mettre en gras -->
            (";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "statut", [], "any", false, false, false, 29), "html", null, true);
            echo "),
            <i>date de naissance : ";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "naissance", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
            echo "</i>
                <!-- |date('d/m/Y') : permet de formater le format de date -->
                <!-- la balise i : mettre en italic -->
        </p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo " 
    <!-- ne pas oublier de fermer la boucle for -->

</div>

<div class=\"border p-3 mt-4\">
<!-- mt-4 : réglage du margin-top (bootstrap) -->

    <h4 class=\"text-center\"> Exercice 2 : Membres de la famille Dupont </h4>

    <br/>

    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["personnes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 48
            echo "    <!-- pour chaque personne dans \$personnes -->    
        ";
            // line 49
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["personne"], "nom", [], "any", false, false, false, 49), "Dupont"))) {
                // line 50
                echo "        <!-- si le prenom == 'Dupont' -->

        <!-- alors j'affiche : -->
        <p>
            <b>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom", [], "any", false, false, false, 54), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "prenom", [], "any", false, false, false, 54), "html", null, true);
                echo "</b>
            (";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "statut", [], "any", false, false, false, 55), "html", null, true);
                echo "),
            <i>date de naissance : ";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "naissance", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true);
                echo "</i>
        </p>

        ";
            }
            // line 60
            echo "        <!-- ne pas oublier de fermer la condition if -->
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    <!-- ne pas oublier de fermer la boucle for -->

</div>

<div class=\"border p-3 mt-4\">

    <h4 class=\"text-center\"> Exercice 3 : uniquement les 3 premiers </h4>

    <br/>

    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["personnes"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 74
            echo "
        ";
            // line 75
            if ((0 >= twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 75), 3))) {
                // line 76
                echo "        <!-- si l'itération actuelle de la boucle est inférieure ou égale à 3 -->

        <!-- alors j'affiche --> 
        <p>
            <b>";
                // line 80
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom", [], "any", false, false, false, 80)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "prenom", [], "any", false, false, false, 80), "html", null, true);
                echo "</b>
            <!-- |upper : permet d'afficher l'élément en majuscule -->
            (";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "statut", [], "any", false, false, false, 82), "html", null, true);
                echo "),
            <i>date de naissance : ";
                // line 83
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "naissance", [], "any", false, false, false, 83), "d/m/Y"), "html", null, true);
                echo "</i>
        </p>

        ";
            }
            // line 87
            echo "    
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
</div>

<div class=\"border p-3 mt-4\">

    <h4 class=\"text-center\"> Exercice 4 : Membres nés après 1950 </h4>

    <br/>

    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["personnes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 99
            echo "
        ";
            // line 100
            if ((1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "naissance", [], "any", false, false, false, 100), "Y"), 1950))) {
                // line 101
                echo "
        <p>
            <b>";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom", [], "any", false, false, false, 103), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "prenom", [], "any", false, false, false, 103), "html", null, true);
                echo "</b>
            (";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "statut", [], "any", false, false, false, 104), "html", null, true);
                echo ")
            <i> ";
                // line 105
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "naissance", [], "any", false, false, false, 105), "d/m/Y"), "html", null, true);
                echo "</i>
        </p>

        ";
            }
            // line 109
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "
</div>

<div class=\"border p-3 mt-4\">

    <h4 class=\"text-center\"> Exercice 5 : Du plus vieux au plus jeunes </h4>

    <br/>

    ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["personnes"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "naissance", [], "any", false, false, false, 120) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "naissance", [], "any", false, false, false, 120)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 121
            echo "
        <p>
            <b> ";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom", [], "any", false, false, false, 123), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "prenom", [], "any", false, false, false, 123), "html", null, true);
            echo " </b>
            (";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "statut", [], "any", false, false, false, 124), "html", null, true);
            echo "),
            <i>date de naissance : ";
            // line 125
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "naissance", [], "any", false, false, false, 125), "d/m/Y"), "html", null, true);
            echo "</i>
        </p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "
</div>

<div class=\"border p-3 mt-4\">
    
    <h4 class=\"text-center\"> Exercice 6 : Première ligne bleu | Dernière ligne rouge</h4>

    <br/>

    ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["personnes"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 139
            echo "
        <p class=\"";
            // line 140
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 140)) ? ("text-primary") : (""));
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 140)) ? ("text-danger") : (""));
            echo "\">
            <b> ";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom", [], "any", false, false, false, 141), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "prenom", [], "any", false, false, false, 141), "html", null, true);
            echo " </b>
            (";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "statut", [], "any", false, false, false, 142), "html", null, true);
            echo "),
            <i>date de naissance : ";
            // line 143
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "naissance", [], "any", false, false, false, 143), "d/m/Y"), "html", null, true);
            echo "</i>
        </p>
        
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "
</div>

<div class=\"border p-3 mt-4\">

    <h4 class=\"text-center\"> Exercice 8 : Sauter une ligne toutes les deux lignes </h4>

    <br/>

    ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["personnes"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 157
            echo "
        <p>
            <b> ";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom", [], "any", false, false, false, 159), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "prenom", [], "any", false, false, false, 159), "html", null, true);
            echo " </b>
            (";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "statut", [], "any", false, false, false, 160), "html", null, true);
            echo "),
            <i>date de naissance : ";
            // line 161
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "naissance", [], "any", false, false, false, 161), "d/m/Y"), "html", null, true);
            echo "</i>
        </p>

        ";
            // line 164
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 164) % 2 == 0)) {
                // line 165
                echo "        <!-- si l'itération actuelle est even : pair -->
            
            <!-- alors je crée un espace --> 
            <br/>
        
        ";
            }
            // line 171
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "
</div>

<!-- fin du block body --> 
";
    }

    public function getTemplateName()
    {
        return "twig/exercice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 173,  448 => 171,  440 => 165,  438 => 164,  432 => 161,  428 => 160,  422 => 159,  418 => 157,  401 => 156,  390 => 147,  372 => 143,  368 => 142,  362 => 141,  357 => 140,  354 => 139,  337 => 138,  326 => 129,  316 => 125,  312 => 124,  306 => 123,  302 => 121,  298 => 120,  287 => 111,  280 => 109,  273 => 105,  269 => 104,  263 => 103,  259 => 101,  257 => 100,  254 => 99,  250 => 98,  239 => 89,  224 => 87,  217 => 83,  213 => 82,  206 => 80,  200 => 76,  198 => 75,  195 => 74,  178 => 73,  166 => 63,  158 => 60,  151 => 56,  147 => 55,  141 => 54,  135 => 50,  133 => 49,  130 => 48,  126 => 47,  112 => 35,  100 => 30,  96 => 29,  89 => 27,  83 => 23,  79 => 22,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "twig/exercice.html.twig", "/Users/Alison/Documents/Sites/monblog/templates/twig/exercice.html.twig");
    }
}
