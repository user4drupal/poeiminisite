<?php

/* {# inline_template_start #}destination=/poeiminisite/user/1/listoffrecree */
class __TwigTemplate_fe32711d56c4543b0c8b58223e1736b42dbdd99114261672be5b7a58673e186e extends Twig_Template
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
        $__internal_bda937f030ec328d6de214a833d6435499b52e09acaf81a04d95e36031db12eb = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda937f030ec328d6de214a833d6435499b52e09acaf81a04d95e36031db12eb->enter($__internal_bda937f030ec328d6de214a833d6435499b52e09acaf81a04d95e36031db12eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}destination=/poeiminisite/user/1/listoffrecree"));

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
        echo "destination=/poeiminisite/user/1/listoffrecree";
        
        $__internal_bda937f030ec328d6de214a833d6435499b52e09acaf81a04d95e36031db12eb->leave($__internal_bda937f030ec328d6de214a833d6435499b52e09acaf81a04d95e36031db12eb_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}destination=/poeiminisite/user/1/listoffrecree";
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
        return new Twig_Source("{# inline_template_start #}destination=/poeiminisite/user/1/listoffrecree", "{# inline_template_start #}destination=/poeiminisite/user/1/listoffrecree", "");
    }
}
