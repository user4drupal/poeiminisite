<?php

/* core/themes/stable/templates/admin/views-ui-container.html.twig */
class __TwigTemplate_99d24c682470221440dae7749098bbc5b418d4110ca44e36f36ed3b7b5cb0ab1 extends Twig_Template
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
        $__internal_9ee53804a9a157bf86207fa07e802ffcd597da8e4ef01db8c3e6ee0502bdde0a = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee53804a9a157bf86207fa07e802ffcd597da8e4ef01db8c3e6ee0502bdde0a->enter($__internal_9ee53804a9a157bf86207fa07e802ffcd597da8e4ef01db8c3e6ee0502bdde0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/views-ui-container.html.twig"));

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

        // line 11
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "</div>
";
        
        $__internal_9ee53804a9a157bf86207fa07e802ffcd597da8e4ef01db8c3e6ee0502bdde0a->leave($__internal_9ee53804a9a157bf86207fa07e802ffcd597da8e4ef01db8c3e6ee0502bdde0a_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/views-ui-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,);
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
 * Theme override for a generic views UI container/wrapper.
 *
 * Available variables:
 * - attributes: HTML attributes to apply to the container element.
 * - children: The remaining elements such as dropbuttons and tabs.
 */
#}
<div{{ attributes }}>{{ children }}</div>
", "core/themes/stable/templates/admin/views-ui-container.html.twig", "/var/www/html/poeiminisite/core/themes/stable/templates/admin/views-ui-container.html.twig");
    }
}
