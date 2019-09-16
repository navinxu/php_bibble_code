<?php
interface Displayable {
    public function display();
}
interface Renderable {
    public function render();
}

class webPage implements Displayable, Renderable {
    public function render() {}
    public function display() {}
}
?>
