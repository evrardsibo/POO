<?php
        class Bibliotheque
        {
                private $romans=[];
                private $bds=[];
                private $poliiers=[];

                public function __construct()
                {
                    
                }
                public function __toString()
                {
                    $txt = "";
                    $txt .= '** mon livre est un ' . "<br>";
                    for($i = 0 ; $i < count($this->romans); $i++)
                    {
                        $txt .= $this->romans[$i];
                    }
                    $txt .= '** mon livre est un ' . "<br>";
                    for($i = 0 ; $i < count($this->bds); $i++)
                    {
                        $txt .= $this->bds[$i];
                    }
                    $txt .= '** mon livre est un ' . "<br>";
                    for($i = 0 ; $i < count($this->poliiers); $i++)
                    {
                        $txt .= $this->poliiers[$i];
                    }

                    return $txt;
                }

                public function ajoutlivr($li)
                {
                    if($li->getType() == 'roman')
                    {
                        $this->romans[] = $li;
                    }elseif($li->getType() == 'policier')
                    {
                        $this->poliiers[] = $li;

                    }elseif($li->getType() == 'bd')
                    {
                        $this->bds[] = $li;
                    }
                }
        }