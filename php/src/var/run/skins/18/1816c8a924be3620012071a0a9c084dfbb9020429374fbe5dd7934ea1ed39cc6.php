<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/html/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/panel_parts/help_message.twig */
class __TwigTemplate_8c5035d37f05de470465eeaa350ffac540f55f520ae44a2e7fb164dee570ae3a extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "isNotOptimalTarget", [], "method")) {
            // line 8
            echo "<div class='layout-editor-help-message'>
\t<i class=\"fa fa-info-circle\"></i> ";
            // line 9
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Open home or category pages for more opportunities to adjust the website structure"]);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/panel_parts/help_message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  35 => 8,  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/panel_parts/help_message.twig", "");
    }
}
