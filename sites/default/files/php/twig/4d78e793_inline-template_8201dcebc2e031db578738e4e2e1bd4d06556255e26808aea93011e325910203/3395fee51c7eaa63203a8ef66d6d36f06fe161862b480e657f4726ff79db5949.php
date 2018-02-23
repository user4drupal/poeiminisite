<?php

/* {# inline_template_start #}{{ path }} */
class __TwigTemplate_656737aef2dc48f5e33017a542689883c86cd56dc82ae9ad368ae9562676da61 extends Twig_Template
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
        $__internal_26c8c51dfbfc52228581e21c15a10a7b0b404276fb9ff42c085449b96936bd1d = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c8c51dfbfc52228581e21c15a10a7b0b404276fb9ff42c085449b96936bd1d->enter($__internal_26c8c51dfbfc52228581e21c15a10a7b0b404276fb9ff42c085449b96936bd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}{{ path }}"));

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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        
        $__internal_26c8c51dfbfc52228581e21c15a10a7b0b404276fb9ff42c085449b96936bd1d->leave($__internal_26c8c51dfbfc52228581e21c15a10a7b0b404276fb9ff42c085449b96936bd1d_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ path }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}{{ path }}", "{# inline_template_start #}{{ path }}", "");
    }
}
