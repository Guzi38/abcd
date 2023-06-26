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

/* default/_form.html.twig */
class __TwigTemplate_56cacb4d8bd07548b184d3b4faf5a6a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/_form.html.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "    <h2>";
        echo twig_escape_filter($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</h2>
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
    ";
        // line 18
        if ((false == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "valid", [], "any", false, false, false, 18))) {
            // line 19
            echo "        ";
            $this->loadTemplate("default/_single_alert_message.html.twig", "default/_form.html.twig", 19)->display(twig_array_merge($context, ["type" => "danger", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.form_error")]));
            // line 23
            echo "    ";
        }
        // line 24
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'widget');
        echo "
    <div class=\"form-group row float-sm-right\">
        <input type=\"submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["submit_label"]) || array_key_exists("submit_label", $context) ? $context["submit_label"] : (function () { throw new RuntimeError('Variable "submit_label" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary\"/>
    </div>
    ";
        // line 28
        if (((array_key_exists("back_to_list_path", $context)) ? (_twig_default_filter((isset($context["back_to_list_path"]) || array_key_exists("back_to_list_path", $context) ? $context["back_to_list_path"] : (function () { throw new RuntimeError('Variable "back_to_list_path" does not exist.', 28, $this->source); })()), false)) : (false))) {
            // line 29
            echo "        <div class=\"form-group row float-sm-left\">
            <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl((isset($context["back_to_list_path"]) || array_key_exists("back_to_list_path", $context) ? $context["back_to_list_path"] : (function () { throw new RuntimeError('Variable "back_to_list_path" does not exist.', 30, $this->source); })()));
            echo "\" class=\"btn btn-link\">
                ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back_to_list"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        // line 35
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 35,  129 => 31,  125 => 30,  122 => 29,  120 => 28,  115 => 26,  109 => 24,  106 => 23,  103 => 19,  101 => 18,  97 => 17,  92 => 16,  82 => 15,  69 => 12,  59 => 11,  36 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{#
Default template for forms.

parameters:
    - page_title: page title
    - form: form view variable
    - submit_label: label for submit button
#}
{% extends 'base.html.twig' %}

{% block title %}
    {{ page_title }}
{% endblock %}

{% block main %}
    <h2>{{ page_title }}</h2>
    {{ form_start(form) }}
    {% if false == form.vars.valid %}
        {% include 'default/_single_alert_message.html.twig' with {
            type: 'danger',
            message: 'message.form_error'|trans,
        }%}
    {% endif %}
    {{ form_widget(form) }}
    <div class=\"form-group row float-sm-right\">
        <input type=\"submit\" value=\"{{ submit_label }}\" class=\"btn btn-primary\"/>
    </div>
    {% if back_to_list_path|default(false) %}
        <div class=\"form-group row float-sm-left\">
            <a href=\"{{ url(back_to_list_path) }}\" class=\"btn btn-link\">
                {{ 'action.back_to_list'|trans }}
            </a>
        </div>
    {% endif %}
    {{ form_end(form) }}
{% endblock %}", "default/_form.html.twig", "C:\\xampp\\htdocs\\szymonprojekt\\app\\templates\\default\\_form.html.twig");
    }
}
