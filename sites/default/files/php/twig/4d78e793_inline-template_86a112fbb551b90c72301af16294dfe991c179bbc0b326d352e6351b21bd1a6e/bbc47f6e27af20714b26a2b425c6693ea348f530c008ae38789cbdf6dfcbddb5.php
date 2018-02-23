<?php

/* {# inline_template_start #}<p>{{ title }}</p> */
class __TwigTemplate_3078581491737151f0542bd0c9a5bae8a5a4ba5c0ebea163247d0589d6f4165c extends Twig_Template
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
        $__internal_7d7b947dd3ab9ada6c897b10e783abfd213dd13f75691e36184e466d550cff4d = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7b947dd3ab9ada6c897b10e783abfd213dd13f75691e36184e466d550cff4d->enter($__internal_7d7b947dd3ab9ada6c897b10e783abfd213dd13f75691e36184e466d550cff4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<p>{{ title }}</p>"));

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
        echo "<p>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</p>";
        
        $__internal_7d7b947dd3ab9ada6c897b10e783abfd213dd13f75691e36184e466d550cff4d->leave($__internal_7d7b947dd3ab9ada6c897b10e783abfd213dd13f75691e36184e466d550cff4d_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<p>{{ title }}</p>";
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
        return new Twig_Source("{# inline_template_start #}<p>{{ title }}</p>", "{# inline_template_start #}<p>{{ title }}</p>", "");
    }
}
