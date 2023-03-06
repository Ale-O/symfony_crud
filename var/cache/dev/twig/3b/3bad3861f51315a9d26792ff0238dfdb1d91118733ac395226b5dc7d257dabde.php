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

/* admin/crud/subelement/subelement_edit_fields.html.twig */
class __TwigTemplate_8b1fdd59e2426e2c5d195a3f236e167830b352d20833c156a1c42529c47f2947 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/crud/subelement/subelement_edit_fields.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/crud/subelement/subelement_edit_fields.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/crud/subelement/subelement_edit_fields.html.twig", 1);
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

        echo "admin_edit_fields";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    <script>
        document.addEventListener(\"DOMContentLoaded\", function(event) {
            if(document.getElementById(\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["anchor"]) || array_key_exists("anchor", $context) ? $context["anchor"] : (function () { throw new RuntimeError('Variable "anchor" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\")){
                location.href = \"#";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["anchor"]) || array_key_exists("anchor", $context) ? $context["anchor"] : (function () { throw new RuntimeError('Variable "anchor" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\"
                document.getElementById(\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["anchor"]) || array_key_exists("anchor", $context) ? $context["anchor"] : (function () { throw new RuntimeError('Variable "anchor" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\").style.color = \"green\";
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 17
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
    <p class=\"element-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar-o\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 19, $this->source); })()), "publishedAt", [], "any", false, false, false, 19), "long", "medium", "", "UTC"), "html", null, true);
        echo "</span>
        <br/>
        <span class=\"metadata\"><i class=\"fa fa-user-circle-o\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 21, $this->source); })()), "author", [], "any", false, false, false, 21), "fullName", [], "any", false, false, false, 21), "html", null, true);
        echo "</span>
    </p>
    ";
        // line 23
        echo $this->extensions['HtmlSanitizer\Bundle\Twig\TwigExtension']->sanitize($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 23, $this->source); })()), "content", [], "any", false, false, false, 23)));
        echo "

    <div>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_element_show", ["id" => (isset($context["idElement"]) || array_key_exists("idElement", $context) ? $context["idElement"] : (function () { throw new RuntimeError('Variable "idElement" does not exist.', 26, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-link\">
            <i class=\"fa fa-backward\" aria-hidden=\"true\"></i> ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
        echo "
        </a>
    </div>


    <hr/>

    <h1>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.fields_list"), "html", null, true);
        echo "</h1>

    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 36, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 36, $this->source); })()), "position", [], "any", false, false, false, 36) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 36, $this->source); })()), "position", [], "any", false, false, false, 36)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 37
            echo "        <div>
            <h3>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 38), "html", null, true);
            echo "</h3>
            <p>
                ";
            // line 40
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 41
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 41) === "text")) {
                    // line 42
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\FieldsController::textFieldsForm", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 42)]));
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 43
$context["field"], "type", [], "any", false, false, false, 43) === "date")) {
                    // line 44
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\FieldsController::dateFieldsForm", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 44)]));
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 45
$context["field"], "type", [], "any", false, false, false, 45) === "number")) {
                    // line 46
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\FieldsController::numberFieldsForm", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 46)]));
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 47
$context["field"], "type", [], "any", false, false, false, 47) === "file")) {
                    // line 48
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\FieldsController::fileFieldsForm", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 48)]));
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 49
$context["field"], "type", [], "any", false, false, false, 49) === "subelement")) {
                    // line 50
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\FieldsController::subelementFieldsForm", ["id" => twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 50)]));
                    echo "
                    ";
                } else {
                    // line 52
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 52), "html", null, true);
                    echo "
                    ";
                }
                // line 54
                echo "                ";
            } else {
                // line 55
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 55) === "text")) {
                    // line 56
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 56), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 57
$context["field"], "type", [], "any", false, false, false, 57) === "date")) {
                    // line 58
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 58), "long", "medium", "", "UTC"), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 59
$context["field"], "type", [], "any", false, false, false, 59) === "number")) {
                    // line 60
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 60)), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 61
$context["field"], "type", [], "any", false, false, false, 61) === "file")) {
                    // line 62
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 62), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 63
$context["field"], "type", [], "any", false, false, false, 63) === "subelement")) {
                    // line 64
                    echo "                        ";
                    if ((null === twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 64))) {
                        // line 65
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 65), "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 67
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 67), "title", [], "any", false, false, false, 67), "html", null, true);
                        echo "
                        ";
                    }
                    // line 69
                    echo "                    ";
                } else {
                    // line 70
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, false, 70), "html", null, true);
                    echo "
                    ";
                }
                // line 72
                echo "                ";
            }
            // line 73
            echo "            </p>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 76
            echo "        <div class='well'>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 88
        echo "
    <div class=\"section\">
        <a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subelement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
        echo "
        </a>
    </div>

    <div class=\"section\">
        <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subelement_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.lock_fields"), "html", null, true);
        echo "
        </a>
    </div>
    
    <div class=\"section\">
        ";
        // line 102
        echo twig_include($this->env, $context, "admin/crud/subelement/_subelement_delete_form.html.twig", ["subelement" => (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 102, $this->source); })())], false);
        echo "
    </div>

    ";
        // line 105
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 107
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/crud/subelement/subelement_edit_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 107,  361 => 105,  355 => 102,  347 => 97,  343 => 96,  335 => 91,  331 => 90,  327 => 88,  317 => 87,  303 => 78,  294 => 76,  287 => 73,  284 => 72,  278 => 70,  275 => 69,  269 => 67,  263 => 65,  260 => 64,  258 => 63,  253 => 62,  251 => 61,  246 => 60,  244 => 59,  239 => 58,  237 => 57,  232 => 56,  229 => 55,  226 => 54,  220 => 52,  214 => 50,  212 => 49,  207 => 48,  205 => 47,  200 => 46,  198 => 45,  193 => 44,  191 => 43,  186 => 42,  183 => 41,  181 => 40,  176 => 38,  173 => 37,  168 => 36,  163 => 34,  153 => 27,  149 => 26,  143 => 23,  138 => 21,  133 => 19,  127 => 17,  117 => 16,  102 => 10,  98 => 9,  94 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block body_id 'admin_edit_fields' %}

{% block javascripts %}
    <script>
        document.addEventListener(\"DOMContentLoaded\", function(event) {
            if(document.getElementById(\"{{ anchor }}\")){
                location.href = \"#{{ anchor }}\"
                document.getElementById(\"{{ anchor }}\").style.color = \"green\";
            }
        });
    </script>
{% endblock %}

{% block main %}
    <h1>{{ subelement.title }}</h1>
    <p class=\"element-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar-o\"></i> {{ subelement.publishedAt|format_datetime('long', 'medium', '', 'UTC') }}</span>
        <br/>
        <span class=\"metadata\"><i class=\"fa fa-user-circle-o\"></i> {{ subelement.author.fullName }}</span>
    </p>
    {{ subelement.content|markdown_to_html|sanitize_html }}

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
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {% if field.type is same as('text') %}
                        {{ render(controller('App\\\\Controller\\\\FieldsController::textFieldsForm', {'id': field.id})) }}
                    {% elseif field.type is same as('date') %}
                        {{ render(controller('App\\\\Controller\\\\FieldsController::dateFieldsForm', {'id': field.id})) }}
                    {% elseif field.type is same as('number') %}
                        {{ render(controller('App\\\\Controller\\\\FieldsController::numberFieldsForm', {'id': field.id})) }}
                    {% elseif field.type is same as('file') %}
                        {{ render(controller('App\\\\Controller\\\\FieldsController::fileFieldsForm', {'id': field.id})) }}
                    {% elseif field.type is same as('subelement') %}
                        {{ render(controller('App\\\\Controller\\\\FieldsController::subelementFieldsForm', {'id': field.id})) }}
                    {% else %}
                        {{ field.content }}
                    {% endif %}
                {% else %}
                    {% if field.type is same as('text') %}
                        {{ field.content }}
                    {% elseif field.type is same as('date') %}
                        {{ field.content|format_datetime('long', 'medium', '', 'UTC') }}
                    {% elseif field.type is same as('number') %}
                        {{ field.content|number_format }}
                    {% elseif field.type is same as('file') %}
                        {{ field.content }}
                    {% elseif field.type is same as('subelement') %}
                        {% if field.content is null %}
                            {{ field.content }}
                        {% else %}
                            {{ field.content.title }}
                        {% endif %}
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
        <a href=\"{{ path('admin_subelement_edit', {id: subelement.id}) }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
        </a>
    </div>

    <div class=\"section\">
        <a href=\"{{ path('admin_subelement_show', {id: subelement.id}) }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'action.lock_fields'|trans }}
        </a>
    </div>
    
    <div class=\"section\">
        {{ include('admin/crud/subelement/_subelement_delete_form.html.twig', {subelement: subelement}, with_context = false) }}
    </div>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/crud/subelement/subelement_edit_fields.html.twig", "C:\\Users\\corbin-a-2\\Downloads\\symfony\\symfony_crud\\templates\\admin\\crud\\subelement\\subelement_edit_fields.html.twig");
    }
}
