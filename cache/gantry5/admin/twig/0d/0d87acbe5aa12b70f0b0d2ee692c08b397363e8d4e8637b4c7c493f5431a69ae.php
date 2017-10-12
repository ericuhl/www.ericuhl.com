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
        if ((is_string($__internal_e7f254a40e8c0185a50ee6f7f662ae43a5f27e9555a85b67cf9ab702f7700ca6 = ($context["php_version"] ?? null)) && is_string($__internal_7271559600ccd0da697bf4a626527ebb1790af55916e0ddd0b1ffc0f9009e04e = "5.4") && ('' === $__internal_7271559600ccd0da697bf4a626527ebb1790af55916e0ddd0b1ffc0f9009e04e || 0 === strpos($__internal_e7f254a40e8c0185a50ee6f7f662ae43a5f27e9555a85b67cf9ab702f7700ca6, $__internal_7271559600ccd0da697bf4a626527ebb1790af55916e0ddd0b1ffc0f9009e04e)))) {
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
