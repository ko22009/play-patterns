<?php

namespace PlayPatterns\Behavioral\State;

abstract class State {

    protected Document $document;

    public function setDocument(Document $document) {
        $this->document = $document;
    }

    abstract public function publish();

}