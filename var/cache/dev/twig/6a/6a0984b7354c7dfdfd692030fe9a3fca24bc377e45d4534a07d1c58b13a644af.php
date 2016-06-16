<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c5d10c88b86e82056e409c5db2b65a8664b6434a4b80d050203da70873795f05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10809d73adca709caa32bd984a30e1a802f8134563d497713b1ad440b1eeaafb = $this->env->getExtension("native_profiler");
        $__internal_10809d73adca709caa32bd984a30e1a802f8134563d497713b1ad440b1eeaafb->enter($__internal_10809d73adca709caa32bd984a30e1a802f8134563d497713b1ad440b1eeaafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10809d73adca709caa32bd984a30e1a802f8134563d497713b1ad440b1eeaafb->leave($__internal_10809d73adca709caa32bd984a30e1a802f8134563d497713b1ad440b1eeaafb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cc87af42cd9e63a934cea5b81cd9e5f0cf8349cf499c8f468ba4de2b4de6b67a = $this->env->getExtension("native_profiler");
        $__internal_cc87af42cd9e63a934cea5b81cd9e5f0cf8349cf499c8f468ba4de2b4de6b67a->enter($__internal_cc87af42cd9e63a934cea5b81cd9e5f0cf8349cf499c8f468ba4de2b4de6b67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cc87af42cd9e63a934cea5b81cd9e5f0cf8349cf499c8f468ba4de2b4de6b67a->leave($__internal_cc87af42cd9e63a934cea5b81cd9e5f0cf8349cf499c8f468ba4de2b4de6b67a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e8a88e60622814328165093b7293780f8f2c58399692226f40984366867da62 = $this->env->getExtension("native_profiler");
        $__internal_3e8a88e60622814328165093b7293780f8f2c58399692226f40984366867da62->enter($__internal_3e8a88e60622814328165093b7293780f8f2c58399692226f40984366867da62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3e8a88e60622814328165093b7293780f8f2c58399692226f40984366867da62->leave($__internal_3e8a88e60622814328165093b7293780f8f2c58399692226f40984366867da62_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_162041cc82e0733cd807c8a770517fbc3b20fa69e2f54670c7ceee61fec1c7a3 = $this->env->getExtension("native_profiler");
        $__internal_162041cc82e0733cd807c8a770517fbc3b20fa69e2f54670c7ceee61fec1c7a3->enter($__internal_162041cc82e0733cd807c8a770517fbc3b20fa69e2f54670c7ceee61fec1c7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_162041cc82e0733cd807c8a770517fbc3b20fa69e2f54670c7ceee61fec1c7a3->leave($__internal_162041cc82e0733cd807c8a770517fbc3b20fa69e2f54670c7ceee61fec1c7a3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
