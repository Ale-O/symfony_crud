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

/* crud/element_show.html.twig */
class __TwigTemplate_1835fbdc36b67b246f78727f26bf247ce917d9a9e62182ce21b2f9741f228b45 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/element_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/element_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "crud/element_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        echo "crud_element_show";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <p class=\"element-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar-o\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 9, $this->source); })()), "publishedAt", [], "any", false, false, false, 9), "long", "medium", "", "UTC"), "html", null, true);
        echo "</span>
        <span class=\"metadata\"><i class=\"fa fa-user-circle-o\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 10, $this->source); })()), "author", [], "any", false, false, false, 10), "fullName", [], "any", false, false, false, 10), "html", null, true);
        echo "</span>
    </p>

    <div class=\"well\">
        <p class=\"m-b-0\"><strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.summary"), "html", null, true);
        echo "</strong>: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 14, $this->source); })()), "summary", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
    </div>

    ";
        // line 17
        echo $this->extensions['HtmlSanitizer\Bundle\Twig\TwigExtension']->sanitize($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 17, $this->source); })()), "content", [], "any", false, false, false, 17)));
        echo "

    ";
        // line 19
        echo twig_include($this->env, $context, "crud/_element_tags.html.twig");
        echo "

    <div id=\"element-add-subelement\" class=\"well\">
        ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 23
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CrudController::subelementForm", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]));
            echo "
        ";
        } else {
            // line 25
            echo "            <p>
                <a class=\"btn btn-success\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login", ["redirect_to" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "pathInfo", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.sign_in"), "html", null, true);
            echo "
                </a>
                ";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("element.to_publish_a_subelement"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 32
        echo "    </div>

    <h3>
        <i class=\"fa fa-subelements\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("element.num_subelements", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 35, $this->source); })()), "subelements", [], "any", false, false, false, 35))]), "html", null, true);
        echo "
    </h3>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.id"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.content"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 47, $this->source); })()), "subelements", [], "any", false, false, false, 47));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subelement"]) {
            // line 48
            echo "                <tr>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subelement"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subelement"], "content", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">
                        <div class=\"item-actions\">
                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subelement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["subelement"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                            </a>

                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subelement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["subelement"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
            echo "
                            </a>
                        </div>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "                <tr>
                    <td colspan=\"4\" align=\"center\">";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("element.no_subelements"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subelement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 73
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 73, $this->source); })()))) {
            // line 74
            echo "        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_element_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">
                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        // line 80
        echo "
    ";
        // line 81
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 83
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
    ";
        // line 84
        echo twig_include($this->env, $context, "crud/_rss.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "crud/element_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 84,  283 => 83,  278 => 81,  275 => 80,  268 => 76,  264 => 75,  261 => 74,  258 => 73,  248 => 72,  236 => 68,  227 => 65,  224 => 64,  213 => 58,  209 => 57,  203 => 54,  199 => 53,  193 => 50,  189 => 49,  186 => 48,  181 => 47,  174 => 43,  170 => 42,  166 => 41,  157 => 35,  152 => 32,  146 => 29,  141 => 27,  137 => 26,  134 => 25,  128 => 23,  126 => 22,  120 => 19,  115 => 17,  107 => 14,  100 => 10,  96 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_id 'crud_element_show' %}

{% block main %}
    <h1>{{ element.title }}</h1>

    <p class=\"element-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar-o\"></i> {{ element.publishedAt|format_datetime('long', 'medium', '', 'UTC') }}</span>
        <span class=\"metadata\"><i class=\"fa fa-user-circle-o\"></i> {{ element.author.fullName }}</span>
    </p>

    <div class=\"well\">
        <p class=\"m-b-0\"><strong>{{ 'label.summary'|trans }}</strong>: {{ element.summary }}</p>
    </div>

    {{ element.content|markdown_to_html|sanitize_html }}

    {{ include('crud/_element_tags.html.twig') }}

    <div id=\"element-add-subelement\" class=\"well\">
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {{ render(controller('App\\\\Controller\\\\CrudController::subelementForm', {'id': element.id})) }}
        {% else %}
            <p>
                <a class=\"btn btn-success\" href=\"{{ path('security_login', {'redirect_to': app.request.pathInfo}) }}\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> {{ 'action.sign_in'|trans }}
                </a>
                {{ 'element.to_publish_a_subelement'|trans }}
            </p>
        {% endif %}
    </div>

    <h3>
        <i class=\"fa fa-subelements\" aria-hidden=\"true\"></i> {{ 'element.num_subelements'|trans({ 'count': element.subelements|length }) }}
    </h3>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">{{ 'label.id'|trans }}</th>
                <th scope=\"col\">{{ 'label.content'|trans }}</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> {{ 'label.actions'|trans }}</th>
            </tr>
        </thead>
        <tbody>
            {% for subelement in element.subelements %}
                <tr>
                    <td>{{ subelement.id }}</td>
                    <td>{{ subelement.content }}</td>
                    <td class=\"text-center\">
                        <div class=\"item-actions\">
                            <a href=\"{{ path('subelement_show', {id: subelement.id}) }}\" class=\"btn btn-sm btn-default\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> {{ 'action.show'|trans }}
                            </a>

                            <a href=\"{{ path('subelement_edit', {id: subelement.id}) }}\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
                            </a>
                        </div>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"4\" align=\"center\">{{ 'element.no_subelements'|trans }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}

{% block sidebar %}
    {% if is_granted('edit', element) %}
        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"{{ path('admin_element_edit', {id: element.id}) }}\">
                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
            </a>
        </div>
    {% endif %}

    {{ parent() }}

    {{ show_source_code(_self) }}
    {{ include('crud/_rss.html.twig') }}
{% endblock %}
", "crud/element_show.html.twig", "C:\\Users\\corbin-a-2\\Downloads\\symfony\\symfony_crud\\templates\\crud\\element_show.html.twig");
    }
}
