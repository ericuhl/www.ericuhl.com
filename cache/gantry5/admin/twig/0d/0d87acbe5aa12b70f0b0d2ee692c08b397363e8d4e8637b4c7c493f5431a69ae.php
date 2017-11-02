<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_d15bbbf8387266bae928370a788efd1d4eb8f332fff5c751a33cda313e00d5fd extends Twig_Template
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
        // line 1
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_9ba11552e1343ab73a6bc58691925b3e6dd0d1b527997e7e2fa2264df1903edc = ($context["php_version"] ?? null)) && is_string($__internal_7959658a1b45ba6c663f452be7ebe932971eeb7bf489b6a0c90f47c73e7acb5f = "5.4") && ('' === $__internal_7959658a1b45ba6c663f452be7ebe932971eeb7bf489b6a0c90f47c73e7acb5f || 0 === strpos($__internal_9ba11552e1343ab73a6bc58691925b3e6dd0d1b527997e7e2fa2264df1903edc, $__internal_7959658a1b45ba6c663f452be7ebe932971eeb7bf489b6a0c90f47c73e7acb5f)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", ($context["php_version"] ?? null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/Users/ericuhl/Sites/esu/administrator/components/com_gantry5/templates/partials/php_unsupported.html.twig");
    }
}
