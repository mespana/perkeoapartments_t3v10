<?php

class partial_Navigation_Main_ad7e724460ca64160ffe03c5f2825164cddc69c6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * section MainNavigation
 */
public function section_199fd3cbc502fb014cf96b9d63b613e89d1ba161(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments153 = array();

$output152 .= '';

$output152 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['then'] = NULL;
$arguments158['else'] = NULL;
$arguments158['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array160 = array();
$array161 = array (
);$array160['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array161);

$expression162 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments158['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression162(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array160)
					),
					$renderingContext
				);
$arguments158['then'] = ' active';

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['then'] = NULL;
$arguments163['else'] = NULL;
$arguments163['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array165 = array();
$array166 = array (
);$array165['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array166);

$expression167 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments163['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression167(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array165)
					),
					$renderingContext
				);
$arguments163['then'] = ' dropdown dropdown-hover';

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output157 .= '">
                            <a href="';
$array168 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array168)]);

$output157 .= '" id="nav-item-';
$array169 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array169)]);

$output157 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['then'] = NULL;
$arguments170['else'] = NULL;
$arguments170['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array172 = array();
$array173 = array (
);$array172['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array173);

$expression174 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments170['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression174(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array172)
					),
					$renderingContext
				);
$arguments170['then'] = ' dropdown-toggle';

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output157 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['then'] = NULL;
$arguments175['else'] = NULL;
$arguments175['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array177 = array();
$array178 = array (
);$array177['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array178);

$expression179 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments175['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression179(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array177)
					),
					$renderingContext
				);
$output180 = '';

$output180 .= ' target="';
$array181 = array (
);
$output180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array181)]);

$output180 .= '"';
$arguments175['then'] = $output180;

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output157 .= ' title="';
$array182 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array182)]);

$output157 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['then'] = NULL;
$arguments183['else'] = NULL;
$arguments183['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array185 = array();
$array186 = array (
);$array185['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array186);

$expression187 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments183['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression187(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array185)
					),
					$renderingContext
				);
$arguments183['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output157 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['icon'] = NULL;
$arguments195['height'] = NULL;
$arguments195['width'] = NULL;
$array197 = array (
);$arguments195['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array197);
$array198 = array (
);$arguments195['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array198);
$array199 = array (
);$arguments195['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array199);

$output194 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output194 .= '
                                    </span>
                                ';
return $output194;
};
$arguments188 = array();
$arguments188['then'] = NULL;
$arguments188['else'] = NULL;
$arguments188['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array190 = array();
$array191 = array (
);$array190['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array191);
$array190['1'] = ' && ';
$array192 = array (
);$array190['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array192);

$expression193 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments188['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array190)
					),
					$renderingContext
				);
$arguments188['__thenClosure'] = $renderChildrenClosure189;

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output157 .= '
                                <span class="nav-link-text">';
$array200 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array200)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array203 = array();
$array204 = array (
);$array203['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array204);

$expression205 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array203)
					),
					$renderingContext
				);
$arguments201['__thenClosure'] = $renderChildrenClosure202;

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output157 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array212 = array (
);
$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array212)]);

$output211 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments256 = array();

$output255 .= '';

$output255 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
                                                <li>
                                                    <a href="';
$array261 = array (
);
$output260 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array261)]);

$output260 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['then'] = NULL;
$arguments262['else'] = NULL;
$arguments262['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array264 = array();
$array265 = array (
);$array264['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array265);

$expression266 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments262['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression266(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array264)
					),
					$renderingContext
				);
$arguments262['then'] = ' active';

$output260 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output260 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['then'] = NULL;
$arguments267['else'] = NULL;
$arguments267['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array269 = array();
$array270 = array (
);$array269['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array270);

$expression271 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments267['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression271(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array269)
					),
					$renderingContext
				);
$output272 = '';

$output272 .= ' target="';
$array273 = array (
);
$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array273)]);

$output272 .= '"';
$arguments267['then'] = $output272;

$output260 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output260 .= ' title="';
$array274 = array (
);
$output260 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array274)]);

$output260 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output281 = '';

$output281 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['icon'] = NULL;
$arguments282['height'] = NULL;
$arguments282['width'] = NULL;
$array284 = array (
);$arguments282['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array284);
$array285 = array (
);$arguments282['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array285);
$array286 = array (
);$arguments282['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array286);

$output281 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output281 .= '
                                                            </span>
                                                        ';
return $output281;
};
$arguments275 = array();
$arguments275['then'] = NULL;
$arguments275['else'] = NULL;
$arguments275['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array278);
$array277['1'] = ' && ';
$array279 = array (
);$array277['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array279);

$expression280 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments275['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression280(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$arguments275['__thenClosure'] = $renderChildrenClosure276;

$output260 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output260 .= '
                                                        <span class="dropdown-text">';
$array287 = array (
);
$output260 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array287)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments288 = array();
$arguments288['then'] = NULL;
$arguments288['else'] = NULL;
$arguments288['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array290 = array();
$array291 = array (
);$array290['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array291);

$expression292 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments288['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression292(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array290)
					),
					$renderingContext
				);
$arguments288['__thenClosure'] = $renderChildrenClosure289;

$output260 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output260 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output260;
};
$arguments258 = array();
$arguments258['if'] = NULL;

$output255 .= '';

$output255 .= '
                                        ';
return $output255;
};
$arguments217 = array();
$arguments217['then'] = NULL;
$arguments217['else'] = NULL;
$arguments217['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array252 = array();
$array253 = array (
);$array252['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array253);

$expression254 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments217['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression254(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array252)
					),
					$renderingContext
				);
$arguments217['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments217['__elseClosures'][] = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
                                                <li>
                                                    <a href="';
$array220 = array (
);
$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array220)]);

$output219 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['then'] = NULL;
$arguments221['else'] = NULL;
$arguments221['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array223 = array();
$array224 = array (
);$array223['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array224);

$expression225 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments221['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression225(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array223)
					),
					$renderingContext
				);
$arguments221['then'] = ' active';

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output219 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['then'] = NULL;
$arguments226['else'] = NULL;
$arguments226['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array228 = array();
$array229 = array (
);$array228['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array229);

$expression230 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments226['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression230(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array228)
					),
					$renderingContext
				);
$output231 = '';

$output231 .= ' target="';
$array232 = array (
);
$output231 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array232)]);

$output231 .= '"';
$arguments226['then'] = $output231;

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output219 .= ' title="';
$array233 = array (
);
$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array233)]);

$output219 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['icon'] = NULL;
$arguments241['height'] = NULL;
$arguments241['width'] = NULL;
$array243 = array (
);$arguments241['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array243);
$array244 = array (
);$arguments241['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array244);
$array245 = array (
);$arguments241['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array245);

$output240 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
                                                            </span>
                                                        ';
return $output240;
};
$arguments234 = array();
$arguments234['then'] = NULL;
$arguments234['else'] = NULL;
$arguments234['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array236 = array();
$array237 = array (
);$array236['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array237);
$array236['1'] = ' && ';
$array238 = array (
);$array236['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array238);

$expression239 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments234['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression239(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array236)
					),
					$renderingContext
				);
$arguments234['__thenClosure'] = $renderChildrenClosure235;

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output219 .= '
                                                        <span class="dropdown-text">';
$array246 = array (
);
$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array246)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments247 = array();
$arguments247['then'] = NULL;
$arguments247['else'] = NULL;
$arguments247['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array249 = array();
$array250 = array (
);$array249['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array250);

$expression251 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments247['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression251(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array249)
					),
					$renderingContext
				);
$arguments247['__thenClosure'] = $renderChildrenClosure248;

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output219 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output219;
};

$output216 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
                                    ';
return $output216;
};
$arguments213 = array();
$arguments213['each'] = NULL;
$arguments213['as'] = NULL;
$arguments213['key'] = NULL;
$arguments213['reverse'] = false;
$arguments213['iteration'] = NULL;
$array215 = array (
);$arguments213['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array215);
$arguments213['as'] = 'child';

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output211 .= '
                                </ul>
                            ';
return $output211;
};
$arguments206 = array();
$arguments206['then'] = NULL;
$arguments206['else'] = NULL;
$arguments206['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array208 = array();
$array209 = array (
);$array208['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array209);

$expression210 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments206['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression210(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array208)
					),
					$renderingContext
				);
$arguments206['__thenClosure'] = $renderChildrenClosure207;

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output157 .= '
                        </li>
                    ';
return $output157;
};
$arguments155 = array();
$arguments155['if'] = NULL;

$output152 .= '';

$output152 .= '
                ';
return $output152;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array150);

$expression151 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments11['__elseClosures'][] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['then'] = ' active';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array22);

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['then'] = ' dropdown dropdown-hover';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output13 .= '">
                            <a href="';
$array24 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array24)]);

$output13 .= '" id="nav-item-';
$array25 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array25)]);

$output13 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['then'] = ' dropdown-toggle';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$output36 = '';

$output36 .= ' target="';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array37)]);

$output36 .= '"';
$arguments31['then'] = $output36;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output13 .= ' title="';
$array38 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array38)]);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array42);

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output13 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['icon'] = NULL;
$arguments51['height'] = NULL;
$arguments51['width'] = NULL;
$array53 = array (
);$arguments51['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array53);
$array54 = array (
);$arguments51['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array54);
$array55 = array (
);$arguments51['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array55);

$output50 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
                                    </span>
                                ';
return $output50;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array47);
$array46['1'] = ' && ';
$array48 = array (
);$array46['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array48);

$expression49 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['__thenClosure'] = $renderChildrenClosure45;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output13 .= '
                                <span class="nav-link-text">';
$array56 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array56)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments57 = array();
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$arguments57['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array60);

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments57['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments57['__thenClosure'] = $renderChildrenClosure58;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output13 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array68 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array68)]);

$output67 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments112 = array();

$output111 .= '';

$output111 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
                                                <li>
                                                    <a href="';
$array117 = array (
);
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array117)]);

$output116 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['then'] = NULL;
$arguments118['else'] = NULL;
$arguments118['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array121);

$expression122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments118['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);
$arguments118['then'] = ' active';

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output116 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array126 = array (
);$array125['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array126);

$expression127 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression127(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$output128 = '';

$output128 .= ' target="';
$array129 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array129)]);

$output128 .= '"';
$arguments123['then'] = $output128;

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output116 .= ' title="';
$array130 = array (
);
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array130)]);

$output116 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['icon'] = NULL;
$arguments138['height'] = NULL;
$arguments138['width'] = NULL;
$array140 = array (
);$arguments138['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array140);
$array141 = array (
);$arguments138['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array141);
$array142 = array (
);$arguments138['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array142);

$output137 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
                                                            </span>
                                                        ';
return $output137;
};
$arguments131 = array();
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$arguments131['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array133 = array();
$array134 = array (
);$array133['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array134);
$array133['1'] = ' && ';
$array135 = array (
);$array133['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array135);

$expression136 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments131['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);
$arguments131['__thenClosure'] = $renderChildrenClosure132;

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output116 .= '
                                                        <span class="dropdown-text">';
$array143 = array (
);
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array143)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments144 = array();
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$arguments144['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array147);

$expression148 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments144['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments144['__thenClosure'] = $renderChildrenClosure145;

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output116 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output116;
};
$arguments114 = array();
$arguments114['if'] = NULL;

$output111 .= '';

$output111 .= '
                                        ';
return $output111;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array109);

$expression110 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments73['__elseClosures'][] = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
                                                <li>
                                                    <a href="';
$array76 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array76)]);

$output75 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array80);

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['then'] = ' active';

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output75 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array85 = array (
);$array84['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array85);

$expression86 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$output87 = '';

$output87 .= ' target="';
$array88 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array88)]);

$output87 .= '"';
$arguments82['then'] = $output87;

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output75 .= ' title="';
$array89 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array89)]);

$output75 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['icon'] = NULL;
$arguments97['height'] = NULL;
$arguments97['width'] = NULL;
$array99 = array (
);$arguments97['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array99);
$array100 = array (
);$arguments97['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array100);
$array101 = array (
);$arguments97['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array101);

$output96 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
                                                            </span>
                                                        ';
return $output96;
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array93);
$array92['1'] = ' && ';
$array94 = array (
);$array92['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array94);

$expression95 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = $renderChildrenClosure91;

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output75 .= '
                                                        <span class="dropdown-text">';
$array102 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array102)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array106);

$expression107 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = $renderChildrenClosure104;

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output75 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output75;
};

$output72 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
                                    ';
return $output72;
};
$arguments69 = array();
$arguments69['each'] = NULL;
$arguments69['as'] = NULL;
$arguments69['key'] = NULL;
$arguments69['reverse'] = false;
$arguments69['iteration'] = NULL;
$array71 = array (
);$arguments69['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array71);
$arguments69['as'] = 'child';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output67 .= '
                                </ul>
                            ';
return $output67;
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array65);

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = $renderChildrenClosure63;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output13 .= '
                        </li>
                    ';
return $output13;
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
            ';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array9);
$arguments7['as'] = 'item';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
        </ul>
    ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output293 = '';

$output293 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= 'bp-page-header navbar navbar-mainnavigation navbar-';
$array297 = array (
);
$output296 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.style', $array297);
return $output296;
};
$arguments294 = array();
$arguments294['value'] = NULL;
$arguments294['name'] = NULL;
$arguments294['name'] = 'headerClass';
$renderChildrenClosure295 = ($arguments294['value'] !== null) ? function() use ($arguments294) { return $arguments294['value']; } : $renderChildrenClosure295;
$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext)]);

$output293 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$output300 = '';
$array301 = array (
);
$output300 .= $renderingContext->getVariableProvider()->getByPath('headerClass', $array301);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['then'] = NULL;
$arguments302['else'] = NULL;
$arguments302['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array304 = array();
$array305 = array (
);$array304['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array305);

$expression306 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments302['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression306(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array304)
					),
					$renderingContext
				);
$arguments302['then'] = ' navbar-has-image';

$output300 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);
return $output300;
};
$arguments298 = array();
$arguments298['value'] = NULL;
$arguments298['name'] = NULL;
$arguments298['name'] = 'headerClass';
$renderChildrenClosure299 = ($arguments298['value'] !== null) ? function() use ($arguments298) { return $arguments298['value']; } : $renderChildrenClosure299;
$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext)]);

$output293 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$output309 = '';
$array310 = array (
);
$output309 .= $renderingContext->getVariableProvider()->getByPath('headerClass', $array310);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments311 = array();
$arguments311['then'] = NULL;
$arguments311['else'] = NULL;
$arguments311['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array313 = array();
$array314 = array (
);$array313['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array314);

$expression315 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments311['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression315(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array313)
					),
					$renderingContext
				);
$arguments311['else'] = ' navbar-top';
$output316 = '';

$output316 .= ' navbar-';
$array317 = array (
);
$output316 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array317);

$output316 .= ' navbar-fixed-';
$array318 = array (
);
$output316 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array318);
$arguments311['then'] = $output316;

$output309 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);
return $output309;
};
$arguments307 = array();
$arguments307['value'] = NULL;
$arguments307['name'] = NULL;
$arguments307['name'] = 'headerClass';
$renderChildrenClosure308 = ($arguments307['value'] !== null) ? function() use ($arguments307) { return $arguments307['value']; } : $renderChildrenClosure308;
$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext)]);

$output293 .= '
<header id="page-header" class="';
$array319 = array (
);
$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headerClass', $array319)]);

$output293 .= '">
    <div class="wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col d-flex align-items-center">
                    <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+49(0)6221-14130</a> or <span class="mailus">email us:</span> <a href="mailto:kontakt@perkeo-apartments.de">kontakt@perkeo-apartments.de</a>
                </div> 
                <div class="col d-flex justify-content-end">
                    <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fab fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fab fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fab fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fab fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <div class="container">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$output330 = '';

$output330 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
$output357 = '';

$output357 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$output360 = '';

$output360 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments361 = array();
$arguments361['src'] = '';
$arguments361['treatIdAsReference'] = false;
$arguments361['image'] = NULL;
$arguments361['crop'] = NULL;
$arguments361['cropVariant'] = 'default';
$arguments361['fileExtension'] = NULL;
$arguments361['width'] = NULL;
$arguments361['height'] = NULL;
$arguments361['minWidth'] = NULL;
$arguments361['minHeight'] = NULL;
$arguments361['maxWidth'] = NULL;
$arguments361['maxHeight'] = NULL;
$arguments361['absolute'] = false;
$array363 = array (
);$arguments361['image'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array363);

$output360 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext)]);

$output360 .= '" alt="';
$array364 = array (
);
$output360 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array364)]);

$output360 .= '" height="';
$array365 = array (
);
$output360 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array365)]);

$output360 .= '" width="';
$array366 = array (
);
$output360 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array366)]);

$output360 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments373 = array();
$arguments373['src'] = '';
$arguments373['treatIdAsReference'] = false;
$arguments373['image'] = NULL;
$arguments373['crop'] = NULL;
$arguments373['cropVariant'] = 'default';
$arguments373['fileExtension'] = NULL;
$arguments373['width'] = NULL;
$arguments373['height'] = NULL;
$arguments373['minWidth'] = NULL;
$arguments373['minHeight'] = NULL;
$arguments373['maxWidth'] = NULL;
$arguments373['maxHeight'] = NULL;
$arguments373['absolute'] = false;
$array375 = array (
);$arguments373['image'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array375);

$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext)]);

$output372 .= '" alt="';
$array376 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array376)]);

$output372 .= '" height="';
$array377 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array377)]);

$output372 .= '" width="';
$array378 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array378)]);

$output372 .= '">
                    ';
return $output372;
};
$arguments367 = array();
$arguments367['then'] = NULL;
$arguments367['else'] = NULL;
$arguments367['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array369 = array();
$array370 = array (
);$array369['0'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array370);

$expression371 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments367['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression371(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array369)
					),
					$renderingContext
				);
$arguments367['__thenClosure'] = $renderChildrenClosure368;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output360 .= '
                ';
return $output360;
};
$arguments358 = array();

$output357 .= '';

$output357 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
                    <span>';
$array382 = array (
);
$output381 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array382)]);

$output381 .= '</span>
                ';
return $output381;
};
$arguments379 = array();
$arguments379['if'] = NULL;

$output357 .= '';

$output357 .= '
            ';
return $output357;
};
$arguments331 = array();
$arguments331['then'] = NULL;
$arguments331['else'] = NULL;
$arguments331['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array354 = array();
$array355 = array (
);$array354['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array355);

$expression356 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments331['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression356(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array354)
					),
					$renderingContext
				);
$arguments331['__thenClosure'] = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['src'] = '';
$arguments334['treatIdAsReference'] = false;
$arguments334['image'] = NULL;
$arguments334['crop'] = NULL;
$arguments334['cropVariant'] = 'default';
$arguments334['fileExtension'] = NULL;
$arguments334['width'] = NULL;
$arguments334['height'] = NULL;
$arguments334['minWidth'] = NULL;
$arguments334['minHeight'] = NULL;
$arguments334['maxWidth'] = NULL;
$arguments334['maxHeight'] = NULL;
$arguments334['absolute'] = false;
$array336 = array (
);$arguments334['image'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array336);

$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext)]);

$output333 .= '" alt="';
$array337 = array (
);
$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array337)]);

$output333 .= '" height="';
$array338 = array (
);
$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array338)]);

$output333 .= '" width="';
$array339 = array (
);
$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array339)]);

$output333 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments346 = array();
$arguments346['src'] = '';
$arguments346['treatIdAsReference'] = false;
$arguments346['image'] = NULL;
$arguments346['crop'] = NULL;
$arguments346['cropVariant'] = 'default';
$arguments346['fileExtension'] = NULL;
$arguments346['width'] = NULL;
$arguments346['height'] = NULL;
$arguments346['minWidth'] = NULL;
$arguments346['minHeight'] = NULL;
$arguments346['maxWidth'] = NULL;
$arguments346['maxHeight'] = NULL;
$arguments346['absolute'] = false;
$array348 = array (
);$arguments346['image'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array348);

$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext)]);

$output345 .= '" alt="';
$array349 = array (
);
$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array349)]);

$output345 .= '" height="';
$array350 = array (
);
$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array350)]);

$output345 .= '" width="';
$array351 = array (
);
$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array351)]);

$output345 .= '">
                    ';
return $output345;
};
$arguments340 = array();
$arguments340['then'] = NULL;
$arguments340['else'] = NULL;
$arguments340['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array342 = array();
$array343 = array (
);$array342['0'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array343);

$expression344 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments340['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression344(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array342)
					),
					$renderingContext
				);
$arguments340['__thenClosure'] = $renderChildrenClosure341;

$output333 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output333 .= '
                ';
return $output333;
};
$arguments331['__elseClosures'][] = function() use ($renderingContext, $self) {
$output352 = '';

$output352 .= '
                    <span>';
$array353 = array (
);
$output352 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array353)]);

$output352 .= '</span>
                ';
return $output352;
};

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output330 .= '
        ';
return $output330;
};
$arguments320 = array();
$arguments320['additionalAttributes'] = NULL;
$arguments320['data'] = NULL;
$arguments320['aria'] = NULL;
$arguments320['class'] = NULL;
$arguments320['dir'] = NULL;
$arguments320['id'] = NULL;
$arguments320['lang'] = NULL;
$arguments320['style'] = NULL;
$arguments320['title'] = NULL;
$arguments320['accesskey'] = NULL;
$arguments320['tabindex'] = NULL;
$arguments320['onclick'] = NULL;
$arguments320['target'] = NULL;
$arguments320['rel'] = NULL;
$arguments320['pageUid'] = NULL;
$arguments320['pageType'] = NULL;
$arguments320['noCache'] = NULL;
$arguments320['language'] = NULL;
$arguments320['noCacheHash'] = NULL;
$arguments320['section'] = NULL;
$arguments320['linkAccessRestrictedPages'] = NULL;
$arguments320['additionalParams'] = NULL;
$arguments320['absolute'] = NULL;
$arguments320['addQueryString'] = NULL;
$arguments320['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments320['addQueryStringMethod'] = NULL;
$array322 = array (
);$arguments320['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array322);
$output323 = '';

$output323 .= 'navbar-brand navbar-brand-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments324 = array();
$arguments324['then'] = NULL;
$arguments324['else'] = NULL;
$arguments324['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array326 = array();
$array327 = array (
);$array326['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array327);

$expression328 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments324['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression328(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array326)
					),
					$renderingContext
				);
$arguments324['then'] = 'image';
$arguments324['else'] = 'text';

$output323 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);
$arguments320['class'] = $output323;
$array329 = array (
);$arguments320['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array329);

$output293 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output293 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
return ' <a class="navbar-brand">Perkeo<span>Apartments</span> in Heidelberg</a>
        ';
};
$arguments383 = array();
$arguments383['additionalAttributes'] = NULL;
$arguments383['data'] = NULL;
$arguments383['aria'] = NULL;
$arguments383['class'] = NULL;
$arguments383['dir'] = NULL;
$arguments383['id'] = NULL;
$arguments383['lang'] = NULL;
$arguments383['style'] = NULL;
$arguments383['title'] = NULL;
$arguments383['accesskey'] = NULL;
$arguments383['tabindex'] = NULL;
$arguments383['onclick'] = NULL;
$arguments383['target'] = NULL;
$arguments383['rel'] = NULL;
$arguments383['pageUid'] = NULL;
$arguments383['pageType'] = NULL;
$arguments383['noCache'] = NULL;
$arguments383['language'] = NULL;
$arguments383['noCacheHash'] = NULL;
$arguments383['section'] = NULL;
$arguments383['linkAccessRestrictedPages'] = NULL;
$arguments383['additionalParams'] = NULL;
$arguments383['absolute'] = NULL;
$arguments383['addQueryString'] = NULL;
$arguments383['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments383['addQueryStringMethod'] = NULL;
$array385 = array (
);$arguments383['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array385);

$output293 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output293 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
$output391 = '';

$output391 .= '
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#mainnavigation" data-bs-target="#mainnavigation" aria-controls="mainnavigation" aria-expanded="false" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments392 = array();
$arguments392['key'] = NULL;
$arguments392['id'] = NULL;
$arguments392['default'] = NULL;
$arguments392['arguments'] = NULL;
$arguments392['extensionName'] = NULL;
$arguments392['languageKey'] = NULL;
$arguments392['alternativeLanguageKeys'] = NULL;
$arguments392['key'] = 'togglenavigation';
$arguments392['extensionName'] = 'bootstrap_package';

$output391 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext)]);

$output391 .= '">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav id="mainnavigation" class="collapse navbar-collapse">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments394 = array();
$arguments394['section'] = NULL;
$arguments394['partial'] = NULL;
$arguments394['delegate'] = NULL;
$arguments394['renderable'] = NULL;
$arguments394['arguments'] = array (
);
$arguments394['optional'] = false;
$arguments394['default'] = NULL;
$arguments394['contentAs'] = NULL;
$arguments394['debug'] = true;
$arguments394['partial'] = 'DropIn/Navigation/MainBefore';
$arguments394['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output391 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output391 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments397 = array();
$arguments397['section'] = NULL;
$arguments397['partial'] = NULL;
$arguments397['delegate'] = NULL;
$arguments397['renderable'] = NULL;
$arguments397['arguments'] = array (
);
$arguments397['optional'] = false;
$arguments397['default'] = NULL;
$arguments397['contentAs'] = NULL;
$arguments397['debug'] = true;
$arguments397['section'] = 'MainNavigation';
// Rendering Array
$array399 = array();
$array400 = array (
);$array399['menu'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array400);
$array401 = array (
);$array399['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array401);
$arguments397['arguments'] = $array399;

$output391 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output391 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments402 = array();
$arguments402['section'] = NULL;
$arguments402['partial'] = NULL;
$arguments402['delegate'] = NULL;
$arguments402['renderable'] = NULL;
$arguments402['arguments'] = array (
);
$arguments402['optional'] = false;
$arguments402['default'] = NULL;
$arguments402['contentAs'] = NULL;
$arguments402['debug'] = true;
$arguments402['partial'] = 'DropIn/Navigation/MainAfter';
$arguments402['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output391 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output391 .= '
            </nav>
        ';
return $output391;
};
$arguments386 = array();
$arguments386['then'] = NULL;
$arguments386['else'] = NULL;
$arguments386['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array388 = array();
$array389 = array (
);$array388['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array389);

$expression390 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments386['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression390(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array388)
					),
					$renderingContext
				);
$arguments386['__thenClosure'] = $renderChildrenClosure387;

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext);

$output293 .= '
    </div>
</header>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
$output407 = '';

$output407 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
$output413 = '';

$output413 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
$output417 = '';

$output417 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
$output559 = '';

$output559 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure561 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments560 = array();

$output559 .= '';

$output559 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
$output564 = '';

$output564 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure566 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments565 = array();
$arguments565['then'] = NULL;
$arguments565['else'] = NULL;
$arguments565['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array567 = array();
$array568 = array (
);$array567['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array568);

$expression569 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments565['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression569(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array567)
					),
					$renderingContext
				);
$arguments565['then'] = ' active';

$output564 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments565, $renderChildrenClosure566, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments570 = array();
$arguments570['then'] = NULL;
$arguments570['else'] = NULL;
$arguments570['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array572 = array();
$array573 = array (
);$array572['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array573);

$expression574 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments570['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression574(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array572)
					),
					$renderingContext
				);
$arguments570['then'] = ' dropdown dropdown-hover';

$output564 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext);

$output564 .= '">
                            <a href="';
$array575 = array (
);
$output564 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array575)]);

$output564 .= '" id="nav-item-';
$array576 = array (
);
$output564 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array576)]);

$output564 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments577 = array();
$arguments577['then'] = NULL;
$arguments577['else'] = NULL;
$arguments577['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array579 = array();
$array580 = array (
);$array579['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array580);

$expression581 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments577['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression581(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array579)
					),
					$renderingContext
				);
$arguments577['then'] = ' dropdown-toggle';

$output564 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext);

$output564 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure583 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments582 = array();
$arguments582['then'] = NULL;
$arguments582['else'] = NULL;
$arguments582['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array584 = array();
$array585 = array (
);$array584['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array585);

$expression586 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments582['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression586(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array584)
					),
					$renderingContext
				);
$output587 = '';

$output587 .= ' target="';
$array588 = array (
);
$output587 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array588)]);

$output587 .= '"';
$arguments582['then'] = $output587;

$output564 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments582, $renderChildrenClosure583, $renderingContext);

$output564 .= ' title="';
$array589 = array (
);
$output564 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array589)]);

$output564 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure591 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments590 = array();
$arguments590['then'] = NULL;
$arguments590['else'] = NULL;
$arguments590['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array592 = array();
$array593 = array (
);$array592['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array593);

$expression594 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments590['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression594(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array592)
					),
					$renderingContext
				);
$arguments590['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output564 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments590, $renderChildrenClosure591, $renderingContext);

$output564 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure596 = function() use ($renderingContext, $self) {
$output601 = '';

$output601 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments602 = array();
$arguments602['icon'] = NULL;
$arguments602['height'] = NULL;
$arguments602['width'] = NULL;
$array604 = array (
);$arguments602['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array604);
$array605 = array (
);$arguments602['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array605);
$array606 = array (
);$arguments602['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array606);

$output601 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext);

$output601 .= '
                                    </span>
                                ';
return $output601;
};
$arguments595 = array();
$arguments595['then'] = NULL;
$arguments595['else'] = NULL;
$arguments595['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array597 = array();
$array598 = array (
);$array597['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array598);
$array597['1'] = ' && ';
$array599 = array (
);$array597['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array599);

$expression600 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments595['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression600(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array597)
					),
					$renderingContext
				);
$arguments595['__thenClosure'] = $renderChildrenClosure596;

$output564 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments595, $renderChildrenClosure596, $renderingContext);

$output564 .= '
                                <span class="nav-link-text">';
$array607 = array (
);
$output564 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array607)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure609 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments608 = array();
$arguments608['then'] = NULL;
$arguments608['else'] = NULL;
$arguments608['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array610 = array();
$array611 = array (
);$array610['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array611);

$expression612 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments608['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression612(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array610)
					),
					$renderingContext
				);
$arguments608['__thenClosure'] = $renderChildrenClosure609;

$output564 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments608, $renderChildrenClosure609, $renderingContext);

$output564 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure614 = function() use ($renderingContext, $self) {
$output618 = '';

$output618 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array619 = array (
);
$output618 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array619)]);

$output618 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure621 = function() use ($renderingContext, $self) {
$output623 = '';

$output623 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
$output662 = '';

$output662 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure664 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments663 = array();

$output662 .= '';

$output662 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure666 = function() use ($renderingContext, $self) {
$output667 = '';

$output667 .= '
                                                <li>
                                                    <a href="';
$array668 = array (
);
$output667 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array668)]);

$output667 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure670 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments669 = array();
$arguments669['then'] = NULL;
$arguments669['else'] = NULL;
$arguments669['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array671 = array();
$array672 = array (
);$array671['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array672);

$expression673 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments669['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression673(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array671)
					),
					$renderingContext
				);
$arguments669['then'] = ' active';

$output667 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments669, $renderChildrenClosure670, $renderingContext);

$output667 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments674 = array();
$arguments674['then'] = NULL;
$arguments674['else'] = NULL;
$arguments674['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array676 = array();
$array677 = array (
);$array676['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array677);

$expression678 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments674['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression678(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array676)
					),
					$renderingContext
				);
$output679 = '';

$output679 .= ' target="';
$array680 = array (
);
$output679 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array680)]);

$output679 .= '"';
$arguments674['then'] = $output679;

$output667 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments674, $renderChildrenClosure675, $renderingContext);

$output667 .= ' title="';
$array681 = array (
);
$output667 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array681)]);

$output667 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure683 = function() use ($renderingContext, $self) {
$output688 = '';

$output688 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments689 = array();
$arguments689['icon'] = NULL;
$arguments689['height'] = NULL;
$arguments689['width'] = NULL;
$array691 = array (
);$arguments689['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array691);
$array692 = array (
);$arguments689['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array692);
$array693 = array (
);$arguments689['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array693);

$output688 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments689, $renderChildrenClosure690, $renderingContext);

$output688 .= '
                                                            </span>
                                                        ';
return $output688;
};
$arguments682 = array();
$arguments682['then'] = NULL;
$arguments682['else'] = NULL;
$arguments682['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array684 = array();
$array685 = array (
);$array684['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array685);
$array684['1'] = ' && ';
$array686 = array (
);$array684['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array686);

$expression687 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments682['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression687(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array684)
					),
					$renderingContext
				);
$arguments682['__thenClosure'] = $renderChildrenClosure683;

$output667 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments682, $renderChildrenClosure683, $renderingContext);

$output667 .= '
                                                        <span class="dropdown-text">';
$array694 = array (
);
$output667 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array694)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure696 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments695 = array();
$arguments695['then'] = NULL;
$arguments695['else'] = NULL;
$arguments695['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array697 = array();
$array698 = array (
);$array697['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array698);

$expression699 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments695['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression699(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array697)
					),
					$renderingContext
				);
$arguments695['__thenClosure'] = $renderChildrenClosure696;

$output667 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments695, $renderChildrenClosure696, $renderingContext);

$output667 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output667;
};
$arguments665 = array();
$arguments665['if'] = NULL;

$output662 .= '';

$output662 .= '
                                        ';
return $output662;
};
$arguments624 = array();
$arguments624['then'] = NULL;
$arguments624['else'] = NULL;
$arguments624['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array659 = array();
$array660 = array (
);$array659['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array660);

$expression661 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments624['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression661(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array659)
					),
					$renderingContext
				);
$arguments624['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments624['__elseClosures'][] = function() use ($renderingContext, $self) {
$output626 = '';

$output626 .= '
                                                <li>
                                                    <a href="';
$array627 = array (
);
$output626 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array627)]);

$output626 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure629 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments628 = array();
$arguments628['then'] = NULL;
$arguments628['else'] = NULL;
$arguments628['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array630 = array();
$array631 = array (
);$array630['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array631);

$expression632 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments628['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression632(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array630)
					),
					$renderingContext
				);
$arguments628['then'] = ' active';

$output626 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments628, $renderChildrenClosure629, $renderingContext);

$output626 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure634 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments633 = array();
$arguments633['then'] = NULL;
$arguments633['else'] = NULL;
$arguments633['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array635 = array();
$array636 = array (
);$array635['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array636);

$expression637 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments633['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression637(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array635)
					),
					$renderingContext
				);
$output638 = '';

$output638 .= ' target="';
$array639 = array (
);
$output638 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array639)]);

$output638 .= '"';
$arguments633['then'] = $output638;

$output626 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments633, $renderChildrenClosure634, $renderingContext);

$output626 .= ' title="';
$array640 = array (
);
$output626 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array640)]);

$output626 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure642 = function() use ($renderingContext, $self) {
$output647 = '';

$output647 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure649 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments648 = array();
$arguments648['icon'] = NULL;
$arguments648['height'] = NULL;
$arguments648['width'] = NULL;
$array650 = array (
);$arguments648['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array650);
$array651 = array (
);$arguments648['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array651);
$array652 = array (
);$arguments648['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array652);

$output647 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments648, $renderChildrenClosure649, $renderingContext);

$output647 .= '
                                                            </span>
                                                        ';
return $output647;
};
$arguments641 = array();
$arguments641['then'] = NULL;
$arguments641['else'] = NULL;
$arguments641['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array643 = array();
$array644 = array (
);$array643['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array644);
$array643['1'] = ' && ';
$array645 = array (
);$array643['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array645);

$expression646 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments641['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression646(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array643)
					),
					$renderingContext
				);
$arguments641['__thenClosure'] = $renderChildrenClosure642;

$output626 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments641, $renderChildrenClosure642, $renderingContext);

$output626 .= '
                                                        <span class="dropdown-text">';
$array653 = array (
);
$output626 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array653)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments654 = array();
$arguments654['then'] = NULL;
$arguments654['else'] = NULL;
$arguments654['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array656 = array();
$array657 = array (
);$array656['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array657);

$expression658 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments654['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression658(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array656)
					),
					$renderingContext
				);
$arguments654['__thenClosure'] = $renderChildrenClosure655;

$output626 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments654, $renderChildrenClosure655, $renderingContext);

$output626 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output626;
};

$output623 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments624, $renderChildrenClosure625, $renderingContext);

$output623 .= '
                                    ';
return $output623;
};
$arguments620 = array();
$arguments620['each'] = NULL;
$arguments620['as'] = NULL;
$arguments620['key'] = NULL;
$arguments620['reverse'] = false;
$arguments620['iteration'] = NULL;
$array622 = array (
);$arguments620['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array622);
$arguments620['as'] = 'child';

$output618 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments620, $renderChildrenClosure621, $renderingContext);

$output618 .= '
                                </ul>
                            ';
return $output618;
};
$arguments613 = array();
$arguments613['then'] = NULL;
$arguments613['else'] = NULL;
$arguments613['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array615 = array();
$array616 = array (
);$array615['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array616);

$expression617 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments613['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression617(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array615)
					),
					$renderingContext
				);
$arguments613['__thenClosure'] = $renderChildrenClosure614;

$output564 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments613, $renderChildrenClosure614, $renderingContext);

$output564 .= '
                        </li>
                    ';
return $output564;
};
$arguments562 = array();
$arguments562['if'] = NULL;

$output559 .= '';

$output559 .= '
                ';
return $output559;
};
$arguments418 = array();
$arguments418['then'] = NULL;
$arguments418['else'] = NULL;
$arguments418['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array556 = array();
$array557 = array (
);$array556['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array557);

$expression558 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments418['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression558(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array556)
					),
					$renderingContext
				);
$arguments418['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments418['__elseClosures'][] = function() use ($renderingContext, $self) {
$output420 = '';

$output420 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments421 = array();
$arguments421['then'] = NULL;
$arguments421['else'] = NULL;
$arguments421['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array423 = array();
$array424 = array (
);$array423['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array424);

$expression425 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments421['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression425(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array423)
					),
					$renderingContext
				);
$arguments421['then'] = ' active';

$output420 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments426 = array();
$arguments426['then'] = NULL;
$arguments426['else'] = NULL;
$arguments426['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array428 = array();
$array429 = array (
);$array428['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array429);

$expression430 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments426['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression430(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array428)
					),
					$renderingContext
				);
$arguments426['then'] = ' dropdown dropdown-hover';

$output420 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output420 .= '">
                            <a href="';
$array431 = array (
);
$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array431)]);

$output420 .= '" id="nav-item-';
$array432 = array (
);
$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array432)]);

$output420 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments433 = array();
$arguments433['then'] = NULL;
$arguments433['else'] = NULL;
$arguments433['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array435 = array();
$array436 = array (
);$array435['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array436);

$expression437 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments433['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression437(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array435)
					),
					$renderingContext
				);
$arguments433['then'] = ' dropdown-toggle';

$output420 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext);

$output420 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments438 = array();
$arguments438['then'] = NULL;
$arguments438['else'] = NULL;
$arguments438['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array440 = array();
$array441 = array (
);$array440['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array441);

$expression442 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments438['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression442(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array440)
					),
					$renderingContext
				);
$output443 = '';

$output443 .= ' target="';
$array444 = array (
);
$output443 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array444)]);

$output443 .= '"';
$arguments438['then'] = $output443;

$output420 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext);

$output420 .= ' title="';
$array445 = array (
);
$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array445)]);

$output420 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments446 = array();
$arguments446['then'] = NULL;
$arguments446['else'] = NULL;
$arguments446['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array448 = array();
$array449 = array (
);$array448['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array449);

$expression450 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments446['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression450(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array448)
					),
					$renderingContext
				);
$arguments446['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output420 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext);

$output420 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
$output457 = '';

$output457 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments458 = array();
$arguments458['icon'] = NULL;
$arguments458['height'] = NULL;
$arguments458['width'] = NULL;
$array460 = array (
);$arguments458['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array460);
$array461 = array (
);$arguments458['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array461);
$array462 = array (
);$arguments458['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array462);

$output457 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext);

$output457 .= '
                                    </span>
                                ';
return $output457;
};
$arguments451 = array();
$arguments451['then'] = NULL;
$arguments451['else'] = NULL;
$arguments451['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array453 = array();
$array454 = array (
);$array453['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array454);
$array453['1'] = ' && ';
$array455 = array (
);$array453['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array455);

$expression456 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments451['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression456(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array453)
					),
					$renderingContext
				);
$arguments451['__thenClosure'] = $renderChildrenClosure452;

$output420 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext);

$output420 .= '
                                <span class="nav-link-text">';
$array463 = array (
);
$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array463)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments464 = array();
$arguments464['then'] = NULL;
$arguments464['else'] = NULL;
$arguments464['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array466 = array();
$array467 = array (
);$array466['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array467);

$expression468 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments464['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression468(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array466)
					),
					$renderingContext
				);
$arguments464['__thenClosure'] = $renderChildrenClosure465;

$output420 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext);

$output420 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
$output474 = '';

$output474 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array475 = array (
);
$output474 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array475)]);

$output474 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$output479 = '';

$output479 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
$output518 = '';

$output518 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments519 = array();

$output518 .= '';

$output518 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
$output523 = '';

$output523 .= '
                                                <li>
                                                    <a href="';
$array524 = array (
);
$output523 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array524)]);

$output523 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure526 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments525 = array();
$arguments525['then'] = NULL;
$arguments525['else'] = NULL;
$arguments525['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array527 = array();
$array528 = array (
);$array527['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array528);

$expression529 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments525['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression529(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array527)
					),
					$renderingContext
				);
$arguments525['then'] = ' active';

$output523 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments525, $renderChildrenClosure526, $renderingContext);

$output523 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments530 = array();
$arguments530['then'] = NULL;
$arguments530['else'] = NULL;
$arguments530['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array532 = array();
$array533 = array (
);$array532['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array533);

$expression534 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments530['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression534(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array532)
					),
					$renderingContext
				);
$output535 = '';

$output535 .= ' target="';
$array536 = array (
);
$output535 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array536)]);

$output535 .= '"';
$arguments530['then'] = $output535;

$output523 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext);

$output523 .= ' title="';
$array537 = array (
);
$output523 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array537)]);

$output523 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure539 = function() use ($renderingContext, $self) {
$output544 = '';

$output544 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure546 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments545 = array();
$arguments545['icon'] = NULL;
$arguments545['height'] = NULL;
$arguments545['width'] = NULL;
$array547 = array (
);$arguments545['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array547);
$array548 = array (
);$arguments545['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array548);
$array549 = array (
);$arguments545['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array549);

$output544 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments545, $renderChildrenClosure546, $renderingContext);

$output544 .= '
                                                            </span>
                                                        ';
return $output544;
};
$arguments538 = array();
$arguments538['then'] = NULL;
$arguments538['else'] = NULL;
$arguments538['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array540 = array();
$array541 = array (
);$array540['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array541);
$array540['1'] = ' && ';
$array542 = array (
);$array540['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array542);

$expression543 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments538['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression543(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array540)
					),
					$renderingContext
				);
$arguments538['__thenClosure'] = $renderChildrenClosure539;

$output523 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments538, $renderChildrenClosure539, $renderingContext);

$output523 .= '
                                                        <span class="dropdown-text">';
$array550 = array (
);
$output523 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array550)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure552 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments551 = array();
$arguments551['then'] = NULL;
$arguments551['else'] = NULL;
$arguments551['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array553 = array();
$array554 = array (
);$array553['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array554);

$expression555 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments551['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression555(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array553)
					),
					$renderingContext
				);
$arguments551['__thenClosure'] = $renderChildrenClosure552;

$output523 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments551, $renderChildrenClosure552, $renderingContext);

$output523 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output523;
};
$arguments521 = array();
$arguments521['if'] = NULL;

$output518 .= '';

$output518 .= '
                                        ';
return $output518;
};
$arguments480 = array();
$arguments480['then'] = NULL;
$arguments480['else'] = NULL;
$arguments480['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array515 = array();
$array516 = array (
);$array515['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array516);

$expression517 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments480['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression517(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array515)
					),
					$renderingContext
				);
$arguments480['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments480['__elseClosures'][] = function() use ($renderingContext, $self) {
$output482 = '';

$output482 .= '
                                                <li>
                                                    <a href="';
$array483 = array (
);
$output482 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array483)]);

$output482 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments484 = array();
$arguments484['then'] = NULL;
$arguments484['else'] = NULL;
$arguments484['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array486 = array();
$array487 = array (
);$array486['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array487);

$expression488 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments484['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression488(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array486)
					),
					$renderingContext
				);
$arguments484['then'] = ' active';

$output482 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext);

$output482 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments489 = array();
$arguments489['then'] = NULL;
$arguments489['else'] = NULL;
$arguments489['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array491 = array();
$array492 = array (
);$array491['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array492);

$expression493 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments489['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression493(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array491)
					),
					$renderingContext
				);
$output494 = '';

$output494 .= ' target="';
$array495 = array (
);
$output494 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array495)]);

$output494 .= '"';
$arguments489['then'] = $output494;

$output482 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments489, $renderChildrenClosure490, $renderingContext);

$output482 .= ' title="';
$array496 = array (
);
$output482 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array496)]);

$output482 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
$output503 = '';

$output503 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments504 = array();
$arguments504['icon'] = NULL;
$arguments504['height'] = NULL;
$arguments504['width'] = NULL;
$array506 = array (
);$arguments504['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array506);
$array507 = array (
);$arguments504['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array507);
$array508 = array (
);$arguments504['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array508);

$output503 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext);

$output503 .= '
                                                            </span>
                                                        ';
return $output503;
};
$arguments497 = array();
$arguments497['then'] = NULL;
$arguments497['else'] = NULL;
$arguments497['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array499 = array();
$array500 = array (
);$array499['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array500);
$array499['1'] = ' && ';
$array501 = array (
);$array499['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array501);

$expression502 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments497['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression502(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array499)
					),
					$renderingContext
				);
$arguments497['__thenClosure'] = $renderChildrenClosure498;

$output482 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext);

$output482 .= '
                                                        <span class="dropdown-text">';
$array509 = array (
);
$output482 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array509)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments510 = array();
$arguments510['then'] = NULL;
$arguments510['else'] = NULL;
$arguments510['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array512 = array();
$array513 = array (
);$array512['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array513);

$expression514 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments510['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression514(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array512)
					),
					$renderingContext
				);
$arguments510['__thenClosure'] = $renderChildrenClosure511;

$output482 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext);

$output482 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output482;
};

$output479 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);

$output479 .= '
                                    ';
return $output479;
};
$arguments476 = array();
$arguments476['each'] = NULL;
$arguments476['as'] = NULL;
$arguments476['key'] = NULL;
$arguments476['reverse'] = false;
$arguments476['iteration'] = NULL;
$array478 = array (
);$arguments476['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array478);
$arguments476['as'] = 'child';

$output474 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output474 .= '
                                </ul>
                            ';
return $output474;
};
$arguments469 = array();
$arguments469['then'] = NULL;
$arguments469['else'] = NULL;
$arguments469['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array471 = array();
$array472 = array (
);$array471['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array472);

$expression473 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments469['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression473(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array471)
					),
					$renderingContext
				);
$arguments469['__thenClosure'] = $renderChildrenClosure470;

$output420 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments469, $renderChildrenClosure470, $renderingContext);

$output420 .= '
                        </li>
                    ';
return $output420;
};

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext);

$output417 .= '
            ';
return $output417;
};
$arguments414 = array();
$arguments414['each'] = NULL;
$arguments414['as'] = NULL;
$arguments414['key'] = NULL;
$arguments414['reverse'] = false;
$arguments414['iteration'] = NULL;
$array416 = array (
);$arguments414['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array416);
$arguments414['as'] = 'item';

$output413 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);

$output413 .= '
        </ul>
    ';
return $output413;
};
$arguments408 = array();
$arguments408['then'] = NULL;
$arguments408['else'] = NULL;
$arguments408['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array410 = array();
$array411 = array (
);$array410['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array411);

$expression412 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments408['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression412(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array410)
					),
					$renderingContext
				);
$arguments408['__thenClosure'] = $renderChildrenClosure409;

$output407 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output407 .= '
';
return $output407;
};
$arguments405 = array();
$arguments405['name'] = NULL;
$arguments405['name'] = 'MainNavigation';

$output293 .= NULL;

$output293 .= '

';

return $output293;
}


}
#