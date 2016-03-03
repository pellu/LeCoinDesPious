<?php

/* WebProfilerBundle:Profiler:search.html.twig */
class __TwigTemplate_7f0b7c42137784eb4cc11ef57ad41a1de3153a0865a2fa50d4c71ab96d7420c5 extends Twig_Template
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
        // line 1
        echo "<div id=\"sidebar-search\">
    <form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("_profiler_search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
            <label for=\"ip\">IP</label>
            <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"method\">Method</label>
            <select name=\"method\" id=\"method\">
                <option value=\"\">Any</option>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "DELETE", 1 => "GET", 2 => "HEAD", 3 => "PATCH", 4 => "POST", 5 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                    <option ";
            echo ((($context["m"] == (isset($context["method"]) ? $context["method"] : null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
        </div>

        <div class=\"form-group\">
            <label for=\"url\">URL</label>
            <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"token\">Token</label>
            <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"start\">From</label>
            <input type=\"date\" name=\"start\" id=\"start\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["start"]) ? $context["start"] : null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"end\">Until</label>
            <input type=\"date\" name=\"end\" id=\"end\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["end"]) ? $context["end"] : null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"limit\">Results</label>
            <select name=\"limit\" id=\"limit\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 42
            echo "                    <option ";
            echo ((($context["l"] == (isset($context["limit"]) ? $context["limit"] : null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["l"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </select>
        </div>

        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-sm\">Search</button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 44,  97 => 42,  93 => 41,  84 => 35,  76 => 30,  68 => 25,  60 => 20,  53 => 15,  42 => 13,  38 => 12,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div id="sidebar-search">*/
/*     <form action="{{ path('_profiler_search') }}" method="get">*/
/*         <div class="form-group">*/
/*             <label for="ip">IP</label>*/
/*             <input type="text" name="ip" id="ip" value="{{ ip }}">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="method">Method</label>*/
/*             <select name="method" id="method">*/
/*                 <option value="">Any</option>*/
/*                 {% for m in ['DELETE', 'GET', 'HEAD', 'PATCH', 'POST', 'PUT'] %}*/
/*                     <option {{ m == method ? 'selected="selected"' }}>{{ m }}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="url">URL</label>*/
/*             <input type="text" name="url" id="url" value="{{ url }}">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="token">Token</label>*/
/*             <input type="text" name="token" id="token" value="{{ token }}">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="start">From</label>*/
/*             <input type="date" name="start" id="start" value="{{ start }}">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="end">Until</label>*/
/*             <input type="date" name="end" id="end" value="{{ end }}">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="limit">Results</label>*/
/*             <select name="limit" id="limit">*/
/*                 {% for l in [10, 50, 100] %}*/
/*                     <option {{ l == limit ? 'selected="selected"' }}>{{ l }}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <button type="submit" class="btn btn-sm">Search</button>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* */
