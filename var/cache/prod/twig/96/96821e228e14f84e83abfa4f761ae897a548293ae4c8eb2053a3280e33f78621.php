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

/* contact/index.html.twig */
class __TwigTemplate_086ef923a03f925156c180bd44d1f5c71ab4d0a3045531aec10afb0d927ef202 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Contact !";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <h1>Contactez-nous</h1>
    <p>Nous répondons 24h/24</p>

    <form class=\"mt-4\">
        <div class=\"form-group\">
            <label for=\"exampleFormControlInput1\">Votre Adresse</label>
            <input type=\"email\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"name@example.com\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleFormControlTextarea1\">Votre texte</label>
            <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"10\"></textarea>
        </div>
        <div class=\"text-right\">
            <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
        </div>
    </form>

";
    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/index.html.twig", "/Users/Alison/Documents/Sites/monblog/templates/contact/index.html.twig");
    }
}
