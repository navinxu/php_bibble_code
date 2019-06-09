<?PHP

function __autoload($name) {
    include_once(strtolower($name) . '.php');
}

$page = new Page;
$page->display();
?>
