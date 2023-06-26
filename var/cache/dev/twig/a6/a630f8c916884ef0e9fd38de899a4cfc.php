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

/* default/_navbar.html.twig */
class __TwigTemplate_ce9db4acfb574a5aff21523613675e8f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_navbar.html.twig"));

        // line 1
        $this->displayBlock('navbar', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 2
        echo "        
<nav class=\"navbar navbar-expand-sm navbar-dark\">
    <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_index");
        echo "\" class=\"navbar-brand\"></a>
    <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbar-menu\">
        <span class=\"navbar-toddler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
        <ul class=\"navbar-nav ms-auto\">
        <li class=\"nav-item\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_menu", ["nav" => "create"]);
        echo "\" class=\"nav-link\">New post</a></li>
        <li class=\"nav-item\"><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\" class=\"nav-link\">Categories</a></li>
        <li class=\"nav-item\"><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_menu", ["nav" => "myposts"]);
        echo "\" class=\"nav-link\">My posts</a></li>
        <li class=\"nav-item\"><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_menu", ["nav" => "settings"]);
        echo "\" class=\"nav-link\">Settings</a></li>
        </ul>
    </div>

</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default/_navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 13,  84 => 12,  80 => 11,  76 => 10,  67 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block navbar %}
        
<nav class=\"navbar navbar-expand-sm navbar-dark\">
    <a href=\"{{ path('post_index') }}\" class=\"navbar-brand\"></a>
    <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbar-menu\">
        <span class=\"navbar-toddler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
        <ul class=\"navbar-nav ms-auto\">
        <li class=\"nav-item\"><a href=\"{{ path('post_menu', {nav: 'create'}) }}\" class=\"nav-link\">New post</a></li>
        <li class=\"nav-item\"><a href=\"{{ path('category_index') }}\" class=\"nav-link\">Categories</a></li>
        <li class=\"nav-item\"><a href=\"{{ path('post_menu', {nav: 'myposts'}) }}\" class=\"nav-link\">My posts</a></li>
        <li class=\"nav-item\"><a href=\"{{ path('post_menu', {nav: 'settings'}) }}\" class=\"nav-link\">Settings</a></li>
        </ul>
    </div>

</nav>
{% endblock %}", "default/_navbar.html.twig", "C:\\xampp\\htdocs\\szymonprojekt\\app\\templates\\default\\_navbar.html.twig");
    }
}
