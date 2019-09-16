<?php
trait fileLogger {
    // 也可以在 Trait 中引用 Trait。
    use sysLogger;
    public function logmessage($message, $level='DEBUG') {
        echo "@fileLogger\n";
    }
}

trait sysLogger {
    public function logmessage($message, $level='ERROR') {
        echo "@sysLogger\n";
    }
}

trait foobarLogger {
    public function logmessage($message, $level='ERROR') {
        echo "@foobarLogger\n";
    }
}

class FileStorage {
    // 应用这三个 Trait，
    // 并指定要使用的 Trait。
    use fileLogger, sysLogger, foobarLogger {
        // 指定使用哪个 Trait 的方法。
        // 代替多个 Trait 中的相同方法。
        fileLogger::logmessage insteadof sysLogger, foobarLogger;
        // 给不同 Trait 中有多个相同名字的方法起别名。
        sysLogger::logmessage as private logsysmessage;
    }

    public function store($data) {
        $this->logmessage("");
        //$this->logsysmessage("");
    }
}

$obj = new FileStorage();
$obj->store("");
?>
