<?php 

class Card
{
	/**
	 * @var string The suit of the card. 'S', 'C', 'D', 'H'
	 */
	protected $suit;

	/**
	 * @var int/string The face of the card.  2, 3, 4, 5, 6, 7, 8, 9, 10, J, Q, K, A
	 */
	protected $face;
	

	/**
	 * Creates a new card.
	 * @param string $suit
	 * @param int/string $face
	 * @throws InvalidArgumentException if $suit is not valid.
	 * @throws InvalidArgumentException if $face is not valid.
	 */
	public function __construct($suit, $face) {
		if (!$this->check_suit($suit)) {
			throw new InvalidArgumentException('Suit value is not valid.');
		}

		if (!$this->check_face($face)) {
			throw new InvalidArgumentException('Face value is not valid.');
		}
		
		$this->suit = strtoupper($suit);
		$this->face = strtoupper($face);
	}
	
	/**
	 * Check if $suit value is valid.
	 * @param string $suit
	 * @return bool True if $suit value is valid.
	 */
	public function check_suit($suit) {
		$suits = array('S', 'C', 'D', 'H');
		return in_array(strtoupper($suit), $suits);
	}
	
	/**
	 * Check if $face value is valid.
	 * @param int/string $face
	 * @return bool True if $face value is valid.
	 */
	public function check_face($face) {
		$faces = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A');
		return in_array(strtoupper($face), $faces);
	}
	
	/**
	 * Get value of the card.
	 * @return int Value of the card.
	 */
	public function get_value() {
		switch ($this->face) {
			case 'A' :
				$value = 11;
				break;
			case 'J':
			case 'Q':
			case 'K':
				$value = 10;
				break;
			default:
				$value = $this->face;
				break;
		}
	
		return $value;
	}
	
	/**
	 * Get suit of the card.
	 * @return string The suit of the card.
	 */
	public function get_suit() {
		return $this->suit;
	}

	/**
	 * Get face of the card.
	 * @return string The face of the card.
	 */
	public function get_face() {
		return $this->face;
	}
	
	/**
	 * __toString method.
	 * @return string
	 */
	public function __toString() {
		return $this->suit . ' - ' . $this->face;
	}

}