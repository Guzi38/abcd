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

/* post/show.html.twig */
class __TwigTemplate_ec79be1313243d92a2bdd272680160cc extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
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
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.post", ["%id%" => ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 4), "")) : (""))]), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2>
    ";
        // line 9
        if ((array_key_exists("post", $context) && twig_length_filter($this->env, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 9, $this->source); })())))) {
            // line 10
            echo "        <dl class=\"dl-horizontal\">
            <dt>";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.id"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
            echo "</dd>
            <dt>";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.created_at"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "createdAt", [], "any", false, false, false, 14), "long"), "html", null, true);
            echo "</dd>
            <dt>";
            // line 15
            echo "label.content";
            echo "</dt>
            <dd>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 16, $this->source); })()), "content", [], "any", false, false, false, 16), "html", null, true);
            echo "</dd>
            <dt>";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</dd>
            <dt>";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.category"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "category", [], "any", false, false, false, 20), "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</dd>
        </dl>
        
    ";
        } else {
            // line 24
            echo "        <p>
            ";
            // line 25
            $this->loadTemplate("default/_single_alert_message.html.twig", "post/show.html.twig", 25)->display(twig_array_merge($context, ["type" => "warning", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.empty_list")]));
            // line 29
            echo "        </p>
    ";
        }
        // line 31
        echo "    <p>
            <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("post_index");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back_to_list"), "html", null, true);
        echo "\">
                ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back_to_list"), "html", null, true);
        echo "
            </a>
        </p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 33,  157 => 32,  154 => 31,  150 => 29,  148 => 25,  145 => 24,  138 => 20,  134 => 19,  130 => 18,  126 => 17,  122 => 16,  118 => 15,  114 => 14,  110 => 13,  106 => 12,  102 => 11,  99 => 10,  97 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ 'title.post'|trans({'%id%': post.id|default('')}) }}
{% endblock %}

{% block main %}
    <h2>{{  post.title }}</h2>
    {% if post is defined and post|length %}
        <dl class=\"dl-horizontal\">
            <dt>{{ 'label.id'|trans }}</dt>
            <dd>{{ post.id }}</dd>
            <dt>{{ 'label.created_at'|trans }}</dt>
            <dd>{{ post.createdAt|format_date('long') }}</dd>
            <dt>{{ 'label.content' }}</dt>
            <dd>{{ post.content }}</dd>
            <dt>{{ 'label.title'|trans }}</dt>
            <dd>{{  post.title }}</dd>
            <dt>{{ 'label.category'|trans }}</dt>
            <dd>{{  post.category.title }}</dd>
        </dl>
        
    {% else %}
        <p>
            {% include 'default/_single_alert_message.html.twig' with {
            type: 'warning',
            message: 'message.empty_list'|trans
        } %}
        </p>
    {% endif %}
    <p>
            <a href=\"{{ url('post_index') }}\" title=\"{{ 'action.back_to_list'|trans }}\">
                {{ 'action.back_to_list'|trans }}
            </a>
        </p>
{% endblock %}", "post/show.html.twig", "C:\\xampp\\htdocs\\szymonprojekt\\app\\templates\\post\\show.html.twig");
    }
}
