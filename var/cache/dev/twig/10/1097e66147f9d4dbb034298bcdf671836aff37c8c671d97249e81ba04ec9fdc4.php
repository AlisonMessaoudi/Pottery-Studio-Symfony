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

/* twig/index.html.twig */
class __TwigTemplate_68df7dc6a64ebe85e32d7b5e783cdf12792fda048febb06427297188f0969d13 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "twig/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "twig/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "twig/index.html.twig", 1);
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

        echo "TWIG !";
        $this->displayParentBlock("title", $context, $blocks);
        
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
    ";
        // line 8
        echo "    <div>
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-twig.png"), "html", null, true);
        echo "\" alt=\"\">
    </div>

    ";
        // line 13
        echo "    <div class=\"mb-3\">
        Cet article côute ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\PrixExtension']->formatEuro((isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 14, $this->source); })())), "html", null, true);
        echo "
        <br><br>
        Cet article côute ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\PrixExtension']->formatPrice((isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 16, $this->source); })()), "us"), "html", null, true);
        echo " <br>
        Cet article côute ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\PrixExtension']->formatPrice((isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 17, $this->source); })()), "fr"), "html", null, true);
        echo " <br>
    </div>

    ";
        // line 21
        echo "    ";
        if ((3 % 2 == 1)) {
            // line 22
            echo "        OUI
    ";
        } else {
            // line 24
            echo "        NON
    ";
        }
        // line 26
        echo "    <br><br>

    ";
        // line 29
        echo "    <h3>Nous sommes le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 29, $this->source); })()), "d/m/Y"), "html", null, true);
        echo "</h3>

    ";
        // line 32
        echo "    <h4>Les ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 32, $this->source); })())), "html", null, true);
        echo " utilsateurs s'appellent ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_join_filter((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 32, $this->source); })()), ", ", " et ")), "html", null, true);
        echo "</h4>

    ";
        // line 35
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 36
            echo "
        L'utilisateur s'appelle ";
            // line 37
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["user"]), "html", null, true);
            echo "

        ";
            // line 39
            if (((0 === twig_compare($context["user"], "victor")) || (0 === twig_compare($context["user"], "john")))) {
                // line 40
                echo "            , c'est moi.
        ";
            } else {
                // line 42
                echo "            , c'est pas moi.
        ";
            }
            // line 44
            echo "
        <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
    ";
        // line 49
        echo "    <div class=\"text-right\">
        <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("twig_exercice");
        echo "\" class=\"btn btn-primary\">Exercice</a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "twig/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 50,  182 => 49,  179 => 47,  171 => 44,  167 => 42,  163 => 40,  161 => 39,  156 => 37,  153 => 36,  148 => 35,  140 => 32,  134 => 29,  130 => 26,  126 => 24,  122 => 22,  119 => 21,  113 => 17,  109 => 16,  104 => 14,  101 => 13,  95 => 9,  92 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}TWIG !{{ parent() }}{% endblock %}

{% block body %}

    {# IMAGE #}
    <div>
        <img src=\"{{ asset('images/logo-twig.png') }}\" alt=\"\">
    </div>

    {# FILTRES PERSONNALISÉS #}
    <div class=\"mb-3\">
        Cet article côute {{ prix|euros }}
        <br><br>
        Cet article côute {{ prix|price('us') }} <br>
        Cet article côute {{ prix|price('fr') }} <br>
    </div>

    {# ODD / EVEN #}
    {% if 3 is odd %}
        OUI
    {% else %}
        NON
    {% endif %}
    <br><br>

    {# DATE #}
    <h3>Nous sommes le {{ date|date('d/m/Y') }}</h3>

    {# LENGTH / JOIN #}
    <h4>Les {{ users|length }} utilsateurs s'appellent {{ users|join(', ', ' et ')|title }}</h4>

    {# FOR / IF / ELSEIF / ELSE / AND / OR #}
    {% for user in users %}

        L'utilisateur s'appelle {{ user|title }}

        {% if user == 'victor' or user == 'john' %}
            , c'est moi.
        {% else %}
            , c'est pas moi.
        {% endif %}

        <br>
    {% endfor %}

    {# PATH #}
    <div class=\"text-right\">
        <a href=\"{{ path('twig_exercice') }}\" class=\"btn btn-primary\">Exercice</a>
    </div>

{% endblock %}

", "twig/index.html.twig", "/Users/Alison/Documents/Sites/monblog/templates/twig/index.html.twig");
    }
}
