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
class __TwigTemplate_f635ccf48218d42cf05f696025600602c2c5a14d8c4df0901fa019ae5eee2820 extends Template
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
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 140, $this->source); })()), "textfields", [], "any", false, false, false, 140), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 140, $this->source); })()), "position", [], "any", false, false, false, 140) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 140, $this->source); })()), "position", [], "any", false, false, false, 140)); }));
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

    <br/>
    <hr/>
    <br/>

    <h1>";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.datefields_list"), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> ";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.num_fields", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 173, $this->source); })()), "datefields", [], "any", false, false, false, 173))]), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_datefields_new", ["elementSlug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 177, $this->source); })()), "slug", [], "any", false, false, false, 177)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.position"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 192, $this->source); })()), "datefields", [], "any", false, false, false, 192), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 192, $this->source); })()), "position", [], "any", false, false, false, 192) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 192, $this->source); })()), "position", [], "any", false, false, false, 192)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 193
            echo "            <tr>
                <td>";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 194), "html", null, true);
            echo "</td>
                <td>";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "position", [], "any", false, false, false, 195), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_datefields_show", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 198)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_datefields_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 202)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 203
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
            // line 209
            echo "            <tr>
                <div class='well'>";
            // line 210
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "        </tbody>
    </table>

    <br/>
    <hr/>
    <br/>

    <h1>";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.numberfields_list"), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> ";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.num_fields", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 225, $this->source); })()), "numberfields", [], "any", false, false, false, 225))]), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_numberfields_new", ["elementSlug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 229, $this->source); })()), "slug", [], "any", false, false, false, 229)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.position"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 244, $this->source); })()), "numberfields", [], "any", false, false, false, 244), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 244, $this->source); })()), "position", [], "any", false, false, false, 244) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 244, $this->source); })()), "position", [], "any", false, false, false, 244)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 245
            echo "            <tr>
                <td>";
            // line 246
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 246), "html", null, true);
            echo "</td>
                <td>";
            // line 247
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "position", [], "any", false, false, false, 247), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 250
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_numberfields_show", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 250)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 251
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_numberfields_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 254)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 255
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
            // line 261
            echo "            <tr>
                <div class='well'>";
            // line 262
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "        </tbody>
    </table>

    <br/>
    <hr/>
    <br/>

    <h1>";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.filefields_list"), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> ";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.num_fields", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 277, $this->source); })()), "filefields", [], "any", false, false, false, 277))]), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_filefields_new", ["elementSlug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 281, $this->source); })()), "slug", [], "any", false, false, false, 281)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.position"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 296, $this->source); })()), "filefields", [], "any", false, false, false, 296), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 296, $this->source); })()), "position", [], "any", false, false, false, 296) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 296, $this->source); })()), "position", [], "any", false, false, false, 296)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 297
            echo "            <tr>
                <td>";
            // line 298
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 298), "html", null, true);
            echo "</td>
                <td>";
            // line 299
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "position", [], "any", false, false, false, 299), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 302
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_filefields_show", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 302)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 303
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 306
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_filefields_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 306)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 307
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
            // line 313
            echo "            <tr>
                <div class='well'>";
            // line 314
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        echo "        </tbody>
    </table>

    <br/>
    <hr/>
    <br/>

    <h1>";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.subelementfields_list"), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-2\">
            <h3>
                <i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i> ";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.num_fields", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 329, $this->source); })()), "subelementfields", [], "any", false, false, false, 329))]), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"col-md-4 col-md-offset-2\">
            <a href=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subelementfields_new", ["elementSlug" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 333, $this->source); })()), "slug", [], "any", false, false, false, 333)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.position"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 348, $this->source); })()), "subelementfields", [], "any", false, false, false, 348), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 348, $this->source); })()), "position", [], "any", false, false, false, 348) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 348, $this->source); })()), "position", [], "any", false, false, false, 348)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 349
            echo "            <tr>
                <td>";
            // line 350
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 350), "html", null, true);
            echo "</td>
                <td>";
            // line 351
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "position", [], "any", false, false, false, 351), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 354
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subelementfields_show", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 354)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 355
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 358
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subelementfields_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 358)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
            // line 359
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
            // line 365
            echo "            <tr>
                <div class='well'>";
            // line 366
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 369
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 374
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 375
        echo "    <div class=\"section\">
        <a href=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_element_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 376, $this->source); })()), "id", [], "any", false, false, false, 376)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
        echo "
        </a>
    </div>

    
    <div class=\"section\">
        ";
        // line 383
        echo twig_include($this->env, $context, "admin/crud/_delete_form.html.twig", ["element" => (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 383, $this->source); })())], false);
        echo "
    </div>
    

    ";
        // line 387
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 389
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
        return array (  955 => 389,  950 => 387,  943 => 383,  934 => 377,  930 => 376,  927 => 375,  917 => 374,  904 => 369,  895 => 366,  892 => 365,  881 => 359,  877 => 358,  871 => 355,  867 => 354,  861 => 351,  857 => 350,  854 => 349,  849 => 348,  842 => 344,  838 => 343,  834 => 342,  823 => 334,  819 => 333,  812 => 329,  804 => 324,  795 => 317,  786 => 314,  783 => 313,  772 => 307,  768 => 306,  762 => 303,  758 => 302,  752 => 299,  748 => 298,  745 => 297,  740 => 296,  733 => 292,  729 => 291,  725 => 290,  714 => 282,  710 => 281,  703 => 277,  695 => 272,  686 => 265,  677 => 262,  674 => 261,  663 => 255,  659 => 254,  653 => 251,  649 => 250,  643 => 247,  639 => 246,  636 => 245,  631 => 244,  624 => 240,  620 => 239,  616 => 238,  605 => 230,  601 => 229,  594 => 225,  586 => 220,  577 => 213,  568 => 210,  565 => 209,  554 => 203,  550 => 202,  544 => 199,  540 => 198,  534 => 195,  530 => 194,  527 => 193,  522 => 192,  515 => 188,  511 => 187,  507 => 186,  496 => 178,  492 => 177,  485 => 173,  477 => 168,  468 => 161,  459 => 158,  456 => 157,  445 => 151,  441 => 150,  435 => 147,  431 => 146,  425 => 143,  421 => 142,  418 => 141,  413 => 140,  406 => 136,  402 => 135,  398 => 134,  387 => 126,  383 => 125,  376 => 121,  368 => 116,  360 => 110,  355 => 107,  349 => 105,  341 => 103,  339 => 102,  336 => 101,  330 => 100,  322 => 98,  314 => 96,  311 => 95,  307 => 94,  304 => 93,  298 => 91,  290 => 89,  288 => 88,  284 => 86,  282 => 85,  278 => 83,  269 => 80,  266 => 79,  247 => 73,  243 => 72,  237 => 69,  233 => 68,  227 => 65,  223 => 64,  220 => 63,  202 => 62,  195 => 58,  191 => 57,  187 => 56,  176 => 48,  167 => 41,  161 => 38,  156 => 36,  152 => 35,  149 => 34,  143 => 32,  141 => 31,  131 => 24,  127 => 23,  121 => 20,  116 => 18,  108 => 15,  101 => 11,  96 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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

    <br/>
    <hr/>
    <br/>

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

    <br/>
    <hr/>
    <br/>

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

    <br/>
    <hr/>
    <br/>

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

    <br/>
    <hr/>
    <br/>

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
