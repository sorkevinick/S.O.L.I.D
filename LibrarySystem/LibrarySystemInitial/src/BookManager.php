<?php
class BookManager {
    private $books = [
        '1984' => ['author' => 'George Orwell', 'copies' => 3],
        'Brave New World' => ['author' => 'Aldous Huxley', 'copies' => 2]
    ];
    
    public function borrowBook($title) {
        if (isset($this->books[$title]) && $this->books[$title]['copies'] > 0) {
            $this->books[$title]['copies']--;
            echo "Borrowed: $title
";
        } else {
            echo "Book unavailable.
";
        }
    }

    public function returnBook($title) {
        if (isset($this->books[$title])) {
            $this->books[$title]['copies']++;
            echo "Returned: $title
";
        } else {
            echo "Book not found.
";
        }
    }

    public function addBook($title, $author, $copies) {
        $this->books[$title] = ['author' => $author, 'copies' => $copies];
        echo "Book added: $title by $author with $copies copies
";
    }
}
