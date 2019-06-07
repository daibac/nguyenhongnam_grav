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

/* about.html.twig */
class __TwigTemplate_6cd1050cfc23543a4473df6dbb5ae061b90803ebdf073fea522186dc73d651ee extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<div id=\"content\">
    <div class=\"row_5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7 col-md-7 col-sm-7 reserve_table\">
                    ";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                </div>
                
                <div class=\"col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4\">
                    <h2>";
        // line 13
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "work", []), "title", []);
        echo "</h2>
                    <hr class=\"line2\">
                    <p class=\"title5\">";
        // line 15
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "work", []), "description", []);
        echo ".</p>
                    <h2 class=\"pad_bot1\">";
        // line 16
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hiretitle", []);
        echo "</h2>

                    ";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simple_form", []), "enabled", [])) {
            // line 19
            echo "                        ";
            $context["simple_form_config"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "simple_form", [])) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "simple_form", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "photographer", []), "simple_form", [])));
            // line 20
            echo "                        ";
            echo call_user_func_array($this->env->getFunction('simple_form')->getCallable(), [($context["simple_form_config"] ?? null)]);
            echo "
                    ";
        }
        // line 22
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  75 => 20,  72 => 19,  70 => 18,  65 => 16,  61 => 15,  56 => 13,  49 => 9,  42 => 4,  39 => 3,  29 => 1,);
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
    <div class=\"row_5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7 col-md-7 col-sm-7 reserve_table\">
                    {{ page.content }}
                </div>
                
                <div class=\"col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4\">
                    <h2>{{ page.header.work.title }}</h2>
                    <hr class=\"line2\">
                    <p class=\"title5\">{{ page.header.work.description }}.</p>
                    <h2 class=\"pad_bot1\">{{ page.header.hiretitle }}</h2>

                    {% if config.plugins.simple_form.enabled %}
                        {% set simple_form_config = page.header.simple_form ?: config.themes.photographer.simple_form %}
                        {{ simple_form(simple_form_config) }}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "about.html.twig", "C:\\xampp\\htdocs\\nguyenhongnam2019\\user\\themes\\photographer\\templates\\about.html.twig");
    }
}
