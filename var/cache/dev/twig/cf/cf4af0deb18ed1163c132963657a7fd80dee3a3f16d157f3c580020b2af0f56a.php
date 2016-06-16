<?php

/* MCMyCurieBundle:Advert:index.html.twig */
class __TwigTemplate_191ae8cf03feb8600e0b446b4f9a4301496195014e2a5d09e0b2b3ca126b695f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d2b28048b51c3e16e70e54a5b55bbd5266400166311f7b0560b792d60f12247 = $this->env->getExtension("native_profiler");
        $__internal_3d2b28048b51c3e16e70e54a5b55bbd5266400166311f7b0560b792d60f12247->enter($__internal_3d2b28048b51c3e16e70e54a5b55bbd5266400166311f7b0560b792d60f12247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MCMyCurieBundle:Advert:index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Hello ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>

";
        
        $__internal_3d2b28048b51c3e16e70e54a5b55bbd5266400166311f7b0560b792d60f12247->leave($__internal_3d2b28048b51c3e16e70e54a5b55bbd5266400166311f7b0560b792d60f12247_prof);

    }

    public function getTemplateName()
    {
        return "MCMyCurieBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 9,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <title>Bienvenue sur ma première page avec OpenClassrooms !</title>*/
/*   </head>*/
/*   <body>*/
/*     <h1>Hello {{ nom }} !</h1>*/
/* */
/*     <p>*/
/*       Le Hello World est un grand classique en programmation.*/
/*       Il signifie énormément, car cela veut dire que vous avez*/
/*       réussi à exécuter le programme pour accomplir une tâche simple :*/
/*       afficher ce hello world !*/
/*     </p>*/
/*   </body>*/
/* </html>*/
/* */
/* */
