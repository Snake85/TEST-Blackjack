<?php

class Player
{
	/**
	 * @var string The id of the player.
	 */
    protected $id;
    
    /**
     * @var string The name of the player.
     */
    protected $name;
    
    /**
     * @var string The cards of the player.
     */
    protected $cards = array();
    
    
    /**
	 * Creates a new player.
     * @param string $id
     * @param string $name
     * @param Array $cards
     */
    public function __construct($id = 1, $name = null, Array $cards = array()) {
    	$this->id = $id;
    	$this->name = (isset($name)) ? $name : 'Player ' . $id;
    	$this->cards = $cards;
    }
    
    /**
     * Add a card to the player.
     * @param Card $card
     */
    public function add_card(Card $card) {
    	$this->cards[] = $card;
    }
    
    /**
     * Get total value of the cards of the player.
     * @return int Cards total value.
     */
    public function get_cards_value() {
    	$total_value = 0;
    	foreach ($this->cards as $card) {
    		$total_value += $card->get_value();
    	}
    	
    	return $total_value;
    }
}