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

/* category/show.html.twig */
class __TwigTemplate_088cf27f48e8fa918b5563ae48d21f58 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "category/show.html.twig", 1);
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
    method=\"category\"
    autocomplete=\"on\"
  >
      
    <input
      type=\"search\"
      placeholder=\"Search\"
      id=\"search\"
      name=\"search\"
    />
          
\t</form>

  <h2>See all in \"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26), "html", null, true);
        echo "\"</h2>

  ";
        // line 28
        if ((array_key_exists("pagination", $context) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 28, $this->source); })()), "items", [], "any", false, false, false, 28)))) {
            // line 29
            echo "
    <div class=\"navigation text-center\">
        ";
            // line 31
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 31, $this->source); })()));
            echo "
    </div>

    <table class=\"table table-striped\">
      <thead>
        <tr>
          <th>";
            // line 37
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 37, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "post.title");
            echo "</th>
          <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
            echo "</th>
        </tr>
      </thead>
      <tbody>

        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 43, $this->source); })()), "items", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 44
                echo "    
          <tr>
            <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
            <td>
              <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("post_show", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
                echo "\">
                  ";
                // line 49
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
            // line 54
            echo "      </tbody>
    </table>

    <div class=\"navigation text-center\">
        ";
            // line 58
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 58, $this->source); })()));
            echo "
    </div>
    
    ";
        } else {
            // line 62
            echo "      <p>
          ";
            // line 63
            $this->loadTemplate("default/_single_alert_message.html.twig", "category/show.html.twig", 63)->display(twig_array_merge($context, ["type" => "warning", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.empty_list")]));
            // line 67
            echo "      </p>
    ";
        }
        // line 69
        echo "    <p>
      <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("category_index");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back_to_list"), "html", null, true);
        echo "\">
          ";
        // line 71
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
        return "category/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 71,  197 => 70,  194 => 69,  190 => 67,  188 => 63,  185 => 62,  178 => 58,  172 => 54,  161 => 49,  155 => 48,  150 => 46,  146 => 44,  142 => 43,  134 => 38,  130 => 37,  121 => 31,  117 => 29,  115 => 28,  110 => 26,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
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
    method=\"category\"
    autocomplete=\"on\"
  >
      
    <input
      type=\"search\"
      placeholder=\"Search\"
      id=\"search\"
      name=\"search\"
    />
          
\t</form>

  <h2>See all in \"{{ category.title }}\"</h2>

  {% if pagination is defined and pagination.items|length %}

    <div class=\"navigation text-center\">
        {{ knp_pagination_render(pagination) }}
    </div>

    <table class=\"table table-striped\">
      <thead>
        <tr>
          <th>{{ knp_pagination_sortable(pagination, 'label.title'|trans, 'post.title') }}</th>
          <th>{{ 'label.actions'|trans }}</th>
        </tr>
      </thead>
      <tbody>

        {% for post in pagination.items %}
    
          <tr>
            <td>{{ post.title }}</td>
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
    <p>
      <a href=\"{{ url('category_index') }}\" title=\"{{ 'action.back_to_list'|trans }}\">
          {{ 'action.back_to_list'|trans }}
      </a>
    </p>
{% endblock %}", "category/show.html.twig", "C:\\xampp\\htdocs\\szymonprojekt\\app\\templates\\category\\show.html.twig");
    }
}
