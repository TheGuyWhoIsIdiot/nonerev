
<?php
class ProfanityFilter {
    private static $badWords = [];

    public static function loadBadWords($filePath) {
        self::$badWords = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }

    public static function IsAppropriateForSignup($word) {
        $word = strtolower($word);
        foreach (self::$badWords as $badWord) {
            if (stripos($word, $badWord) !== false) {
                return false;
            }
        }
        return true;
    }
}
?>
