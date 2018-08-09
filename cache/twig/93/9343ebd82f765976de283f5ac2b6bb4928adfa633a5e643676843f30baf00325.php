<?php

/* @nucleus/page_head.html.twig */
class __TwigTemplate_76049c70513d23f12758d39c4806a432904dacf4de967ee3ce8cb858beabb518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_platform' => array($this, 'block_head_platform'),
            'head_overrides' => array($this, 'block_head_overrides'),
            'head_meta' => array($this, 'block_head_meta'),
            'head_title' => array($this, 'block_head_title'),
            'head_application' => array($this, 'block_head_application'),
            'head_ie_stylesheets' => array($this, 'block_head_ie_stylesheets'),
            'head' => array($this, 'block_head'),
            'head_custom' => array($this, 'block_head_custom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "debugger", array()), "assets", array(), "method");
        // line 2
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "loadAtoms", array(), "method");
        // line 4
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = array("priority" => 10);
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "head";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 5
        echo "    ";
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 13
        $this->displayBlock('head_platform', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('head_overrides', $context, $blocks);
        $content = ob_get_clean();
        echo $assetFunction($content, $location, $priority);
        // line 22
        echo "<head>
    ";
        // line 23
        echo twig_join_filter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "getHtml", array(0 => "head_top"), "method"), "
    ");
        echo "
    ";
        // line 24
        $this->displayBlock('head_meta', $context, $blocks);
        // line 50
        $this->displayBlock('head_title', $context, $blocks);
        // line 54
        echo "
    ";
        // line 55
        $this->displayBlock('head_application', $context, $blocks);
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('head_ie_stylesheets', $context, $blocks);
        // line 68
        $this->displayBlock('head', $context, $blocks);
        // line 69
        echo "    ";
        $this->displayBlock('head_custom', $context, $blocks);
        // line 74
        echo "    ";
        echo twig_join_filter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "getHtml", array(0 => "head_bottom"), "method"), "
    ");
        echo "
</head>
";
    }

    // line 5
    public function block_head_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"gantry-assets://css/font-awesome.min.css\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"gantry-engine://css-compiled/nucleus.css\" type=\"text/css\"/>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array(), "any", false, true), "configuration", array(), "any", false, true), "css", array(), "any", false, true), "persistent", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array(), "any", false, true), "configuration", array(), "any", false, true), "css", array(), "any", false, true), "persistent", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "configuration", array()), "css", array()), "files", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "configuration", array()), "css", array()), "files", array()))));
        foreach ($context['_seq'] as $context["_key"] => $context["scss"]) {
            // line 9
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["scss"], "html", null, true);
            echo ".scss\" type=\"text/css\"/>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scss'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    ";
    }

    // line 13
    public function block_head_platform($context, array $blocks = array())
    {
    }

    // line 15
    public function block_head_overrides($context, array $blocks = array())
    {
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "configuration", array()), "css", array()), "overrides", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["scss"]) {
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["scss"], "html", null, true);
            echo ".scss\" type=\"text/css\"/>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scss'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    ";
    }

    // line 24
    public function block_head_meta($context, array $blocks = array())
    {
        // line 25
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        ";
        // line 27
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "head", array()), "meta", array())) {
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "head", array()), "meta", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 30
                    echo "                    ";
                    if ((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["key"]) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "og:") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) {
                        // line 31
                        echo "                    <meta property=\"";
                        echo twig_escape_filter($this->env, $context["key"]);
                        echo "\" content=\"";
                        echo twig_escape_filter($this->env, $context["value"]);
                        echo "\" />
                    ";
                    } else {
                        // line 33
                        echo "                    <meta name=\"";
                        echo twig_escape_filter($this->env, $context["key"]);
                        echo "\" content=\"";
                        echo twig_escape_filter($this->env, $context["value"]);
                        echo "\" />
                    ";
                    }
                    // line 35
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 38
        echo twig_join_filter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "getHtml", array(0 => "head_meta"), "method"), "
    ");
        echo "

        ";
        // line 40
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "assets", array()), "favicon", array())) {
            // line 41
            echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "assets", array()), "favicon", array())), "html", null, true);
            echo "\" />
        ";
        }
        // line 43
        echo "
        ";
        // line 44
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "assets", array()), "touchicon", array())) {
            // line 45
            echo "        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "assets", array()), "touchicon", array())), "html", null, true);
            echo "\">
        <link rel=\"icon\" sizes=\"192x192\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "assets", array()), "touchicon", array())), "html", null, true);
            echo "\">
        ";
        }
        // line 48
        echo "    ";
    }

    // line 50
    public function block_head_title($context, array $blocks = array())
    {
        // line 51
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Title</title>";
    }

    // line 55
    public function block_head_application($context, array $blocks = array())
    {
        // line 56
        echo twig_join_filter($this->getAttribute(($context["gantry"] ?? null), "styles", array(0 => "head"), "method"), "
");
        echo "
        ";
        // line 57
        echo twig_join_filter($this->getAttribute(($context["gantry"] ?? null), "scripts", array(0 => "head"), "method"), "
");
    }

    // line 60
    public function block_head_ie_stylesheets($context, array $blocks = array())
    {
        // line 61
        echo "<!--[if (gte IE 8)&(lte IE 9)]>
        <script type=\"text/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-assets://js/html5shiv-printshiv.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-engine://css/nucleus-ie9.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-assets://js/matchmedia.polyfill.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    ";
    }

    // line 68
    public function block_head($context, array $blocks = array())
    {
    }

    // line 69
    public function block_head_custom($context, array $blocks = array())
    {
        // line 70
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "head", array()), "head_bottom", array())) {
            // line 71
            echo "        ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "head", array()), "head_bottom", array());
            echo "
        ";
        }
        // line 73
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@nucleus/page_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 73,  272 => 71,  269 => 70,  266 => 69,  261 => 68,  254 => 64,  250 => 63,  246 => 62,  243 => 61,  240 => 60,  235 => 57,  230 => 56,  227 => 55,  222 => 51,  219 => 50,  215 => 48,  210 => 46,  205 => 45,  203 => 44,  200 => 43,  194 => 41,  192 => 40,  186 => 38,  175 => 35,  167 => 33,  159 => 31,  156 => 30,  152 => 29,  148 => 28,  146 => 27,  142 => 25,  139 => 24,  135 => 19,  127 => 17,  123 => 16,  120 => 15,  115 => 13,  111 => 11,  103 => 9,  99 => 8,  95 => 6,  92 => 5,  83 => 74,  80 => 69,  78 => 68,  76 => 60,  73 => 59,  71 => 55,  68 => 54,  66 => 50,  64 => 24,  59 => 23,  56 => 22,  52 => 15,  49 => 14,  47 => 13,  44 => 5,  32 => 4,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- do gantry.debugger.assets() -%}
{%- do gantry.theme.loadAtoms() -%}

{% assets with { priority: 10 } %}
    {% block head_stylesheets -%}
        <link rel=\"stylesheet\" href=\"gantry-assets://css/font-awesome.min.css\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"gantry-engine://css-compiled/nucleus.css\" type=\"text/css\"/>
        {% for scss in gantry.theme.configuration.css.persistent|default(gantry.theme.configuration.css.files) %}
        <link rel=\"stylesheet\" href=\"{{ scss }}.scss\" type=\"text/css\"/>
        {%- endfor %}
    {% endblock -%}

    {% block head_platform %}{% endblock %}

    {% block head_overrides -%}
        {% for scss in gantry.theme.configuration.css.overrides %}
        <link rel=\"stylesheet\" href=\"{{ scss }}.scss\" type=\"text/css\"/>
        {%- endfor %}
    {% endblock -%}
{% endassets -%}

<head>
    {{ gantry.document.getHtml('head_top')|join(\"\\n    \")|raw }}
    {% block head_meta %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        {% if gantry.config.page.head.meta -%}
            {% for attributes in gantry.config.page.head.meta -%}
                {%- for key, value in attributes %}
                    {% if key starts with 'og:' %}
                    <meta property=\"{{ key|e }}\" content=\"{{ value|e }}\" />
                    {% else %}
                    <meta name=\"{{ key|e }}\" content=\"{{ value|e }}\" />
                    {% endif %}
                {% endfor -%}
            {%- endfor -%}
        {%- endif -%}
        {{ gantry.document.getHtml('head_meta')|join(\"\\n    \")|raw }}

        {% if gantry.config.page.assets.favicon %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ url(gantry.config.page.assets.favicon) }}\" />
        {% endif %}

        {% if gantry.config.page.assets.touchicon %}
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ url(gantry.config.page.assets.touchicon) }}\">
        <link rel=\"icon\" sizes=\"192x192\" href=\"{{ url(gantry.config.page.assets.touchicon) }}\">
        {% endif %}
    {% endblock %}

    {%- block head_title -%}
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Title</title>
    {%- endblock %}

    {% block head_application -%}
        {{ gantry.styles('head')|join(\"\\n\")|raw }}
        {{ gantry.scripts('head')|join(\"\\n\")|raw }}
    {%- endblock %}

    {% block head_ie_stylesheets -%}
        <!--[if (gte IE 8)&(lte IE 9)]>
        <script type=\"text/javascript\" src=\"{{ url('gantry-assets://js/html5shiv-printshiv.min.js') }}\"></script>
        <link rel=\"stylesheet\" href=\"{{ url('gantry-engine://css/nucleus-ie9.css') }}\" type=\"text/css\"/>
        <script type=\"text/javascript\" src=\"{{ url('gantry-assets://js/matchmedia.polyfill.js') }}\"></script>
        <![endif]-->
    {% endblock -%}

    {% block head %}{% endblock %}
    {% block head_custom %}
        {% if gantry.config.page.head.head_bottom %}
        {{ gantry.config.page.head.head_bottom|raw }}
        {% endif %}
    {% endblock %}
    {{ gantry.document.getHtml('head_bottom')|join(\"\\n    \")|raw }}
</head>
", "@nucleus/page_head.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\gantry5\\engines\\nucleus\\templates\\page_head.html.twig");
    }
}
