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

/* crud/subelement/subelement_show.html.twig */
class __TwigTemplate_841e45f7b1055fcfe12c3dbdaba6b891cf291fa5826c75f97aeaf11e9901b4d3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/subelement/subelement_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/subelement/subelement_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "crud/subelement/subelement_show.html.twig", 1);
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

        echo "crud_show";
        
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    <p class=\"element-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar-o\"></i> ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 8, $this->source); })()), "publishedAt", [], "any", false, false, false, 8), "long", "medium", "", "UTC"), "html", null, true);
        echo "</span>
        <br/>
        <span class=\"metadata\"><i class=\"fa fa-user-circle-o\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 10, $this->source); })()), "author", [], "any", false, false, false, 10), "fullName", [], "any", false, false, false, 10), "html", null, true);
        echo "</span>
    </p>
    ";
        // line 12
        echo $this->extensions['HtmlSanitizer\Bundle\Twig\TwigExtension']->sanitize($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 12, $this->source); })()), "content", [], "any", false, false, false, 12)));
        echo "

    <div>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_element", ["slug" => (isset($context["slugElement"]) || array_key_exists("slugElement", $context) ? $context["slugElement"] : (function () { throw new RuntimeError('Variable "slugElement" does not exist.', 15, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-link\">
            <i class=\"fa fa-backward\" aria-hidden=\"true\"></i> ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
        echo "
        </a>
    </div>


    <hr/>

    <h1>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.fields_list"), "html", null, true);
        echo "</h1>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.content"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 33, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 33, $this->source); })()), "position", [], "any", false, false, false, 33) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 33, $this->source); })()), "position", [], "any", false, false, false, 33)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 34
            echo "                <tr>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 37) === "text")) {
                // line 38
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 38), "html", null, true);
                echo "
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 39
$context["field"], "type", [], "any", false, false, false, 39) === "date")) {
                // line 40
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 40), "long", "medium", "", "UTC"), "html", null, true);
                echo "
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 41
$context["field"], "type", [], "any", false, false, false, 41) === "number")) {
                // line 42
                echo "                            ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 42)), "html", null, true);
                echo "
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 43
$context["field"], "type", [], "any", false, false, false, 43) === "file")) {
                // line 44
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 44), "html", null, true);
                echo "
                            <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/files/" . twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 45))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file.show_pdf"), "html", null, true);
                echo "</a>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 46
$context["field"], "type", [], "any", false, false, false, 46) === "subelement")) {
                // line 47
                echo "                            ";
                if ((null === twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 47))) {
                    // line 48
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 48), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 50
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 50), "title", [], "any", false, false, false, 50), "html", null, true);
                    echo "
                            ";
                }
                // line 52
                echo "                        ";
            } else {
                // line 53
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 53), "html", null, true);
                echo "
                        ";
            }
            // line 55
            echo "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "                <tr>
                    <td colspan=\"4\" align=\"center\">";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 76
        echo "
    <div class=\"section\">
        <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subelement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
        echo "
        </a>
    </div>

    <div class=\"section\">
        <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subelement_edit_fields", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-unlock\" aria-hidden=\"true\"></i> ";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit_fields"), "html", null, true);
        echo "
        </a>
    </div>
    
    <div class=\"section\">
        ";
        // line 90
        echo twig_include($this->env, $context, "crud/subelement/_subelement_delete_form.html.twig", ["subelement" => (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 90, $this->source); })())], false);
        echo "
    </div>

    ";
        // line 93
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 95
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "crud/subelement/subelement_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 95,  298 => 93,  292 => 90,  284 => 85,  280 => 84,  272 => 79,  268 => 78,  264 => 76,  254 => 75,  236 => 62,  227 => 59,  224 => 58,  217 => 55,  211 => 53,  208 => 52,  202 => 50,  196 => 48,  193 => 47,  191 => 46,  185 => 45,  180 => 44,  178 => 43,  173 => 42,  171 => 41,  166 => 40,  164 => 39,  159 => 38,  157 => 37,  152 => 35,  149 => 34,  144 => 33,  137 => 29,  133 => 28,  125 => 23,  115 => 16,  111 => 15,  105 => 12,  100 => 10,  95 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_id 'crud_show' %}

{% block main %}
    <h1>{{ subelement.title }}</h1>
    <p class=\"element-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar-o\"></i> {{ subelement.publishedAt|format_datetime('long', 'medium', '', 'UTC') }}</span>
        <br/>
        <span class=\"metadata\"><i class=\"fa fa-user-circle-o\"></i> {{ subelement.author.fullName }}</span>
    </p>
    {{ subelement.content|markdown_to_html|sanitize_html }}

    <div>
        <a href=\"{{ path('crud_element', {slug: slugElement}) }}\" class=\"btn btn-link\">
            <i class=\"fa fa-backward\" aria-hidden=\"true\"></i> {{ 'action.back'|trans }}
        </a>
    </div>


    <hr/>

    <h1>{{ 'title.fields_list'|trans }}</h1>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">{{ 'label.title'|trans }}</th>
                <th scope=\"col\">{{ 'label.content'|trans }}</th>
            </tr>
        </thead>
        <tbody>
            {% for field in fields|sort((a, b) => a.position <=> b.position) %}
                <tr>
                    <td>{{ field.title }}</td>
                    <td>
                        {% if field.type is same as('text') %}
                            {{ field.content }}
                        {% elseif field.type is same as('date') %}
                            {{ field.content|format_datetime('long', 'medium', '', 'UTC') }}
                        {% elseif field.type is same as('number') %}
                            {{ field.content|number_format }}
                        {% elseif field.type is same as('file') %}
                            {{ field.content }}
                            <a href=\"{{ asset('uploads/files/' ~ field.content) }}\">{{ 'file.show_pdf'|trans }}</a>
                        {% elseif field.type is same as('subelement') %}
                            {% if field.content is null %}
                                {{ field.content }}
                            {% else %}
                                {{ field.content.title }}
                            {% endif %}
                        {% else %}
                            {{ field.content }}
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"4\" align=\"center\">{{ 'fields.no_fields'|trans }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>






{% endblock %}




{% block sidebar %}

    <div class=\"section\">
        <a href=\"{{ path('subelement_edit', {id: subelement.id}) }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
        </a>
    </div>

    <div class=\"section\">
        <a href=\"{{ path('subelement_edit_fields', {id: subelement.id}) }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-unlock\" aria-hidden=\"true\"></i> {{ 'action.edit_fields'|trans }}
        </a>
    </div>
    
    <div class=\"section\">
        {{ include('crud/subelement/_subelement_delete_form.html.twig', {subelement: subelement}, with_context = false) }}
    </div>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "crud/subelement/subelement_show.html.twig", "C:\\Users\\corbin-a-2\\Downloads\\symfony\\symfony_crud\\templates\\crud\\subelement\\subelement_show.html.twig");
    }
}
