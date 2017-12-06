<?php
/**
 * Created by PhpStorm.
 * User: michelle.foy
 * Date: 2017-12-05
 * Time: 8:04 PM
 */

class QueensP {
    public $board = array();
    public $size = 8;

    public function __construct() {

        // Initialize board
        for($i = 0; $i < $this->size; $i++)
        {
            $this->board[$i] = array_fill(0, $this->size, 0);
        }
    }

    public function display_board() {
        for ($row = 0; $row <$this->size; $row++){
            for ($col = 0; $col<$this->size; $col++) {
                if ($this->board[$row][$col] === 1) {
                    echo " * ";
                } else {
                    echo " - ";
                }
            }
            echo "\n";
        }
        echo "\n";
    }

    public function valid($row, $col) {
        // Check row for given point
        for ($i = 0; $i < $this->size; $i++) {
            if ($this->board[$row][$i] === 1) {
                return false;
            }
        }

        // Check column for given point
        for ($i = 0; $i < $this->size; $i++) {
            if ($this->board[$i][$col] === 1) {
                return false;
            }
        }

        // Check diagonals for given point
        for ($i = 0; $i < $this->size; $i++) {

        }

        return true;
    }

    public function find_solutions() {

    }
}

$inst_Q = new QueensP();
$inst_Q->find_solutions();
$inst_Q->display_board();
