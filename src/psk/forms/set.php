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
              global $img,$index; $index = 0;
       
       $open = new UXFileChooser();

       $open->title = 'Выбор Темы';

       $open->extensionFilters = [
       
             //   ['description' => 'JPEG файлы', 'extensions' => ['*.jpg']],
                
                ['description' => 'PNG файлы', 'extensions' => ['*.png']],
                
               // ['description' => 'GIF файлы', 'extensions' => ['*.gif']]
                
            ];

        if ($files = $open->showOpenMultipleDialog()) {

             unset($img); 
            
           $img = $files;

$pr = fs::abs('./');
           $this->form('MainForm')->image->image = new UXImage($img[0]);
           fs::copy($img, $pr.'image.png');
           //$convert = ('"'. $img[0].'"');
           //  $this->form('MainForm')->ini->set('Skin',$img,'Settings');
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
