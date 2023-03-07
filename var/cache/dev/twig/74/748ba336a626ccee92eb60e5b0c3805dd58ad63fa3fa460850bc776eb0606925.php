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

/* admin/fields/subelementfields_show.html.twig */
class __TwigTemplate_3ddb2f48a584f6865c0d04c6c5014b8c78c75923bd7a7436772232d18d1de997 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fields/subelementfields_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fields/subelementfields_show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/fields/subelementfields_show.html.twig", 1);
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

        echo "admin_subelementfields_show";
        
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subelementfields"]) || array_key_exists("subelementfields", $context) ? $context["subelementfields"] : (function () { throw new RuntimeError('Variable "subelementfields" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.position"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subelementfields"]) || array_key_exists("subelementfields", $context) ? $context["subelementfields"] : (function () { throw new RuntimeError('Variable "subelementfields" does not exist.', 7, $this->source); })()), "position", [], "any", false, false, false, 7), "html", null, true);
        echo "</h3>

    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_element_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["subelementfields"]) || array_key_exists("subelementfields", $context) ? $context["subelementfields"] : (function () { throw new RuntimeError('Variable "subelementfields" does not exist.', 9, $this->source); })()), "element", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\" class=\"btn btn-link\">
        <i class=\"fa fa-database\" aria-hidden=\"true\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
        echo "
    </a>
    
    <br/>
    <hr/>
    <br/>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i> ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.tags"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.subelement"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.content"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["childrenSubelementFields"]) || array_key_exists("childrenSubelementFields", $context) ? $context["childrenSubelementFields"] : (function () { throw new RuntimeError('Variable "childrenSubelementFields" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["childFields"]) {
            // line 27
            echo "                <tr>
                    <td>
                        ";
            // line 29
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childFields"], "subelement", [], "any", false, false, false, 29), "tags", [], "any", false, false, false, 29), "empty", [], "any", false, false, false, 29)) {
                // line 30
                echo "                            <p class=\"subelement-tags\">
                                ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childFields"], "subelement", [], "any", false, false, false, 31), "tags", [], "any", false, false, false, 31));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 32
                    echo "                                    <br/>
                                    <i class=\"fa fa-tag\"></i> ";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 33), "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "                            </p>
                        ";
            }
            // line 37
            echo "                    </td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childFields"], "subelement", [], "any", false, false, false, 38), "title", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 40
            if ((null === twig_get_attribute($this->env, $this->source, $context["childFields"], "content", [], "any", false, false, false, 40))) {
                // line 41
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childFields"], "content", [], "any", false, false, false, 41), "html", null, true);
                echo "
                        ";
            } else {
                // line 43
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childFields"], "content", [], "any", false, false, false, 43), "title", [], "any", false, false, false, 43), "html", null, true);
                echo "
                        ";
            }
            // line 45
            echo "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "                <tr>
                    <td colspan=\"4\" align=\"center\">";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("fields.no_fields"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 58
        echo "    <div class=\"section\">
        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subelementfields_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["subelementfields"]) || array_key_exists("subelementfields", $context) ? $context["subelementfields"] : (function () { throw new RuntimeError('Variable "subelementfields" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
        echo "
        </a>
    </div>

    
    <div class=\"section\">
        ";
        // line 66
        echo twig_include($this->env, $context, "admin/fields/_subelementfields_delete_form.html.twig", ["subelementfields" => (isset($context["subelementfields"]) || array_key_exists("subelementfields", $context) ? $context["subelementfields"] : (function () { throw new RuntimeError('Variable "subelementfields" does not exist.', 66, $this->source); })())], false);
        echo "
    </div>
    

    ";
        // line 70
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 72
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/fields/subelementfields_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 72,  253 => 70,  246 => 66,  237 => 60,  233 => 59,  230 => 58,  220 => 57,  207 => 52,  198 => 49,  195 => 48,  188 => 45,  182 => 43,  176 => 41,  174 => 40,  169 => 38,  166 => 37,  162 => 35,  154 => 33,  151 => 32,  147 => 31,  144 => 30,  142 => 29,  138 => 27,  133 => 26,  126 => 22,  122 => 21,  118 => 20,  105 => 10,  101 => 9,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block body_id 'admin_subelementfields_show' %}

{% block main %}
    <h1>{{ subelementfields.title }}</h1>
    <h3>{{ 'label.position'|trans }} : {{ subelementfields.position }}</h3>

    <a href=\"{{ path('admin_element_show', {id: subelementfields.element.id}) }}\" class=\"btn btn-link\">
        <i class=\"fa fa-database\" aria-hidden=\"true\"></i> {{ 'action.back'|trans }}
    </a>
    
    <br/>
    <hr/>
    <br/>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i> {{ 'label.tags'|trans }}</th>
                <th scope=\"col\">{{ 'label.subelement'|trans }}</th>
                <th scope=\"col\">{{ 'label.content'|trans }}</th>
            </tr>
        </thead>
        <tbody>
            {% for childFields in childrenSubelementFields %}
                <tr>
                    <td>
                        {% if not childFields.subelement.tags.empty %}
                            <p class=\"subelement-tags\">
                                {% for tag in childFields.subelement.tags %}
                                    <br/>
                                    <i class=\"fa fa-tag\"></i> {{ tag.name }}
                                {% endfor %}
                            </p>
                        {% endif %}
                    </td>
                    <td>{{ childFields.subelement.title }}</td>
                    <td>
                        {% if childFields.content is null %}
                            {{ childFields.content }}
                        {% else %}
                            {{ childFields.content.title }}
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
        <a href=\"{{ path('admin_subelementfields_edit', {id: subelementfields.id}) }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
        </a>
    </div>

    
    <div class=\"section\">
        {{ include('admin/fields/_subelementfields_delete_form.html.twig', {subelementfields: subelementfields}, with_context = false) }}
    </div>
    

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/fields/subelementfields_show.html.twig", "C:\\Users\\corbin-a-2\\Downloads\\symfony\\symfony_crud\\templates\\admin\\fields\\subelementfields_show.html.twig");
    }
}