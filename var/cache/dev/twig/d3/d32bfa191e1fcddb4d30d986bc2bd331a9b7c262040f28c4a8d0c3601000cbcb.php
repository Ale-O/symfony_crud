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
class __TwigTemplate_64372fff404ce340ae8227a1e75fb71b27d010b489ac571dfc83dd0d3fcdbb07 extends Template
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


    <div id=\"element-add-subelement\" class=\"well\">
        ";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 25
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CrudController::subelementForm", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]));
            echo "
        ";
        } else {
            // line 27
            echo "            <p>
                <a class=\"btn btn-success\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login", ["redirect_to" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "pathInfo", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.sign_in"), "html", null, true);
            echo "
                </a>
                ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("element.to_publish_a_subelement"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 34
        echo "    </div>

    <hr/>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("element.num_subelements", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 41, $this->source); })()), "subelements", [], "any", false, false, false, 41))]), "html", null, true);
        echo "
            </h3>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 54, $this->source); })()), "results", [], "any", false, false, false, 54));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subelement"]) {
            // line 55
            echo "                <tr>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subelement"], "title", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">
                        <div class=\"item-actions\">
                            <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subelement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["subelement"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                            </a>

                            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subelement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["subelement"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 64
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
            // line 70
            echo "                <tr>
                    <td colspan=\"4\" align=\"center\">";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("element.no_subelements"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subelement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </tbody>
    </table>
        ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 76, $this->source); })()), "hasToPaginate", [], "any", false, false, false, 76)) {
            // line 77
            echo "            <div class=\"navigation text-center\">
                <ul class=\"pagination\">
                    ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 79, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 79)) {
                // line 80
                echo "                        <li class=\"prev\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_element_paginated", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 80, $this->source); })()), "slug", [], "any", false, false, false, 80), "page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 80, $this->source); })()), "previousPage", [], "any", false, false, false, 80)]), "html", null, true);
                echo "\" rel=\"previous\"><i class=\"fa fw fa-long-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 82
                echo "                        <li class=\"prev disabled\"><span><i class=\"fa fw fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
                echo "</span></li>
                    ";
            }
            // line 84
            echo "
                    ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 85, $this->source); })()), "lastPage", [], "any", false, false, false, 85)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 86
                echo "                        ";
                if ((0 === twig_compare($context["i"], twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 86, $this->source); })()), "currentPage", [], "any", false, false, false, 86)))) {
                    // line 87
                    echo "                            <li class=\"active\"><span>";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo " <span class=\"sr-only\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.current"), "html", null, true);
                    echo "</span></span></li>
                        ";
                } else {
                    // line 89
                    echo "                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_element_paginated", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 89, $this->source); })()), "slug", [], "any", false, false, false, 89), "page" => $context["i"]]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 91
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
                    ";
            // line 93
            if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 93, $this->source); })()), "hasNextPage", [], "any", false, false, false, 93)) {
                // line 94
                echo "                        <li class=\"next\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_element_paginated", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 94, $this->source); })()), "slug", [], "any", false, false, false, 94), "page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 94, $this->source); })()), "nextPage", [], "any", false, false, false, 94)]), "html", null, true);
                echo "\" rel=\"next\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
                echo " <i class=\"fa fw fa-arrow-right\"></i></a></li>
                    ";
            } else {
                // line 96
                echo "                        <li class=\"next disabled\"><span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
                echo " <i class=\"fa fw fa-arrow-right\"></i></span></li>
                    ";
            }
            // line 98
            echo "                </ul>
            </div>
        ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 104
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 104, $this->source); })()))) {
            // line 105
            echo "        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_element_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)]), "html", null, true);
            echo "\">
                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        // line 111
        echo "
    ";
        // line 112
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 114
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
    ";
        // line 115
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
        return array (  365 => 115,  361 => 114,  356 => 112,  353 => 111,  346 => 107,  342 => 106,  339 => 105,  336 => 104,  326 => 103,  313 => 98,  307 => 96,  299 => 94,  297 => 93,  294 => 92,  288 => 91,  280 => 89,  272 => 87,  269 => 86,  265 => 85,  262 => 84,  256 => 82,  248 => 80,  246 => 79,  242 => 77,  240 => 76,  236 => 74,  227 => 71,  224 => 70,  213 => 64,  209 => 63,  203 => 60,  199 => 59,  193 => 56,  190 => 55,  185 => 54,  178 => 50,  174 => 49,  163 => 41,  154 => 34,  148 => 31,  143 => 29,  139 => 28,  136 => 27,  130 => 25,  128 => 24,  121 => 20,  116 => 18,  108 => 15,  101 => 11,  96 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_id 'crud_element_show' %}

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

    <hr/>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> {{ 'element.num_subelements'|trans({ 'count': element.subelements|length }) }}
            </h3>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">{{ 'label.title'|trans }}</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> {{ 'label.actions'|trans }}</th>
            </tr>
        </thead>
        <tbody>
            {% for subelement in paginator.results %}
                <tr>
                    <td>{{ subelement.title }}</td>
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
        {% if paginator.hasToPaginate %}
            <div class=\"navigation text-center\">
                <ul class=\"pagination\">
                    {% if paginator.hasPreviousPage %}
                        <li class=\"prev\"><a href=\"{{ path('crud_element_paginated', {slug: element.slug, page: paginator.previousPage}) }}\" rel=\"previous\"><i class=\"fa fw fa-long-arrow-left\"></i> {{ 'paginator.previous'|trans }}</a></li>
                    {% else %}
                        <li class=\"prev disabled\"><span><i class=\"fa fw fa-arrow-left\"></i> {{ 'paginator.previous'|trans }}</span></li>
                    {% endif %}

                    {% for i in 1..paginator.lastPage %}
                        {% if i == paginator.currentPage %}
                            <li class=\"active\"><span>{{ i }} <span class=\"sr-only\">{{ 'paginator.current'|trans }}</span></span></li>
                        {% else %}
                            <li><a href=\"{{ path('crud_element_paginated', {slug: element.slug, page: i}) }}\">{{ i }}</a></li>
                        {% endif %}
                    {% endfor %}

                    {% if paginator.hasNextPage %}
                        <li class=\"next\"><a href=\"{{ path('crud_element_paginated', {slug: element.slug, page: paginator.nextPage}) }}\" rel=\"next\">{{ 'paginator.next'|trans }} <i class=\"fa fw fa-arrow-right\"></i></a></li>
                    {% else %}
                        <li class=\"next disabled\"><span>{{ 'paginator.next'|trans }} <i class=\"fa fw fa-arrow-right\"></i></span></li>
                    {% endif %}
                </ul>
            </div>
        {% endif %}
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
