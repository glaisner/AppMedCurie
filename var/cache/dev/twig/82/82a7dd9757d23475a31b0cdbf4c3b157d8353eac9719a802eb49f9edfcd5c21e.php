<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e693f97a341927f97c26aa43d3042c2ec2499a5336d0baed1fb037a540eb9686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bec75e02e19f1626e5604b73225e2ea601f402d9e6aee23361c22d74318dfb6 = $this->env->getExtension("native_profiler");
        $__internal_8bec75e02e19f1626e5604b73225e2ea601f402d9e6aee23361c22d74318dfb6->enter($__internal_8bec75e02e19f1626e5604b73225e2ea601f402d9e6aee23361c22d74318dfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bec75e02e19f1626e5604b73225e2ea601f402d9e6aee23361c22d74318dfb6->leave($__internal_8bec75e02e19f1626e5604b73225e2ea601f402d9e6aee23361c22d74318dfb6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c611d61c1c43abe005756e2f6d79ce7d5802f03690e7561b2713ba41e3c09e3f = $this->env->getExtension("native_profiler");
        $__internal_c611d61c1c43abe005756e2f6d79ce7d5802f03690e7561b2713ba41e3c09e3f->enter($__internal_c611d61c1c43abe005756e2f6d79ce7d5802f03690e7561b2713ba41e3c09e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c611d61c1c43abe005756e2f6d79ce7d5802f03690e7561b2713ba41e3c09e3f->leave($__internal_c611d61c1c43abe005756e2f6d79ce7d5802f03690e7561b2713ba41e3c09e3f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_109c46104278f9d26576a63bbd529db7cfed8b07c8ede06b4ea331f2dfc5fc4f = $this->env->getExtension("native_profiler");
        $__internal_109c46104278f9d26576a63bbd529db7cfed8b07c8ede06b4ea331f2dfc5fc4f->enter($__internal_109c46104278f9d26576a63bbd529db7cfed8b07c8ede06b4ea331f2dfc5fc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_109c46104278f9d26576a63bbd529db7cfed8b07c8ede06b4ea331f2dfc5fc4f->leave($__internal_109c46104278f9d26576a63bbd529db7cfed8b07c8ede06b4ea331f2dfc5fc4f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7080d4b6ea51b711cab8a1d40c4843034682593c6c28ec485138669a2803f578 = $this->env->getExtension("native_profiler");
        $__internal_7080d4b6ea51b711cab8a1d40c4843034682593c6c28ec485138669a2803f578->enter($__internal_7080d4b6ea51b711cab8a1d40c4843034682593c6c28ec485138669a2803f578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7080d4b6ea51b711cab8a1d40c4843034682593c6c28ec485138669a2803f578->leave($__internal_7080d4b6ea51b711cab8a1d40c4843034682593c6c28ec485138669a2803f578_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
