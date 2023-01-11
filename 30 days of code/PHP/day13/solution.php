class MyBook extends Book
{
    private $price;

    function __construct($title, $author, $price)
    {
        parent::__construct(trim($title), trim($author));
        $this->price = trim($price);
    }

    function display()
    {
        echo "Title: {$this->title}\n";
        echo "Author: {$this->author}\n";
        echo "Price: {$this->price}\n";
    }
}
