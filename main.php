<?php
class QuoteGenerator
{
    private $quotes = [
        "Tidur itu opsional, debug itu keharusan.",
        "SKS malam minggu? Copy-paste koding!",
        "Belajar coding sambil nyari sinyal kayak nyari jodoh, susah tapi harus sabar.",
        "Masuk IF ITB: ekspektasi bikin aplikasi, realita: ngoding sampai pagi.",
        "Ngoding di Labtek: kopi udah kaya air putih, tugas numpuk kaya utang."
    ];

    public function getRandomQuote()
    {
        return $this->quotes[array_rand($this->quotes)];
    }
}

$quoteGenerator = new QuoteGenerator();
echo $quoteGenerator->getRandomQuote();
?>
