-<?php
namespace psk\forms;

use std, gui, framework, psk;


class MainForm extends AbstractForm
{

    /**
     * @event buttonResult.action 
     */
    function doButtonResultAction(UXEvent $e = null)
    {    
        global $operation;
        if ($operation){ 
            $numbers = explode($operation, $this->edit->text);
            switch ($operation){ 
                case "+":
                    $result = $numbers[0] + $numbers[1];
                break;
                case "-":
                    $result = $numbers[0] - $numbers[1];
                break;
                case "×":
                    $result = $numbers[0] * $numbers[1];
                break;
                case "÷":
                    $result = $numbers[0] / $numbers[1];
                break;
            }
            $this->edit->text = $result;
            $operation = false; 
            } 
    }

    /**
     * @event label.click-Left 
     */
    function doLabelClickLeft(UXMouseEvent $e = null)
    {
        app()->shutdown();
    }

    /**
     * @event labelAlt.click-Left 
     */
    function doLabelAltClickLeft(UXMouseEvent $e = null)
    {
        app()->minimizeForm('MainForm');
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null)
    {    
$this->edit->text .= '1';//$event->sender->text;
    }

    /**
     * @event button3.action 
     */
    function doButton3Action(UXEvent $e = null)
    {    
$this->edit->text .= '2';//$event->sender->text;
    }

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $e = null)
    {    
$this->edit->text .= '3';
    }

    /**
     * @event button5.action 
     */
    function doButton5Action(UXEvent $e = null)
    {    
$this->edit->text .= '4';
    }

    /**
     * @event button4.action 
     */
    function doButton4Action(UXEvent $e = null)
    {    
$this->edit->text .= '5';
    }

    /**
     * @event button6.action 
     */
    function doButton6Action(UXEvent $e = null)
    {    
$this->edit->text .= '6';
    }

    /**
     * @event button7.action 
     */
    function doButton7Action(UXEvent $e = null)
    {    
$this->edit->text .= '7';
    }

    /**
     * @event button8.action 
     */
    function doButton8Action(UXEvent $e = null)
    {    
$this->edit->text .= '8';
    }

    /**
     * @event button9.action 
     */
    function doButton9Action(UXEvent $e = null)
    {    
$this->edit->text .= '9';
    }

    /**
     * @event button0.action 
     */
    function doButton0Action(UXEvent $e = null)
    {    
$this->edit->text .= '0';
    }

    /**
     * @event buttonClear.action 
     */
    function doButtonClearAction(UXEvent $e = null)
    {    
        global $operation;
        $operation = false;
        $this->edit->text = "";
    }

    /**
     * @event buttonPlus.action 
     */
    function doButtonPlusAction(UXEvent $e = null)
    {    
        global $operation;
        if (!$operation){
            $this->edit->text .= '+';
            $operation = '+';
        }
    }

    /**
     * @event buttonMult.action 
     */
    function doButtonMultAction(UXEvent $e = null)
    {    
        global $operation;
        if (!$operation){
            $this->edit->text .= '×';
            $operation = '×';
        }
    }

    /**
     * @event buttonMin.action 
     */
    function doButtonMinAction(UXEvent $e = null)
    {    
        global $operation;
        if (!$operation){
            $this->edit->text .= '-';
            $operation = '-';
        }
    }

    /**
     * @event buttonSplit.action 
     */
    function doButtonSplitAction(UXEvent $e = null)
    {    
        global $operation;
        if (!$operation){
            $this->edit->text .= '÷';
            $operation = '÷';
        }
    }

    /**
     * @event button10.action 
     */
    function doButton10Action(UXEvent $e = null)
    {
        $this->edit->text = substr($this->edit->text, 0, -1);
}

    /**
     * @event imageAlt.click-Left 
     */
    function doImageAltClickLeft(UXMouseEvent $e = null)
    {
        app()->showForm('set');
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
    $image = ('path/to/'.$this->ini->get('Skin','Settings'));
        $this->image->image = new UXImage($image);
        
    }



}
