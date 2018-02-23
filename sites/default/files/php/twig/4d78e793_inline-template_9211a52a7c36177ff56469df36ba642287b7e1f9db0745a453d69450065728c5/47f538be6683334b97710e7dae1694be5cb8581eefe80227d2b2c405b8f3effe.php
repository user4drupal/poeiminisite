<?php

/* {# inline_template_start #}{{ field_offre_photos }}
{{ title }} */
class __TwigTemplate_d07b8c0c7740c5e9d43a1caff14485434ec5c5df6624c4062e2704b0dc772d1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c42e9df2f09d68096c7cd7e7aca37dcb0c61dbbc439c674085ef68f827d18be9 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42e9df2f09d68096c7cd7e7aca37dcb0c61dbbc439c674085ef68f827d18be9->enter($__internal_c42e9df2f09d68096c7cd7e7aca37dcb0c61dbbc439c674085ef68f827d18be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}{{ field_offre_photos }}
{{ title }}"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["field_offre_photos"] ?? null), "html", null, true));
        echo "
";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        
        $__internal_c42e9df2f09d68096c7cd7e7aca37dcb0c61dbbc439c674085ef68f827d18be9->leave($__internal_c42e9df2f09d68096c7cd7e7aca37dcb0c61dbbc439c674085ef68f827d18be9_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ field_offre_photos }}
{{ title }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}{{ field_offre_photos }}
{{ title }}", "{# inline_template_start #}{{ field_offre_photos }}
{{ title }}", "");
    }
}
