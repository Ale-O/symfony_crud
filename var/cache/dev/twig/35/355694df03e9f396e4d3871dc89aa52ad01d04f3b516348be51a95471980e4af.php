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

/* crud/fields/_numberfields_form.html.twig */
class __TwigTemplate_5fbf12f3652bec51b9213c9c9a45bd7bbe255b69c805a70970e03953686100f4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/fields/_numberfields_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/fields/_numberfields_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["id" => "signaletique", "method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("numberfields_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["numberfields"]) || array_key_exists("numberfields", $context) ? $context["numberfields"] : (function () { throw new RuntimeError('Variable "numberfields" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)])]);
        echo "
    <fieldset id=";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["numberfields"]) || array_key_exists("numberfields", $context) ? $context["numberfields"] : (function () { throw new RuntimeError('Variable "numberfields" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        echo ">

        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'errors');
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "content", [], "any", false, false, false, 5), 'row', ["attr" => ["onblur" => "this.form.submit()"]]);
        echo "

    </fieldset>
    <br>
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "crud/fields/_numberfields_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  56 => 5,  52 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {id:\"signaletique\", method: 'POST', action: path('numberfields_edit', {'id': numberfields.id})}) }}
    <fieldset id={{ numberfields.id }}>

        {{ form_errors(form) }}
        {{ form_row(form.content, {'attr': {'onblur': 'this.form.submit()'} }) }}

    </fieldset>
    <br>
{{ form_end(form) }}
", "crud/fields/_numberfields_form.html.twig", "C:\\Users\\corbin-a-2\\Downloads\\symfony\\symfony_crud\\templates\\crud\\fields\\_numberfields_form.html.twig");
    }
}
