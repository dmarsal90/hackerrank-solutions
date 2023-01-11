<?php
class Node{
    public $left,$right;
    public $data;
    function __construct($data)
    {
        $this->left=$this->right=null;
        $this->data = $data;
    }
}
class Solution{
    public function insert($root,$data){
        if($root==null){
            return new Node($data);
        }
        else{
            if($data<=$root->data){
                $cur=$this->insert($root->left,$data);
                $root->left=$cur;
            }
            else{
                $cur=$this->insert($root->right,$data);
                $root->right=$cur;
            }
            return $root;
        }
    }

    // BEGIN MY CODE

    public function levelOrder($root) {
        $q = [$root];
        $vs = [];

        while (!empty($q)) {
            $e = array_shift($q);
            if ($e === null) {
                continue;
            }

            array_push($vs, $e->data);

            array_push($q, $e->left);
            array_push($q, $e->right);
        }

        echo implode(' ', $vs);
    }

    // END MY CODE

}//End of Solution
$myTree=new Solution();
$root=null;
$T=intval(fgets(STDIN));
while($T-->0){
    $data=intval(fgets(STDIN));
    $root=$myTree->insert($root,$data);
}
$myTree->levelOrder($root);
?>
