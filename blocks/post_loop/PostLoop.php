<?php
/**
 * Concrete PostsLoop class - this extends the abstract Block class and defines block-type
 * specific properties and functions
 */
class PostLoop extends Block {
    /**
     * Properties here can be different for different block types
     */
    // The post query
    private $query = null;

	private $selectionType;
	private $category;
	private $limit;
	private $selectPosts;

	private $posts;

	/**
     * Child class constructor. Should call the parent and then set its own properties.
     *
     * @param  [type] $blockData
     */
    public function __construct($blockData)
    {
        parent::__construct($blockData);
        $this->selectionType = get_field('selection_type');
        $this->category      = get_field('category');
        $this->limit         = get_field('limit');
        $this->selectPosts   = get_field('select_posts');
    }

	/**
     * TODO: NAME THIS BETTER!
     *
     * Actually render the block. This is kinda like a controller. It can run queries/logic before passing
     * data to the template.
     *
     * @return void
     */
    public function renderChild()
    {
        // Do logic/queries
        $posts = [];// some query

		// Include the template and pass this object as the data for it
		echo "Type: $this->selectionType\n";
		echo "Cat: $this->category\n";
		echo "Limit: $this->limit\n";
		echo "Posts: $this->selectPosts\n";
    }
}
