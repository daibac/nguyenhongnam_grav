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

/* partials/base.html.twig */
class __TwigTemplate_b41ee1df86494a1a793079d73dd556eca07461d02e6ea6a32dff6936c19e2cdb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 63
        echo "    </head>
    <body>
        ";
        // line 65
        $this->displayBlock('header', $context, $blocks);
        // line 68
        echo "
        ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "

        <script src=\"";
        // line 74
        echo ($context["theme_url"] ?? null);
        echo "/js/bootstrap.min.js\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 75
        echo ($context["theme_url"] ?? null);
        echo "/js/tm-scripts.js\" type=\"text/javascript\" ></script>

        ";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 80
        echo "
        ";
        // line 81
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo " 
    </body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
    <meta name=\"keywords\" content=\"nguyen-hong-nam, nguyenhongnam, hong-nam, hongnam, nhiep-anh, nhiepanh, nguyenhongnamdanang,  nguyen-hong-nam-da-nang, nguyen-hong-nam-song-han\">
        <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
        ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo ($context["theme_url"] ?? null);
        echo "/img/favicon.ico\" />

         ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('assets', $context, $blocks);
        // line 49
        echo "
        <script>
        \$(window).load( function(){

         jQuery('.camera_wrap').camera();

     });
        </script>

        ";
        // line 58
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) < 9))) {
            // line 59
            echo "                 <div style='text-align:center'><a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\"><img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" /></a></div>
         ";
        }
        // line 61
        echo "
        ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 13
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap.css"], "method");
        // line 14
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css"], "method");
        // line 15
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/camera.css"], "method");
        // line 16
        echo "
                ";
        // line 17
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) < 9))) {
            // line 18
            echo "               ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/tm/css/tm_docs.css"], "method");
            // line 19
            echo "                ";
        }
        // line 20
        echo "
        ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        // line 24
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 25
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-migrate-1.2.1.js"], "method");
        // line 26
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/superfish.js"], "method");
        // line 27
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.easing.1.3.js"], "method");
        // line 28
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.mobilemenu.js"], "method");
        // line 29
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.ui.totop.js"], "method");
        // line 30
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.touchSwipe.min.js"], "method");
        // line 31
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.equalheights.js"], "method");
        // line 32
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/camera.js"], "method");
        // line 33
        echo "
            ";
        // line 34
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) > 9)) || ($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) != "msie"))) {
            // line 35
            echo "                 ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.mobile.customized.min.js"], "method");
            // line 36
            echo "            ";
        }
        // line 37
        echo "
            ";
        // line 38
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) < 9))) {
            // line 39
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/assets/js/html5shiv.js"], "method");
            // line 40
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/assets/js/respond.min.js"], "method");
            // line 41
            echo "            ";
        }
        // line 42
        echo "
        ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 45
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 46
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        // line 47
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 65
    public function block_header($context, array $blocks = [])
    {
        // line 66
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 66)->display($context);
        // line 67
        echo "        ";
    }

    // line 69
    public function block_body($context, array $blocks = [])
    {
        // line 70
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "        ";
    }

    // line 70
    public function block_content($context, array $blocks = [])
    {
    }

    // line 77
    public function block_footer($context, array $blocks = [])
    {
        // line 78
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 78)->display($context);
        // line 79
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 79,  281 => 78,  278 => 77,  273 => 70,  269 => 71,  266 => 70,  263 => 69,  259 => 67,  256 => 66,  253 => 65,  246 => 47,  241 => 46,  238 => 45,  228 => 42,  225 => 41,  222 => 40,  219 => 39,  217 => 38,  214 => 37,  211 => 36,  208 => 35,  206 => 34,  203 => 33,  200 => 32,  197 => 31,  194 => 30,  191 => 29,  188 => 28,  185 => 27,  182 => 26,  179 => 25,  176 => 24,  173 => 23,  168 => 20,  165 => 19,  162 => 18,  160 => 17,  157 => 16,  154 => 15,  151 => 14,  148 => 13,  145 => 12,  140 => 61,  136 => 59,  134 => 58,  123 => 49,  121 => 45,  118 => 44,  116 => 23,  113 => 22,  111 => 12,  106 => 10,  103 => 9,  101 => 8,  93 => 7,  89 => 5,  86 => 4,  77 => 81,  74 => 80,  72 => 77,  67 => 75,  63 => 74,  59 => 72,  57 => 69,  54 => 68,  52 => 65,  48 => 63,  46 => 4,  41 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
    <meta name=\"keywords\" content=\"nguyen-hong-nam, nguyenhongnam, hong-nam, hongnam, nhiep-anh, nhiepanh, nguyenhongnamdanang,  nguyen-hong-nam-da-nang, nguyen-hong-nam-song-han\">
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/img/favicon.ico\" />

         {% block stylesheets %}
                {% do assets.addCss('theme://css/bootstrap.css') %}
                {% do assets.addCss('theme://css/style.css') %}
                {% do assets.addCss('theme://css/camera.css') %}

                {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}
               {% do assets.addCss('theme://assets/tm/css/tm_docs.css') %}
                {% endif %}

        {% endblock %}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://js/jquery-migrate-1.2.1.js') %}
            {% do assets.addJs('theme://js/superfish.js') %}
            {% do assets.addJs('theme://js/jquery.easing.1.3.js') %}
            {% do assets.addJs('theme://js/jquery.mobilemenu.js') %}
            {% do assets.addJs('theme://js/jquery.ui.totop.js') %}
            {% do assets.addJs('theme://js/jquery.touchSwipe.min.js') %}
            {% do assets.addJs('theme://js/jquery.equalheights.js') %}
            {% do assets.addJs('theme://js/camera.js') %}

            {% if browser.getBrowser == 'msie' and browser.getVersion > 9 or browser.getBrowser != 'msie' %}
                 {% do assets.addJs('theme://js/jquery.mobile.customized.min.js') %}
            {% endif %}

            {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}
                {% do assets.addJs('theme://assets/assets/js/html5shiv.js') %}
                {% do assets.addJs('theme://assets/assets/js/respond.min.js') %}
            {% endif %}

        {% endblock %}

        {% block assets deferred %}
            {{ assets.css()|raw }}
            {{ assets.js()|raw }}
        {% endblock %}

        <script>
        \$(window).load( function(){

         jQuery('.camera_wrap').camera();

     });
        </script>

        {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}
                 <div style='text-align:center'><a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\"><img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" /></a></div>
         {% endif %}

        {% endblock head%}
    </head>
    <body>
        {% block header %}
             {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block body %}
            {% block content %}{% endblock %}
        {% endblock %}


        <script src=\"{{ theme_url }}/js/bootstrap.min.js\" type=\"text/javascript\" ></script>
        <script src=\"{{ theme_url }}/js/tm-scripts.js\" type=\"text/javascript\" ></script>

        {% block footer %}
             {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {{ assets.js('bottom')|raw }} 
    </body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\nguyenhongnam2019\\user\\themes\\photographer\\templates\\partials\\base.html.twig");
    }
}
