<?php

/* base.html.twig */
class __TwigTemplate_678b9fc7b1037ce018c4f713caa2ba816a61076ae5ef83bdb8ce27b296e17525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6677a84b7105fc2d2032c4cf57f30cce3efc96f8cd47144277e0727ce2a994d3 = $this->env->getExtension("native_profiler");
        $__internal_6677a84b7105fc2d2032c4cf57f30cce3efc96f8cd47144277e0727ce2a994d3->enter($__internal_6677a84b7105fc2d2032c4cf57f30cce3efc96f8cd47144277e0727ce2a994d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6677a84b7105fc2d2032c4cf57f30cce3efc96f8cd47144277e0727ce2a994d3->leave($__internal_6677a84b7105fc2d2032c4cf57f30cce3efc96f8cd47144277e0727ce2a994d3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e728a12a21e992e94acc5eda256470b1f069d871845e5ef4fdf8da74bb3a858 = $this->env->getExtension("native_profiler");
        $__internal_5e728a12a21e992e94acc5eda256470b1f069d871845e5ef4fdf8da74bb3a858->enter($__internal_5e728a12a21e992e94acc5eda256470b1f069d871845e5ef4fdf8da74bb3a858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5e728a12a21e992e94acc5eda256470b1f069d871845e5ef4fdf8da74bb3a858->leave($__internal_5e728a12a21e992e94acc5eda256470b1f069d871845e5ef4fdf8da74bb3a858_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d3a121dc79a60e536366f0fcebc8cd45751f16a8424df613573bfc4908c717d = $this->env->getExtension("native_profiler");
        $__internal_5d3a121dc79a60e536366f0fcebc8cd45751f16a8424df613573bfc4908c717d->enter($__internal_5d3a121dc79a60e536366f0fcebc8cd45751f16a8424df613573bfc4908c717d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5d3a121dc79a60e536366f0fcebc8cd45751f16a8424df613573bfc4908c717d->leave($__internal_5d3a121dc79a60e536366f0fcebc8cd45751f16a8424df613573bfc4908c717d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9804979cbd4776f6be7f1f80123fa73c387704796d532be7987292ffc4d41eba = $this->env->getExtension("native_profiler");
        $__internal_9804979cbd4776f6be7f1f80123fa73c387704796d532be7987292ffc4d41eba->enter($__internal_9804979cbd4776f6be7f1f80123fa73c387704796d532be7987292ffc4d41eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9804979cbd4776f6be7f1f80123fa73c387704796d532be7987292ffc4d41eba->leave($__internal_9804979cbd4776f6be7f1f80123fa73c387704796d532be7987292ffc4d41eba_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eabbfa7d091d55543559b230ff6daec329b75a611aa127df9878e972163105bb = $this->env->getExtension("native_profiler");
        $__internal_eabbfa7d091d55543559b230ff6daec329b75a611aa127df9878e972163105bb->enter($__internal_eabbfa7d091d55543559b230ff6daec329b75a611aa127df9878e972163105bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eabbfa7d091d55543559b230ff6daec329b75a611aa127df9878e972163105bb->leave($__internal_eabbfa7d091d55543559b230ff6daec329b75a611aa127df9878e972163105bb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
