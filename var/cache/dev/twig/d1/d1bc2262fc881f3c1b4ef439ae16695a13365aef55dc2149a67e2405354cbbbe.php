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

/* base/footer.html.twig */
class __TwigTemplate_5abab1c20d7524b470b64477de0b90ab2eaa372aa2bb00d13bafbe6be50afa44 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/footer.html.twig"));

        // line 1
        echo "<footer class=\"container-fluid\">

    <div class=\"container\">
        
        <h4>Subscribe to Our Newsletter</h4>

        <hr>

        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra. Quisque a vehicula magna.</p>

        <form action=\"\" method=\"GET\">
        
            <input class=\"email\" type=\"email\" placeholder=\"Email\"/>
            <button type=\"submit\">Subscrire</button>

        </form>

    </div>

    <hr>

    <div>

        <div class=\"address\">
        
            <h4>Address</h4>

            <p>Class aptent taciti sociosqu ad litora torquent per 1230/</p>

        </div>

        <div class=\"call_us\">
        
            <h4>Call Us</h4>

            <p>(+880)123 456 7898<br/>(+880)123 456 7898</p>
            
        </div>

        <div class=\"email_us\">
        
            <h4>Email Us</h4>

            <p><a href=\"mailto:contact@divi.com?subject=Demande%20de%20contact\">contact@divi.com</a><br/><a href=\"mailto:potterystidio@divi.com?subject=Demande%20de%20contact\">potterystidio@divi.com</a></p>
            
        </div>
    
    </div>

    <div class=\"follow\">
    
        <a href=\"\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"Pictogramme Facebook\"></a>
        <a href=\"\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"Pictogramme Twitter\"></a>
        <a href=\"\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pinterest.png"), "html", null, true);
        echo "\" alt=\"Pictogramme Pinterest\"></a>
        <a href=\"\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/youtube.png"), "html", null, true);
        echo "\" alt=\"Pictogramme YouTube\"></a>

    </div>

</footer>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 55,  104 => 54,  100 => 53,  96 => 52,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"container-fluid\">

    <div class=\"container\">
        
        <h4>Subscribe to Our Newsletter</h4>

        <hr>

        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra. Quisque a vehicula magna.</p>

        <form action=\"\" method=\"GET\">
        
            <input class=\"email\" type=\"email\" placeholder=\"Email\"/>
            <button type=\"submit\">Subscrire</button>

        </form>

    </div>

    <hr>

    <div>

        <div class=\"address\">
        
            <h4>Address</h4>

            <p>Class aptent taciti sociosqu ad litora torquent per 1230/</p>

        </div>

        <div class=\"call_us\">
        
            <h4>Call Us</h4>

            <p>(+880)123 456 7898<br/>(+880)123 456 7898</p>
            
        </div>

        <div class=\"email_us\">
        
            <h4>Email Us</h4>

            <p><a href=\"mailto:contact@divi.com?subject=Demande%20de%20contact\">contact@divi.com</a><br/><a href=\"mailto:potterystidio@divi.com?subject=Demande%20de%20contact\">potterystidio@divi.com</a></p>
            
        </div>
    
    </div>

    <div class=\"follow\">
    
        <a href=\"\"><img src=\"{{ asset('images/facebook.png') }}\" alt=\"Pictogramme Facebook\"></a>
        <a href=\"\"><img src=\"{{ asset('images/twitter.png') }}\" alt=\"Pictogramme Twitter\"></a>
        <a href=\"\"><img src=\"{{ asset('images/pinterest.png') }}\" alt=\"Pictogramme Pinterest\"></a>
        <a href=\"\"><img src=\"{{ asset('images/youtube.png') }}\" alt=\"Pictogramme YouTube\"></a>

    </div>

</footer>

", "base/footer.html.twig", "/Users/Alison/Documents/Sites/Pottery-Studio-Symfony/templates/base/footer.html.twig");
    }
}
