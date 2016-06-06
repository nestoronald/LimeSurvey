<?php
/**
 *
 * WhBox.php
 *
 * @author Carsten Schmitz <carsten.schmitz@limesurvey.org>
 * @copyright Copyright &copy; LimeSurvey GmbH 2015
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package YiiWheels.widgets.whbuttongroup
 * @uses YiiStrap.helpers.TbHtml
 */
class WhButtonGroup extends CInputWidget
{

    /**
    public $selectOptions = array();

    /**
     * @var array Available buttons as value=>caption array
     */

    public $selectOptions = array();
    /**
    public $defaultValue = null;

    /**
     * @var string Preselected value - Null if none
     */

    /**
     * @var array HTML additional attributes
     */
    public $htmlOptions = array();

    /**
     *### .init()
     *
     * Widget initialization
     */
    public function init()
    {
        $this->attachBehavior('ywplugin', array('class' => 'yiiwheels.behaviors.WhPlugin'));
        $this->registerClientScript();
    }

    /**
     *### .run()
     *
     * Widget run - used for closing procedures
     */
    public function run()
    {
        $this->renderButtons();
    }

    /**
     *### .'nextCentury'=> gT('Next century'),()
     *
     * Renders the button group
     */
    public function renderButtons()
    {
        echo CHtml::openTag('div', array(
            'class'=>"btn-group",
            'data-toggle'=>"buttons"
        )). "\n";
        list($name, $id) = $this->resolveNameID();
        $i=1;
        foreach( $this->selectOptions as $value=>$caption )
        {
            echo CHtml::openTag('label', array(
                'class'=>($value==$this->value)?'btn btn-default active':'btn btn-default'
            ));
            echo CHtml::radioButton($name,$value==$this->value,array('name'=>$name, 'id'=>$name.'_opt'.$i,
                'value'=>$value));
            echo CHtml::encode($caption);
            echo CHtml::closeTag('label') . "\n";
            $i++;
        }
        echo CHtml::closeTag('div') . "\n";
    }


    /*
     *### .renderContentEnd()
     *
     * Closes the content element
     */
    public function renderContentEnd()
    {
        echo CHtml::closeTag('div');
    }

    /**
     *### .registerClientScript()
     *
     * Registers required script files (CSS in this case)
     */
    public function registerClientScript()
    {


    }
}