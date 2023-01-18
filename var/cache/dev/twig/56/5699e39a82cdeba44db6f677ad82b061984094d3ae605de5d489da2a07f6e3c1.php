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

/* crud/subelement/_subelement_delete_form.html.twig */
class __TwigTemplate_26e8bc458ecdc4e9f5347b9fe7d0bd3de0b7650efaed4d4c666040f2ae8c1050 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/subelement/_subelement_delete_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/subelement/_subelement_delete_form.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "crud/subelement/_subelement_delete_confirmation.html.twig");
        echo "

    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["subelement"] ?? null), "selectInSubelementFields", [], "any", false, true, false, 3), 0, [], "array", true, true, false, 3)) {
            // line 4
            echo "
            <button type=\"submit\" class=\"btn btn-lg btn-block btn-secondary\">
                <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.undeletable"), "html", null, true);
            echo "
            </button>

    ";
        } else {
            // line 11
            echo "
            <form action=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("subelement_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["subelement"]) || array_key_exists("subelement", $context) ? $context["subelement"] : (function () { throw new RuntimeError('Variable "subelement" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\" method=\"post\" data-confirmation=\"true\" id=\"delete-form\">
                <input type=\"hidden\" name=\"token\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
            echo "\" />
                <button type=\"submit\" class=\"btn btn-lg btn-block btn-danger\">
                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete"), "html", null, true);
            echo "
                </button>
            </form>

    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "crud/subelement/_subelement_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  69 => 13,  65 => 12,  62 => 11,  55 => 7,  50 => 4,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('crud/subelement/_subelement_delete_confirmation.html.twig') }}

    {% if subelement.selectInSubelementFields[0] is defined %}

            <button type=\"submit\" class=\"btn btn-lg btn-block btn-secondary\">
                <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                {{ 'action.undeletable'|trans }}
            </button>

    {% else %}

            <form action=\"{{ url('subelement_delete', {id: subelement.id}) }}\" method=\"post\" data-confirmation=\"true\" id=\"delete-form\">
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete') }}\" />
                <button type=\"submit\" class=\"btn btn-lg btn-block btn-danger\">
                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                    {{ 'action.delete'|trans }}
                </button>
            </form>

    {% endif %}
", "crud/subelement/_subelement_delete_form.html.twig", "C:\\Users\\corbin-a-2\\Downloads\\symfony\\symfony_crud\\templates\\crud\\subelement\\_subelement_delete_form.html.twig");
    }
}
