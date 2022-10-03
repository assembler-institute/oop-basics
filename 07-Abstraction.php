<?php

    abstract class FileProcessor {
        abstract protected function getFile();
        abstract protected function processFile($filePath);

        public function getFileSize() {
            return $this->getSize() . "\n";
        }
    }



?>