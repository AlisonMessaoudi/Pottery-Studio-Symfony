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
class __TwigTemplate_8a356b08cdce4c4ab723c5a25e557de482381b111abe1bb4e5e7e65e57958f70 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "twig/exercice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "twig/exercice.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "twig/exercice.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Exercice Twig ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 22, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 47, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 73, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 98, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 120, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 120, $this->source); })()), "naissance", [], "any", false, false, false, 120) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 120, $this->source); })()), "naissance", [], "any", false, false, false, 120)); }));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 138, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 156, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  493 => 173,  478 => 171,  470 => 165,  468 => 164,  462 => 161,  458 => 160,  452 => 159,  448 => 157,  431 => 156,  420 => 147,  402 => 143,  398 => 142,  392 => 141,  387 => 140,  384 => 139,  367 => 138,  356 => 129,  346 => 125,  342 => 124,  336 => 123,  332 => 121,  328 => 120,  317 => 111,  310 => 109,  303 => 105,  299 => 104,  293 => 103,  289 => 101,  287 => 100,  284 => 99,  280 => 98,  269 => 89,  254 => 87,  247 => 83,  243 => 82,  236 => 80,  230 => 76,  228 => 75,  225 => 74,  208 => 73,  196 => 63,  188 => 60,  181 => 56,  177 => 55,  171 => 54,  165 => 50,  163 => 49,  160 => 48,  156 => 47,  142 => 35,  130 => 30,  126 => 29,  119 => 27,  113 => 23,  109 => 22,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Exercice Twig {% endblock %}

{% block body %}

<div class=\"mb-4\">

    <a href=\"{{ path('twig')}}\">Retour</a>
    <!-- Bouton retour renvoi à la page twig - PrixExtension.php.twig -->
    <!-- path : permet de créer des liens vers des assets (autres pages, images, vidéos, ...) -->

</div>

<div class=\"border p-3\">
<!-- p-3 : réglage du padding (bootstrap) -->
<!-- border : permet de mettre des bordures (bootstrap) -->
    <h4 class=\"text-center\"> Exercice 1 : Liste complète </h4>

    <br/>

    {% for personne in personnes %}
    <!-- pour chaque personne dans \$personnes -->

        <!-- j'affiche --> 
        <p>
            <b>{{ personne.nom }} {{ personne.prenom}} </b>
                <!-- la balise b : mettre en gras -->
            ({{ personne.statut }}),
            <i>date de naissance : {{ personne.naissance|date('d/m/Y')}}</i>
                <!-- |date('d/m/Y') : permet de formater le format de date -->
                <!-- la balise i : mettre en italic -->
        </p>

    {% endfor %} 
    <!-- ne pas oublier de fermer la boucle for -->

</div>

<div class=\"border p-3 mt-4\">
<!-- mt-4 : réglage du margin-top (bootstrap) -->

    <h4 class=\"text-center\"> Exercice 2 : Membres de la famille Dupont </h4>

    <br/>

    {% for personne in personnes %}
    <!-- pour chaque personne dans \$personnes -->    
        {% if personne.nom == 'Dupont' %}
        <!-- si le prenom == 'Dupont' -->

        <!-- alors j'affiche : -->
        <p>
            <b>{{ personne.nom }} {{ personne.prenom }}</b>
            ({{ personne.statut }}),
            <i>date de naissance : {{ personne.naissance|date('d/m/Y') }}</i>
        </p>

        {% endif %}
        <!-- ne pas oublier de fermer la condition if -->
    
    {% endfor %}
    <!-- ne pas oublier de fermer la boucle for -->

</div>

<div class=\"border p-3 mt-4\">

    <h4 class=\"text-center\"> Exercice 3 : uniquement les 3 premiers </h4>

    <br/>

    {% for personne in personnes %}

        {% if loop.index <=3 %}
        <!-- si l'itération actuelle de la boucle est inférieure ou égale à 3 -->

        <!-- alors j'affiche --> 
        <p>
            <b>{{ personne.nom|upper}} {{ personne.prenom }}</b>
            <!-- |upper : permet d'afficher l'élément en majuscule -->
            ({{ personne.statut }}),
            <i>date de naissance : {{ personne.naissance|date('d/m/Y') }}</i>
        </p>

        {% endif %}
    
    {% endfor %}

</div>

<div class=\"border p-3 mt-4\">

    <h4 class=\"text-center\"> Exercice 4 : Membres nés après 1950 </h4>

    <br/>

    {% for personne in personnes %}

        {% if personne.naissance|date('Y') > 1950 %}

        <p>
            <b>{{ personne.nom }} {{ personne.prenom }}</b>
            ({{ personne.statut }})
            <i> {{ personne.naissance|date('d/m/Y') }}</i>
        </p>

        {% endif %}

    {% endfor %}

</div>

<div class=\"border p-3 mt-4\">

    <h4 class=\"text-center\"> Exercice 5 : Du plus vieux au plus jeunes </h4>

    <br/>

    {% for personne in personnes|sort((a,b) => a.naissance <=> b.naissance) %}

        <p>
            <b> {{ personne.nom }} {{ personne.prenom }} </b>
            ({{ personne.statut}}),
            <i>date de naissance : {{ personne.naissance|date('d/m/Y') }}</i>
        </p>

    {% endfor %}

</div>

<div class=\"border p-3 mt-4\">
    
    <h4 class=\"text-center\"> Exercice 6 : Première ligne bleu | Dernière ligne rouge</h4>

    <br/>

    {% for personne in personnes %}

        <p class=\"{{ loop.first ? 'text-primary' }}{{ loop.last ? 'text-danger' }}\">
            <b> {{ personne.nom}} {{ personne.prenom}} </b>
            ({{ personne.statut }}),
            <i>date de naissance : {{ personne.naissance|date('d/m/Y') }}</i>
        </p>
        
    {% endfor %}

</div>

<div class=\"border p-3 mt-4\">

    <h4 class=\"text-center\"> Exercice 8 : Sauter une ligne toutes les deux lignes </h4>

    <br/>

    {% for personne in personnes %}

        <p>
            <b> {{ personne.nom }} {{ personne.prenom }} </b>
            ({{ personne.statut}}),
            <i>date de naissance : {{ personne.naissance|date('d/m/Y') }}</i>
        </p>

        {% if loop.index is even %}
        <!-- si l'itération actuelle est even : pair -->
            
            <!-- alors je crée un espace --> 
            <br/>
        
        {% endif %}

    {% endfor %}

</div>

<!-- fin du block body --> 
{% endblock %}
", "twig/exercice.html.twig", "/Users/Alison/Documents/Sites/monblog/templates/twig/exercice.html.twig");
    }
}
