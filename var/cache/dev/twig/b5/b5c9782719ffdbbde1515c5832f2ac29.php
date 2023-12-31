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

/* login/index.html.twig */
class __TwigTemplate_d657027a7f82a6444c461ea239b25971 extends Template
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
            'register' => [$this, 'block_register'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Start writing!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
        <div class=\"row\">
                <div class=\"col-lg-6 col-md-12 col-sm-12 left-box\">
                
                    <h1>
                    Start<br>writing<br>now!
                    </h1>
                </div>
                <div class=\"col-lg-6 login-register col-md-12 col-sm-12 right-box bg-white\">
                    ";
        // line 17
        $this->displayBlock('register', $context, $blocks);
        // line 51
        echo "                </div>
        </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_register($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "register"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "register"));

        // line 18
        echo "                    <div class=\"login-form\">
\t\t\t<p class=\"form-title\">Log in</p>
\t\t\t<form
\t\t\t\tid=\"form\"
\t\t\t\tclass=\"form\"
\t\t\t\taction=\"login.php\"
\t\t\t\tmethod=\"post\"
\t\t\t\tautocomplete=\"on\"
\t\t\t>
\t\t\t\t<div class=\"form-control\">
\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"email\"
\t\t\t\t\t\tplaceholder=\"example@mail.com\"
\t\t\t\t\t\tid=\"email\"
\t\t\t\t\t\tname=\"email\"
\t\t\t\t\t/>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-control\">
\t\t\t\t\t<label for=\"passwd\">Password</label>
\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"password\"
\t\t\t\t\t\tplaceholder=\"********\"
\t\t\t\t\t\tid=\"passwd\"
\t\t\t\t\t\tname=\"passwd\"
\t\t\t\t\t/>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\">Submit</button>
\t\t\t</form>
\t\t\t<a href=\"register.html\" class=\"form-signup-link\"
\t\t\t\t>Don't have an account? Sign up!</a
\t\t\t>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 18,  117 => 17,  104 => 51,  102 => 17,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Start writing!
{% endblock %}

{% block body %}

        <div class=\"row\">
                <div class=\"col-lg-6 col-md-12 col-sm-12 left-box\">
                
                    <h1>
                    Start<br>writing<br>now!
                    </h1>
                </div>
                <div class=\"col-lg-6 login-register col-md-12 col-sm-12 right-box bg-white\">
                    {% block register %}
                    <div class=\"login-form\">
\t\t\t<p class=\"form-title\">Log in</p>
\t\t\t<form
\t\t\t\tid=\"form\"
\t\t\t\tclass=\"form\"
\t\t\t\taction=\"login.php\"
\t\t\t\tmethod=\"post\"
\t\t\t\tautocomplete=\"on\"
\t\t\t>
\t\t\t\t<div class=\"form-control\">
\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"email\"
\t\t\t\t\t\tplaceholder=\"example@mail.com\"
\t\t\t\t\t\tid=\"email\"
\t\t\t\t\t\tname=\"email\"
\t\t\t\t\t/>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-control\">
\t\t\t\t\t<label for=\"passwd\">Password</label>
\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"password\"
\t\t\t\t\t\tplaceholder=\"********\"
\t\t\t\t\t\tid=\"passwd\"
\t\t\t\t\t\tname=\"passwd\"
\t\t\t\t\t/>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\">Submit</button>
\t\t\t</form>
\t\t\t<a href=\"register.html\" class=\"form-signup-link\"
\t\t\t\t>Don't have an account? Sign up!</a
\t\t\t>
                    {% endblock %}
                </div>
        </div>

{% endblock %}

", "login/index.html.twig", "C:\\xampp\\htdocs\\szymonprojekt\\app\\templates\\login\\index.html.twig");
    }
}
