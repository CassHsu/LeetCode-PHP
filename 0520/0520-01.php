<?
class Solution {
    function detectCapitalUse($word) {
        if ($word === strtoupper($word)) return true;
        if ($word === strtolower($word)) return true;
        if ($word === strtoupper($word[0]) . strtolower(substr($word, 1, strlen($word)))) return true;
        return false;
    }
}
