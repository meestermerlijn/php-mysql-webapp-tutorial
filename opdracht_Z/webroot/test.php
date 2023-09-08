<?php
class test
{
    public $uri='berichten/berichten/{id}';

    public $route = 'berichten/berichten';
    public function checkUri()
    {
        return $this->uri
            ? preg_match("/^" . preg_replace('#\/#', '\\/', preg_replace('/{(.*?)}/', '([0-9]+)', $this->uri)) . "$/", trim($this->route, "/"))
            : false;
    }
}
$t = new Test();
echo $t->checkUri();