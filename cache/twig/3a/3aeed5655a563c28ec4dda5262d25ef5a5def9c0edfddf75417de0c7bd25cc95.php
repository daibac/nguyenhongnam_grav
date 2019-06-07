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

/* partials/base-root.html.twig */
class __TwigTemplate_7e2ad8ccb406538bf1347327767537c0d07667cc0265f31f4ddd4558794023d0 extends \Twig\Template
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
            'body' => [$this, 'block_body'],
            'page' => [$this, 'block_page'],
            'navigation' => [$this, 'block_navigation'],
            'titlebar' => [$this, 'block_titlebar'],
            'content_wrapper' => [$this, 'block_content_wrapper'],
            'messages' => [$this, 'block_messages'],
            'widgets' => [$this, 'block_widgets'],
            'content_top' => [$this, 'block_content_top'],
            'content' => [$this, 'block_content'],
            'content_bottom' => [$this, 'block_content_bottom'],
            'footer' => [$this, 'block_footer'],
            'modals' => [$this, 'block_modals'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($this->getAttribute(($context["uri"] ?? null), "extension", [], "method") == "json")) {
            $this->loadTemplate("default.json.twig", "partials/base-root.html.twig", 1)->display($context);
        } else {
            // line 2
            echo "    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
    ";
            // line 5
            $this->displayBlock('head', $context, $blocks);
            // line 31
            echo "
    ";
            // line 32
            $this->displayBlock('assets', $context, $blocks);
            // line 36
            echo "    </head>
    ";
            // line 37
            $this->displayBlock('body', $context, $blocks);
            // line 133
            echo "    </html>
";
        }
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "        <meta charset=\"utf-8\" />
    <meta name=\"keywords\" content=\"nguyen-hong-nam, nguyenhongnam, hong-nam, hongnam, nhiep-anh, nhiepanh, nguyenhongnamdanang,  nguyen-hong-nam-da-nang, nguyen-hong-nam-song-han\">
        <title>";
        // line 8
        if (($context["title"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo " | ";
        } else {
            if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
                echo " | ";
            }
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
        ";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "description", [])) {
            // line 10
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "description", []), "html", null, true);
            echo "\">
        ";
        } else {
            // line 12
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "description", []), "html", null, true);
            echo "\">
        ";
        }
        // line 14
        echo "        ";
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 15
            echo "            <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "robots", []), "html", null, true);
            echo "\">
        ";
        } else {
            // line 17
            echo "            <meta name=\"robots\" content=\"noindex, nofollow\">
        ";
        }
        // line 19
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["base_url_simple"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/favicon.png\">

        ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
        ";
        // line 26
        $this->loadTemplate("partials/javascript-config.html.twig", "partials/base-root.html.twig", 26)->display($context);
        // line 27
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    ";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 23
        echo "            ";
        $this->loadTemplate("partials/stylesheets.html.twig", "partials/base-root.html.twig", 23)->display($context);
        // line 24
        echo "        ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        // line 28
        echo "            ";
        $this->loadTemplate("partials/javascripts.html.twig", "partials/base-root.html.twig", 28)->display($context);
        // line 29
        echo "        ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 32
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 33
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 34
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        // line 38
        echo "    <body class=\"ga-theme-17x ";
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "sidebar", []), "size", []) == "small")) ? ("sidebar-closed") : (""));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "body_classes", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
        echo "\">

    ";
        // line 40
        if ( !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.login"])) {
            // line 41
            echo "        ";
            $this->loadTemplate("partials/messages.html.twig", "partials/base-root.html.twig", 41)->display($context);
            // line 42
            echo "    ";
        } else {
            // line 43
            echo "
        ";
            // line 44
            $this->displayBlock('page', $context, $blocks);
            // line 125
            echo "
    ";
        }
        // line 127
        echo "
    ";
        // line 128
        $this->displayBlock('bottom', $context, $blocks);
        // line 131
        echo "    </body>
    ";
    }

    // line 44
    public function block_page($context, array $blocks = [])
    {
        // line 45
        echo "        <div class=\"remodal-bg\">

            ";
        // line 47
        $this->displayBlock('navigation', $context, $blocks);
        // line 50
        echo "
            <main id=\"admin-main\" >
                ";
        // line 52
        $this->loadTemplate("partials/nav-toggle.html.twig", "partials/base-root.html.twig", 52)->display($context);
        // line 53
        echo "                <div id=\"titlebar\" class=\"titlebar\">
                    ";
        // line 54
        $this->displayBlock('titlebar', $context, $blocks);
        // line 55
        echo "                </div>

                ";
        // line 57
        $this->displayBlock('content_wrapper', $context, $blocks);
        // line 83
        echo "
                ";
        // line 84
        $this->displayBlock('modals', $context, $blocks);
        // line 120
        echo "
            </main>
            <div id='overlay'></div>
        </div>
        ";
    }

    // line 47
    public function block_navigation($context, array $blocks = [])
    {
        // line 48
        echo "                ";
        $this->loadTemplate("partials/nav.html.twig", "partials/base-root.html.twig", 48)->display($context);
        // line 49
        echo "            ";
    }

    // line 54
    public function block_titlebar($context, array $blocks = [])
    {
    }

    // line 57
    public function block_content_wrapper($context, array $blocks = [])
    {
        // line 58
        echo "                <div class=\"content-wrapper\">
                    <div class=\"";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "content_padding", [])) {
            echo "content-padding";
        }
        echo "\">
                        ";
        // line 60
        $this->displayBlock('messages', $context, $blocks);
        // line 63
        echo "
                        ";
        // line 64
        $this->displayBlock('widgets', $context, $blocks);
        // line 65
        echo "                        <div class=\"default-box-shadow\">
                            ";
        // line 66
        $this->displayBlock('content_top', $context, $blocks);
        // line 67
        echo "                            <div class=\"admin-block\">";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "</div>
                            ";
        // line 70
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "show_github_msg", [])) {
            // line 71
            echo "                            <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADMIN_REPORT_ISSUE"), "html", null, true);
            echo "</a></div>
                            ";
        }
        // line 73
        echo "                            ";
        $this->displayBlock('content_bottom', $context, $blocks);
        // line 74
        echo "                        </div>
                        ";
        // line 75
        $this->displayBlock('footer', $context, $blocks);
        // line 80
        echo "                    </div>
                </div>
                ";
    }

    // line 60
    public function block_messages($context, array $blocks = [])
    {
        // line 61
        echo "                            ";
        $this->loadTemplate("partials/messages.html.twig", "partials/base-root.html.twig", 61)->display($context);
        // line 62
        echo "                        ";
    }

    // line 64
    public function block_widgets($context, array $blocks = [])
    {
    }

    // line 66
    public function block_content_top($context, array $blocks = [])
    {
    }

    // line 68
    public function block_content($context, array $blocks = [])
    {
    }

    // line 73
    public function block_content_bottom($context, array $blocks = [])
    {
    }

    // line 75
    public function block_footer($context, array $blocks = [])
    {
        // line 76
        echo "                        <footer id=\"footer\">
                             ";
        // line 77
        $this->loadTemplate("partials/footer.html.twig", "partials/base-root.html.twig", 77)->display($context);
        // line 78
        echo "                        </footer>
                        ";
    }

    // line 84
    public function block_modals($context, array $blocks = [])
    {
        // line 85
        echo "                <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
        echo "</h1>
                        <div class=\"error-content\"></div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1><span>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.METADATA"), "html", null, true);
        echo " for</span> <strong></strong></h1>
                        <div class=\"metadata-preview\">
                            <div class=\"meta-preview\"></div>
                            <div class=\"meta-content\"></div>
                        </div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
                        <p class=\"bigger\">
                            ";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>
                ";
    }

    // line 128
    public function block_bottom($context, array $blocks = [])
    {
        // line 129
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base-root.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 129,  440 => 128,  431 => 115,  427 => 114,  420 => 110,  415 => 108,  406 => 102,  397 => 96,  388 => 90,  382 => 87,  378 => 85,  375 => 84,  370 => 78,  368 => 77,  365 => 76,  362 => 75,  357 => 73,  352 => 68,  347 => 66,  342 => 64,  338 => 62,  335 => 61,  332 => 60,  326 => 80,  324 => 75,  321 => 74,  318 => 73,  312 => 71,  310 => 70,  307 => 69,  305 => 68,  303 => 67,  301 => 66,  298 => 65,  296 => 64,  293 => 63,  291 => 60,  285 => 59,  282 => 58,  279 => 57,  274 => 54,  270 => 49,  267 => 48,  264 => 47,  256 => 120,  254 => 84,  251 => 83,  249 => 57,  245 => 55,  243 => 54,  240 => 53,  238 => 52,  234 => 50,  232 => 47,  228 => 45,  225 => 44,  220 => 131,  218 => 128,  215 => 127,  211 => 125,  209 => 44,  206 => 43,  203 => 42,  200 => 41,  198 => 40,  188 => 38,  185 => 37,  178 => 34,  173 => 33,  170 => 32,  161 => 29,  158 => 28,  155 => 27,  151 => 24,  148 => 23,  145 => 22,  141 => 30,  138 => 27,  136 => 26,  133 => 25,  131 => 22,  125 => 20,  122 => 19,  118 => 17,  112 => 15,  109 => 14,  103 => 12,  97 => 10,  95 => 9,  82 => 8,  78 => 6,  75 => 5,  68 => 133,  66 => 37,  63 => 36,  61 => 32,  58 => 31,  56 => 5,  51 => 2,  47 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if uri.extension() == 'json' %}{% include 'default.json.twig' %}{% else %}
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
    {% block head %}
        <meta charset=\"utf-8\" />
    <meta name=\"keywords\" content=\"nguyen-hong-nam, nguyenhongnam, hong-nam, hongnam, nhiep-anh, nhiepanh, nguyenhongnamdanang,  nguyen-hong-nam-da-nang, nguyen-hong-nam-song-han\">
        <title>{% if title %}{{ title }} | {% else %}{% if header.title %}{{ header.title }} | {% endif %}{% endif %}{{ site.title }}</title>
        {% if header.description %}
            <meta name=\"description\" content=\"{{ header.description }}\">
        {% else %}
            <meta name=\"description\" content=\"{{ site.description }}\">
        {% endif %}
        {% if header.robots %}
            <meta name=\"robots\" content=\"{{ header.robots }}\">
        {% else %}
            <meta name=\"robots\" content=\"noindex, nofollow\">
        {% endif %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ base_url_simple }}{{ theme_url }}/images/favicon.png\">

        {% block stylesheets %}
            {% include 'partials/stylesheets.html.twig' %}
        {% endblock %}

        {% include 'partials/javascript-config.html.twig' %}
        {% block javascripts %}
            {% include 'partials/javascripts.html.twig' %}
        {% endblock %}
    {% endblock %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
        {{ assets.js()|raw }}
    {% endblock %}
    </head>
    {% block body %}
    <body class=\"ga-theme-17x {{ config.plugins.admin.sidebar.size == 'small' ? 'sidebar-closed' : '' }} {{ config.plugins.admin.body_classes }} {{ body_classes }}\">

    {% if not authorize(['admin.login']) %}
        {% include 'partials/messages.html.twig' %}
    {% else %}

        {% block page %}
        <div class=\"remodal-bg\">

            {% block navigation %}
                {% include 'partials/nav.html.twig' %}
            {% endblock %}

            <main id=\"admin-main\" >
                {% include 'partials/nav-toggle.html.twig' %}
                <div id=\"titlebar\" class=\"titlebar\">
                    {% block titlebar %}{% endblock %}
                </div>

                {% block content_wrapper %}
                <div class=\"content-wrapper\">
                    <div class=\"{% if config.plugins.admin.content_padding %}content-padding{% endif %}\">
                        {% block messages %}
                            {% include 'partials/messages.html.twig' %}
                        {% endblock %}

                        {% block widgets %}{% endblock %}
                        <div class=\"default-box-shadow\">
                            {% block content_top %}{% endblock %}
                            <div class=\"admin-block\">
                                {%- block content %}{% endblock -%}
                            </div>
                            {% if config.plugins.admin.show_github_msg %}
                            <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\" rel=\"noopener noreferrer\">{{ 'PLUGIN_ADMIN.ADMIN_REPORT_ISSUE'|tu }}</a></div>
                            {% endif %}
                            {% block content_bottom %}{% endblock %}
                        </div>
                        {% block footer %}
                        <footer id=\"footer\">
                             {% include 'partials/footer.html.twig' %}
                        </footer>
                        {% endblock %}
                    </div>
                </div>
                {% endblock %}

                {% block modals %}
                <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>{{ \"PLUGIN_ADMIN.ERROR\"|tu }}</h1>
                        <div class=\"error-content\"></div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">{{ \"PLUGIN_ADMIN.CLOSE\"|tu }}</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1><span>{{ \"PLUGIN_ADMIN.METADATA\"|tu }} for</span> <strong></strong></h1>
                        <div class=\"metadata-preview\">
                            <div class=\"meta-preview\"></div>
                            <div class=\"meta-content\"></div>
                        </div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">{{ \"PLUGIN_ADMIN.CLOSE\"|tu }}</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
                        <p class=\"bigger\">
                            {{ \"PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC\"|tu }}
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
                        </div>
                    </form>
                </div>
                {% endblock %}

            </main>
            <div id='overlay'></div>
        </div>
        {% endblock page %}

    {% endif %}

    {% block bottom %}
        {{ assets.js('bottom')|raw }}
    {% endblock %}
    </body>
    {% endblock body %}
    </html>
{% endif %}
", "partials/base-root.html.twig", "C:\\xampp\\htdocs\\nguyenhongnam2019\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\base-root.html.twig");
    }
}
