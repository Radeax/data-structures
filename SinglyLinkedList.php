<?php

class Node {
    public function __construct($val) {
        $this->value = $val;
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

    public function remove($val) {
        if($this->head == null) {
            return;
        }
        if($this->head->value == $val) {
            $this->head = $this->head->next;
            return;
        }
        $current = $this->head;
        while($current->next->value != $val && $current->next) {
            $current = $current->next;
        }
        if (!$current->next) {
            return;
        }
        else {
            $current->next = $current->next->next;
            return;
        }
    }
}

$newList = new SinglyLinkedList();

$newList->add(1);
$newList->add(2);
$newList->add(3);
$newList->add(4);
$newList->add(5);
$newList->remove(2);

var_dump($newList);

?>