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

/* admin/crud/show.html.twig */
class __TwigTemplate_58e5976169eeb231060b10bc28f52574b2a522acafbfe257f85c4741446e1701 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/crud/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/crud/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/crud/show.html.twig", 1);
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

        echo "admin_element_show";
        
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
        <br/>
        <span class=\"metadata\"><i class=\"fa fa-user-circle-o\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 11, $this->source); })()), "author", [], "any", false, false, false, 11), "fullName", [], "any", false, false, false, 11), "html", null, true);
        echo "</span>
    </p>

    <div class=\"well\">
        <p class=\"m-b-0\"><strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.summary"), "html", null, true);
        echo "</strong>: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 15, $this->source); })()), "summary", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
    </div>

    ";
        // line 18
        echo $this->extensions['HtmlSanitizer\Bundle\Twig\TwigExtension']->sanitize($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 18, $this->source); })()), "content", [], "any", false, false, false, 18)));
        echo "

    ";
        // line 20
        echo twig_include($this->env, $context, "crud/_element_tags.html.twig");
        echo "

    <div>
        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_element_index");
        echo "\">
            <i class=\"fa fa-database\" aria-hidden=\"true\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.admin"), "html", null, true);
        echo "
        </a>
    </div>

    <hr/>

    <h1>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.textfields_list"), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.num_fields", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 35, $this->source); })()), "textfields", [], "any", false, false, false, 35))]), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_textfields_new", ["elementSlug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 39, $this->source); })()), "slug", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.position"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 54, $this->source); })()), "textfields", [], "any", false, false, false, 54), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 54, $this->source); })()), "position", [], "any", false, false, false, 54) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 54, $this->source); })()), "position", [], "any", false, false, false, 54)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 55
            echo "            <tr>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "position", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_textfields_show", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_textfields_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 65
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
            // line 71
            echo "            <tr>
                <div class='well'>";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </tbody>
    </table>

    <hr/>

    <h1>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.datefields_list"), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> ";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.num_fields", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 85, $this->source); })()), "datefields", [], "any", false, false, false, 85))]), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_datefields_new", ["elementSlug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 89, $this->source); })()), "slug", [], "any", false, false, false, 89)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.position"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 104, $this->source); })()), "datefields", [], "any", false, false, false, 104), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 104, $this->source); })()), "position", [], "any", false, false, false, 104) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 104, $this->source); })()), "position", [], "any", false, false, false, 104)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 105
            echo "            <tr>
                <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
                <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "position", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_datefields_show", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_datefields_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 115
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
            // line 121
            echo "            <tr>
                <div class='well'>";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "        </tbody>
    </table>

    <hr/>

    <h1>";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.numberfields_list"), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> ";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.num_fields", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 135, $this->source); })()), "numberfields", [], "any", false, false, false, 135))]), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_numberfields_new", ["elementSlug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 139, $this->source); })()), "slug", [], "any", false, false, false, 139)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.position"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 154, $this->source); })()), "numberfields", [], "any", false, false, false, 154), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 154, $this->source); })()), "position", [], "any", false, false, false, 154) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 154, $this->source); })()), "position", [], "any", false, false, false, 154)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 155
            echo "            <tr>
                <td>";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 156), "html", null, true);
            echo "</td>
                <td>";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "position", [], "any", false, false, false, 157), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_numberfields_show", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 160)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_numberfields_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 164)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 165
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
            // line 171
            echo "            <tr>
                <div class='well'>";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "        </tbody>
    </table>

    <hr/>

    <h1>";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.filefields_list"), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> ";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.num_fields", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 185, $this->source); })()), "filefields", [], "any", false, false, false, 185))]), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_filefields_new", ["elementSlug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 189, $this->source); })()), "slug", [], "any", false, false, false, 189)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.position"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 204, $this->source); })()), "filefields", [], "any", false, false, false, 204), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 204, $this->source); })()), "position", [], "any", false, false, false, 204) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 204, $this->source); })()), "position", [], "any", false, false, false, 204)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 205
            echo "            <tr>
                <td>";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 206), "html", null, true);
            echo "</td>
                <td>";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "position", [], "any", false, false, false, 207), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_filefields_show", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 210)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_filefields_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 214)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 215
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
            // line 221
            echo "            <tr>
                <div class='well'>";
            // line 222
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 230
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 231
        echo "    <div class=\"section\">
        <a href=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_element_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 232, $this->source); })()), "id", [], "any", false, false, false, 232)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
        echo "
        </a>
    </div>

    
    <div class=\"section\">
        ";
        // line 239
        echo twig_include($this->env, $context, "admin/crud/_delete_form.html.twig", ["element" => (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 239, $this->source); })())], false);
        echo "
    </div>
    

    ";
        // line 243
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 245
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/crud/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 245,  607 => 243,  600 => 239,  591 => 233,  587 => 232,  584 => 231,  574 => 230,  561 => 225,  552 => 222,  549 => 221,  538 => 215,  534 => 214,  528 => 211,  524 => 210,  518 => 207,  514 => 206,  511 => 205,  506 => 204,  499 => 200,  495 => 199,  491 => 198,  480 => 190,  476 => 189,  469 => 185,  461 => 180,  454 => 175,  445 => 172,  442 => 171,  431 => 165,  427 => 164,  421 => 161,  417 => 160,  411 => 157,  407 => 156,  404 => 155,  399 => 154,  392 => 150,  388 => 149,  384 => 148,  373 => 140,  369 => 139,  362 => 135,  354 => 130,  347 => 125,  338 => 122,  335 => 121,  324 => 115,  320 => 114,  314 => 111,  310 => 110,  304 => 107,  300 => 106,  297 => 105,  292 => 104,  285 => 100,  281 => 99,  277 => 98,  266 => 90,  262 => 89,  255 => 85,  247 => 80,  240 => 75,  231 => 72,  228 => 71,  217 => 65,  213 => 64,  207 => 61,  203 => 60,  197 => 57,  193 => 56,  190 => 55,  185 => 54,  178 => 50,  174 => 49,  170 => 48,  159 => 40,  155 => 39,  148 => 35,  140 => 30,  131 => 24,  127 => 23,  121 => 20,  116 => 18,  108 => 15,  101 => 11,  96 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block body_id 'admin_element_show' %}

{% block main %}
    <h1>{{ element.title }}</h1>

    <p class=\"element-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar-o\"></i> {{ element.publishedAt|format_datetime('long', 'medium', '', 'UTC') }}</span>
        <br/>
        <span class=\"metadata\"><i class=\"fa fa-user-circle-o\"></i> {{ element.author.fullName }}</span>
    </p>

    <div class=\"well\">
        <p class=\"m-b-0\"><strong>{{ 'label.summary'|trans }}</strong>: {{ element.summary }}</p>
    </div>

    {{ element.content|markdown_to_html|sanitize_html }}

    {{ include('crud/_element_tags.html.twig') }}

    <div>
        <a href=\"{{ path('admin_element_index') }}\">
            <i class=\"fa fa-database\" aria-hidden=\"true\"></i> {{ 'menu.admin'|trans }}
        </a>
    </div>

    <hr/>

    <h1>{{ 'title.textfields_list'|trans }}</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> {{ 'fields.num_fields'|trans({ 'count': element.textfields|length }) }}
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"{{ path('admin_textfields_new', {elementSlug: element.slug}) }}\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> {{ 'action.create'|trans }}
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">{{ 'label.title'|trans }}</th>
                <th scope=\"col\">{{ 'label.position'|trans }}</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> {{ 'label.actions'|trans }}</th>
            </tr>
        </thead>
        <tbody>
        {% for field in element.textfields|sort((a, b) => a.position <=> b.position) %}
            <tr>
                <td>{{ field.title }}</td>
                <td>{{ field.position }}</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"{{ path('admin_textfields_show', {id: field.id}) }}\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> {{ 'action.show'|trans }}
                        </a>

                        <a href=\"{{ path('admin_textfields_edit', {id: field.id}) }}\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
                        </a>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <div class='well'>{{ 'fields.no_fields'|trans }}</div>
           </tr>
        {% endfor %}
        </tbody>
    </table>

    <hr/>

    <h1>{{ 'title.datefields_list'|trans }}</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> {{ 'fields.num_fields'|trans({ 'count': element.datefields|length }) }}
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"{{ path('admin_datefields_new', {elementSlug: element.slug}) }}\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> {{ 'action.create'|trans }}
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">{{ 'label.title'|trans }}</th>
                <th scope=\"col\">{{ 'label.position'|trans }}</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> {{ 'label.actions'|trans }}</th>
            </tr>
        </thead>
        <tbody>
        {% for field in element.datefields|sort((a, b) => a.position <=> b.position) %}
            <tr>
                <td>{{ field.title }}</td>
                <td>{{ field.position }}</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"{{ path('admin_datefields_show', {id: field.id}) }}\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> {{ 'action.show'|trans }}
                        </a>

                        <a href=\"{{ path('admin_datefields_edit', {id: field.id}) }}\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
                        </a>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <div class='well'>{{ 'fields.no_fields'|trans }}</div>
           </tr>
        {% endfor %}
        </tbody>
    </table>

    <hr/>

    <h1>{{ 'title.numberfields_list'|trans }}</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> {{ 'fields.num_fields'|trans({ 'count': element.numberfields|length }) }}
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"{{ path('admin_numberfields_new', {elementSlug: element.slug}) }}\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> {{ 'action.create'|trans }}
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">{{ 'label.title'|trans }}</th>
                <th scope=\"col\">{{ 'label.position'|trans }}</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> {{ 'label.actions'|trans }}</th>
            </tr>
        </thead>
        <tbody>
        {% for field in element.numberfields|sort((a, b) => a.position <=> b.position) %}
            <tr>
                <td>{{ field.title }}</td>
                <td>{{ field.position }}</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"{{ path('admin_numberfields_show', {id: field.id}) }}\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> {{ 'action.show'|trans }}
                        </a>

                        <a href=\"{{ path('admin_numberfields_edit', {id: field.id}) }}\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
                        </a>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <div class='well'>{{ 'fields.no_fields'|trans }}</div>
           </tr>
        {% endfor %}
        </tbody>
    </table>

    <hr/>

    <h1>{{ 'title.filefields_list'|trans }}</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> {{ 'fields.num_fields'|trans({ 'count': element.filefields|length }) }}
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"{{ path('admin_filefields_new', {elementSlug: element.slug}) }}\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> {{ 'action.create'|trans }}
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">{{ 'label.title'|trans }}</th>
                <th scope=\"col\">{{ 'label.position'|trans }}</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> {{ 'label.actions'|trans }}</th>
            </tr>
        </thead>
        <tbody>
        {% for field in element.filefields|sort((a, b) => a.position <=> b.position) %}
            <tr>
                <td>{{ field.title }}</td>
                <td>{{ field.position }}</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"{{ path('admin_filefields_show', {id: field.id}) }}\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> {{ 'action.show'|trans }}
                        </a>

                        <a href=\"{{ path('admin_filefields_edit', {id: field.id}) }}\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
                        </a>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <div class='well'>{{ 'fields.no_fields'|trans }}</div>
           </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}

{% block sidebar %}
    <div class=\"section\">
        <a href=\"{{ path('admin_element_edit', {id: element.id}) }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
        </a>
    </div>

    
    <div class=\"section\">
        {{ include('admin/crud/_delete_form.html.twig', {element: element}, with_context = false) }}
    </div>
    

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/crud/show.html.twig", "C:\\Users\\corbin-a-2\\Downloads\\symfony\\symfony_crud\\templates\\admin\\crud\\show.html.twig");
    }
}
