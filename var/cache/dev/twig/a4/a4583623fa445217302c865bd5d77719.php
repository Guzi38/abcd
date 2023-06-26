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

/* post/index.html.twig */
class __TwigTemplate_34a0677ad1fd567d066ace795acbddf9 extends Template
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
        return "./base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "post/index.html.twig", 1);
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
        echo "  Write!
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
        echo "
    <form
    id=\"search\"
    class=\"search-form\"
    action=\"search.php\"
    method=\"post\"
    autocomplete=\"on\"
    >
          
    <input
        type=\"search\"
        placeholder=\"Search\"
        id=\"search\"
        name=\"search\"
    />
          
\t</form>

    <h2>See recent Posts</h2>
        
        </br>

    <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("post_create");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "\">
                            ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "
    </a>
    ";
        // line 33
        if ((array_key_exists("pagination", $context) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 33, $this->source); })()), "items", [], "any", false, false, false, 33)))) {
            // line 34
            echo "
        <div class=\"navigation text-center\">
            ";
            // line 36
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 36, $this->source); })()));
            echo "
        </div>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>";
            // line 42
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 42, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.id"), "post.id");
            echo "</th>
                    <th>";
            // line 43
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 43, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.created_at"), "post.createdAt");
            echo "</th>
                    <th>";
            // line 44
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 44, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "post.title");
            echo "</th>
                    <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.category"), "html", null, true);
            echo "</th>
                    <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
            echo "</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 50, $this->source); })()), "items", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 51
                echo "                <tr>
                    <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                    <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 53), "long"), "html", null, true);
                echo "</td>
                    <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("category_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\">
                            ";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 57), "title", [], "any", false, false, false, 57), "html", null, true);
                echo "
                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("post_show", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
                echo "\">
                            ";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
                echo "
                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "            </tbody>
        </table>

        <div class=\"navigation text-center\">
            ";
            // line 71
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 71, $this->source); })()));
            echo "
        </div>

    ";
        } else {
            // line 75
            echo "        <p>
            ";
            // line 76
            $this->loadTemplate("default/_single_alert_message.html.twig", "post/index.html.twig", 76)->display(twig_array_merge($context, ["type" => "warning", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.empty_list")]));
            // line 80
            echo "        </p>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 80,  227 => 76,  224 => 75,  217 => 71,  211 => 67,  200 => 62,  194 => 61,  187 => 57,  183 => 56,  178 => 54,  174 => 53,  170 => 52,  167 => 51,  163 => 50,  156 => 46,  152 => 45,  148 => 44,  144 => 43,  140 => 42,  131 => 36,  127 => 34,  125 => 33,  120 => 31,  114 => 30,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

{% block title %}
  Write!
{% endblock %}

{% block main %}

    <form
    id=\"search\"
    class=\"search-form\"
    action=\"search.php\"
    method=\"post\"
    autocomplete=\"on\"
    >
          
    <input
        type=\"search\"
        placeholder=\"Search\"
        id=\"search\"
        name=\"search\"
    />
          
\t</form>

    <h2>See recent Posts</h2>
        
        </br>

    <a href=\"{{ url('post_create') }}\" title=\"{{ 'action.create'|trans }}\">
                            {{ 'action.create'|trans }}
    </a>
    {% if pagination is defined and pagination.items|length %}

        <div class=\"navigation text-center\">
            {{ knp_pagination_render(pagination) }}
        </div>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>{{ knp_pagination_sortable(pagination, 'label.id'|trans, 'post.id') }}</th>
                    <th>{{ knp_pagination_sortable(pagination, 'label.created_at'|trans, 'post.createdAt') }}</th>
                    <th>{{ knp_pagination_sortable(pagination, 'label.title'|trans, 'post.title') }}</th>
                    <th>{{ 'label.category'|trans }}</th>
                    <th>{{ 'label.actions'|trans }}</th>
                </tr>
            </thead>
            <tbody>
            {% for post in pagination.items %}
                <tr>
                    <td>{{ post.id }}</td>
                    <td>{{ post.createdAt|format_date('long') }}</td>
                    <td>{{ post.title }}</td>
                    <td>
                        <a href=\"{{ url('category_show', {id: post.category.id}) }}\">
                            {{ post.category.title }}
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ url('post_show', {id: post.id}) }}\" title=\"{{ 'action.show'|trans }}\">
                            {{ 'action.show'|trans }}
                        </a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <div class=\"navigation text-center\">
            {{ knp_pagination_render(pagination) }}
        </div>

    {% else %}
        <p>
            {% include 'default/_single_alert_message.html.twig' with {
            type: 'warning',
            message: 'message.empty_list'|trans
        } %}
        </p>
    {% endif %}
{% endblock %}", "post/index.html.twig", "C:\\xampp\\htdocs\\szymonprojekt\\app\\templates\\post\\index.html.twig");
    }
}
