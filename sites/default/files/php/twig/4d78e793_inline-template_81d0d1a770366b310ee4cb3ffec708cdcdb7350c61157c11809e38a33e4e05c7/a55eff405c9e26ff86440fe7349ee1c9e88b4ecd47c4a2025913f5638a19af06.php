<?php

/* {# inline_template_start #}{{ items|safe_join(separator) }} */
class __TwigTemplate_1afbafa2490e98e0e01e17dc662571d9045fd3ec4a809f7225a2cbc3e44fd56c extends Twig_Template
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
        $__internal_2247103be274e4e5ddb2d2fbe4dc8326aed4b3a045c0c2081acecbcbf6572cb1 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_2247103be274e4e5ddb2d2fbe4dc8326aed4b3a045c0c2081acecbcbf6572cb1->enter($__internal_2247103be274e4e5ddb2d2fbe4dc8326aed4b3a045c0c2081acecbcbf6572cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}{{ items|safe_join(separator) }}"));

        $tags = array();
        $filters = array("safe_join" => 1);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('safe_join'),
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->renderVar($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->safeJoin($this->env, ($context["items"] ?? null), ($context["separator"] ?? null))));
        
        $__internal_2247103be274e4e5ddb2d2fbe4dc8326aed4b3a045c0c2081acecbcbf6572cb1->leave($__internal_2247103be274e4e5ddb2d2fbe4dc8326aed4b3a045c0c2081acecbcbf6572cb1_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ items|safe_join(separator) }}";
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
        return new Twig_Source("{# inline_template_start #}{{ items|safe_join(separator) }}", "{# inline_template_start #}{{ items|safe_join(separator) }}", "");
    }
}
