<?php
/**
 * Abstract "Block" class - this has common properties and has common functionality
 * but needs to be extended for each type of block.
 */
abstract class Block {
    /**
     * Global properties for all blocks
     */

    public $className;

    public $id;

    /**
     * This constructor should be called from the child class's constructor.
     * It will set the global properties that apply to all blocks.
     *
     * @param  array $blockData
     */
    public function __construct($blockData)
    {
     	$this->className = $blockData['class_name'] ?? '';
        $this->id = $blockData['id'] ?? '';
    }

    /**
     * This render method is called as a renderCallback specified in the block.json.
     * It should be called on the child class.
     *
     * @param  array $blockData
     * @return void
     */
    public static function render($blockData) {

		// Get the classname of the child class
        $blockClass = static::class;
        // Create an instance of the child class using the data we were passed
        $blockInstance = new $blockClass($blockData);

		// Might be able to abbreviate this to $blockInstance = new static();
		// Run the render method on the child instance.
        $blockInstance->renderChild();
    }

    // This MUST be defined by all children.
    abstract public function renderChild();
}
