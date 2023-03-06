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

/* admin/user/_user_form.html.twig */
class __TwigTemplate_853d163bad93e2283b8f66ba2921af6a91d65f7f59d1dd0ddefa80e6080db640 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/_user_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/_user_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ((((isset($context["show_confirmation"]) || array_key_exists("show_confirmation", $context))) ? (_twig_default_filter((isset($context["show_confirmation"]) || array_key_exists("show_confirmation", $context) ? $context["show_confirmation"] : (function () { throw new RuntimeError('Variable "show_confirmation" does not exist.', 2, $this->source); })()), false)) : (false))) {
            // line 3
            echo "    ";
            $context["attr"] = ["data-confirmation" => "true"];
            // line 4
            echo "    ";
            echo twig_include($this->env, $context, "crud/_delete_user_confirmation.html.twig");
            echo "
";
        }
        // line 6
        echo "
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => (((isset($context["attr"]) || array_key_exists("attr", $context))) ? (_twig_default_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 7, $this->source); })()), [])) : ([]))]);
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'widget');
        echo "

    <button type=\"submit\" class=\"";
        // line 10
        echo twig_escape_filter($this->env, (((isset($context["button_css"]) || array_key_exists("button_css", $context))) ? (_twig_default_filter((isset($context["button_css"]) || array_key_exists("button_css", $context) ? $context["button_css"] : (function () { throw new RuntimeError('Variable "button_css" does not exist.', 10, $this->source); })()), "btn btn-primary")) : ("btn btn-primary")), "html", null, true);
        echo "\">
        <i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 11, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.create_user"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.create_user"))), "html", null, true);
        echo "
    </button>

    ";
        // line 14
        if ((((isset($context["include_back_to_home_link"]) || array_key_exists("include_back_to_home_link", $context))) ? (_twig_default_filter((isset($context["include_back_to_home_link"]) || array_key_exists("include_back_to_home_link", $context) ? $context["include_back_to_home_link"] : (function () { throw new RuntimeError('Variable "include_back_to_home_link" does not exist.', 14, $this->source); })()), false)) : (false))) {
            // line 15
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
            echo "\" class=\"btn btn-link\">
            <i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/_user_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  86 => 16,  81 => 15,  79 => 14,  73 => 11,  69 => 10,  64 => 8,  60 => 7,  57 => 6,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if show_confirmation|default(false) %}
    {% set attr = {'data-confirmation': 'true'} %}
    {{ include('crud/_delete_user_confirmation.html.twig') }}
{% endif %}

{{ form_start(form, {attr: attr|default({})}) }}
    {{ form_widget(form) }}

    <button type=\"submit\" class=\"{{ button_css|default(\"btn btn-primary\") }}\">
        <i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ button_label|default('label.create_user'|trans) }}
    </button>

    {% if include_back_to_home_link|default(false) %}
        <a href=\"{{ path('admin_user_index') }}\" class=\"btn btn-link\">
            <i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'action.back'|trans }}
        </a>
    {% endif %}
{{ form_end(form) }}
", "admin/user/_user_form.html.twig", "C:\\Users\\corbin-a-2\\Downloads\\symfony\\symfony_crud\\templates\\admin\\user\\_user_form.html.twig");
    }
}
