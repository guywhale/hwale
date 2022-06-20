<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class TextImage extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Text & Image';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A text an image block with an optional button.';

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
    public $keywords = ['text', 'image'];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = ['page'];

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
    //     'text' => 'Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</br>Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada.</br>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Cras ultricies ligula sed magna dictum porta.'

    // ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'text' => $this->text(),
            'button' => $this->button(),
            'image' => $this->image(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $textImage = new FieldsBuilder('text_image');

        $textImage
            ->addWysiwyg('text', [
                'wrapper' => [
                    'class' => 'cms'
                ]
            ])
            ->addLink('button')
            ->addImage('image');

        return $textImage->build();
    }

    /**
     * Return the text field.
     *
     * @return array
     */
    public function text()
    {
        return get_field('text');
    }

    /**
     * Return the button field.
     *
     * @return array
     */
    public function button()
    {
        return get_field('button');
    }

    /**
     * Return the image field.
     *
     * @return array
     */
    public function image()
    {
        return get_field('image');
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
