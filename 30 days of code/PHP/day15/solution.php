<?php
class Node{
    public $data;
    public $next;
    function __construct($d)
    {
        $this->data = $d;
        $this->next = NULL;
    }
}
class Solution{

    // BEGIN MY CODE

    class LinkedList
    {
        private $head = null;

        public function append($data)
        {
            $node = new Node($data);

            if ($this->head === null) {
                $this->head = $node;
                return;
            }

            $this->last()->next = $node;
        }

        public function head()
        {
            return $this->head;
        }

        public function last()
        {
            $last = $this->head;
            while ($last->next !== null) {
                $last = $last->next;
            }
            return $last;
        }
    }

    // END MY CODE

    public function insert($head, $data)
    {
        $list = new LinkedList($head);
        $list->append($data);
        return $list->head();
    }

    function display($head){
        $start=$head;
        while($start){
            echo $start->data,' ';
            $start=$start->next;
        }
    }
}
$T=intval(fgets(STDIN));
$head=null;
$mylist=new Solution();
while($T-->0){
    $data=intval(fgets(STDIN));
    $head=$mylist->insert($head,$data);
}
$mylist->display($head);
?>
