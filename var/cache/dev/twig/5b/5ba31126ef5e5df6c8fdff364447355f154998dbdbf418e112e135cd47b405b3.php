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

/* base/header.html.twig */
class __TwigTemplate_304f9a408f68ea4f91865867df56afb28000fbadb33481c04fb9f7ba28af680b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg shift\">

    <a class=\"navbar-brand\" href=\"#\">Pottery Studio</a>

    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"><i class=\"fas fa-bars\"></i></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

        <ul class=\"navbar-nav\">
            
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Accueil</a>
            </li>
            
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apropos");
        echo "\">A propos</a>
            </li>
            
            <li class=\"nav-item ";
        // line 21
        echo (((0 === twig_compare((isset($context["ROUTE_NAME"]) || array_key_exists("ROUTE_NAME", $context) ? $context["ROUTE_NAME"] : (function () { throw new RuntimeError('Variable "ROUTE_NAME" does not exist.', 21, $this->source); })()), "boutique"))) ? ("active") : (""));
        echo "\">
                <a class=\"nav-link\" href=\"#\">Boutique</a>
            </li>
            
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
            </li>
        
        </ul>

    </div>

</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  71 => 21,  65 => 18,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg shift\">

    <a class=\"navbar-brand\" href=\"#\">Pottery Studio</a>

    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"><i class=\"fas fa-bars\"></i></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

        <ul class=\"navbar-nav\">
            
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('accueil') }}\">Accueil</a>
            </li>
            
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('apropos') }}\">A propos</a>
            </li>
            
            <li class=\"nav-item {{ ROUTE_NAME == 'boutique' ? 'active' }}\">
                <a class=\"nav-link\" href=\"#\">Boutique</a>
            </li>
            
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
            </li>
        
        </ul>

    </div>

</nav>
", "base/header.html.twig", "/Users/Alison/Documents/Sites/monblog/templates/base/header.html.twig");
    }
}
