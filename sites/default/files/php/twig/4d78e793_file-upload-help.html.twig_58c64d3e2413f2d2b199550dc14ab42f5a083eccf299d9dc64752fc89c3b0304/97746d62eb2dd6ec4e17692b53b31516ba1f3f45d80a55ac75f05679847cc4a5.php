<?php

/* core/themes/classy/templates/content-edit/file-upload-help.html.twig */
class __TwigTemplate_77090d5c01744d46b9a9853f9880e646deb183a35c544c0b948060e561444744 extends Twig_Template
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
        $__internal_c59452ff14395f72765aca161facf9de2c025ecad9150f344b36dd0307f2d99c = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59452ff14395f72765aca161facf9de2c025ecad9150f344b36dd0307f2d99c->enter($__internal_c59452ff14395f72765aca161facf9de2c025ecad9150f344b36dd0307f2d99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/content-edit/file-upload-help.html.twig"));

        $tags = array();
        $filters = array("safe_join" => 12);
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

        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->renderVar($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->safeJoin($this->env, ($context["descriptions"] ?? null), "<br />")));
        echo "
";
        
        $__internal_c59452ff14395f72765aca161facf9de2c025ecad9150f344b36dd0307f2d99c->leave($__internal_c59452ff14395f72765aca161facf9de2c025ecad9150f344b36dd0307f2d99c_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/file-upload-help.html.twig";
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
 * Theme override to display help text for file fields.
 *
 * Available variables:
 * - descriptions: Lines of help text for uploading a file.
 *
 * @see template_preprocess_file_upload_help()
 */
#}
{{ descriptions|safe_join('<br />') }}
", "core/themes/classy/templates/content-edit/file-upload-help.html.twig", "/var/www/html/poeiminisite/core/themes/classy/templates/content-edit/file-upload-help.html.twig");
    }
}
