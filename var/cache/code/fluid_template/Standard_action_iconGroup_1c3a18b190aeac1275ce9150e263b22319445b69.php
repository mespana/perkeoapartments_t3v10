<?php

class Standard_action_iconGroup_1c3a18b190aeac1275ce9150e263b22319445b69 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
        <div class="icongroup icongroup-align-';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.align', $array7)]);

$output6 .= ' icongroup-columns-';
$array8 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.columns', $array8)]);

$output6 .= ' icongroup-iconposition-';
$array9 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.icon_position', $array9)]);

$output6 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                <div class="icongroup-item">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                        <div class="icongroup-item-icon">
                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['icon'] = NULL;
$arguments20['height'] = NULL;
$arguments20['width'] = NULL;
$array22 = array (
);$arguments20['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array22);

$output19 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
                        </div>
                    ';
return $output19;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['__thenClosure'] = $renderChildrenClosure15;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
                    <div class="icongroup-item-text">
                        <h4 class="icongroup-item-text-header">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                                ';
$array29 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.header', $array29)]);

$output28 .= '
                            ';
return $output28;
};
$arguments23 = array();
$arguments23['section'] = NULL;
$arguments23['partial'] = NULL;
$arguments23['delegate'] = NULL;
$arguments23['renderable'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['optional'] = false;
$arguments23['default'] = NULL;
$arguments23['contentAs'] = NULL;
$arguments23['debug'] = true;
$arguments23['section'] = 'LinkWrap';
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['link'] = $renderingContext->getVariableProvider()->getByPath('item.data.link', $array26);
$array27 = array (
);$array25['linkTitle'] = $renderingContext->getVariableProvider()->getByPath('item.data.header', $array27);
$arguments23['arguments'] = $array25;
$arguments23['contentAs'] = 'content';

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output13 .= '
                        </h4>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
                            <p class="icongroup-item-text-subheader">';
$array36 = array (
);
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.subheader', $array36)]);

$output35 .= '</p>
                        ';
return $output35;
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.subheader', $array33);

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$arguments30['__thenClosure'] = $renderChildrenClosure31;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output13 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$array45 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.bodytext', $array45);
};
$arguments43 = array();
$arguments43['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
                        ';
return $output42;
};
$arguments37 = array();
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$arguments37['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.bodytext', $array40);

$expression41 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments37['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);
$arguments37['__thenClosure'] = $renderChildrenClosure38;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output13 .= '
                    </div>
                </div>
            ';
return $output13;
};
$arguments10 = array();
$arguments10['each'] = NULL;
$arguments10['as'] = NULL;
$arguments10['key'] = NULL;
$arguments10['reverse'] = false;
$arguments10['iteration'] = NULL;
$array12 = array (
);$arguments10['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array12);
$arguments10['as'] = 'item';
$arguments10['iteration'] = 'iteration';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

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
 * section LinkWrap
 */
public function section_6329d6a763d60e3b1bacd573ee795674545f7358(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output46 = '';

$output46 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$array80 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array80);
};
$arguments78 = array();
$arguments78['value'] = NULL;

$output77 .= isset($arguments78['value']) ? $arguments78['value'] : $renderChildrenClosure79();

$output77 .= '
            ';
return $output77;
};
$arguments71 = array();
$arguments71['parameter'] = NULL;
$arguments71['target'] = '';
$arguments71['class'] = '';
$arguments71['title'] = '';
$arguments71['language'] = NULL;
$arguments71['additionalParams'] = '';
$arguments71['additionalAttributes'] = array (
);
$arguments71['useCacheHash'] = NULL;
$arguments71['addQueryString'] = false;
$arguments71['addQueryStringMethod'] = 'GET';
$arguments71['addQueryStringExclude'] = '';
$arguments71['absolute'] = false;
$arguments71['parts-as'] = 'typoLinkParts';
$array73 = array (
);$arguments71['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array73);
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$array76 = array (
);return $renderingContext->getVariableProvider()->getByPath('linkTitle', $array76);
};
$arguments74 = array();
$arguments71['title'] = BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
        ';
return $output70;
};
$arguments68 = array();

$output67 .= '';

$output67 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
            <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$array86 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array86);
};
$arguments84 = array();
$arguments84['value'] = NULL;

$output83 .= isset($arguments84['value']) ? $arguments84['value'] : $renderChildrenClosure85();

$output83 .= '</span>
        ';
return $output83;
};
$arguments81 = array();
$arguments81['if'] = NULL;

$output67 .= '';

$output67 .= '
    ';
return $output67;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('link', $array65);

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments47['__thenClosure'] = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$array59 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array59);
};
$arguments57 = array();
$arguments57['value'] = NULL;

$output56 .= isset($arguments57['value']) ? $arguments57['value'] : $renderChildrenClosure58();

$output56 .= '
            ';
return $output56;
};
$arguments50 = array();
$arguments50['parameter'] = NULL;
$arguments50['target'] = '';
$arguments50['class'] = '';
$arguments50['title'] = '';
$arguments50['language'] = NULL;
$arguments50['additionalParams'] = '';
$arguments50['additionalAttributes'] = array (
);
$arguments50['useCacheHash'] = NULL;
$arguments50['addQueryString'] = false;
$arguments50['addQueryStringMethod'] = 'GET';
$arguments50['addQueryStringExclude'] = '';
$arguments50['absolute'] = false;
$arguments50['parts-as'] = 'typoLinkParts';
$array52 = array (
);$arguments50['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array52);
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$array55 = array (
);return $renderingContext->getVariableProvider()->getByPath('linkTitle', $array55);
};
$arguments53 = array();
$arguments50['title'] = BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
        ';
return $output49;
};
$arguments47['__elseClosures'][] = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
            <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$array63 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array63);
};
$arguments61 = array();
$arguments61['value'] = NULL;

$output60 .= isset($arguments61['value']) ? $arguments61['value'] : $renderChildrenClosure62();

$output60 .= '</span>
        ';
return $output60;
};

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '

';

return $output46;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output87 = '';

$output87 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['name'] = NULL;
$arguments88['name'] = 'Default';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output87 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
        <div class="icongroup icongroup-align-';
$array99 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.align', $array99)]);

$output98 .= ' icongroup-columns-';
$array100 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.columns', $array100)]);

$output98 .= ' icongroup-iconposition-';
$array101 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.icon_position', $array101)]);

$output98 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                <div class="icongroup-item">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
                        <div class="icongroup-item-icon">
                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['icon'] = NULL;
$arguments112['height'] = NULL;
$arguments112['width'] = NULL;
$array114 = array (
);$arguments112['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array114);

$output111 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
                        </div>
                    ';
return $output111;
};
$arguments106 = array();
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$arguments106['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array109);

$expression110 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments106['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);
$arguments106['__thenClosure'] = $renderChildrenClosure107;

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
                    <div class="icongroup-item-text">
                        <h4 class="icongroup-item-text-header">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
                                ';
$array121 = array (
);
$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.header', $array121)]);

$output120 .= '
                            ';
return $output120;
};
$arguments115 = array();
$arguments115['section'] = NULL;
$arguments115['partial'] = NULL;
$arguments115['delegate'] = NULL;
$arguments115['renderable'] = NULL;
$arguments115['arguments'] = array (
);
$arguments115['optional'] = false;
$arguments115['default'] = NULL;
$arguments115['contentAs'] = NULL;
$arguments115['debug'] = true;
$arguments115['section'] = 'LinkWrap';
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['link'] = $renderingContext->getVariableProvider()->getByPath('item.data.link', $array118);
$array119 = array (
);$array117['linkTitle'] = $renderingContext->getVariableProvider()->getByPath('item.data.header', $array119);
$arguments115['arguments'] = $array117;
$arguments115['contentAs'] = 'content';

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output105 .= '
                        </h4>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
                            <p class="icongroup-item-text-subheader">';
$array128 = array (
);
$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.subheader', $array128)]);

$output127 .= '</p>
                        ';
return $output127;
};
$arguments122 = array();
$arguments122['then'] = NULL;
$arguments122['else'] = NULL;
$arguments122['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array124 = array();
$array125 = array (
);$array124['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.subheader', $array125);

$expression126 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments122['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)
					),
					$renderingContext
				);
$arguments122['__thenClosure'] = $renderChildrenClosure123;

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output105 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$array137 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.bodytext', $array137);
};
$arguments135 = array();
$arguments135['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
                        ';
return $output134;
};
$arguments129 = array();
$arguments129['then'] = NULL;
$arguments129['else'] = NULL;
$arguments129['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.bodytext', $array132);

$expression133 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments129['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression133(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments129['__thenClosure'] = $renderChildrenClosure130;

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output105 .= '
                    </div>
                </div>
            ';
return $output105;
};
$arguments102 = array();
$arguments102['each'] = NULL;
$arguments102['as'] = NULL;
$arguments102['key'] = NULL;
$arguments102['reverse'] = false;
$arguments102['iteration'] = NULL;
$array104 = array (
);$arguments102['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array104);
$arguments102['as'] = 'item';
$arguments102['iteration'] = 'iteration';

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output98 .= '
        </div>
    ';
return $output98;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('records', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['__thenClosure'] = $renderChildrenClosure94;

$output92 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '

';
return $output92;
};
$arguments90 = array();
$arguments90['name'] = NULL;
$arguments90['name'] = 'Main';

$output87 .= NULL;

$output87 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output161 = '';

$output161 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$array174 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array174);
};
$arguments172 = array();
$arguments172['value'] = NULL;

$output171 .= isset($arguments172['value']) ? $arguments172['value'] : $renderChildrenClosure173();

$output171 .= '
            ';
return $output171;
};
$arguments165 = array();
$arguments165['parameter'] = NULL;
$arguments165['target'] = '';
$arguments165['class'] = '';
$arguments165['title'] = '';
$arguments165['language'] = NULL;
$arguments165['additionalParams'] = '';
$arguments165['additionalAttributes'] = array (
);
$arguments165['useCacheHash'] = NULL;
$arguments165['addQueryString'] = false;
$arguments165['addQueryStringMethod'] = 'GET';
$arguments165['addQueryStringExclude'] = '';
$arguments165['absolute'] = false;
$arguments165['parts-as'] = 'typoLinkParts';
$array167 = array (
);$arguments165['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array167);
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$array170 = array (
);return $renderingContext->getVariableProvider()->getByPath('linkTitle', $array170);
};
$arguments168 = array();
$arguments165['title'] = BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output164 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output164 .= '
        ';
return $output164;
};
$arguments162 = array();

$output161 .= '';

$output161 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
            <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$array180 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array180);
};
$arguments178 = array();
$arguments178['value'] = NULL;

$output177 .= isset($arguments178['value']) ? $arguments178['value'] : $renderChildrenClosure179();

$output177 .= '</span>
        ';
return $output177;
};
$arguments175 = array();
$arguments175['if'] = NULL;

$output161 .= '';

$output161 .= '
    ';
return $output161;
};
$arguments141 = array();
$arguments141['then'] = NULL;
$arguments141['else'] = NULL;
$arguments141['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array158 = array();
$array159 = array (
);$array158['0'] = $renderingContext->getVariableProvider()->getByPath('link', $array159);

$expression160 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments141['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression160(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array158)
					),
					$renderingContext
				);
$arguments141['__thenClosure'] = function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$array153 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array153);
};
$arguments151 = array();
$arguments151['value'] = NULL;

$output150 .= isset($arguments151['value']) ? $arguments151['value'] : $renderChildrenClosure152();

$output150 .= '
            ';
return $output150;
};
$arguments144 = array();
$arguments144['parameter'] = NULL;
$arguments144['target'] = '';
$arguments144['class'] = '';
$arguments144['title'] = '';
$arguments144['language'] = NULL;
$arguments144['additionalParams'] = '';
$arguments144['additionalAttributes'] = array (
);
$arguments144['useCacheHash'] = NULL;
$arguments144['addQueryString'] = false;
$arguments144['addQueryStringMethod'] = 'GET';
$arguments144['addQueryStringExclude'] = '';
$arguments144['absolute'] = false;
$arguments144['parts-as'] = 'typoLinkParts';
$array146 = array (
);$arguments144['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array146);
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$array149 = array (
);return $renderingContext->getVariableProvider()->getByPath('linkTitle', $array149);
};
$arguments147 = array();
$arguments144['title'] = BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output143 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output143 .= '
        ';
return $output143;
};
$arguments141['__elseClosures'][] = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
            <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$array157 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array157);
};
$arguments155 = array();
$arguments155['value'] = NULL;

$output154 .= isset($arguments155['value']) ? $arguments155['value'] : $renderChildrenClosure156();

$output154 .= '</span>
        ';
return $output154;
};

$output140 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '

';
return $output140;
};
$arguments138 = array();
$arguments138['name'] = NULL;
$arguments138['name'] = 'LinkWrap';

$output87 .= NULL;

$output87 .= '

';

return $output87;
}


}
#