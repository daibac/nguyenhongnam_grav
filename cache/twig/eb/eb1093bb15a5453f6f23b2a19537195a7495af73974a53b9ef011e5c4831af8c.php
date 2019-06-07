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

/* partials/header.html.twig */
class __TwigTemplate_15332ed600eee4433c71d6cc261f46f1db14d7fdfc47445a0972b0f3246cf1fe extends \Twig\Template
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
        // line 1
        echo "<header id=\"header\">
      <div class=\"container\">
        <h1 class=\"navbar-brand navbar-brand_\"><a href=\"";
        // line 3
        echo ($context["base_url_absolute"] ?? null);
        echo "\">NGUYỄN HỒNG NAM</a></h1>
      </div>
      <div class=\"menuheader\">
          <div class=\"container\">
            <nav class=\"navbar navbar-default navbar-static-top tm_navbar\" role=\"navigation\">
                ";
        // line 8
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 8)->display($context);
        // line 9
        echo "            </nav>
          </div>
      </div>
</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  42 => 8,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\">
      <div class=\"container\">
        <h1 class=\"navbar-brand navbar-brand_\"><a href=\"{{ base_url_absolute }}\">NGUYỄN HỒNG NAM</a></h1>
      </div>
      <div class=\"menuheader\">
          <div class=\"container\">
            <nav class=\"navbar navbar-default navbar-static-top tm_navbar\" role=\"navigation\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
          </div>
      </div>
</header>", "partials/header.html.twig", "C:\\xampp\\htdocs\\nguyenhongnam2019\\user\\themes\\photographer\\templates\\partials\\header.html.twig");
    }
}
