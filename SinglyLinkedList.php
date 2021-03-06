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

    // Add a node to the front
    public function addFront($value) {
        if($this->head == null) {
            $this->head = new Node($value);
            return $this;
        }
        $temp = $this->head;
        $this->head = new Node($value);
        $this->head->next = $temp;
        return $this;
    }

    // Remove head node
    public function removeFront() {
        if($this->head == null) {
            return null;
        }
        else {
            $this->head = $this->head->next;
            return $this;
        }
    }

    // Return head node value
    public function front() {
        if($this->head == null) {
            return null;
        }
        else {
            return $this->head->val;
        }
    }

    // Add node at the end
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

    // Remove first occurrence of node with specified value
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

    // Check if list has a node with specified value
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

$newList->addFront(1);
$newList->addFront(2);
$newList->addFront(3);
$newList->addFront(4);
$newList->addFront(5);
$newList->removeFront();
var_dump($newList->front());

var_dump($newList);

?>