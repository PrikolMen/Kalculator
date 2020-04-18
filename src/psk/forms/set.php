<?php
namespace psk\forms;

use std, gui, framework, psk;
use php\lib\fs;

class set extends AbstractForm
{



    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $e = null)
    {    
           $img = $this->edit->text;
           
           if(fs::isFile($img)){
           $this->form('MainForm')->image->image = new UXImage($img);
           $this->ini->set("img",$img,'settings');
           }else{
           pre('Ошибка: Файл '.$img.' не найден!');
           } 
           
    }

    /**
     * @event button3.action 
     */
    function doButton3Action(UXEvent $e = null)
    {    
            $this->form('MainForm')->ini->set('Skin',null,'Settings');
           $this->form('MainForm')->image->image = null; 
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null)
    {
   app()->hideForm('set');
    }


}
