<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_3c08aea6b49695d81f0878e24557b0647e097c33f0887a9adc083738d99949bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fc5ba3070151295107160d36909bacae082a87c121dff075798d7a5f813d93f = $this->env->getExtension("native_profiler");
        $__internal_4fc5ba3070151295107160d36909bacae082a87c121dff075798d7a5f813d93f->enter($__internal_4fc5ba3070151295107160d36909bacae082a87c121dff075798d7a5f813d93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fc5ba3070151295107160d36909bacae082a87c121dff075798d7a5f813d93f->leave($__internal_4fc5ba3070151295107160d36909bacae082a87c121dff075798d7a5f813d93f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_930c63948409ea3e5f6e6a34477eb51dd44d486c74227468212bf2a12481ae2b = $this->env->getExtension("native_profiler");
        $__internal_930c63948409ea3e5f6e6a34477eb51dd44d486c74227468212bf2a12481ae2b->enter($__internal_930c63948409ea3e5f6e6a34477eb51dd44d486c74227468212bf2a12481ae2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->loadTemplate("@WebProfiler/Profiler/header.html.twig", "@WebProfiler/Profiler/info.html.twig", 5)->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->loadTemplate("@WebProfiler/Profiler/admin.html.twig", "@WebProfiler/Profiler/info.html.twig", 38)->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_930c63948409ea3e5f6e6a34477eb51dd44d486c74227468212bf2a12481ae2b->leave($__internal_930c63948409ea3e5f6e6a34477eb51dd44d486c74227468212bf2a12481ae2b_prof);

    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bf3b2979dd0f9b5402d6804aaffe3bb8f8f4f841f23fbc75293c5a2f2088355 = $this->env->getExtension("native_profiler");
        $__internal_3bf3b2979dd0f9b5402d6804aaffe3bb8f8f4f841f23fbc75293c5a2f2088355->enter($__internal_3bf3b2979dd0f9b5402d6804aaffe3bb8f8f4f841f23fbc75293c5a2f2088355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif ((        // line 17
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif ((        // line 22
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif ((        // line 27
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
        
        $__internal_3bf3b2979dd0f9b5402d6804aaffe3bb8f8f4f841f23fbc75293c5a2f2088355->leave($__internal_3bf3b2979dd0f9b5402d6804aaffe3bb8f8f4f841f23fbc75293c5a2f2088355_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  114 => 30,  110 => 28,  108 => 27,  102 => 23,  100 => 22,  94 => 18,  92 => 17,  86 => 13,  83 => 12,  77 => 11,  66 => 39,  64 => 38,  60 => 37,  55 => 34,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
