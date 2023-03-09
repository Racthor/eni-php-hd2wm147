<?php
class Form
{
    private $entete;
    private $champsTextuel;
    private $submit;

    public function __construct() {
        $this->entete = "<form><fieldset>";
        $this->champsTextuel = "";
        $this->submit = "";
    }

    public function setText($id = '', $name = '', $value = '', $minlength = '', $maxlength = '') {
        $this->champsTextuel .= "<input type=\"text\" 
                                    id=\"$id\" 
                                    name=\"$name\" 
                                    value=\"$value\"
                                    minlength=\"$minlength\"
                                    maxlength=\"$maxlength\"
                                ><br/>";
        // alternative
        //$this->champTextuel = "<input type=\"text\" id=\"$id\" [...]";
        //$this->champTextuel = '<input type="text" id="' . $id . '" [...]';
    }

    public function setSubmit($value, $id = '', $formmethod = '', $formtarget = '') {
        $this->submit = "<input type=\"submit\" 
                                    id=\"$id\"
                                    value=\"$value\"
                                    formmethod=\"$formmethod\"
                                    formtarget=\"$formtarget\"
                                ><br/>";
    }

    public function getForm():string {
        return $this->entete 
            . $this->champsTextuel
            . $this->submit
            . "</fieldset></form>";
    }
}
