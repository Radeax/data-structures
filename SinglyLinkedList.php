<?php

class Node {
    public function __construct($value) {
        $this->value = $value;
        $this->next = null;
    }
}

class SinglyLinkedList {
    public function __construct() {
        $this->head = null;
    }

    public function add($val) {
        if($this->head == null) {
            $this->head = new Node($val);
        }
        else {
            $current = $this->head;
            while($current->next != null) {
                $current = $current->next;
            }
            $current->next = new Node($val);
        }
    }
}

$newList = new SinglyLinkedList();

$newList->add(1);
$newList->add(2);
$newList->add(3);
$newList->add(4);
$newList->add(5);

var_dump($newList);

?>