## PHPの命名規則
スペース4つでインデント
予約後は小文字で書く ($a = true;)
ファイルの最後に空行を入れる

クラス、メソッドの開き括弧は次の行に記述
class Foo
{
    public function get()
    {


ifの開き括弧は同じ行に配置
if ($aaa) {


クロージャの開き括弧は同じ行に記述（閉じ括弧は最後の行に記述）
$f = function() {
    return 1;
};

caseで意図的に処理をスルーする場合は「// no break」等の記述が必須
switch ($expr) {
    case 1:
        echo 'A';
        // no break
    case 2:
    case 3:
        echo 'B';
        break;
}

クラス名は先頭大文字で以降は小文字（単語の区切りは大文字にする） パスカルケース(pascal case) 例 : HtmlSpecialChars
メソッド名、変数は小文字で始め以降も小文字（単語の区切りは_にする） スネークケース(snake case) 例 : html_special_chars
定数は全て大文字で表す（単語区切りは"_"を入れる）
汎用的な名前は避け、どのような機能を持っているか具体的な名前をつける


## html,cssの命名規則

