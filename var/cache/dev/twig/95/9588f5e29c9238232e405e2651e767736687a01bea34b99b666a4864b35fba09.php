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

/* admin/crud/subelement/subelement_show.html.twig */
class __TwigTemplate_dc4d05f3d58ffbfa434b8be81e436986ede84e2f940310d67cc797b81b88145e extends Template
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
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/crud/subelement/subelement_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/crud/subelement/subelement_show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/crud/subelement/subelement_show.html.twig", 1);
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

        echo "admin_subelement_show";
        
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
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 9, $this->source); })()), "publishedAt", [], "any", false, false, false, 9), "long", "medium", "", "UTC"), "html", null, true);
        echo "</span>
        <br/>
        <span class=\"metadata\"><i class=\"fa fa-user-circle-o\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 11, $this->source); })()), "author", [], "any", false, false, false, 11), "fullName", [], "any", false, false, false, 11), "html", null, true);
        echo "</span>
    </p>
    ";
        // line 13
        echo $this->extensions['HtmlSanitizer\Bundle\Twig\TwigExtension']->sanitize($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 13, $this->source); })()), "content", [], "any", false, false, false, 13)));
        echo "

    ";
        // line 15
        echo twig_include($this->env, $context, "admin/crud/subelement/_subelement_tags.html.twig");
        echo "

    <div>
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_element_show", ["id" => (isset($context["idElement"]) || array_key_exists("idElement", $context) ? $context["idElement"] : (function () { throw new RuntimeError('Variable "idElement" does not exist.', 18, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-link\">
            <i class=\"fa fa-backward\" aria-hidden=\"true\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
        echo "
        </a>
    </div>


    <hr/>

    <h1>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.fields_list"), "html", null, true);
        echo "</h1>

    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 28, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 28, $this->source); })()), "position", [], "any", false, false, false, 28) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 28, $this->source); })()), "position", [], "any", false, false, false, 28)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 29
            echo "        <div>
            <h3>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</h3>
            <p>
                ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 32) === "text")) {
                // line 33
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 33), "html", null, true);
                echo "
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 34
$context["field"], "type", [], "any", false, false, false, 34) === "date")) {
                // line 35
                echo "                    ";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 35), "long", "medium", "", "UTC"), "html", null, true);
                echo "
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 36
$context["field"], "type", [], "any", false, false, false, 36) === "number")) {
                // line 37
                echo "                    ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 37)), "html", null, true);
                echo "
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 38
$context["field"], "type", [], "any", false, false, false, 38) === "file")) {
                // line 39
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 39), "html", null, true);
                echo "
                    <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/files/" . twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 40))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file.show_pdf"), "html", null, true);
                echo "</a>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 41
$context["field"], "type", [], "any", false, false, false, 41) === "subelement")) {
                // line 42
                echo "                    ";
                if ((null === twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 42))) {
                    // line 43
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 43), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 45
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 45), "title", [], "any", false, false, false, 45), "html", null, true);
                    echo "
                    ";
                }
                // line 47
                echo "                ";
            } else {
                // line 48
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 48), "html", null, true);
                echo "
                ";
            }
            // line 50
            echo "            </p>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "        <div class='well'>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 65
        echo "
    <div class=\"section\">
        <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subelement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
        echo "
        </a>
    </div>

    <div class=\"section\">
        <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subelement_edit_fields", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-unlock\" aria-hidden=\"true\"></i> ";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit_fields"), "html", null, true);
        echo "
        </a>
    </div>
    
    <div class=\"section\">
        ";
        // line 79
        echo twig_include($this->env, $context, "admin/crud/subelement/_subelement_delete_form.html.twig", ["subelement" => (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 79, $this->source); })())], false);
        echo "
    </div>

    ";
        // line 82
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 84
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/crud/subelement/subelement_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 84,  283 => 82,  277 => 79,  269 => 74,  265 => 73,  257 => 68,  253 => 67,  249 => 65,  239 => 64,  225 => 55,  216 => 53,  209 => 50,  203 => 48,  200 => 47,  194 => 45,  188 => 43,  185 => 42,  183 => 41,  177 => 40,  172 => 39,  170 => 38,  165 => 37,  163 => 36,  158 => 35,  156 => 34,  151 => 33,  149 => 32,  144 => 30,  141 => 29,  136 => 28,  131 => 26,  121 => 19,  117 => 18,  111 => 15,  106 => 13,  101 => 11,  96 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block body_id 'admin_subelement_show' %}

{% block main %}
    <h1>{{ subelement.title }}</h1>
    
    <p class=\"element-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar-o\"></i> {{ subelement.publishedAt|format_datetime('long', 'medium', '', 'UTC') }}</span>
        <br/>
        <span class=\"metadata\"><i class=\"fa fa-user-circle-o\"></i> {{ subelement.author.fullName }}</span>
    </p>
    {{ subelement.content|markdown_to_html|sanitize_html }}

    {{ include('admin/crud/subelement/_subelement_tags.html.twig') }}

    <div>
        <a href=\"{{ path('admin_element_show', {id: idElement}) }}\" class=\"btn btn-link\">
            <i class=\"fa fa-backward\" aria-hidden=\"true\"></i> {{ 'action.back'|trans }}
        </a>
    </div>


    <hr/>

    <h1>{{ 'title.fields_list'|trans }}</h1>

    {% for field in fields|sort((a, b) => a.position <=> b.position) %}
        <div>
            <h3>{{ field.title }}</h3>
            <p>
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
            </p>
        </div>
    {% else %}
        <div class='well'>{{ 'fields.no_fields'|trans }}</div>
    {% endfor %}




{% endblock %}




{% block sidebar %}

    <div class=\"section\">
        <a href=\"{{ path('admin_subelement_edit', {id: subelement.id}) }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
        </a>
    </div>

    <div class=\"section\">
        <a href=\"{{ path('admin_subelement_edit_fields', {id: subelement.id}) }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-unlock\" aria-hidden=\"true\"></i> {{ 'action.edit_fields'|trans }}
        </a>
    </div>
    
    <div class=\"section\">
        {{ include('admin/crud/subelement/_subelement_delete_form.html.twig', {subelement: subelement}, with_context = false) }}
    </div>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/crud/subelement/subelement_show.html.twig", "C:\\Users\\corbin-a-2\\Downloads\\symfony\\symfony_crud\\templates\\admin\\crud\\subelement\\subelement_show.html.twig");
    }
}
