<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;
use WP_Query;

class WorkSlider extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Work Slider';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Work Slider block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'theme';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = ['work', 'slider'];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'auto';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'full_height' => false,
        'anchor' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block styles.
     *
     * @var array
     */
    // public $styles = [
    //     [
    //         'name' => 'light',
    //         'label' => 'Light',
    //         'isDefault' => true,
    //     ],
    //     [
    //         'name' => 'dark',
    //         'label' => 'Dark',
    //     ]
    // ];

    /**
     * The block preview example data.
     *
     * @var array
     */
    // public $example = [
    //     'tools' => [
    //         ['tool' => 'tool one'],
    //         ['tool' => 'tool two'],
    //         ['tool' => 'tool three'],
    //     ],
    // ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'work' => $this->work(),
            'laptopImage' => $this->laptopImage(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $workSlider = new FieldsBuilder('work_slider');

        $workSlider
            ->addImage('laptop_image');

        return $workSlider->build();
    }

    /**
     * Get the work CPT data.
     *
     * Returns two arrays for each Work CPT.
     * First array contains image.
     * Second array contains content.
     *
     * @return array
     */
    public function work()
    {
        $slideImages = [];
        $slideContent = [];
        $slideBoth = [];
        $count = 0;

        $workQuery = new WP_Query([
            'post_type' => 'work',
            'status'    => 'publish',
        ]);

        if ($workQuery->have_posts()) {
            while ($workQuery->have_posts()) {
                $workQuery->the_post();
                $count++;

                if ($count < 10) {
                    $count = "0{$count}";
                }

                // Populate images array
                $slideImages["{$count}"]['image'] = get_the_post_thumbnail_url();
                $slideImages["{$count}"]['alt'] = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);

                // Populate content array
                $slideContent["{$count}"]['title'] = get_the_title();
                $slideContent["{$count}"]['content'] = get_the_content();
                $slideContent["{$count}"]['tags'] = get_the_tags();
                $slideContent["{$count}"]['button'] = get_field('site_link', get_the_ID());

                // Populate both array
                $slideBoth["{$count}"]['image'] = get_the_post_thumbnail_url();
                $slideBoth["{$count}"]['alt'] = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                $slideBoth["{$count}"]['title'] = get_the_title();
                $slideBoth["{$count}"]['content'] = get_the_content();
                $slideBoth["{$count}"]['tags'] = get_the_tags();
                $slideBoth["{$count}"]['button'] = get_field('site_link', get_the_ID());
            }
        }

        wp_reset_postdata();

        // Order reversed as content will slide in opposite
        // vertical direction of images
        $slideContent = array_reverse($slideContent, true);

        return [
            'images' => $slideImages,
            'content' => $slideContent,
            'both' => $slideBoth,
        ];
    }

    /**
     * Set the laptop image
     *
     * @return array
     */
    public function laptopImage()
    {
        return get_field('laptop_image');
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
