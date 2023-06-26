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

/* category/index.html.twig */
class __TwigTemplate_94e800f4688d74fac857499873d7d59d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "category/index.html.twig", 1);
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
\t<form
        id=\"search\"
        class=\"search-form\"
        action=\"search.php\"
        method=\"category\"
        autocomplete=\"on\"
    >
          
    <input
        type=\"search\"
        placeholder=\"Search\"
        id=\"search\"
        name=\"search\"
    />
          
    </form>

    <h2>See all categories</h2>
    <br>
    <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("category_create");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "\">
                        ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "
    </a>

    ";
        // line 32
        if ((array_key_exists("pagination", $context) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 32, $this->source); })()), "items", [], "any", false, false, false, 32)))) {
            // line 33
            echo "
        <div class=\"navigation text-center\">
            ";
            // line 35
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 35, $this->source); })()));
            echo "
        </div>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>";
            // line 41
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 41, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.id"), "category.id");
            echo "</th>
                    <th>";
            // line 42
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 42, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "category.title");
            echo "</th>
                    <th>";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
            echo "</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 47, $this->source); })()), "items", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 48
                echo "                <tr>
                    <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                    <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("category_show", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
                echo "\">
                            ";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
                echo "
                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            </tbody>
        </table>

        <div class=\"navigation text-center\">
            ";
            // line 62
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 62, $this->source); })()));
            echo "
        </div>

    ";
        } else {
            // line 66
            echo "        <p>
            ";
            // line 67
            $this->loadTemplate("default/_single_alert_message.html.twig", "category/index.html.twig", 67)->display(twig_array_merge($context, ["type" => "warning", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.empty_list")]));
            // line 71
            echo "        </p>
    ";
        }
        // line 73
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 73,  205 => 71,  203 => 67,  200 => 66,  193 => 62,  187 => 58,  176 => 53,  170 => 52,  165 => 50,  161 => 49,  158 => 48,  154 => 47,  147 => 43,  143 => 42,  139 => 41,  130 => 35,  126 => 33,  124 => 32,  118 => 29,  112 => 28,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

{% block title %}
  Write!
{% endblock %}

{% block main %}

\t<form
        id=\"search\"
        class=\"search-form\"
        action=\"search.php\"
        method=\"category\"
        autocomplete=\"on\"
    >
          
    <input
        type=\"search\"
        placeholder=\"Search\"
        id=\"search\"
        name=\"search\"
    />
          
    </form>

    <h2>See all categories</h2>
    <br>
    <a href=\"{{ url('category_create') }}\" title=\"{{ 'action.create'|trans }}\">
                        {{ 'action.create'|trans }}
    </a>

    {% if pagination is defined and pagination.items|length %}

        <div class=\"navigation text-center\">
            {{ knp_pagination_render(pagination) }}
        </div>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>{{ knp_pagination_sortable(pagination, 'label.id'|trans, 'category.id') }}</th>
                    <th>{{ knp_pagination_sortable(pagination, 'label.title'|trans, 'category.title') }}</th>
                    <th>{{ 'label.actions'|trans }}</th>
                </tr>
            </thead>
            <tbody>
            {% for category in pagination.items %}
                <tr>
                    <td>{{ category.id }}</td>
                    <td>{{ category.title }}</td>
                    <td>
                        <a href=\"{{ url('category_show', {id: category.id}) }}\" title=\"{{ 'action.show'|trans }}\">
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

{% endblock %}", "category/index.html.twig", "C:\\xampp\\htdocs\\szymonprojekt\\app\\templates\\category\\index.html.twig");
    }
}
