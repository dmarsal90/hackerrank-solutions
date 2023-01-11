class Solution {
    private $stack;
    private $queue;

    public function __construct() {
        $this->stack = new Stack();
        $this->queue = new Queue();
    }

    public function pushCharacter($c) {
        $this->stack->push($c);
    }

    public function popCharacter() {
        return $this->stack->pop();
    }

    public function enqueueCharacter($c) {
        $this->queue->enqueue($c);
    }

    public function dequeueCharacter() {
        return $this->queue->dequeue();
    }
}


class Stack {
    private $a = [];

    public function push($x) {
        array_push($this->a, $x);
    }

    public function pop() {
        return array_pop($this->a);
    }
}


class Queue {
    private $a = [];

    public function enqueue($x) {
        array_push($this->a, $x);
    }

    public function dequeue() {
        return array_shift($this->a);
    }
}


// END MY CODE

// read the string s
$s = fgets(STDIN);

// create the Solution class object p
$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

// push/enqueue all the characters of string s to stack
for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($s{$i});
    $obj->enqueueCharacter($s{$i});
}

/*
pop the top character from stack
dequeue the first character from queue
compare both the characters
*/
for ($i = 0; $i < $len / 2; $i++) {
    if($obj->popCharacter() != $obj->dequeueCharacter()){
        $isPalindrome = false;

        break;
    }
}

//finally print whether string s is palindrome or not.
if ($isPalindrome)
    echo "The word, ".$s.", is a palindrome.";
else
    echo "The word, ".$s.", is not a palindrome.";
?>
