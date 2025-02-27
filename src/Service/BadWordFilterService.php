<?php 
namespace App\Service;

class BadWordFilterService
{
    private array $badWords = ['badword1', 'badword2', 'badword3']; // Add more words as needed

    public function containsBadWords(string $text): bool
    {
        foreach ($this->badWords as $badWord) {
            if (stripos($text, $badWord) !== false) {
                return true;
            }
        }
        return false;
    }
}
