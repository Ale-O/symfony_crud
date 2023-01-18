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

    <div id=\"element-add-subelement\" class=\"well\">
        ";
        // line 31
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 32
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\Admin\\CrudController::subelementForm", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]));
            echo "
        ";
        } else {
            // line 34
            echo "            <p>
                <a class=\"btn btn-success\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login", ["redirect_to" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "pathInfo", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.sign_in"), "html", null, true);
            echo "
                </a>
                ";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("element.to_publish_a_subelement"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 41
        echo "    </div>

    <hr/>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("element.num_subelements", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 48, $this->source); })()), "subelements", [], "any", false, false, false, 48))]), "html", null, true);
        echo "
            </h3>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i> ";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.tags"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 62, $this->source); })()), "results", [], "any", false, false, false, 62));
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
        foreach ($context['_seq'] as $context["_key"] => $context["subelement"]) {
            // line 63
            echo "                <tr>
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subelement"], "title", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                    <td>";
            // line 65
            echo twig_include($this->env, $context, "admin/crud/subelement/_subelement_tags.html.twig");
            echo "</td>
                    <td class=\"text-center\">
                        <div class=\"item-actions\">
                            <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subelement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["subelement"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                            </a>

                            <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subelement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["subelement"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
            echo "
                            </a>
                        </div>
                    </td>
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
            // line 79
            echo "                <tr>
                    <td colspan=\"4\" align=\"center\">";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("element.no_subelements"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subelement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </tbody>
    </table>
        ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 85, $this->source); })()), "hasToPaginate", [], "any", false, false, false, 85)) {
            // line 86
            echo "            <div class=\"navigation text-center\">
                <ul class=\"pagination\">
                    ";
            // line 88
            if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 88, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 88)) {
                // line 89
                echo "                        <li class=\"prev\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_element_paginated", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89), "page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 89, $this->source); })()), "previousPage", [], "any", false, false, false, 89)]), "html", null, true);
                echo "\" rel=\"previous\"><i class=\"fa fw fa-long-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 91
                echo "                        <li class=\"prev disabled\"><span><i class=\"fa fw fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
                echo "</span></li>
                    ";
            }
            // line 93
            echo "
                    ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 94, $this->source); })()), "lastPage", [], "any", false, false, false, 94)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 95
                echo "                        ";
                if ((0 === twig_compare($context["i"], twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 95, $this->source); })()), "currentPage", [], "any", false, false, false, 95)))) {
                    // line 96
                    echo "                            <li class=\"active\"><span>";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo " <span class=\"sr-only\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.current"), "html", null, true);
                    echo "</span></span></li>
                        ";
                } else {
                    // line 98
                    echo "                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_element_paginated", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98), "page" => $context["i"]]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 100
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "
                    ";
            // line 102
            if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 102, $this->source); })()), "hasNextPage", [], "any", false, false, false, 102)) {
                // line 103
                echo "                        <li class=\"next\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_element_paginated", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103), "page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 103, $this->source); })()), "nextPage", [], "any", false, false, false, 103)]), "html", null, true);
                echo "\" rel=\"next\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
                echo " <i class=\"fa fw fa-arrow-right\"></i></a></li>
                    ";
            } else {
                // line 105
                echo "                        <li class=\"next disabled\"><span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
                echo " <i class=\"fa fw fa-arrow-right\"></i></span></li>
                    ";
            }
            // line 107
            echo "                </ul>
            </div>
        ";
        }
        // line 110
        echo "
    <br/>
    <hr/>
    <hr/>
    <br/>

    <h1>";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.textfields_list"), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> ";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.num_fields", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 121, $this->source); })()), "textfields", [], "any", false, false, false, 121))]), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_textfields_new", ["elementSlug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 125, $this->source); })()), "slug", [], "any", false, false, false, 125)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.position"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 140, $this->source); })()), "textfields", [], "any", false, false, false, 140), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 140, $this->source); })()), "position", [], "any", false, false, false, 140) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 140, $this->source); })()), "position", [], "any", false, false, false, 140)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 141
            echo "            <tr>
                <td>";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 142), "html", null, true);
            echo "</td>
                <td>";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "position", [], "any", false, false, false, 143), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_textfields_show", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 146)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_textfields_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 150)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 151
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
            // line 157
            echo "            <tr>
                <div class='well'>";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "        </tbody>
    </table>

    <hr/>

    <h1>";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.datefields_list"), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> ";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.num_fields", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 171, $this->source); })()), "datefields", [], "any", false, false, false, 171))]), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_datefields_new", ["elementSlug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 175, $this->source); })()), "slug", [], "any", false, false, false, 175)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.position"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 190, $this->source); })()), "datefields", [], "any", false, false, false, 190), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 190, $this->source); })()), "position", [], "any", false, false, false, 190) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 190, $this->source); })()), "position", [], "any", false, false, false, 190)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 191
            echo "            <tr>
                <td>";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 192), "html", null, true);
            echo "</td>
                <td>";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "position", [], "any", false, false, false, 193), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_datefields_show", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 196)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_datefields_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 200)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 201
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
            // line 207
            echo "            <tr>
                <div class='well'>";
            // line 208
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "        </tbody>
    </table>

    <hr/>

    <h1>";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.numberfields_list"), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> ";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.num_fields", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 221, $this->source); })()), "numberfields", [], "any", false, false, false, 221))]), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_numberfields_new", ["elementSlug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 225, $this->source); })()), "slug", [], "any", false, false, false, 225)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.position"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 240, $this->source); })()), "numberfields", [], "any", false, false, false, 240), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 240, $this->source); })()), "position", [], "any", false, false, false, 240) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 240, $this->source); })()), "position", [], "any", false, false, false, 240)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 241
            echo "            <tr>
                <td>";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 242), "html", null, true);
            echo "</td>
                <td>";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "position", [], "any", false, false, false, 243), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_numberfields_show", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 246)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 247
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 250
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_numberfields_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 250)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 251
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
            // line 257
            echo "            <tr>
                <div class='well'>";
            // line 258
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "        </tbody>
    </table>

    <hr/>

    <h1>";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.filefields_list"), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> ";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.num_fields", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 271, $this->source); })()), "filefields", [], "any", false, false, false, 271))]), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_filefields_new", ["elementSlug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 275, $this->source); })()), "slug", [], "any", false, false, false, 275)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.position"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 290
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 290, $this->source); })()), "filefields", [], "any", false, false, false, 290), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 290, $this->source); })()), "position", [], "any", false, false, false, 290) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 290, $this->source); })()), "position", [], "any", false, false, false, 290)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 291
            echo "            <tr>
                <td>";
            // line 292
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 292), "html", null, true);
            echo "</td>
                <td>";
            // line 293
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "position", [], "any", false, false, false, 293), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 296
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_filefields_show", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 296)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 297
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 300
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_filefields_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 300)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 301
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
            // line 307
            echo "            <tr>
                <div class='well'>";
            // line 308
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        echo "        </tbody>
    </table>

    <hr/>

    <h1>";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.subelementfields_list"), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> ";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.num_fields", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 321, $this->source); })()), "subelementfields", [], "any", false, false, false, 321))]), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subelementfields_new", ["elementSlug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 325, $this->source); })()), "slug", [], "any", false, false, false, 325)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.position"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 340, $this->source); })()), "subelementfields", [], "any", false, false, false, 340), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 340, $this->source); })()), "position", [], "any", false, false, false, 340) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 340, $this->source); })()), "position", [], "any", false, false, false, 340)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 341
            echo "            <tr>
                <td>";
            // line 342
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 342), "html", null, true);
            echo "</td>
                <td>";
            // line 343
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "position", [], "any", false, false, false, 343), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 346
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subelementfields_show", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 346)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 347
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 350
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subelementfields_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 350)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 351
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
            // line 357
            echo "            <tr>
                <div class='well'>";
            // line 358
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 366
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 367
        echo "    <div class=\"section\">
        <a href=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_element_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 368, $this->source); })()), "id", [], "any", false, false, false, 368)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
        echo "
        </a>
    </div>

    
    <div class=\"section\">
        ";
        // line 375
        echo twig_include($this->env, $context, "admin/crud/_delete_form.html.twig", ["element" => (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 375, $this->source); })())], false);
        echo "
    </div>
    

    ";
        // line 379
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 381
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
        return array (  947 => 381,  942 => 379,  935 => 375,  926 => 369,  922 => 368,  919 => 367,  909 => 366,  896 => 361,  887 => 358,  884 => 357,  873 => 351,  869 => 350,  863 => 347,  859 => 346,  853 => 343,  849 => 342,  846 => 341,  841 => 340,  834 => 336,  830 => 335,  826 => 334,  815 => 326,  811 => 325,  804 => 321,  796 => 316,  789 => 311,  780 => 308,  777 => 307,  766 => 301,  762 => 300,  756 => 297,  752 => 296,  746 => 293,  742 => 292,  739 => 291,  734 => 290,  727 => 286,  723 => 285,  719 => 284,  708 => 276,  704 => 275,  697 => 271,  689 => 266,  682 => 261,  673 => 258,  670 => 257,  659 => 251,  655 => 250,  649 => 247,  645 => 246,  639 => 243,  635 => 242,  632 => 241,  627 => 240,  620 => 236,  616 => 235,  612 => 234,  601 => 226,  597 => 225,  590 => 221,  582 => 216,  575 => 211,  566 => 208,  563 => 207,  552 => 201,  548 => 200,  542 => 197,  538 => 196,  532 => 193,  528 => 192,  525 => 191,  520 => 190,  513 => 186,  509 => 185,  505 => 184,  494 => 176,  490 => 175,  483 => 171,  475 => 166,  468 => 161,  459 => 158,  456 => 157,  445 => 151,  441 => 150,  435 => 147,  431 => 146,  425 => 143,  421 => 142,  418 => 141,  413 => 140,  406 => 136,  402 => 135,  398 => 134,  387 => 126,  383 => 125,  376 => 121,  368 => 116,  360 => 110,  355 => 107,  349 => 105,  341 => 103,  339 => 102,  336 => 101,  330 => 100,  322 => 98,  314 => 96,  311 => 95,  307 => 94,  304 => 93,  298 => 91,  290 => 89,  288 => 88,  284 => 86,  282 => 85,  278 => 83,  269 => 80,  266 => 79,  247 => 73,  243 => 72,  237 => 69,  233 => 68,  227 => 65,  223 => 64,  220 => 63,  202 => 62,  195 => 58,  191 => 57,  187 => 56,  176 => 48,  167 => 41,  161 => 38,  156 => 36,  152 => 35,  149 => 34,  143 => 32,  141 => 31,  131 => 24,  127 => 23,  121 => 20,  116 => 18,  108 => 15,  101 => 11,  96 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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

    <div id=\"element-add-subelement\" class=\"well\">
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {{ render(controller('App\\\\Controller\\\\Admin\\\\CrudController::subelementForm', {'id': element.id})) }}
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
                <th scope=\"col\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i> {{ 'label.tags'|trans }}</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> {{ 'label.actions'|trans }}</th>
            </tr>
        </thead>
        <tbody>
            {% for subelement in paginator.results %}
                <tr>
                    <td>{{ subelement.title }}</td>
                    <td>{{ include('admin/crud/subelement/_subelement_tags.html.twig') }}</td>
                    <td class=\"text-center\">
                        <div class=\"item-actions\">
                            <a href=\"{{ path('admin_subelement_show', {id: subelement.id}) }}\" class=\"btn btn-sm btn-default\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> {{ 'action.show'|trans }}
                            </a>

                            <a href=\"{{ path('admin_subelement_edit', {id: subelement.id}) }}\" class=\"btn btn-sm btn-primary\">
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
                        <li class=\"prev\"><a href=\"{{ path('admin_element_paginated', {id: element.id, page: paginator.previousPage}) }}\" rel=\"previous\"><i class=\"fa fw fa-long-arrow-left\"></i> {{ 'paginator.previous'|trans }}</a></li>
                    {% else %}
                        <li class=\"prev disabled\"><span><i class=\"fa fw fa-arrow-left\"></i> {{ 'paginator.previous'|trans }}</span></li>
                    {% endif %}

                    {% for i in 1..paginator.lastPage %}
                        {% if i == paginator.currentPage %}
                            <li class=\"active\"><span>{{ i }} <span class=\"sr-only\">{{ 'paginator.current'|trans }}</span></span></li>
                        {% else %}
                            <li><a href=\"{{ path('admin_element_paginated', {id: element.id, page: i}) }}\">{{ i }}</a></li>
                        {% endif %}
                    {% endfor %}

                    {% if paginator.hasNextPage %}
                        <li class=\"next\"><a href=\"{{ path('admin_element_paginated', {id: element.id, page: paginator.nextPage}) }}\" rel=\"next\">{{ 'paginator.next'|trans }} <i class=\"fa fw fa-arrow-right\"></i></a></li>
                    {% else %}
                        <li class=\"next disabled\"><span>{{ 'paginator.next'|trans }} <i class=\"fa fw fa-arrow-right\"></i></span></li>
                    {% endif %}
                </ul>
            </div>
        {% endif %}

    <br/>
    <hr/>
    <hr/>
    <br/>

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

    <hr/>

    <h1>{{ 'title.subelementfields_list'|trans }}</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> {{ 'fields.num_fields'|trans({ 'count': element.subelementfields|length }) }}
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"{{ path('admin_subelementfields_new', {elementSlug: element.slug}) }}\" class=\"btn btn-sm btn-success\">
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
        {% for field in element.subelementfields|sort((a, b) => a.position <=> b.position) %}
            <tr>
                <td>{{ field.title }}</td>
                <td>{{ field.position }}</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"{{ path('admin_subelementfields_show', {id: field.id}) }}\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> {{ 'action.show'|trans }}
                        </a>

                        <a href=\"{{ path('admin_subelementfields_edit', {id: field.id}) }}\" class=\"btn btn-sm btn-primary\">
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
