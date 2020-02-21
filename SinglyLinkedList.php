<?php

class Node {
    public function __construct($value) {
        $this->val = $value;
        $this->next = null;
    }
}

class SinglyLinkedList {
    public function __construct() {
        $this->head = null;
    }

    public function addBack($value) {
        if($this->head == null) {
            $this->head = new Node($value);
            return $this;
        }
        else {
            $current = $this->head;
            while($current->next != null) {
                $current = $current->next;
            }
            $current->next = new Node($value);
            return $this;
        }
    }

    public function removeVal($value) {
        if($this->head == null) {
            return $this;
        }
        if($this->head->val == $value) {
            $this->head = $this->head->next;
            return $this;
        }
        $current = $this->head;
        while($current->next->val != $value && $current->next) {
            $current = $current->next;
        }
        if (!$current->next) {
            return $this;
        }
        else {
            $current->next = $current->next->next;
            return $this;
        }
    }

    public function contains($value) {
        if($this->head->val == $value) {
            return true;
        }
        $current = $this->head;
        while($current->next && $current->next->val != $value) {
            $current = $current->next;
        }
        if(!$current->next) {
            return false;
        }
        else {
            return true;
        }
    }
}

$newList = new SinglyLinkedList();

$newList->add(1);
$newList->add(2);
$newList->add(3);
$newList->add(4);
$newList->add(5);
var_dump($newList->find(3));

var_dump($newList);

?>