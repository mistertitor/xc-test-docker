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

/* /var/www/html/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.twig */
class __TwigTemplate_d9752a2bb83fd6b9d135c726c9311d9bc2a508f895b3cb2f8a52e121136e4fbd extends \XLite\Core\Templating\Twig\Template
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
<div class=\"return-form\">

  ";
        // line 9
        $this->startForm("\\XLite\\Module\\XC\\CanadaPost\\View\\Form\\CreateReturn");        // line 10
        echo "    
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "capost_create_return.form"]]), "html", null, true);
        echo "

  ";
        $this->endForm();        // line 14
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  39 => 11,  36 => 10,  35 => 9,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.twig", "");
    }
}
