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

/* admin/crud/_delete_form.html.twig */
class __TwigTemplate_9f8244316de1ecbca3ab2d5d355b83f2c248faea4a197b8d03e2678929e0f685 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/crud/_delete_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/crud/_delete_form.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "crud/_delete_element_confirmation.html.twig");
        echo "
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_element_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\" method=\"post\" data-confirmation=\"true\" id=\"delete-form\">
    <input type=\"hidden\" name=\"token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
        echo "\" />
    <button type=\"submit\" class=\"btn btn-lg btn-block btn-danger\">
        <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete_element"), "html", null, true);
        echo "
    </button>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/crud/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('crud/_delete_element_confirmation.html.twig') }}
<form action=\"{{ url('admin_element_delete', {id: element.id}) }}\" method=\"post\" data-confirmation=\"true\" id=\"delete-form\">
    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete') }}\" />
    <button type=\"submit\" class=\"btn btn-lg btn-block btn-danger\">
        <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
        {{ 'action.delete_element'|trans }}
    </button>
</form>
", "admin/crud/_delete_form.html.twig", "C:\\Users\\corbin-a-2\\Downloads\\symfony\\symfony_crud\\templates\\admin\\crud\\_delete_form.html.twig");
    }
}
