<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_fe9760c880c91bf1b400657b7dfef5eeb3f6ee5ed27b152544cad8585f249594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1152ad510a69bdff35e84435e3f7783528282fc4d50dc1f0ca3acd796d1191a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1152ad510a69bdff35e84435e3f7783528282fc4d50dc1f0ca3acd796d1191a2->enter($__internal_1152ad510a69bdff35e84435e3f7783528282fc4d50dc1f0ca3acd796d1191a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_46d673ec28b7371a5d780b2abd4b0aa3e2c15bedbbbd4be7721bd0f6046de8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d673ec28b7371a5d780b2abd4b0aa3e2c15bedbbbd4be7721bd0f6046de8de->enter($__internal_46d673ec28b7371a5d780b2abd4b0aa3e2c15bedbbbd4be7721bd0f6046de8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1152ad510a69bdff35e84435e3f7783528282fc4d50dc1f0ca3acd796d1191a2->leave($__internal_1152ad510a69bdff35e84435e3f7783528282fc4d50dc1f0ca3acd796d1191a2_prof);

        
        $__internal_46d673ec28b7371a5d780b2abd4b0aa3e2c15bedbbbd4be7721bd0f6046de8de->leave($__internal_46d673ec28b7371a5d780b2abd4b0aa3e2c15bedbbbd4be7721bd0f6046de8de_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_39efd120c1da9cbf4ab60b4cb82824c959007ed1e8db8bbe1973d1db89840dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39efd120c1da9cbf4ab60b4cb82824c959007ed1e8db8bbe1973d1db89840dc0->enter($__internal_39efd120c1da9cbf4ab60b4cb82824c959007ed1e8db8bbe1973d1db89840dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8165593e20e34d3dc542cdcbc9144cae88e865b4a8c592bfecde7527a735c775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8165593e20e34d3dc542cdcbc9144cae88e865b4a8c592bfecde7527a735c775->enter($__internal_8165593e20e34d3dc542cdcbc9144cae88e865b4a8c592bfecde7527a735c775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8165593e20e34d3dc542cdcbc9144cae88e865b4a8c592bfecde7527a735c775->leave($__internal_8165593e20e34d3dc542cdcbc9144cae88e865b4a8c592bfecde7527a735c775_prof);

        
        $__internal_39efd120c1da9cbf4ab60b4cb82824c959007ed1e8db8bbe1973d1db89840dc0->leave($__internal_39efd120c1da9cbf4ab60b4cb82824c959007ed1e8db8bbe1973d1db89840dc0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ceb1ea04046e8f081a38ec3584afcc8cc1edba102c68c8cf3fcd245fd41db82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ceb1ea04046e8f081a38ec3584afcc8cc1edba102c68c8cf3fcd245fd41db82->enter($__internal_1ceb1ea04046e8f081a38ec3584afcc8cc1edba102c68c8cf3fcd245fd41db82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7aa32797edf063040f4d61b37feb35055a2498f1d59680e1b3eee3fe4ba33d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa32797edf063040f4d61b37feb35055a2498f1d59680e1b3eee3fe4ba33d5f->enter($__internal_7aa32797edf063040f4d61b37feb35055a2498f1d59680e1b3eee3fe4ba33d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7aa32797edf063040f4d61b37feb35055a2498f1d59680e1b3eee3fe4ba33d5f->leave($__internal_7aa32797edf063040f4d61b37feb35055a2498f1d59680e1b3eee3fe4ba33d5f_prof);

        
        $__internal_1ceb1ea04046e8f081a38ec3584afcc8cc1edba102c68c8cf3fcd245fd41db82->leave($__internal_1ceb1ea04046e8f081a38ec3584afcc8cc1edba102c68c8cf3fcd245fd41db82_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c99ff18a3bc7bfa34f2d58bbe5d1b4449b8424b820e66e9e48d8c45d575d4126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99ff18a3bc7bfa34f2d58bbe5d1b4449b8424b820e66e9e48d8c45d575d4126->enter($__internal_c99ff18a3bc7bfa34f2d58bbe5d1b4449b8424b820e66e9e48d8c45d575d4126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa543ba9719caef95f1a3962ae42e83bb704764792c6e2e27725ef01cc64bfd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa543ba9719caef95f1a3962ae42e83bb704764792c6e2e27725ef01cc64bfd9->enter($__internal_fa543ba9719caef95f1a3962ae42e83bb704764792c6e2e27725ef01cc64bfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa543ba9719caef95f1a3962ae42e83bb704764792c6e2e27725ef01cc64bfd9->leave($__internal_fa543ba9719caef95f1a3962ae42e83bb704764792c6e2e27725ef01cc64bfd9_prof);

        
        $__internal_c99ff18a3bc7bfa34f2d58bbe5d1b4449b8424b820e66e9e48d8c45d575d4126->leave($__internal_c99ff18a3bc7bfa34f2d58bbe5d1b4449b8424b820e66e9e48d8c45d575d4126_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\sites\\tom\\projects\\4Mains\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}