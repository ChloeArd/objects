<?php

class Computer {
    // Auto generated
    private int $id;
    private string $brand;
    private string $graphicsCard;
    private string $processor;
    private string $os;
    private string $color;
    // Optional, default false
    private bool $keyboard;
    private bool $mouse;
    private int $memory;
    // Propriétaire
    private $owner;

    /**
     * Computer constructor.
     * @param string $marque
     * @param string $carteGraphique
     * @param string $processeur
     * @param string $os
     * @param string $couleur
     */
    public function __construct(string $marque, string $carteGraphique, string $processeur, string $os, string $couleur ) {
        $this->setBrand($marque);
        $this->setGraphicsCard($carteGraphique);
        $this->setProcessor($processeur);
        $this->setOs($os);
        $this->setColor($couleur);
        // Optional default values
        $this->setMemory(8);
        $this->setKeyboard(false);
        $this->setMouse(false);
        // ID (auto generated)
        $this->id = time();
    }

    /**
     * Return the computer's ID
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Return the computer's band name
     * @return string
     */
    public function getBrand(): string {
        return $this->brand;
    }

    /**
     * Set the computer's band
     * @param string $brand
     */
    public function setBrand(string $brand): void {
        $this->brand = $brand;
    }

    /**
     * Return the computer's graphic card's name
     * @return string
     */
    public function getGraphicsCard(): string {
        return $this->graphicsCard;
    }

    /**
     *  Set tje computer's graphic card
     * @param string $graphicsCard
     */
    public function setGraphicsCard(string $graphicsCard): void {
        $this->graphicsCard = $graphicsCard;
    }

    /**
     * Return true when a computer has a keyboard
     * @return bool
     */
    public function isKeyboard(): bool {
        return $this->keyboard;
    }

    /**
     * @param bool $keyboard
     */
    public function setKeyboard(bool $keyboard): void {
        $this->keyboard = $keyboard;
    }

    /**
     * @return bool
     */
    public function isMouse(): bool {
        return $this->mouse;
    }

    /**
     * @param bool $mouse
     */
    public function setMouse(bool $mouse): void {
        $this->mouse = $mouse;
    }

    /**
     * @return string
     */
    public function getMemory(): string {
        return $this->memory;
    }

    /**
     * @param string $memory
     */
    public function setMemory(string $memory): void {
         $this->memory = $memory;
    }

    /**
     * @return string
     */
    public function getProcessor(): string {
        return $this->processor;
    }

    /**
     * @param string $processor
     */
    public function setProcessor(string $processor): void {
        $this->processor = $processor;
    }

    /**
     * @return string
     */
    public function getOs(): string {
        return $this->os;
    }

    /**
     * @param string $os
     */
    public function setOs(string $os): void {
        $this->os = $os;
    }

    /**
     * @return string
     */
    public function getColor(): string {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void {
        $this->color = $color;
    }

    /**
     * Computer start
     */
    public function start() {
        echo $this->getBrand()." started... <br>";
    }

    /**
     * Computer shutdown
     */
    public function shutdown() {
        echo $this->getBrand()." off... <br>";
    }

    /**
     * Computer sleep
     */
    public function sleep() {
        echo $this->getBrand()." sleeping... <br>";
    }

}