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

/* crud/subelement/subelement_edit_fields.html.twig */
class __TwigTemplate_0c85d9ff21153f922846f07b7a7a5aec2f096ccc1cf92d37aa2f057c7651b293 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/subelement/subelement_edit_fields.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/subelement/subelement_edit_fields.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "crud/subelement/subelement_edit_fields.html.twig", 1);
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

        echo "crud_edit_fields";
        
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

    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 25, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 25, $this->source); })()), "position", [], "any", false, false, false, 25) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 25, $this->source); })()), "position", [], "any", false, false, false, 25)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 26
            echo "        <div>
            <h3>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</h3>
            <p>
                ";
            // line 29
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 30
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, true, false, 30), "timestamp", [], "any", true, true, false, 30)) {
                    // line 31
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\FieldsController::DateFieldsForm", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 31)]));
                    echo "
                    ";
                } else {
                    // line 33
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\FieldsController::textFieldsForm", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 33)]));
                    echo "
                    ";
                }
                // line 35
                echo "                ";
            } else {
                // line 36
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, true, false, 36), "timestamp", [], "any", true, true, false, 36)) {
                    // line 37
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 37), "long", "medium", "", "UTC"), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 39
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 39), "html", null, true);
                    echo "
                    ";
                }
                // line 41
                echo "                ";
            }
            // line 42
            echo "            </p>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "        <div class='well'>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 57
        echo "
    <div class=\"section\">
        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subelement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
        echo "
        </a>
    </div>

    <div class=\"section\">
        <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subelement_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.lock_fields"), "html", null, true);
        echo "
        </a>
    </div>
    
    <div class=\"section\">
        ";
        // line 71
        echo twig_include($this->env, $context, "crud/subelement/_subelement_delete_form.html.twig", ["subelement" => (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 71, $this->source); })())], false);
        echo "
    </div>

    ";
        // line 74
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 76
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "crud/subelement/subelement_edit_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 76,  255 => 74,  249 => 71,  241 => 66,  237 => 65,  229 => 60,  225 => 59,  221 => 57,  211 => 56,  197 => 47,  188 => 45,  181 => 42,  178 => 41,  172 => 39,  166 => 37,  163 => 36,  160 => 35,  154 => 33,  148 => 31,  145 => 30,  143 => 29,  138 => 27,  135 => 26,  130 => 25,  125 => 23,  115 => 16,  111 => 15,  105 => 12,  100 => 10,  95 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_id 'crud_edit_fields' %}

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

    {% for field in fields|sort((a, b) => a.position <=> b.position) %}
        <div>
            <h3>{{ field.title }}</h3>
            <p>
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {% if field.content.timestamp is defined %}
                        {{ render(controller('App\\\\Controller\\\\FieldsController::DateFieldsForm', {'id': field.id})) }}
                    {% else %}
                        {{ render(controller('App\\\\Controller\\\\FieldsController::textFieldsForm', {'id': field.id})) }}
                    {% endif %}
                {% else %}
                    {% if field.content.timestamp is defined %}
                        {{ field.content|format_datetime('long', 'medium', '', 'UTC') }}
                    {% else %}
                        {{ field.content }}
                    {% endif %}
                {% endif %}
            </p>
        </div>
    {% else %}
        <div class='well'>{{ 'fields.no_fields'|trans }}</div>
    {% endfor %}




{% endblock %}




{% block sidebar %}

    <div class=\"section\">
        <a href=\"{{ path('subelement_edit', {id: subelement.id}) }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
        </a>
    </div>

    <div class=\"section\">
        <a href=\"{{ path('subelement_show', {id: subelement.id}) }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'action.lock_fields'|trans }}
        </a>
    </div>
    
    <div class=\"section\">
        {{ include('crud/subelement/_subelement_delete_form.html.twig', {subelement: subelement}, with_context = false) }}
    </div>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "crud/subelement/subelement_edit_fields.html.twig", "C:\\Users\\corbin-a-2\\Downloads\\symfony\\symfony_crud\\templates\\crud\\subelement\\subelement_edit_fields.html.twig");
    }
}
