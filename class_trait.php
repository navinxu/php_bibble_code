<?php
trait fileLogger {
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

class FileStorage {
    use fileLogger, sysLogger {
        fileLogger::logmessage insteadof sysLogger;
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
