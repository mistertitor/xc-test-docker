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

/* /var/www/html/skins/customer/modules/XC/ThemeTweaker/themetweaker/inline_editable/tinymce_warning_modal.twig */
class __TwigTemplate_356e5ac3b384215c06fb3c0ab5c6f83ffee2bb3f6316996ddb59558e4e629b2f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isTinymceWarningVisible", [], "method")) {
            // line 8
            echo "<xlite-themetweaker-modal :show=\"isTinymceWarningVisible\" namespace=\"tinymceWarning\">
  <p slot=\"body\" class=\"text-center\">";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Changes may be incompatible with TinyMCE. Are you sure to proceed?"]), "html", null, true);
            echo "</p>
</xlite-themetweaker-modal>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/customer/modules/XC/ThemeTweaker/themetweaker/inline_editable/tinymce_warning_modal.twig";
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
        return new Source("", "/var/www/html/skins/customer/modules/XC/ThemeTweaker/themetweaker/inline_editable/tinymce_warning_modal.twig", "");
    }
}
