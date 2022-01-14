<?php

class Standard_action_carouselFullscreen_af52918a05e09fa6dfc77c67df73d737e64398d5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <div id="carousel-';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array7)]);

$output6 .= '" class="carousel carousel-fullscreen carousel-';
$array8 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.transition', $array8)]);

$output6 .= ' slide" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array12);

$expression13 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$output14 = '';

$output14 .= 'data-interval="';
$array15 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array15)]);

$output14 .= '" ';
$arguments9['then'] = $output14;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output6 .= 'data-wrap="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.wrap', $array19);

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$arguments16['then'] = 'true';
$arguments16['else'] = 'false';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output6 .= '" data-ride="carousel" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array24);

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$output26 = '';

$output26 .= 'data-bs-interval="';
$array27 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array27)]);

$output26 .= '"';
$arguments21['then'] = $output26;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output6 .= ' data-bs-wrap="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.wrap', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments28['then'] = 'true';
$arguments28['else'] = 'false';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output6 .= '" data-bs-ride="carousel">
            <div class="overlay"></div>
            <div class="carousel-inner">
                
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return 'item';
};
$arguments37 = array();
$arguments37['value'] = NULL;
$arguments37['name'] = NULL;
$arguments37['name'] = 'itemClass';
$renderChildrenClosure38 = ($arguments37['value'] !== null) ? function() use ($arguments37) { return $arguments37['value']; } : $renderChildrenClosure38;
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output36 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';
$array47 = array (
);
$output46 .= $renderingContext->getVariableProvider()->getByPath('itemClass', $array47);

$output46 .= ' active';
return $output46;
};
$arguments44 = array();
$arguments44['value'] = NULL;
$arguments44['name'] = NULL;
$arguments44['name'] = 'itemClass';
$renderChildrenClosure45 = ($arguments44['value'] !== null) ? function() use ($arguments44) { return $arguments44['value']; } : $renderChildrenClosure45;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('iteration.isFirst', $array42);

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['__thenClosure'] = $renderChildrenClosure40;

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output36 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output50 = '';
$array51 = array (
);
$output50 .= $renderingContext->getVariableProvider()->getByPath('itemClass', $array51);

$output50 .= ' carousel-item';
return $output50;
};
$arguments48 = array();
$arguments48['value'] = NULL;
$arguments48['name'] = NULL;
$arguments48['name'] = 'itemClass';
$renderChildrenClosure49 = ($arguments48['value'] !== null) ? function() use ($arguments48) { return $arguments48['value']; } : $renderChildrenClosure49;
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output36 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';
$array55 = array (
);
$output54 .= $renderingContext->getVariableProvider()->getByPath('itemClass', $array55);

$output54 .= ' carousel-item-layout-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.layout', $array59);

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);
$array61 = array (
);$arguments56['then'] = $renderingContext->getVariableProvider()->getByPath('item.data.layout', $array61);
$arguments56['else'] = 'custom';

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);
return $output54;
};
$arguments52 = array();
$arguments52['value'] = NULL;
$arguments52['name'] = NULL;
$arguments52['name'] = 'itemClass';
$renderChildrenClosure53 = ($arguments52['value'] !== null) ? function() use ($arguments52) { return $arguments52['value']; } : $renderChildrenClosure53;
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output36 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';
$array65 = array (
);
$output64 .= $renderingContext->getVariableProvider()->getByPath('itemClass', $array65);

$output64 .= ' carousel-item-type-';
$array66 = array (
);
$output64 .= $renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array66);
return $output64;
};
$arguments62 = array();
$arguments62['value'] = NULL;
$arguments62['name'] = NULL;
$arguments62['name'] = 'itemClass';
$renderChildrenClosure63 = ($arguments62['value'] !== null) ? function() use ($arguments62) { return $arguments62['value']; } : $renderChildrenClosure63;
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output36 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['value'] = NULL;
$arguments67['name'] = NULL;
$arguments67['name'] = 'itemStyle';
$renderChildrenClosure68 = ($arguments67['value'] !== null) ? function() use ($arguments67) { return $arguments67['value']; } : $renderChildrenClosure68;
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output36 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output82 = '';
$array83 = array (
);
$output82 .= $renderingContext->getVariableProvider()->getByPath('itemStyle', $array83);

$output82 .= ' --carousel-item-background: ';
$array84 = array (
);
$output82 .= $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array84);

$output82 .= ';';
return $output82;
};
$arguments80 = array();
$arguments80['value'] = NULL;
$arguments80['name'] = NULL;
$arguments80['name'] = 'itemStyle';
$renderChildrenClosure81 = ($arguments80['value'] !== null) ? function() use ($arguments80) { return $arguments80['value']; } : $renderChildrenClosure81;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext)]);
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array78);

$expression79 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression79(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);
$arguments75['__thenClosure'] = $renderChildrenClosure76;

$output74 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output92 = '';
$array93 = array (
);
$output92 .= $renderingContext->getVariableProvider()->getByPath('itemStyle', $array93);

$output92 .= ' --carousel-item-color: ';
$array94 = array (
);
$output92 .= $renderingContext->getVariableProvider()->getByPath('item.data.text_color', $array94);

$output92 .= ';';
return $output92;
};
$arguments90 = array();
$arguments90['value'] = NULL;
$arguments90['name'] = NULL;
$arguments90['name'] = 'itemStyle';
$renderChildrenClosure91 = ($arguments90['value'] !== null) ? function() use ($arguments90) { return $arguments90['value']; } : $renderChildrenClosure91;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);
};
$arguments85 = array();
$arguments85['then'] = NULL;
$arguments85['else'] = NULL;
$arguments85['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.text_color', $array88);

$expression89 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments85['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression89(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)
					),
					$renderingContext
				);
$arguments85['__thenClosure'] = $renderChildrenClosure86;

$output74 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output74 .= '
                    ';
return $output74;
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.layout', $array72);
$array71['1'] = ' == \'custom\'';

$expression73 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'custom');};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments69['__thenClosure'] = $renderChildrenClosure70;

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output36 .= '
                    <div class="';
$array95 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('itemClass', $array95)]);

$output36 .= '" data-itemno="';
$array96 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.index', $array96)]);

$output36 .= '" >
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['section'] = NULL;
$arguments97['partial'] = NULL;
$arguments97['delegate'] = NULL;
$arguments97['renderable'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['optional'] = false;
$arguments97['default'] = NULL;
$arguments97['contentAs'] = NULL;
$arguments97['debug'] = true;
$arguments97['partial'] = 'Carousel/General/BackgroundImage';
$arguments97['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output36 .= '
                        <div class="carousel-content">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['section'] = NULL;
$arguments100['partial'] = NULL;
$arguments100['delegate'] = NULL;
$arguments100['renderable'] = NULL;
$arguments100['arguments'] = array (
);
$arguments100['optional'] = false;
$arguments100['default'] = NULL;
$arguments100['contentAs'] = NULL;
$arguments100['debug'] = true;
$output102 = '';

$output102 .= 'Carousel/Item/';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$array105 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array105);
};
$arguments103 = array();

$output102 .= BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);
$arguments100['partial'] = $output102;
$arguments100['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output36 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['section'] = NULL;
$arguments107['partial'] = NULL;
$arguments107['delegate'] = NULL;
$arguments107['renderable'] = NULL;
$arguments107['arguments'] = array (
);
$arguments107['optional'] = false;
$arguments107['default'] = NULL;
$arguments107['contentAs'] = NULL;
$arguments107['debug'] = true;
$arguments107['partial'] = 'Carousel/Item/Booking';

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output36 .= '
                        </div>
                    </div>
                ';
return $output36;
};
$arguments33 = array();
$arguments33['each'] = NULL;
$arguments33['as'] = NULL;
$arguments33['key'] = NULL;
$arguments33['reverse'] = false;
$arguments33['iteration'] = NULL;
$array35 = array (
);$arguments33['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array35);
$arguments33['as'] = 'item';
$arguments33['iteration'] = 'iteration';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output6 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['section'] = NULL;
$arguments109['partial'] = NULL;
$arguments109['delegate'] = NULL;
$arguments109['renderable'] = NULL;
$arguments109['arguments'] = array (
);
$arguments109['optional'] = false;
$arguments109['default'] = NULL;
$arguments109['contentAs'] = NULL;
$arguments109['debug'] = true;
$arguments109['partial'] = 'Carousel/Item/Booking';

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output6 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['section'] = NULL;
$arguments111['partial'] = NULL;
$arguments111['delegate'] = NULL;
$arguments111['renderable'] = NULL;
$arguments111['arguments'] = array (
);
$arguments111['optional'] = false;
$arguments111['default'] = NULL;
$arguments111['contentAs'] = NULL;
$arguments111['debug'] = true;
$arguments111['partial'] = 'Carousel/Control/Indicator';
$arguments111['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output6 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['section'] = NULL;
$arguments114['partial'] = NULL;
$arguments114['delegate'] = NULL;
$arguments114['renderable'] = NULL;
$arguments114['arguments'] = array (
);
$arguments114['optional'] = false;
$arguments114['default'] = NULL;
$arguments114['contentAs'] = NULL;
$arguments114['debug'] = true;
$arguments114['partial'] = 'Carousel/Control/Control';
$arguments114['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output6 .= '
        </div>
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('records', $array4);

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
$output117 = '';

$output117 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['name'] = NULL;
$arguments118['name'] = 'Default';

$output117 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output117 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
        <div id="carousel-';
$array129 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array129)]);

$output128 .= '" class="carousel carousel-fullscreen carousel-';
$array130 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.transition', $array130)]);

$output128 .= ' slide" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$arguments131['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array133 = array();
$array134 = array (
);$array133['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array134);

$expression135 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments131['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression135(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);
$output136 = '';

$output136 .= 'data-interval="';
$array137 = array (
);
$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array137)]);

$output136 .= '" ';
$arguments131['then'] = $output136;

$output128 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output128 .= 'data-wrap="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['then'] = NULL;
$arguments138['else'] = NULL;
$arguments138['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array140 = array();
$array141 = array (
);$array140['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.wrap', $array141);

$expression142 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments138['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression142(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array140)
					),
					$renderingContext
				);
$arguments138['then'] = 'true';
$arguments138['else'] = 'false';

$output128 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output128 .= '" data-ride="carousel" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['then'] = NULL;
$arguments143['else'] = NULL;
$arguments143['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array145 = array();
$array146 = array (
);$array145['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array146);

$expression147 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments143['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression147(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)
					),
					$renderingContext
				);
$output148 = '';

$output148 .= 'data-bs-interval="';
$array149 = array (
);
$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array149)]);

$output148 .= '"';
$arguments143['then'] = $output148;

$output128 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output128 .= ' data-bs-wrap="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['then'] = NULL;
$arguments150['else'] = NULL;
$arguments150['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array152 = array();
$array153 = array (
);$array152['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.wrap', $array153);

$expression154 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments150['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array152)
					),
					$renderingContext
				);
$arguments150['then'] = 'true';
$arguments150['else'] = 'false';

$output128 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output128 .= '" data-bs-ride="carousel">
            <div class="overlay"></div>
            <div class="carousel-inner">
                
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return 'item';
};
$arguments159 = array();
$arguments159['value'] = NULL;
$arguments159['name'] = NULL;
$arguments159['name'] = 'itemClass';
$renderChildrenClosure160 = ($arguments159['value'] !== null) ? function() use ($arguments159) { return $arguments159['value']; } : $renderChildrenClosure160;
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext)]);

$output158 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$output168 = '';
$array169 = array (
);
$output168 .= $renderingContext->getVariableProvider()->getByPath('itemClass', $array169);

$output168 .= ' active';
return $output168;
};
$arguments166 = array();
$arguments166['value'] = NULL;
$arguments166['name'] = NULL;
$arguments166['name'] = 'itemClass';
$renderChildrenClosure167 = ($arguments166['value'] !== null) ? function() use ($arguments166) { return $arguments166['value']; } : $renderChildrenClosure167;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext)]);
};
$arguments161 = array();
$arguments161['then'] = NULL;
$arguments161['else'] = NULL;
$arguments161['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array163 = array();
$array164 = array (
);$array163['0'] = $renderingContext->getVariableProvider()->getByPath('iteration.isFirst', $array164);

$expression165 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments161['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression165(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array163)
					),
					$renderingContext
				);
$arguments161['__thenClosure'] = $renderChildrenClosure162;

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output158 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output172 = '';
$array173 = array (
);
$output172 .= $renderingContext->getVariableProvider()->getByPath('itemClass', $array173);

$output172 .= ' carousel-item';
return $output172;
};
$arguments170 = array();
$arguments170['value'] = NULL;
$arguments170['name'] = NULL;
$arguments170['name'] = 'itemClass';
$renderChildrenClosure171 = ($arguments170['value'] !== null) ? function() use ($arguments170) { return $arguments170['value']; } : $renderChildrenClosure171;
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext)]);

$output158 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output176 = '';
$array177 = array (
);
$output176 .= $renderingContext->getVariableProvider()->getByPath('itemClass', $array177);

$output176 .= ' carousel-item-layout-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['then'] = NULL;
$arguments178['else'] = NULL;
$arguments178['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array180 = array();
$array181 = array (
);$array180['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.layout', $array181);

$expression182 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments178['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression182(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array180)
					),
					$renderingContext
				);
$array183 = array (
);$arguments178['then'] = $renderingContext->getVariableProvider()->getByPath('item.data.layout', $array183);
$arguments178['else'] = 'custom';

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);
return $output176;
};
$arguments174 = array();
$arguments174['value'] = NULL;
$arguments174['name'] = NULL;
$arguments174['name'] = 'itemClass';
$renderChildrenClosure175 = ($arguments174['value'] !== null) ? function() use ($arguments174) { return $arguments174['value']; } : $renderChildrenClosure175;
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext)]);

$output158 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output186 = '';
$array187 = array (
);
$output186 .= $renderingContext->getVariableProvider()->getByPath('itemClass', $array187);

$output186 .= ' carousel-item-type-';
$array188 = array (
);
$output186 .= $renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array188);
return $output186;
};
$arguments184 = array();
$arguments184['value'] = NULL;
$arguments184['name'] = NULL;
$arguments184['name'] = 'itemClass';
$renderChildrenClosure185 = ($arguments184['value'] !== null) ? function() use ($arguments184) { return $arguments184['value']; } : $renderChildrenClosure185;
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext)]);

$output158 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['value'] = NULL;
$arguments189['name'] = NULL;
$arguments189['name'] = 'itemStyle';
$renderChildrenClosure190 = ($arguments189['value'] !== null) ? function() use ($arguments189) { return $arguments189['value']; } : $renderChildrenClosure190;
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext)]);

$output158 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output204 = '';
$array205 = array (
);
$output204 .= $renderingContext->getVariableProvider()->getByPath('itemStyle', $array205);

$output204 .= ' --carousel-item-background: ';
$array206 = array (
);
$output204 .= $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array206);

$output204 .= ';';
return $output204;
};
$arguments202 = array();
$arguments202['value'] = NULL;
$arguments202['name'] = NULL;
$arguments202['name'] = 'itemStyle';
$renderChildrenClosure203 = ($arguments202['value'] !== null) ? function() use ($arguments202) { return $arguments202['value']; } : $renderChildrenClosure203;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext)]);
};
$arguments197 = array();
$arguments197['then'] = NULL;
$arguments197['else'] = NULL;
$arguments197['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array199 = array();
$array200 = array (
);$array199['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array200);

$expression201 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments197['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression201(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array199)
					),
					$renderingContext
				);
$arguments197['__thenClosure'] = $renderChildrenClosure198;

$output196 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output196 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$output214 = '';
$array215 = array (
);
$output214 .= $renderingContext->getVariableProvider()->getByPath('itemStyle', $array215);

$output214 .= ' --carousel-item-color: ';
$array216 = array (
);
$output214 .= $renderingContext->getVariableProvider()->getByPath('item.data.text_color', $array216);

$output214 .= ';';
return $output214;
};
$arguments212 = array();
$arguments212['value'] = NULL;
$arguments212['name'] = NULL;
$arguments212['name'] = 'itemStyle';
$renderChildrenClosure213 = ($arguments212['value'] !== null) ? function() use ($arguments212) { return $arguments212['value']; } : $renderChildrenClosure213;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext)]);
};
$arguments207 = array();
$arguments207['then'] = NULL;
$arguments207['else'] = NULL;
$arguments207['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array209 = array();
$array210 = array (
);$array209['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.text_color', $array210);

$expression211 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments207['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression211(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array209)
					),
					$renderingContext
				);
$arguments207['__thenClosure'] = $renderChildrenClosure208;

$output196 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output196 .= '
                    ';
return $output196;
};
$arguments191 = array();
$arguments191['then'] = NULL;
$arguments191['else'] = NULL;
$arguments191['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array193 = array();
$array194 = array (
);$array193['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.layout', $array194);
$array193['1'] = ' == \'custom\'';

$expression195 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'custom');};
$arguments191['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression195(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array193)
					),
					$renderingContext
				);
$arguments191['__thenClosure'] = $renderChildrenClosure192;

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output158 .= '
                    <div class="';
$array217 = array (
);
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('itemClass', $array217)]);

$output158 .= '" data-itemno="';
$array218 = array (
);
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.index', $array218)]);

$output158 .= '" >
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['section'] = NULL;
$arguments219['partial'] = NULL;
$arguments219['delegate'] = NULL;
$arguments219['renderable'] = NULL;
$arguments219['arguments'] = array (
);
$arguments219['optional'] = false;
$arguments219['default'] = NULL;
$arguments219['contentAs'] = NULL;
$arguments219['debug'] = true;
$arguments219['partial'] = 'Carousel/General/BackgroundImage';
$arguments219['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output158 .= '
                        <div class="carousel-content">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['section'] = NULL;
$arguments222['partial'] = NULL;
$arguments222['delegate'] = NULL;
$arguments222['renderable'] = NULL;
$arguments222['arguments'] = array (
);
$arguments222['optional'] = false;
$arguments222['default'] = NULL;
$arguments222['contentAs'] = NULL;
$arguments222['debug'] = true;
$output224 = '';

$output224 .= 'Carousel/Item/';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$array227 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array227);
};
$arguments225 = array();

$output224 .= BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);
$arguments222['partial'] = $output224;
$arguments222['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output158 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['section'] = NULL;
$arguments229['partial'] = NULL;
$arguments229['delegate'] = NULL;
$arguments229['renderable'] = NULL;
$arguments229['arguments'] = array (
);
$arguments229['optional'] = false;
$arguments229['default'] = NULL;
$arguments229['contentAs'] = NULL;
$arguments229['debug'] = true;
$arguments229['partial'] = 'Carousel/Item/Booking';

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output158 .= '
                        </div>
                    </div>
                ';
return $output158;
};
$arguments155 = array();
$arguments155['each'] = NULL;
$arguments155['as'] = NULL;
$arguments155['key'] = NULL;
$arguments155['reverse'] = false;
$arguments155['iteration'] = NULL;
$array157 = array (
);$arguments155['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array157);
$arguments155['as'] = 'item';
$arguments155['iteration'] = 'iteration';

$output128 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output128 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['section'] = NULL;
$arguments231['partial'] = NULL;
$arguments231['delegate'] = NULL;
$arguments231['renderable'] = NULL;
$arguments231['arguments'] = array (
);
$arguments231['optional'] = false;
$arguments231['default'] = NULL;
$arguments231['contentAs'] = NULL;
$arguments231['debug'] = true;
$arguments231['partial'] = 'Carousel/Item/Booking';

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output128 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['section'] = NULL;
$arguments233['partial'] = NULL;
$arguments233['delegate'] = NULL;
$arguments233['renderable'] = NULL;
$arguments233['arguments'] = array (
);
$arguments233['optional'] = false;
$arguments233['default'] = NULL;
$arguments233['contentAs'] = NULL;
$arguments233['debug'] = true;
$arguments233['partial'] = 'Carousel/Control/Indicator';
$arguments233['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output128 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['section'] = NULL;
$arguments236['partial'] = NULL;
$arguments236['delegate'] = NULL;
$arguments236['renderable'] = NULL;
$arguments236['arguments'] = array (
);
$arguments236['optional'] = false;
$arguments236['default'] = NULL;
$arguments236['contentAs'] = NULL;
$arguments236['debug'] = true;
$arguments236['partial'] = 'Carousel/Control/Control';
$arguments236['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output128 .= '
        </div>
    ';
return $output128;
};
$arguments123 = array();
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array126 = array (
);$array125['0'] = $renderingContext->getVariableProvider()->getByPath('records', $array126);

$expression127 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression127(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$arguments123['__thenClosure'] = $renderChildrenClosure124;

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '

';
return $output122;
};
$arguments120 = array();
$arguments120['name'] = NULL;
$arguments120['name'] = 'Main';

$output117 .= NULL;

$output117 .= '

';

return $output117;
}


}
#