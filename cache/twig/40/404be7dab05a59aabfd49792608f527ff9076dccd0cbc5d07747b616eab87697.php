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

/* error.html.twig */
class __TwigTemplate_e1defe013345f7fe14af5b057ba885ea39a817ee8234fee944ed63e7e797a88b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "<div id=\"content\">
    <div class=\"row_10\">
        <div class=\"container\">
          <div class=\"row block-404\">
            <div class=\"col-lg-7 col-md-7 col-sm-7\">
                <figure class=\"img-polaroid\"><img src=\"";
        // line 8
        echo ($context["theme_url"] ?? null);
        echo "/img/404.jpg\" alt=\"\"></figure>
            </div>
            <div class=\"col-lg-3 col-md-5 col-sm-5 forminfo\">
                <div>
                    <h2 class=\"title404_1\">Error ";
        // line 12
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []);
        echo "</h2>
                    ";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                </div>
            </div>  
          </div> 
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  56 => 12,  49 => 8,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block content %}
<div id=\"content\">
    <div class=\"row_10\">
        <div class=\"container\">
          <div class=\"row block-404\">
            <div class=\"col-lg-7 col-md-7 col-sm-7\">
                <figure class=\"img-polaroid\"><img src=\"{{ theme_url }}/img/404.jpg\" alt=\"\"></figure>
            </div>
            <div class=\"col-lg-3 col-md-5 col-sm-5 forminfo\">
                <div>
                    <h2 class=\"title404_1\">Error {{ page.header.http_response_code }}</h2>
                    {{ page.content }}
                </div>
            </div>  
          </div> 
        </div>
    </div>
</div>
{% endblock %}
", "error.html.twig", "C:\\xampp\\htdocs\\nguyenhongnam2019\\user\\themes\\photographer\\templates\\error.html.twig");
    }
}
