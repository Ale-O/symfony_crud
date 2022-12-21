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

/* crud/fields/_datefields_form.html.twig */
class __TwigTemplate_b87e66a52a3a11d3eb6f8aa57bdf413ae06d426c8b24f6130bf6fe9af7007fcf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/fields/_datefields_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/fields/_datefields_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("datefields_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["datefields"]) || array_key_exists("datefields", $context) ? $context["datefields"] : (function () { throw new RuntimeError('Variable "datefields" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)])]);
        echo "
    <fieldset>

        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'errors');
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "content", [], "any", false, false, false, 5), 'row', ["attr" => ["value" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["datefields"]) || array_key_exists("datefields", $context) ? $context["datefields"] : (function () { throw new RuntimeError('Variable "datefields" does not exist.', 5, $this->source); })()), "content", [], "any", false, false, false, 5), "Y-m-d\\TH:i:s")]]);
        echo "

        <div class=\"form-group\">
            <button class=\"btn btn-primary pull-right\" type=\"submit\">
                <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
        echo "
            </button>
        </div>
    </fieldset>
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "crud/fields/_datefields_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  60 => 9,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {method: 'POST', action: path('datefields_edit', {'id': datefields.id})}) }}
    <fieldset>

        {{ form_errors(form) }}
        {{ form_row(form.content, {attr: { value : datefields.content|date(\"Y-m-d\\\\TH:i:s\") }}) }}

        <div class=\"form-group\">
            <button class=\"btn btn-primary pull-right\" type=\"submit\">
                <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
            </button>
        </div>
    </fieldset>
{{ form_end(form) }}
", "crud/fields/_datefields_form.html.twig", "C:\\Users\\corbin-a-2\\Downloads\\symfony\\symfony_crud\\templates\\crud\\fields\\_datefields_form.html.twig");
    }
}
