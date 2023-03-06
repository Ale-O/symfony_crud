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

/* crud/index.html.twig */
class __TwigTemplate_7456dba9443094a95f970fb48f42e802a0edaeff7a5cc9f14915b86c1105e1f0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "crud/index.html.twig", 1);
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

        echo "crud_index";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.element_list"), "html", null, true);
        echo "</h1>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\"><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.published_at"), "html", null, true);
        echo "</th>
                <th scope=\"col\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.tags"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 17, $this->source); })()), "results", [], "any", false, false, false, 17));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 18
            echo "            <tr>
                <td>
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_element", ["slug" => twig_get_attribute($this->env, $this->source, $context["element"], "slug", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo "
                    </a>
                </td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "publishedAt", [], "any", false, false, false, 24), "medium", "short", "", "UTC"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_include($this->env, $context, "crud/_element_tags.html.twig");
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 28
            echo "            <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("element.no_elements_found"), "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

        ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 33, $this->source); })()), "hasToPaginate", [], "any", false, false, false, 33)) {
            // line 34
            echo "            <div class=\"navigation text-center\">
                <ul class=\"pagination\">
                    ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 36, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 36)) {
                // line 37
                echo "                        <li class=\"prev\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_index_paginated", ["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 37, $this->source); })()), "previousPage", [], "any", false, false, false, 37), "tag" => (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new RuntimeError('Variable "tagName" does not exist.', 37, $this->source); })())]), "html", null, true);
                echo "\" rel=\"previous\"><i class=\"fa fw fa-long-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 39
                echo "                        <li class=\"prev disabled\"><span><i class=\"fa fw fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
                echo "</span></li>
                    ";
            }
            // line 41
            echo "
                    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 42, $this->source); })()), "lastPage", [], "any", false, false, false, 42)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 43
                echo "                        ";
                if ((0 === twig_compare($context["i"], twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 43, $this->source); })()), "currentPage", [], "any", false, false, false, 43)))) {
                    // line 44
                    echo "                            <li class=\"active\"><span>";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo " <span class=\"sr-only\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.current"), "html", null, true);
                    echo "</span></span></li>
                        ";
                } else {
                    // line 46
                    echo "                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_index_paginated", ["page" => $context["i"], "tag" => (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new RuntimeError('Variable "tagName" does not exist.', 46, $this->source); })())]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 48
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
                    ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 50, $this->source); })()), "hasNextPage", [], "any", false, false, false, 50)) {
                // line 51
                echo "                        <li class=\"next\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_index_paginated", ["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 51, $this->source); })()), "nextPage", [], "any", false, false, false, 51), "tag" => (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new RuntimeError('Variable "tagName" does not exist.', 51, $this->source); })())]), "html", null, true);
                echo "\" rel=\"next\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
                echo " <i class=\"fa fw fa-arrow-right\"></i></a></li>
                    ";
            } else {
                // line 53
                echo "                        <li class=\"next disabled\"><span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
                echo " <i class=\"fa fw fa-arrow-right\"></i></span></li>
                    ";
            }
            // line 55
            echo "                </ul>
            </div>
        ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 61
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 63
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
    ";
        // line 64
        echo twig_include($this->env, $context, "crud/_rss.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 64,  281 => 63,  275 => 61,  265 => 60,  252 => 55,  246 => 53,  238 => 51,  236 => 50,  233 => 49,  227 => 48,  219 => 46,  211 => 44,  208 => 43,  204 => 42,  201 => 41,  195 => 39,  187 => 37,  185 => 36,  181 => 34,  179 => 33,  174 => 30,  165 => 28,  149 => 25,  145 => 24,  139 => 21,  135 => 20,  131 => 18,  113 => 17,  106 => 13,  102 => 12,  98 => 11,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_id 'crud_index' %}

{% block main %}
    <h1>{{ 'title.element_list'|trans }}</h1>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">{{ 'label.title'|trans }}</th>
                <th scope=\"col\"><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> {{ 'label.published_at'|trans }}</th>
                <th scope=\"col\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i> {{ 'label.tags'|trans }}</th>
            </tr>
        </thead>
        <tbody>
        {% for element in paginator.results %}
            <tr>
                <td>
                    <a href=\"{{ path('crud_element', {slug: element.slug}) }}\">
                        {{ element.title }}
                    </a>
                </td>
                <td>{{ element.publishedAt|format_datetime('medium', 'short', '', 'UTC') }}</td>
                <td>{{ include('crud/_element_tags.html.twig') }}</td>
            </tr>
        {% else %}
            <div class=\"well\">{{ 'element.no_elements_found'|trans }}</div>
        {% endfor %}
        </tbody>
    </table>

        {% if paginator.hasToPaginate %}
            <div class=\"navigation text-center\">
                <ul class=\"pagination\">
                    {% if paginator.hasPreviousPage %}
                        <li class=\"prev\"><a href=\"{{ path('crud_index_paginated', {page: paginator.previousPage, tag: tagName}) }}\" rel=\"previous\"><i class=\"fa fw fa-long-arrow-left\"></i> {{ 'paginator.previous'|trans }}</a></li>
                    {% else %}
                        <li class=\"prev disabled\"><span><i class=\"fa fw fa-arrow-left\"></i> {{ 'paginator.previous'|trans }}</span></li>
                    {% endif %}

                    {% for i in 1..paginator.lastPage %}
                        {% if i == paginator.currentPage %}
                            <li class=\"active\"><span>{{ i }} <span class=\"sr-only\">{{ 'paginator.current'|trans }}</span></span></li>
                        {% else %}
                            <li><a href=\"{{ path('crud_index_paginated', {page: i, tag: tagName}) }}\">{{ i }}</a></li>
                        {% endif %}
                    {% endfor %}

                    {% if paginator.hasNextPage %}
                        <li class=\"next\"><a href=\"{{ path('crud_index_paginated', {page: paginator.nextPage, tag: tagName}) }}\" rel=\"next\">{{ 'paginator.next'|trans }} <i class=\"fa fw fa-arrow-right\"></i></a></li>
                    {% else %}
                        <li class=\"next disabled\"><span>{{ 'paginator.next'|trans }} <i class=\"fa fw fa-arrow-right\"></i></span></li>
                    {% endif %}
                </ul>
            </div>
        {% endif %}
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
    {{ include('crud/_rss.html.twig') }}
{% endblock %}
", "crud/index.html.twig", "C:\\Users\\corbin-a-2\\Downloads\\symfony\\symfony_crud\\templates\\crud\\index.html.twig");
    }
}
