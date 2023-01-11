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

    public function getHeight($root) {
        return $this->nodeCount($root, 0) - 1;
    }

    private function nodeCount($node, $count) {
        if ($node === null) {
            return $count;
        }

        return max([
            $this->nodeCount($node->left, $count + 1),
            $this->nodeCount($node->right, $count + 1),
        ]);
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
$height=$myTree->getHeight($root);
echo $height;
?>
