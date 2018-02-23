<?php

/* modules/contrib/addtoany/templates/addtoany-standard.html.twig */
class __TwigTemplate_6d9c3a293f494c61bfd2e1198329a45e9fd5cb08150ae79d98d4e8e39dfde00f extends Twig_Template
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
        $__internal_1e92435a19295364d2e99b25bcebe8145f014e13ed88ab0b4ca8763a6dc74fcb = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e92435a19295364d2e99b25bcebe8145f014e13ed88ab0b4ca8763a6dc74fcb->enter($__internal_1e92435a19295364d2e99b25bcebe8145f014e13ed88ab0b4ca8763a6dc74fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/addtoany/templates/addtoany-standard.html.twig"));

        $tags = array();
        $filters = array("raw" => 12);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('raw'),
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

        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->renderVar(($context["addtoany_html"] ?? null)));
        echo "
";
        
        $__internal_1e92435a19295364d2e99b25bcebe8145f014e13ed88ab0b4ca8763a6dc74fcb->leave($__internal_1e92435a19295364d2e99b25bcebe8145f014e13ed88ab0b4ca8763a6dc74fcb_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/addtoany/templates/addtoany-standard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to standard AddToAny buttons.
 *
 * Available variables:
 * - addtoany_html: HTML for AddToAny buttons.
 *
 * @ingroup themeable
 */
#}
{{ addtoany_html|raw }}
", "modules/contrib/addtoany/templates/addtoany-standard.html.twig", "/var/www/html/poeiminisite/modules/contrib/addtoany/templates/addtoany-standard.html.twig");
    }
}
