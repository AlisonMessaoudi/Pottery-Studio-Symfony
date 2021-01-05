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
class __TwigTemplate_6f7f663a34fe9febc21392fb337fd141a7abff5a437264636ae42e3ac41ba9c5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "twig/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "TWIG !";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\PrixExtension']->formatEuro(($context["prix"] ?? null)), "html", null, true);
        echo "
        <br><br>
        Cet article côute ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\PrixExtension']->formatPrice(($context["prix"] ?? null), "us"), "html", null, true);
        echo " <br>
        Cet article côute ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\PrixExtension']->formatPrice(($context["prix"] ?? null), "fr"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? null), "d/m/Y"), "html", null, true);
        echo "</h3>

    ";
        // line 32
        echo "    <h4>Les ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["users"] ?? null)), "html", null, true);
        echo " utilsateurs s'appellent ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_join_filter(($context["users"] ?? null), ", ", " et ")), "html", null, true);
        echo "</h4>

    ";
        // line 35
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
        return array (  155 => 50,  152 => 49,  149 => 47,  141 => 44,  137 => 42,  133 => 40,  131 => 39,  126 => 37,  123 => 36,  118 => 35,  110 => 32,  104 => 29,  100 => 26,  96 => 24,  92 => 22,  89 => 21,  83 => 17,  79 => 16,  74 => 14,  71 => 13,  65 => 9,  62 => 8,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "twig/index.html.twig", "/Users/Alison/Documents/Sites/monblog/templates/twig/index.html.twig");
    }
}
